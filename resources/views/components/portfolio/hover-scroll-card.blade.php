@props([
    'portfolio',
    'duration' => 14,
    'previewHeightClass' => 'h-80',
])

@php
    $imageSrc = $portfolio->image
        ? asset('storage/' . $portfolio->image)
        : asset('images/2150938426.jpg');

    $ctaHref = $portfolio->project_url ?: route('portfolio');
@endphp

<div class="group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-2xl hover:shadow-primary/20 hover:-translate-y-2">
    <div
        x-data="hoverAutoScroll({ duration: {{ (int) $duration }} })"
        class="relative {{ $previewHeightClass }} overflow-hidden rounded-xl border border-white/10 bg-black m-5">

        <div
            x-ref="container"
            @mouseenter="start"
            @mouseleave="stop"
            @focusin="start"
            @focusout="stop"
            @wheel.passive="manual"
            @touchstart.passive="manual"
            @pointerdown.passive="manual"
            class="absolute inset-0 overflow-y-auto techonika-scroll">

            <img
                src="{{ $imageSrc }}"
                alt="{{ $portfolio->title }}"
                class="w-full select-none"
                draggable="false"
                loading="lazy" />
        </div>

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/70 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    </div>

    <div class="px-6 pb-6">
        <h3 class="text-xl font-semibold text-white group-hover:text-primary transition-colors">
            {{ $portfolio->title }}
        </h3>

        @if($portfolio->description)
            <p class="mt-3 text-sm text-white/60 leading-relaxed">
                {{ \Illuminate\Support\Str::limit($portfolio->description, 200) }}
            </p>
        @endif
    </div>
</div>

@once
    <style>
        .techonika-scroll::-webkit-scrollbar { width: 6px; }
        .techonika-scroll::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.28); border-radius: 999px; }
        .techonika-scroll { scrollbar-width: thin; scrollbar-color: rgba(255, 255, 255, 0.28) transparent; }
    </style>

    <script>
        if (!window.hoverAutoScroll) {
            window.hoverAutoScroll = function hoverAutoScroll(options = {}) {
                const duration = Number(options.duration ?? 14);
                const pauseAfterManualMs = Number(options.pauseAfterManualMs ?? 1500);

                return {
                    raf: null,
                    isHovering: false,
                    isManual: false,
                    resumeTimeout: null,

                    start() {
                        this.isHovering = true;
                        if (this.isManual) return;

                        const el = this.$refs.container;
                        if (!el) return;

                        const maxScroll = Math.max(0, el.scrollHeight - el.clientHeight);
                        if (maxScroll <= 0) return;

                        const pxPerMs = maxScroll / Math.max(1, duration * 1000);

                        let lastTs = null;
                        const step = (ts) => {
                            if (!this.isHovering || this.isManual) {
                                this.raf = null;
                                return;
                            }

                            if (lastTs === null) lastTs = ts;
                            const dt = ts - lastTs;
                            lastTs = ts;

                            el.scrollTop = Math.min(maxScroll, el.scrollTop + dt * pxPerMs);
                            if (el.scrollTop >= maxScroll) {
                                this.raf = null;
                                return;
                            }

                            this.raf = requestAnimationFrame(step);
                        };

                        if (this.raf) cancelAnimationFrame(this.raf);
                        this.raf = requestAnimationFrame(step);
                    },

                    stop() {
                        this.isHovering = false;
                        if (this.raf) cancelAnimationFrame(this.raf);
                        this.raf = null;

                        const el = this.$refs.container;
                        if (!el) return;

                        try {
                            el.scrollTo({ top: 0, behavior: 'smooth' });
                        } catch (e) {
                            el.scrollTop = 0;
                        }
                    },

                    manual() {
                        this.isManual = true;
                        if (this.raf) cancelAnimationFrame(this.raf);
                        this.raf = null;

                        clearTimeout(this.resumeTimeout);
                        this.resumeTimeout = setTimeout(() => {
                            this.isManual = false;
                            if (this.isHovering) this.start();
                        }, pauseAfterManualMs);
                    },
                };
            };
        }
    </script>
@endonce

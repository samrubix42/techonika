@props([
    'eyebrow' => 'Featured Project',
    'title' => 'Preview',
    'description' => '',
    'imageSrc',
    'imageAlt' => '',
    'ctaHref' => null,
    'ctaText' => 'View Project',
    'duration' => 14, // seconds to reach bottom on hover
    'previewHeightClass' => 'h-[320px] sm:h-[360px] lg:h-[380px]',
    'minimal' => false,
])

<section class="relative bg-black text-white py-20 sm:py-24 border-t border-white/10 overflow-hidden">
    <div class="absolute -top-40 left-0 w-[520px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
            <!-- Left -->
            <div class="max-w-xl">
                @unless($minimal)
                    <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                        <i class="ri-window-line"></i>
                        {{ $eyebrow }}
                    </span>
                @endunless

                <h3 class="{{ $minimal ? '' : 'mt-6 ' }}text-3xl sm:text-4xl font-semibold leading-tight">
                    {{ $title }}
                </h3>

                @if($description)
                    <p class="mt-5 text-white/70 text-base sm:text-lg leading-relaxed">
                        {{ $description }}
                    </p>
                @endif

                @if(!$minimal && $slot->isNotEmpty())
                    <div class="mt-8">
                        {{ $slot }}
                    </div>
                @endif

                @if(!$minimal && $ctaHref)
                    <div class="mt-10">
                        <a href="{{ $ctaHref }}"
                           class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl bg-primary text-black font-medium hover:bg-primary/90 transition">
                            {{ $ctaText }}
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                @endif
            </div>

            <!-- Right -->
            <div class="group relative">
                <div class="absolute -inset-3 rounded-3xl bg-gradient-to-r from-primary/25 via-primary/5 to-transparent blur-2xl opacity-80"></div>

                <div class="relative max-w-xl mx-auto rounded-3xl border border-white/10 bg-gradient-to-br from-white/6 to-white/0 backdrop-blur-xl overflow-hidden shadow-[0_30px_90px_-50px_rgba(0,0,0,0.85)]">
                    <!-- Browser frame -->
                    <div class="flex items-center gap-2 px-4 py-3 border-b border-white/10 bg-white/5">
                        <span class="w-2.5 h-2.5 rounded-full bg-white/20"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-white/15"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-white/10"></span>
                        <div class="ml-3 h-2.5 w-40 max-w-[55%] rounded-full bg-white/10"></div>
                    </div>

                    <div
                        x-data="hoverAutoScroll({ duration: {{ (int) $duration }} })"
                        class="relative {{ $previewHeightClass }} overflow-hidden bg-black">
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
                                x-ref="image"
                                src="{{ $imageSrc }}"
                                alt="{{ $imageAlt }}"
                                class="w-full select-none"
                                draggable="false"
                                loading="lazy" />
                        </div>

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-20 transition-opacity duration-300"></div>

                        <div class="pointer-events-none absolute bottom-4 left-4 right-4 flex items-center justify-between">
                            <span class="inline-flex items-center gap-2 text-xs tracking-[0.25em] uppercase text-white/80">
                                <i class="ri-mouse-line text-primary"></i>
                                Hover to auto-scroll
                            </span>
                            <span class="text-xs text-white/70">
                                Scroll manually anytime
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @once
        <style>
            .techonika-scroll::-webkit-scrollbar { width: 6px; }
            .techonika-scroll::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.28); border-radius: 999px; }
            .techonika-scroll { scrollbar-width: thin; scrollbar-color: rgba(255, 255, 255, 0.28) transparent; }
        </style>

        <script>
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

                        // Smooth reset to top for the next hover
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
        </script>
    @endonce
</section>

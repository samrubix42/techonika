@props([
    'items',
    'duration' => 14,
])

@php
    $count = is_countable($items) ? count($items) : 0;
@endphp

@if($count > 0)
    <section class="relative bg-black text-white py-16 sm:py-20 lg:py-24 border-t border-white/10 overflow-hidden">
        <div class="pointer-events-none absolute -top-40 left-1/2 -translate-x-1/2 w-[780px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-14">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-briefcase-4-line"></i>
                    Portfolio
                </span>
                <h2 class="mt-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                    Web Development Projects <span class="text-primary">We’ve Delivered</span>
                </h2>
                <p class="mt-4 text-white/70 text-base sm:text-lg leading-relaxed">Swipe or use arrows. Hover the preview to auto-scroll.</p>
            </div>

            <div
                x-data="portfolioSlider({ total: {{ (int) $count }} })"
                class="relative">

                <!-- Track -->
                <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-white/5 to-white/0 backdrop-blur-xl shadow-[0_30px_80px_-40px_rgba(0,0,0,0.8)]">
                    <div
                        class="flex transition-transform duration-500 ease-out"
                        :style="`transform: translateX(-${index * 100}%);`"
                        @keydown.left.prevent="prev"
                        @keydown.right.prevent="next"
                        tabindex="0"
                        role="region"
                        aria-label="Portfolio slider">

                        @foreach($items as $portfolio)
                            @php
                                $imageSrc = $portfolio->image
                                    ? asset('storage/' . $portfolio->image)
                                    : asset('images/2150938426.jpg');
                                $ctaHref = $portfolio->project_url ?: route('portfolio');
                            @endphp

                            <article class="min-w-full p-6 sm:p-10">
                                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                                    <!-- Left -->
                                    <div class="max-w-xl">
                                        <h3 class="text-3xl sm:text-4xl font-semibold leading-tight">
                                            {{ $portfolio->title }}
                                        </h3>

                                        @if($portfolio->description)
                                            <p class="mt-5 text-white/70 text-base sm:text-lg leading-relaxed">
                                                {{ \Illuminate\Support\Str::limit($portfolio->description, 220) }}
                                            </p>
                                        @endif
                                    </div>

                                    <!-- Right -->
                                    <div class="relative lg:pl-2">
                                        <div class="absolute -inset-3 rounded-3xl bg-gradient-to-r from-primary/25 via-primary/5 to-transparent blur-2xl opacity-80"></div>

                                        <a href="{{ $ctaHref }}"
                                           target="{{ $portfolio->project_url ? '_blank' : '_self' }}"
                                           class="relative block max-w-xl mx-auto rounded-3xl bg-black/55 border border-white/10 overflow-hidden shadow-[0_40px_120px_-60px_rgba(0,0,0,0.9)] hover:border-primary/40 transition">
                                            <!-- Browser frame -->
                                            <div class="flex items-center gap-2 px-4 py-3 border-b border-white/10 bg-white/5">
                                                <span class="w-2.5 h-2.5 rounded-full bg-white/20"></span>
                                                <span class="w-2.5 h-2.5 rounded-full bg-white/15"></span>
                                                <span class="w-2.5 h-2.5 rounded-full bg-white/10"></span>
                                                <div class="ml-3 h-2.5 w-40 max-w-[55%] rounded-full bg-white/10"></div>
                                            </div>

                                            <div
                                                x-data="hoverAutoScroll({ duration: {{ (int) $duration }} })"
                                                class="relative h-[260px] sm:h-[320px] lg:h-[360px] overflow-hidden bg-black">
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

                                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-60"></div>
                                                <div class="pointer-events-none absolute bottom-4 left-4 right-4 flex items-center justify-between">
                                                    <span class="inline-flex items-center gap-2 text-xs tracking-[0.25em] uppercase text-white/80">
                                                        <i class="ri-mouse-line text-primary"></i>
                                                        Hover to auto-scroll
                                                    </span>
                                                    <span class="text-xs text-white/70">
                                                        Slide {{ $loop->iteration }} / {{ $count }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <!-- Arrows -->
                <button
                    type="button"
                    @click="prev"
                    class="hidden sm:flex absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 w-12 h-12 items-center justify-center rounded-full bg-white/10 border border-white/15 backdrop-blur hover:border-primary/50 hover:bg-white/15 transition shadow-xl shadow-black/40"
                    aria-label="Previous project">
                    <i class="ri-arrow-left-s-line text-2xl text-white"></i>
                </button>

                <button
                    type="button"
                    @click="next"
                    class="hidden sm:flex absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-12 h-12 items-center justify-center rounded-full bg-white/10 border border-white/15 backdrop-blur hover:border-primary/50 hover:bg-white/15 transition shadow-xl shadow-black/40"
                    aria-label="Next project">
                    <i class="ri-arrow-right-s-line text-2xl text-white"></i>
                </button>

                <!-- Dots -->
                <div class="mt-8 flex items-center justify-center gap-2">
                    <template x-for="i in total" :key="i">
                        <button
                            type="button"
                            class="h-2.5 rounded-full transition-all"
                            :class="(i - 1) === index ? 'w-8 bg-primary' : 'w-2.5 bg-white/20 hover:bg-white/30'"
                            @click="go(i - 1)"
                            :aria-label="`Go to slide ${i}`">
                        </button>
                    </template>
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
                window.portfolioSlider = function portfolioSlider({ total = 1 } = {}) {
                    total = Number(total || 1);
                    return {
                        total,
                        index: 0,

                        next() {
                            this.index = (this.index + 1) % this.total;
                        },
                        prev() {
                            this.index = (this.index - 1 + this.total) % this.total;
                        },
                        go(i) {
                            const n = Number(i);
                            if (Number.isNaN(n)) return;
                            this.index = Math.max(0, Math.min(this.total - 1, n));
                        },
                    };
                };

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
    </section>
@endif

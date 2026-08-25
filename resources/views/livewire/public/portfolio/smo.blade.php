@section('meta')
<title>SMO Portfolio | Social Media Marketing Showcase | Technonika</title>
<meta name="description" content="Explore our Social Media Optimization & Marketing portfolio, creative post designs, branding campaigns, and social media growth strategies.">
@endsection

<div>
    <!-- 🔥 HERO SECTION -->
    <section class="relative bg-black text-white overflow-hidden">
        <!-- Glow background effect -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(245,158,11,0.18),transparent_60%)]"></div>

        <div class="relative max-w-5xl mx-auto px-6 py-24 text-center">
            <span class="text-xs uppercase tracking-[0.3em] text-amber-400 font-semibold">
                Social Media Showcase
            </span>

            <h1 class="mt-4 text-4xl sm:text-6xl font-light tracking-tight">
                SMO <span class="text-amber-400 font-semibold">Portfolio</span>
            </h1>

            <p class="mt-4 max-w-2xl mx-auto text-white/60 text-base sm:text-lg leading-relaxed">
                Explore our high-performing social media campaigns, visual branding, and creative post designs.
            </p>
        </div>
    </section>

    <!-- 🔥 PORTFOLIO ITEMS LIST -->
    <section class="bg-black pb-28 min-h-[50vh]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 space-y-12">
            @forelse($items as $item)
                @php
                    $images = is_array($item->images) ? array_values($item->images) : [];
                    $totalImages = count($images);
                @endphp

                <article class="rounded-3xl border border-white/10 bg-zinc-950/80 backdrop-blur-xl p-6 sm:p-8 shadow-[0_20px_60px_rgba(0,0,0,0.6)] transition duration-300 hover:border-amber-400/30">
                    
                    <!-- 1. IMAGE SLIDER FIRST -->
                    @if($totalImages > 0)
                        <div x-data="{
                                activeSlide: 0,
                                total: {{ $totalImages }},
                                next() { this.activeSlide = (this.activeSlide + 1) % this.total },
                                prev() { this.activeSlide = (this.activeSlide - 1 + this.total) % this.total }
                             }"
                             class="relative group rounded-2xl overflow-hidden bg-black/80 border border-white/10 shadow-inner">
                            
                            <!-- Slides Track -->
                            <div class="relative w-full aspect-[16/10] sm:aspect-[16/9] overflow-hidden">
                                <div class="flex h-full transition-transform duration-500 ease-out"
                                     :style="`transform: translateX(-${activeSlide * 100}%);`">
                                    @foreach($images as $idx => $img)
                                        <div class="min-w-full h-full relative flex items-center justify-center p-2 bg-gradient-to-b from-white/[0.02] to-transparent">
                                            <img src="{{ asset('storage/' . $img) }}"
                                                 alt="{{ $item->title }} - Image {{ $idx + 1 }}"
                                                 class="w-full h-full object-contain max-h-[520px] rounded-xl"
                                                 loading="lazy">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Slider Controls (If multiple images) -->
                            @if($totalImages > 1)
                                <!-- Left Arrow -->
                                <button @click="prev"
                                        type="button"
                                        aria-label="Previous slide"
                                        class="absolute left-3 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-black/70 backdrop-blur border border-white/20 text-white flex items-center justify-center opacity-90 sm:opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-amber-400 hover:text-black hover:border-amber-400 shadow-xl">
                                    <i class="ri-arrow-left-s-line text-2xl"></i>
                                </button>

                                <!-- Right Arrow -->
                                <button @click="next"
                                        type="button"
                                        aria-label="Next slide"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-black/70 backdrop-blur border border-white/20 text-white flex items-center justify-center opacity-90 sm:opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-amber-400 hover:text-black hover:border-amber-400 shadow-xl">
                                    <i class="ri-arrow-right-s-line text-2xl"></i>
                                </button>

                                <!-- Slide Counter Badge -->
                                <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-black/75 backdrop-blur border border-white/15 text-xs text-amber-400 font-semibold tracking-wider">
                                    <span x-text="activeSlide + 1"></span> / {{ $totalImages }}
                                </div>

                                <!-- Pagination Dots -->
                                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/60 backdrop-blur border border-white/10">
                                    <template x-for="(unused, index) in total" :key="index">
                                        <button @click="activeSlide = index"
                                                type="button"
                                                class="h-2 rounded-full transition-all duration-300"
                                                :class="activeSlide === index ? 'w-6 bg-amber-400' : 'w-2 bg-white/40 hover:bg-white/70'">
                                        </button>
                                    </template>
                                </div>
                            @endif
                        </div>
                    @endif

                    <!-- 2. TITLE -->
                    <div class="mt-6">
                        <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">
                            {{ $item->title }}
                        </h2>

                        <!-- 3. DESCRIPTION -->
                        @if(!empty($item->description))
                            <p class="mt-3 text-white/70 text-base sm:text-lg leading-relaxed whitespace-pre-line">
                                {{ $item->description }}
                            </p>
                        @endif
                    </div>

                </article>
            @empty
                <!-- EMPTY STATE -->
                <div class="text-center text-white/60 py-20 border border-white/5 rounded-3xl bg-white/[0.01]">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/5 flex items-center justify-center text-amber-400 text-3xl">
                        <i class="ri-landscape-line"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-white">
                        No SMO Portfolios Showcase Yet
                    </h3>
                    <p class="mt-2 text-white/40">
                        Check back soon or add projects from the admin panel.
                    </p>
                </div>
            @endforelse
        </div>
    </section>
</div>

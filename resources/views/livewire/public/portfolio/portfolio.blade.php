@section('meta')
<title>Portfolio | Our Web Development & Design Projects | Technonika</title>
<meta name="description" content="Explore Technonika portfolio showcasing our successful web development, design, and digital marketing projects. See how we have helped businesses achieve their goals.">
<meta name="keywords" content="portfolio, web development projects, design portfolio, client work, case studies, project showcase">
@endsection

<div>
    <section class="relative bg-black text-white py-32 overflow-hidden">

        <!-- Background glow -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-6xl mx-auto px-6 text-center">

            <!-- Badge -->
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full
                 bg-white/5 border border-white/10
                 text-primary text-sm uppercase tracking-widest mb-6">
                Performance-Driven Digital Solutions
            </span>

            <!-- Main Heading -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl
               font-light leading-tight mb-6">
                We Build Digital Systems
                <br>
                That Deliver
                <span class="font-semibold text-primary">
                    Real Growth
                </span>
            </h1>

            <!-- Subheading -->
            <p class="text-white/80 max-w-3xl mx-auto
              text-base sm:text-lg md:text-xl leading-relaxed">
                <span class="text-white font-medium">Techonika</span> helps businesses grow through
                scalable web applications, performance marketing,
                and technology solutions designed for clarity,
                accountability, and measurable results.
            </p>

            <!-- CTA Buttons -->
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <!-- Secondary -->
                <button @click="$dispatch('open-modal', { to: 'contact' })"
                    class="inline-flex items-center gap-2
                  px-8 py-3.5 rounded-full
                  border border-white/20
                  text-white font-medium
                  hover:bg-white hover:text-black transition">
                    Let’s Work Together
                    <i class="ri-chat-3-line"></i>
                </button>

            </div>

        </div>
    </section>
    <section class="bg-black py-6">
        <div class="max-w-7xl mx-auto px-6">

            <!-- SECTION HEADER -->
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-semibold text-white">
                    Featured Projects
                </h2>
                <p class="mt-4 text-white/60">
                    Real-world platforms built with performance, clarity, and scalability in mind.
                </p>
            </div>

            <!-- PROJECT GRID -->
            <div class="grid gap-8 sm:grid-cols-2">

                @forelse($portfolios as $portfolio)
                <div class="group relative bg-white/5 backdrop-blur-xl
                        border border-white/10 rounded-3xl
                        overflow-hidden transition-all duration-300
                        hover:border-primary/50 hover:shadow-2xl
                        hover:shadow-primary/20 hover:-translate-y-2">

                    <!-- IMAGE WRAPPER -->
                    <div
                        x-data="hoverScroll()"
                        class="relative h-80 overflow-hidden rounded-xl border border-white/10 bg-black">

                        <div
                            x-ref="container"
                            @mouseenter="start"
                            @mouseleave="stop"
                            @scroll="manualScroll"
                            class="absolute inset-0 overflow-y-auto custom-scroll">

                            <img
                                x-ref="image"
                                src="{{ $portfolio->image ? asset('storage/' . $portfolio->image) : asset('/images/project-placeholder.jpg') }}"
                                alt="{{ $portfolio->title }}"
                                class="auto-image w-full select-none"
                                draggable="false" />
                        </div>

                        <!-- Gradient Overlay -->
                        <div class="pointer-events-none absolute inset-0
                        bg-gradient-to-t from-black/70 via-black/30 to-transparent
                        opacity-0 group-hover:opacity-100
                        transition-opacity duration-300">
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white group-hover:text-primary transition-colors">
                            {{ $portfolio->title }}
                        </h3>

                        <p class="mt-3 text-sm text-white/60 leading-relaxed">
                            {{ \Illuminate\Support\Str::limit($portfolio->description, 400) }}
                        </p>

                        @if($portfolio->tags && count($portfolio->tags) > 0)
                        <div class="flex flex-wrap gap-2 mt-5">
                            @foreach($portfolio->tags as $tag)
                            <span class="px-3 py-1.5 text-xs font-medium rounded-full
                                     bg-primary/10 text-primary border border-primary/20">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>
                        @endif

                        <a href="{{ $portfolio->project_url ?? '#' }}"
                            target="_blank"
                            class="inline-flex items-center justify-center mt-6
                              px-6 py-3 rounded-full
                              bg-gradient-to-r from-primary to-primary/80
                              text-black text-sm font-semibold
                              hover:from-primary/90 hover:to-primary/70
                              transition-all duration-300
                              shadow-lg shadow-primary/20">
                            View Full Project
                        </a>
                    </div>
                </div>

                @empty
                <div class="col-span-2 text-center py-12">
                    <p class="text-white/60 text-lg">
                        No portfolio projects available yet.
                    </p>
                </div>
                @endforelse

            </div>

            <!-- PAGINATION -->
            @if($portfolios->hasPages())
            <div class="mt-12">
                {{ $portfolios->links('vendor.pagination.theme') }}
            </div>
            @endif

        </div>
    </section>
    <style>
        .auto-image {
            animation: scrollImage 15s linear forwards;
            animation-play-state: paused;
        }

        @keyframes scrollImage {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-100%);
            }
        }

        /* Scrollbar */
        .custom-scroll::-webkit-scrollbar {
            width: 5px;
        }

        .custom-scroll::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.35);
            border-radius: 999px;
        }

        .custom-scroll {
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.35) transparent;
        }
    </style>

    <script>
        function hoverScroll() {
            return {
                timeout: null,
                isManual: false,

                start() {
                    if (this.isManual) return;

                    const img = this.$refs.image;
                    img.style.animationPlayState = 'running';
                },

                stop() {
                    const img = this.$refs.image;

                    img.style.animationPlayState = 'paused';

                    // Smooth reset
                    img.style.transition = 'transform 0.8s ease';
                    img.style.transform = 'translateY(0)';

                    // Reset animation
                    setTimeout(() => {
                        img.style.animation = 'none';
                        img.offsetHeight; // reflow
                        img.style.animation = 'scrollImage 15s linear forwards';
                        img.style.animationPlayState = 'paused';
                        img.style.transition = '';
                    }, 800);
                },

                manualScroll() {
                    this.isManual = true;

                    const img = this.$refs.image;
                    img.style.animationPlayState = 'paused';

                    clearTimeout(this.timeout);

                    this.timeout = setTimeout(() => {
                        this.isManual = false;

                        if (this.$el.matches(':hover')) {
                            this.start();
                        }
                    }, 1500);
                }
            }
        }
    </script>







</div>
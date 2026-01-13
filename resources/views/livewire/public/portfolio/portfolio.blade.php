<div>
    <section class="bg-black pt-40 pb-36 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative">

        <!-- Soft centered glow -->
        <div class="absolute inset-0 flex justify-center items-center pointer-events-none">
            <div class="w-[650px] h-[650px]
                        bg-primary/20 blur-[220px]
                        rounded-full"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-4xl mx-auto text-center">

            <span class="inline-flex items-center mb-6
                         px-4 py-1.5 text-sm font-medium
                         rounded-full bg-white/10 text-white/80">
                Our Work
            </span>

            <h1 class="text-4xl md:text-5xl xl:text-6xl
                       font-semibold text-white leading-tight">
                A Portfolio of Work
                <span class="text-primary block mt-2">
                    Designed to Be Used, Not Just Seen
                </span>
            </h1>

            <p class="mt-10 text-lg text-white/70 leading-relaxed max-w-3xl mx-auto">
                Every project here represents careful thinking,
                clear communication, and design that works in real life —
                across screens, platforms, and daily use.
            </p>

            <!-- CTA -->
            <div class="mt-14 flex justify-center gap-4 flex-wrap">

                <a href="#projects"
                   class="inline-flex items-center justify-center
                          px-8 py-4 rounded-full
                          bg-primary text-black font-medium
                          hover:opacity-90 transition">
                    View Our Projects
                </a>

                <a href="#contact"
                   class="inline-flex items-center justify-center
                          px-8 py-4 rounded-full
                          border border-white/20
                          text-white/80
                          hover:bg-white/5 transition">
                    Start a Project
                </a>

            </div>

        </div>

    </div>
</section>
<section class="bg-black py-24">
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
                            overflow-hidden transition-all duration-300 hover:border-primary/50 hover:shadow-2xl hover:shadow-primary/20 hover:-translate-y-2">

                    <div class="relative overflow-hidden">
                        <img src="{{ $portfolio->image ? asset('storage/' . $portfolio->image) : asset('/images/project-placeholder.jpg') }}"
                             alt="{{ $portfolio->title }}"
                             class="w-full h-80 object-cover
                                    transition duration-700 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white group-hover:text-primary transition-colors">
                            {{ $portfolio->title }}
                        </h3>

                        <p class="mt-3 text-sm text-white/60 leading-relaxed">
                            {{ \Illuminate\Support\Str::limit($portfolio->description, 150) }}
                        </p>

                        @if($portfolio->tags && count($portfolio->tags) > 0)
                            <div class="flex flex-wrap gap-2 mt-5">
                                @foreach($portfolio->tags as $tag)
                                    <span class="px-3 py-1.5 text-xs font-medium rounded-full bg-primary/10 text-primary border border-primary/20 backdrop-blur-sm">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        <a href="{{ $portfolio->project_url ?? '#' }}"
                            target="_blank"
                           class="inline-flex items-center justify-center mt-6
                                  px-6 py-3 rounded-full
                                  bg-gradient-to-r from-primary to-primary/80 text-black text-sm font-semibold
                                  hover:from-primary/90 hover:to-primary/70 transition-all duration-300 shadow-lg shadow-primary/20">
                            View Full Project
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center py-12">
                    <p class="text-white/60 text-lg">No portfolio projects available yet.</p>
                </div>
            @endforelse

        </div>

        @if($portfolios->hasPages())
            <div class="mt-12">
                {{ $portfolios->links() }}
            </div>
        @endif
    </div>
</section>


</div>
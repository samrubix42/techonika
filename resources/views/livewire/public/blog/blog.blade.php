<div
    x-data="{ mobileSearch:false }"
    class="min-h-screen bg-black text-white relative overflow-hidden">

    <!-- ================== TECHONIKA HEADER ================== -->
    <section class="relative overflow-hidden pt-20 pb-16">

        <!-- Glow Background -->
        <div class="absolute inset-0 -z-10 flex justify-center items-center">
            <div class="w-[520px] h-[520px]
                        bg-gradient-to-tr from-amber-400/20 via-yellow-300/10 to-transparent
                        blur-3xl rounded-full">
            </div>
        </div>

        <div class="max-w-5xl mx-auto px-4 text-center">

            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 px-4 py-2
                       rounded-full bg-white/5 border border-white/10
                       backdrop-blur-md">
                <i class="ri-flashlight-fill text-amber-400 text-sm animate-pulse"></i>
                <span class="text-xs tracking-widest text-amber-400 font-semibold">
                    TECHONIKA • BLOG
                </span>
            </div>

            <!-- Title -->
            <h1
                class="mt-8 text-3xl sm:text-5xl lg:text-6xl
                       font-bold tracking-tight leading-tight">

                <span class="block bg-gradient-to-b from-white to-slate-300
                             bg-clip-text text-transparent">
                    Engineering Insights
                </span>

                <span class="block bg-gradient-to-r from-amber-400 to-yellow-300
                             bg-clip-text text-transparent">
                    That Scale Products
                </span>
            </h1>

            <!-- Subtitle -->
            <p
                class="mt-6 max-w-2xl mx-auto text-sm sm:text-lg
                       text-slate-400 leading-relaxed">
                Practical knowledge on building high-performance software,
                scalable backend systems, and production-ready products.
            </p>

            <!-- Divider -->
            <div class="mt-8 flex justify-center">
                <span
                    class="w-20 h-[2px]
                           bg-gradient-to-r from-transparent via-amber-400 to-transparent">
                </span>
            </div>

            <!-- Tech Pills -->
            <div
                class="mt-8 flex flex-wrap justify-center gap-2 sm:gap-3 text-xs sm:text-sm">

                <span class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10">
                    <i class="ri-code-s-slash-line text-amber-400"></i> Laravel
                </span>
                <span class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10">
                    <i class="ri-cloud-line text-amber-400"></i> Cloud
                </span>
                <span class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10">
                    <i class="ri-git-merge-line text-amber-400"></i> System Design
                </span>
                <span class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10">
                    <i class="ri-speed-line text-amber-400"></i> Performance
                </span>
                <span class="flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10">
                    <i class="ri-lightbulb-line text-amber-400"></i> Product
                </span>
            </div>

        </div>
    </section>

    <!-- ================== CONTENT ================== -->
    <div class="max-w-6xl mx-auto px-4 pb-24">

        <!-- ================== HEADER BAR ================== -->
        <header
            class="flex flex-col lg:flex-row lg:items-end lg:justify-between
                   gap-6 mb-12">

            <div>
                <h2 class="text-2xl font-semibold">Latest Articles</h2>
                <p class="mt-2 text-sm text-slate-400 max-w-lg">
                    Curated articles written with real-world engineering experience.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3">

                <!-- Desktop Search -->
                <div class="relative hidden sm:block">
                    <input type="search"
                        placeholder="Search articles..."
                        class="pl-10 pr-3 py-2 w-56 rounded-md
                               border border-white/10 bg-white/5
                               text-sm placeholder:text-slate-500
                               focus:ring-1 focus:ring-amber-400 focus:outline-none">
                    <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                </div>

                <!-- Mobile Search Toggle -->
                <button
                    @click="mobileSearch = !mobileSearch"
                    class="sm:hidden p-2 rounded-md
                           bg-white/5 border border-white/10">
                    <i class="ri-search-line text-lg"></i>
                </button>

                <select
                    class="px-3 py-2 rounded-md
                           border border-white/10 bg-white/5 text-sm">
                    <option>9 / page</option>
                    <option>12 / page</option>
                </select>

         
            </div>
        </header>

        <!-- Mobile Search -->
        <div x-show="mobileSearch" x-collapse class="mb-8 sm:hidden">
            <input type="search"
                placeholder="Search articles..."
                class="w-full px-4 py-2 rounded-md
                       border border-white/10 bg-white/5 text-sm">
        </div>

        <!-- ================== BLOG GRID ================== -->
        <main>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse($posts as $post)
                    <article
                        class="group flex flex-col border-t border-white/10 pt-4">

                        <!-- Image -->
                        <div class="overflow-hidden rounded-lg">
                            <img
                                src="{{ $post->featured_image
                                    ? asset('storage/'.$post->featured_image)
                                    : 'https://source.unsplash.com/800x600/?technology,code' }}"
                                alt="{{ $post->title }}"
                                class="w-full h-44 object-cover
                                       transition group-hover:scale-105">
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col flex-1 mt-4">

                            <span class="text-xs text-amber-400 mb-2 flex items-center gap-1">
                                <i class="ri-price-tag-3-line"></i>
                                {{ $post->category?->name ?? 'General' }}
                            </span>

                            <h3 class="text-lg font-semibold leading-snug mb-2">
                                {{ $post->title }}
                            </h3>

                            <p
                                class="text-sm text-slate-400 leading-relaxed
                                       line-clamp-3 mb-4">
                                {{ Str::limit(strip_tags($post->content),120) }}
                            </p>

                            <div
                                class="mt-auto pt-4 border-t border-white/10
                                       flex justify-between text-sm text-slate-500">
                                <span class="flex items-center gap-1">
                                    <i class="ri-user-3-line"></i>
                                    {{ $post->author?->name ?? 'Author' }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <i class="ri-calendar-line"></i>
                                    {{ $post->created_at->format('M d, Y') }}
                                </span>
                            </div>

                            <a
                                href="{{ route('blog.view', $post->slug) }}"
                                class="mt-4 text-sm font-medium text-amber-400
                                       flex items-center gap-1">
                                Read article
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </article>
                @empty
                    <p class="col-span-3 text-center text-slate-400">
                        No articles found.
                    </p>
                @endforelse

            </div>

            <div class="mt-10">
                {{ $posts->links('vendor.pagination.theme') }}
            </div>
        </main>

        <!-- ================== CTA ================== -->
        <div class="mt-24 text-center">
            <h3 class="text-xl font-semibold mb-3">
                Have a project in mind?
            </h3>
            <button
                @click="$dispatch('open-modal', { to: 'contact' })"
                class="inline-flex items-center gap-2
                       px-8 py-3 rounded-lg font-semibold
                       bg-gradient-to-r from-amber-400 to-yellow-400
                       text-black">
                <i class="ri-briefcase-line"></i>
                Work With Us
</button>
        </div>

    </div>
</div>

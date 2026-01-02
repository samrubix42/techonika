<div x-data="{ mobileSearch: false }"
    class="min-h-screen bg-black text-white relative isolate overflow-hidden">

    <div class="max-w-6xl mx-auto px-4 py-14 sm:py-20">

        <!-- HEADER -->
        <header class="flex flex-col lg:flex-row lg:items-end lg:justify-between mb-12 gap-6">

            <div>
                <h1 class="text-3xl sm:text-4xl font-bold tracking-tight">
                    Insights & Articles
                </h1>
                <p class="mt-2 max-w-xl text-sm text-slate-400 leading-relaxed">
                    Thoughtful writing on software, product, design, and modern engineering practices.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3">

                <!-- Desktop search -->
                <div class="relative hidden sm:block">
                    <input type="search"
                        placeholder="Search posts..."
                        class="pl-10 pr-3 py-2 w-56 rounded-md
                                  border border-white/10 bg-white/5
                                  text-sm text-white placeholder:text-slate-500
                                  focus:ring-1 focus:ring-amber-400 focus:outline-none">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                        🔍
                    </span>
                </div>

                <!-- Mobile search toggle -->
                <button @click="mobileSearch = !mobileSearch"
                    class="sm:hidden p-2 rounded-md bg-white/5 border border-white/10">
                    🔍
                </button>

                <select class="px-3 py-2 rounded-md border border-white/10 bg-white/5 text-sm">
                    <option>9 / page</option>
                    <option>12 / page</option>
                </select>

                <a href="#"
                    class="px-4 py-2 rounded-md bg-amber-400 text-black font-semibold text-sm">
                    Subscribe
                </a>
            </div>
        </header>

        <!-- MOBILE SEARCH -->
        <div x-show="mobileSearch" x-collapse class="mb-8 sm:hidden">
            <input type="search"
                placeholder="Search posts..."
                class="w-full px-4 py-2 rounded-md border border-white/10 bg-white/5 text-sm">
        </div>

        <!-- BLOG GRID -->
        <main>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse($posts as $post)
                    <article class="group flex flex-col border-t border-white/10 pt-4">

                        <!-- IMAGE -->
                        <div class="overflow-hidden rounded-lg">
                            @if($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                     class="w-full h-44 object-cover transition duration-300 group-hover:opacity-90">
                            @else
                                <img src="https://source.unsplash.com/collection/190727/800x600?sig={{ $loop->index }}"
                                     class="w-full h-44 object-cover transition duration-300 group-hover:opacity-90">
                            @endif
                        </div>

                        <!-- CONTENT -->
                        <div class="flex flex-col flex-1 mt-4">

                            <span class="inline-block mb-2 text-xs text-amber-400">
                                {{ $post->category?->name ?? 'Uncategorized' }}
                            </span>

                            <h3 class="text-lg font-semibold leading-snug mb-2">
                                {{ $post->title }}
                            </h3>

                            <p class="text-sm text-slate-400 leading-relaxed mb-4 line-clamp-3">
                                {{ $post->intro ?? Str::limit(strip_tags($post->content), 120) }}
                            </p>

                            <!-- META -->
                            <div class="mt-auto pt-4 border-t border-white/10 text-sm flex items-center justify-between">
                                <span class="text-slate-400">
                                    {{ $post->author?->name ?? 'Author' }}
                                </span>
                                <span class="text-slate-500">
                                    {{ optional($post->published_at ?? $post->created_at)->format('M d, Y') }}
                                </span>
                            </div>

                            <!-- ACTION -->
                            <a href="{{ route('blog.view', ['slug' => $post->slug]) }}"
                                class="mt-4 inline-flex items-center gap-2 text-sm font-medium text-amber-400">
                                Read article →
                            </a>

                        </div>
                    </article>
                @empty
                    <div class="col-span-3 text-center text-slate-400">No posts found.</div>
                @endforelse

            </div>

            <div class="mt-8">{{ $posts->links('vendor.pagination.theme') }}</div>

       

        </main>

        <!-- CTA -->
        <div class="mt-20 text-center">
            <h3 class="text-xl font-semibold mb-3">
                Have a project in mind?
            </h3>
            <a href="#contact"
                class="inline-block px-8 py-3 rounded-lg font-semibold
                      bg-gradient-to-r from-amber-400 to-yellow-400 text-black">
                Work With Us
            </a>
        </div>

    </div>
</div>
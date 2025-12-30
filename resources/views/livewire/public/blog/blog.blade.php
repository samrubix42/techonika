<div x-data="{ mobileSearch: false }" class="min-h-screen bg-black text-white relative isolate overflow-hidden">


    <div class="max-w-6xl mx-auto px-4 py-16 sm:py-20">
        <header class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8 gap-4">
            <div>
                <h1 class="text-2xl sm:text-4xl font-extrabold">Insights & Articles</h1>
                <p class="text-sm text-slate-400">Thoughtful articles on software, design and product.</p>
            </div>

            <div class="flex items-center gap-3">
                <!-- Desktop search -->
                <div class="relative hidden sm:block">
                    <input type="search" placeholder="Search posts..." class="pl-10 pr-3 py-2 rounded-lg border border-white/10 bg-white/5 text-sm text-white backdrop-blur-sm focus:ring-2 focus:ring-amber-400 focus:outline-none">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </span>
                </div>

                <!-- Mobile search toggle -->
                <button @click="mobileSearch = !mobileSearch" class="sm:hidden inline-flex items-center justify-center p-2 rounded-md bg-white/5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </button>

                <select class="px-3 py-2 rounded-md border border-white/10 bg-white/5 text-sm text-white">
                    <option>9 / page</option>
                    <option>12 / page</option>
                </select>

                <a href="#" class="inline-block px-4 py-2 rounded-md bg-amber-400 text-black font-semibold w-full sm:w-auto text-center">Subscribe</a>
            </div>

        </header>

        <!-- Mobile search bar -->
        <div x-show="mobileSearch" x-collapse class="mt-4 sm:hidden">
            <input type="search" placeholder="Search posts..." class="w-full px-4 py-2 rounded-lg border border-white/10 bg-white/5 text-sm text-white">
        </div>

        <main>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
                <!-- Static sample cards (index style) -->
                @for($i = 0; $i < 6; $i++)
                <article class="group relative rounded-2xl overflow-hidden border border-white/10 bg-white/5 backdrop-blur p-4 sm:p-6 hover:border-amber-400 transition flex flex-col h-full">

                    <img src="https://source.unsplash.com/collection/190727/800x600?sig={{ $i }}" alt="Sample image" class="w-full h-36 sm:h-44 md:h-48 object-cover rounded-lg mb-4 group-hover:scale-105 transition">

                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-white">Sample Article Title {{ $i + 1 }}</h3>
                            <p class="text-sm text-slate-300 mb-4">A short excerpt that describes the article. This is static placeholder content designed to show the layout.</p>
                        </div>

                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="inline-block px-2 py-1 rounded bg-amber-400 text-black text-xs">Category</span>
                                <span class="text-sm text-slate-300">Author Name</span>
                            </div>
                            <div class="text-sm text-slate-400">Dec 29, 2025</div>
                        </div>

                        <div class="mt-4 flex items-center justify-between">
                            <a href="#" class="inline-flex items-center gap-2 px-3 py-2 rounded-md bg-gradient-to-r from-amber-400 to-yellow-400 text-black text-sm font-semibold shadow">Read</a>
                            <div class="text-xs text-slate-400">5 min read</div>
                        </div>
                    </div>
                </article>
                @endfor
            </div>

            <div class="mt-8 flex items-center justify-center">
                <nav class="inline-flex rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#" class="px-3 py-2 rounded-l-md bg-white/5 border border-r-0 border-white/10">Prev</a>
                    <a href="#" class="px-3 py-2 bg-white/5 border border-white/10">1</a>
                    <a href="#" class="px-3 py-2 bg-white/5 border border-white/10">2</a>
                    <a href="#" class="px-3 py-2 rounded-r-md bg-white/5 border border-l-0 border-white/10">Next</a>
                </nav>
            </div>
        </main>

        <!-- CTA -->
        <div class="mt-12 text-center">
            <a href="#contact" class="inline-block px-8 py-3 rounded-xl font-semibold text-black bg-gradient-to-r from-amber-400 to-yellow-400 hover:opacity-95">Work With Us</a>
        </div>
    </div>

</div>

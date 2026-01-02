<div class="w-full bg-black text-white min-h-screen">
    <div class="max-w-7xl mx-auto px-[9%] py-[10%] sm:px-6 py-10">



        <!-- LAYOUT -->
        <div class="flex flex-col lg:flex-row lg:gap-12 lg:items-start lg:items-stretch lg:justify-between lg:space-y-0 space-y-10 lg:min-h-[800px] ">

            <!-- LEFT CONTENT -->
            <main class="lg:col-span-7">

                @if(isset($post) && $post)
                    <!-- DATE -->
                    <span class="inline-block mb-2 text-xs tracking-wide text-amber-400 uppercase">
                        {{ optional($post->published_at ?? $post->created_at)->format('M d, Y') }}
                    </span>

                    <!-- TITLE -->
                    <h1 class="text-3xl sm:text-4xl font-extrabold leading-tight mb-4">
                        {{ $post->title }}
                    </h1>

                    <!-- FEATURED IMAGE -->
                    @if($post->featured_image)
                        <div class="w-full overflow-hidden rounded-lg mb-6">
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 sm:h-96 object-cover brightness-90">
                        </div>
                    @endif

                    <!-- AT A GLANCE -->
                    @if($post->at_a_glance)
                        <div class="border-l-4 border-amber-400 pl-4 mb-8">
                            <h3 class="font-semibold text-white mb-1">At a Glance</h3>
                            <p class="text-slate-300 text-sm leading-relaxed max-w-2xl">{{ $post->at_a_glance }}</p>
                        </div>
                    @endif

                    <!-- CONTENT -->
                    <article class="space-y-8 text-slate-300 leading-relaxed text-sm sm:text-base bg-white/3 p-8 rounded-lg ring-1 ring-white/5">
                        {!! $post->content !!}
                    </article>
                @else
                    <div class="text-center text-slate-400">Post not found.</div>
                @endif
            </main>

            <!-- RIGHT SIDEBAR -->
            <aside class="lg:col-span-5 lg:border-l border-white/10 lg:pl-8 space-y-8">

                <!-- SEARCH -->
                <div class="bg-white/3 p-4 rounded-lg">
                    <input
                        type="text"
                        placeholder="Search blog..."
                        class="w-full bg-transparent border-none focus:ring-0 outline-none py-2 text-sm placeholder:text-slate-500"
                    />
                </div>

                <!-- CATEGORIES -->
                <div class="bg-white/3 p-4 rounded-lg">
                    <h4 class="text-sm font-semibold text-white mb-3 uppercase tracking-wide">
                        Categories
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-300">
                        <li class="flex justify-between items-center">
                            <span class="text-sm">Web Development</span>
                            <span class="bg-amber-400 text-black text-xs px-2 py-1 rounded-full">12</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-sm">Frontend</span>
                            <span class="bg-amber-400 text-black text-xs px-2 py-1 rounded-full">8</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-sm">DevOps</span>
                            <span class="bg-amber-400 text-black text-xs px-2 py-1 rounded-full">4</span>
                        </li>
                    </ul>
                </div>

                <!-- RECENT BLOGS -->
                <div class="bg-white/3 p-4 rounded-lg">
                    <h4 class="text-sm font-semibold text-white mb-3 uppercase tracking-wide">
                        Recent Blogs
                    </h4>
                    <div class="space-y-4 text-sm">
                        <a href="#" class="block leading-snug hover:text-amber-400 transition">
                            Fast React Patterns for Production
                            <span class="block text-xs text-slate-400 mt-1">
                                Dec 15, 2025
                            </span>
                        </a> 
                    </div>
                </div>

                <!-- TAGS -->
                <div class="bg-white/3 p-4 rounded-lg">
                    <h4 class="text-sm font-semibold text-white mb-3 uppercase tracking-wide">
                        Tags
                    </h4>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-white/5 text-slate-200 px-2 py-1 rounded-full">JavaScript</span>
                        <span class="bg-white/5 text-slate-200 px-2 py-1 rounded-full">React</span>
                        <span class="bg-white/5 text-slate-200 px-2 py-1 rounded-full">Performance</span>
                        <span class="bg-white/5 text-slate-200 px-2 py-1 rounded-full">Accessibility</span>
                    </div>
                </div>

            </aside>
        </div>
    </div>
</div>

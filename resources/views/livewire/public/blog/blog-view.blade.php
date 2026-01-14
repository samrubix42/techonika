@section('meta')
    <title>{{ $post->meta_title ?? $post->title . ' | Technonika Blog' }}</title>
    <meta name="description" content="{{ $post->meta_description ?? Str::limit(strip_tags($post->description), 160) }}">
    <meta name="keywords" content="{{ $post->meta_keywords ?? 'blog, tech article, web development, digital marketing' }}">
@endsection

<div class="w-full bg-black text-white min-h-screen relative py-20 overflow-hidden">

    <!-- BACKGROUND GLOW -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2
                    w-[600px] h-[600px]
                    bg-amber-400/10 blur-3xl rounded-full">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <!-- ================= LAYOUT ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <!-- ================= MAIN CONTENT ================= -->
            <main class="lg:col-span-8">

                @if(isset($post) && $post)

                    <!-- META -->
                    <div class="flex items-center gap-4 text-xs text-slate-400 mb-4">
                        <span class="flex items-center gap-1 text-amber-400 uppercase tracking-wide">
                            <i class="ri-calendar-line"></i>
                            {{ optional($post->published_at ?? $post->created_at)->format('M d, Y') }}
                        </span>

                        <span class="flex items-center gap-1">
                            <i class="ri-user-3-line"></i>
                            {{ $post->author?->name ?? 'Admin' }}
                        </span>
                    </div>

                    <!-- TITLE -->
                    <h1
                        class="text-3xl sm:text-4xl lg:text-5xl
                               font-extrabold tracking-tight leading-tight mb-6
                               bg-gradient-to-b from-white to-slate-300
                               bg-clip-text text-transparent">
                        {{ $post->title }}
                    </h1>

                    <!-- FEATURED IMAGE -->
                    @if($post->featured_image)
                        <div class="relative overflow-hidden rounded-2xl mb-10">
                            <img
                                src="{{ asset('storage/' . $post->featured_image) }}"
                                alt="{{ $post->title }}"
                                class="w-full h-64 sm:h-96 object-cover brightness-90">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        </div>
                    @endif

                    <!-- AT A GLANCE -->
                    @if($post->at_a_glance)
                        <div
                            class="mb-10 p-5 rounded-xl
                                   bg-white/5 border-l-4 border-amber-400
                                   backdrop-blur-md">
                            <h3 class="flex items-center gap-2 text-sm font-semibold mb-2">
                                <i class="ri-lightbulb-flash-line text-amber-400"></i>
                                At a Glance
                            </h3>
                            <p class="text-slate-300 text-sm leading-relaxed max-w-3xl">
                                {{ $post->at_a_glance }}
                            </p>
                        </div>
                    @endif

                    <!-- ARTICLE CONTENT -->
                    <article
                        class="prose prose-invert prose-slate
                               max-w-none
                               bg-white/5 border border-white/10
                               rounded-2xl p-6 sm:p-10
                               leading-relaxed">

                        {!! $post->content !!}

                    </article>

                @else
                    <div class="text-center text-slate-400">
                        Post not found.
                    </div>
                @endif

            </main>

            <!-- ================= SIDEBAR ================= -->
            <aside class="lg:col-span-4 space-y-8">

                <!-- SEARCH -->
                <div
                    class="bg-white/5 border border-white/10
                           rounded-xl p-4 backdrop-blur-md">
                    <div class="relative">
                        <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input
                            type="text"
                            placeholder="Search blog..."
                            class="w-full pl-10 pr-3 py-2
                                   bg-transparent border-none
                                   focus:ring-0 outline-none
                                   text-sm placeholder:text-slate-500">
                    </div>
                </div>

                <!-- CATEGORIES -->
                <div
                    class="bg-white/5 border border-white/10
                           rounded-xl p-5 backdrop-blur-md">
                    <h4 class="flex items-center gap-2 text-xs font-semibold mb-4 uppercase tracking-wider">
                        <i class="ri-folder-3-line text-amber-400"></i>
                        Categories
                    </h4>

                    <ul class="space-y-3 text-sm text-slate-300">
                        @forelse($categories as $category)
                            <li class="flex justify-between items-center">
                                <span>{{ $category->name }}</span>
                                <span class="bg-amber-400 text-black text-xs px-2 py-0.5 rounded-full">
                                    {{ $category->posts_count }}
                                </span>
                            </li>
                        @empty
                            <li class="text-slate-400 text-xs">No categories yet</li>
                        @endforelse
                    </ul>
                </div>

                <!-- RECENT POSTS -->
                <div
                    class="bg-white/5 border border-white/10
                           rounded-xl p-5 backdrop-blur-md">
                    <h4 class="flex items-center gap-2 text-xs font-semibold mb-4 uppercase tracking-wider">
                        <i class="ri-time-line text-amber-400"></i>
                        Recent Blogs
                    </h4>

                    <div class="space-y-4 text-sm">
                        @forelse($recentPosts as $recentPost)
                            <a href="{{ route('blog.view', $recentPost->slug) }}"
                               wire:navigate
                               class="block hover:text-amber-400 transition">
                                {{ Str::limit($recentPost->title, 60) }}
                                <span class="block text-xs text-slate-400 mt-1">
                                    {{ optional($recentPost->published_at ?? $recentPost->created_at)->format('M d, Y') }}
                                </span>
                            </a>
                        @empty
                            <p class="text-slate-400 text-xs">No recent posts</p>
                        @endforelse
                    </div>
                </div>

                <!-- TAGS -->
                <div
                    class="bg-white/5 border border-white/10
                           rounded-xl p-5 backdrop-blur-md">
                    <h4 class="flex items-center gap-2 text-xs font-semibold mb-4 uppercase tracking-wider">
                        <i class="ri-price-tag-3-line text-amber-400"></i>
                        Tags
                    </h4>

                    <div class="flex flex-wrap gap-2 text-xs">
                        @forelse($tags as $tag)
                            <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10">
                                {{ $tag }}
                            </span>
                        @empty
                            <span class="text-slate-400 text-xs">No tags yet</span>
                        @endforelse
                    </div>
                </div>

            </aside>

        </div>
    </div>
</div>

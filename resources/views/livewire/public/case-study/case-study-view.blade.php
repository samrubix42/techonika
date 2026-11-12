@php
    $description = $caseStudy->meta_description ?: Str::limit(strip_tags($caseStudy->content), 160);
    $readingTime = max(1, (int) ceil(str_word_count(strip_tags($caseStudy->content)) / 200));
    $shareUrl = urlencode(route('case-study.view', $caseStudy->slug));
    $shareText = urlencode($caseStudy->project_name);
@endphp

@section('meta')
    <title>{{ $caseStudy->meta_title ?: $caseStudy->project_name . ' | Case Study | Technonika' }}</title>
    <meta name="description" content="{{ $description }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $caseStudy->meta_title ?: $caseStudy->project_name }}">
    <meta property="og:description" content="{{ $description }}">
    @if ($caseStudy->featured_image)
        <meta property="og:image" content="{{ asset('storage/' . $caseStudy->featured_image) }}">
    @endif
@endsection

<div class="bg-black text-white">

    <!-- ================== HERO ================== -->
    <section class="relative pt-24 pb-12 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-20 -right-32 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-5xl mx-auto px-6 text-center">
            <!-- Breadcrumb -->
            <nav class="flex flex-wrap items-center justify-center gap-2 text-xs sm:text-sm text-white/45 mb-8">
                <a href="{{ route('home') }}" class="hover:text-primary transition">Home</a>
                <i class="ri-arrow-right-s-line"></i>
                <a href="{{ route('case-studies') }}" class="hover:text-primary transition">Case Studies</a>
                @if ($caseStudy->category)
                    <i class="ri-arrow-right-s-line"></i>
                    <a href="{{ route('case-studies', ['category' => $caseStudy->category->slug]) }}" class="hover:text-primary transition">
                        {{ $caseStudy->category->title }}
                    </a>
                @endif
            </nav>

            @if ($caseStudy->category)
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10
                             text-primary text-xs uppercase tracking-widest mb-6">
                    <i class="ri-price-tag-3-line"></i> {{ $caseStudy->category->title }}
                </span>
            @endif

            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight tracking-tight">
                {{ $caseStudy->project_name }}
            </h1>

            @if ($caseStudy->meta_description)
                <p class="mt-6 text-white/65 max-w-3xl mx-auto text-base sm:text-lg leading-relaxed">
                    {{ $caseStudy->meta_description }}
                </p>
            @endif

            <div class="mt-8 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm text-white/50">
                <span class="inline-flex items-center gap-2"><i class="ri-calendar-line text-primary"></i> {{ $caseStudy->created_at->format('F Y') }}</span>
                <span class="inline-flex items-center gap-2"><i class="ri-time-line text-primary"></i> {{ $readingTime }} min read</span>
            </div>
        </div>
    </section>

    <!-- ================== FEATURED IMAGE ================== -->
    @if ($caseStudy->featured_image)
        <section class="max-w-6xl mx-auto px-6">
            <div class="relative">
                <div class="absolute -inset-4 bg-primary/10 blur-3xl rounded-[3rem]"></div>
                <img src="{{ asset('storage/' . $caseStudy->featured_image) }}" alt="{{ $caseStudy->project_name }}"
                    class="relative w-full rounded-3xl border border-white/10 shadow-2xl shadow-black/60 object-cover aspect-[16/10] sm:aspect-[16/9]">
            </div>
        </section>
    @endif

    <!-- ================== BODY ================== -->
    <section class="max-w-6xl mx-auto px-6 py-16 lg:py-20"
        x-data="{
            toc: [],
            active: null,
            init() {
                const headings = [...this.$refs.article.querySelectorAll('h2')];
                this.toc = headings.map((h, i) => {
                    if (!h.id) h.id = 'section-' + (i + 1);
                    return { id: h.id, text: h.textContent.trim() };
                });
                if (!('IntersectionObserver' in window)) return;
                const io = new IntersectionObserver(entries => {
                    entries.forEach(e => { if (e.isIntersecting) this.active = e.target.id; });
                }, { rootMargin: '-20% 0px -70% 0px' });
                headings.forEach(h => io.observe(h));
            }
        }">
        <div class="grid gap-12 lg:grid-cols-12">

            <!-- Article -->
            <article class="lg:col-span-8 min-w-0">
                <div x-ref="article" class="cs-content">
                    {!! $caseStudy->content !!}
                </div>

                <!-- Share (mobile + desktop, end of article) -->
                <div class="mt-14 pt-8 border-t border-white/10 flex flex-wrap items-center justify-between gap-4">
                    <a href="{{ route('case-studies') }}" class="inline-flex items-center gap-2 text-sm text-white/60 hover:text-primary transition">
                        <i class="ri-arrow-left-line"></i> All case studies
                    </a>
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-white/45 mr-1">Share</span>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" rel="noopener" aria-label="Share on LinkedIn"
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-white/5 border border-white/10 hover:border-primary hover:text-primary transition"><i class="ri-linkedin-fill"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}" target="_blank" rel="noopener" aria-label="Share on X"
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-white/5 border border-white/10 hover:border-primary hover:text-primary transition"><i class="ri-twitter-x-line"></i></a>
                        <a href="https://wa.me/?text={{ $shareText }}%20{{ $shareUrl }}" target="_blank" rel="noopener" aria-label="Share on WhatsApp"
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-white/5 border border-white/10 hover:border-primary hover:text-primary transition"><i class="ri-whatsapp-line"></i></a>
                        <button type="button" x-data="{ copied: false }"
                            @click="navigator.clipboard.writeText(window.location.href); copied = true; setTimeout(() => copied = false, 1800)"
                            aria-label="Copy link"
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-white/5 border border-white/10 hover:border-primary hover:text-primary transition">
                            <i :class="copied ? 'ri-check-line text-primary' : 'ri-link'"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-4">
                <div class="lg:sticky lg:top-28 space-y-6">

                    <!-- Project snapshot -->
                    <div class="rounded-3xl bg-white/[0.03] border border-white/10 p-6">
                        <h4 class="text-xs font-semibold uppercase tracking-widest text-white/45 mb-5">Project Snapshot</h4>
                        <dl class="space-y-4 text-sm">
                            <div class="flex items-start justify-between gap-4">
                                <dt class="text-white/50">Project</dt>
                                <dd class="text-right font-medium">{{ $caseStudy->project_name }}</dd>
                            </div>
                            @if ($caseStudy->category)
                                <div class="flex items-center justify-between gap-4">
                                    <dt class="text-white/50">Service</dt>
                                    <dd><span class="px-3 py-1 rounded-full text-xs font-medium bg-primary/10 text-primary border border-primary/20">{{ $caseStudy->category->title }}</span></dd>
                                </div>
                            @endif
                            <div class="flex items-center justify-between gap-4">
                                <dt class="text-white/50">Published</dt>
                                <dd class="font-medium">{{ $caseStudy->created_at->format('M d, Y') }}</dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Table of contents -->
                    <template x-if="toc.length > 1">
                        <nav class="hidden lg:block rounded-3xl bg-white/[0.03] border border-white/10 p-6">
                            <h4 class="text-xs font-semibold uppercase tracking-widest text-white/45 mb-4">On this page</h4>
                            <ul class="space-y-1 text-sm">
                                <template x-for="item in toc" :key="item.id">
                                    <li>
                                        <a :href="'#' + item.id" x-text="item.text"
                                            :class="active === item.id ? 'text-primary border-primary' : 'text-white/60 border-transparent hover:text-white'"
                                            class="block pl-3 py-1.5 border-l-2 transition"></a>
                                    </li>
                                </template>
                            </ul>
                        </nav>
                    </template>

                    <!-- CTA -->
                    <div class="relative overflow-hidden rounded-3xl border border-primary/25 bg-gradient-to-br from-primary/20 via-primary/5 to-transparent p-6">
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/25 rounded-full blur-3xl"></div>
                        <div class="relative">
                            <i class="ri-rocket-2-line text-3xl text-primary"></i>
                            <h4 class="mt-3 text-xl font-semibold leading-snug">Have a similar project in mind?</h4>
                            <p class="mt-2 text-sm text-white/60">Let's talk about your goals. Free consultation, no obligations.</p>
                            <button @click="$dispatch('open-modal', { to: 'contact' })"
                                class="mt-5 w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-primary text-black text-sm font-semibold shadow-lg shadow-primary/20 hover:bg-primary/90 transition">
                                Get in Touch <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <!-- ================== RELATED ================== -->
    @if ($related->isNotEmpty())
        <section class="border-t border-white/10">
            <div class="max-w-7xl mx-auto px-6 py-20">
                <div class="flex flex-wrap items-end justify-between gap-4 mb-10">
                    <div>
                        <span class="text-xs uppercase tracking-widest text-primary">Keep exploring</span>
                        <h2 class="mt-2 text-3xl md:text-4xl font-light">More <span class="font-semibold">Case Studies</span></h2>
                    </div>
                    <a href="{{ route('case-studies') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-white/20 text-sm font-medium hover:bg-white hover:text-black transition">
                        View all <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($related as $item)
                        @include('livewire.public.case-study.partials.card', ['caseStudy' => $item])
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>

@section('meta')
    <title>Case Studies | Real Projects &amp; Results by Technonika</title>
    <meta name="description" content="Explore Technonika case studies: real client projects in web development, digital marketing and SEO, with the challenges, solutions and measurable results.">
    <meta name="keywords" content="case studies, client projects, web development case study, digital marketing results, SEO case study, Technonika">
@endsection

<div class="bg-black text-white">

    <!-- ================== HERO ================== -->
    <section class="relative pt-24 pb-14 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-10 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-6xl mx-auto px-6 text-center">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10
                         text-primary text-xs sm:text-sm uppercase tracking-widest mb-6">
                <i class="ri-award-line"></i> Case Studies
            </span>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-light leading-tight mb-6">
                Real Projects.
                <br class="hidden sm:block">
                <span class="font-semibold text-primary">Measurable Results.</span>
            </h1>

            <p class="text-white/70 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
                A closer look at how <span class="text-white font-medium">Techonika</span> helps businesses
                solve real problems: the challenge, our approach, and the outcome.
            </p>

            <!-- Quick stats (real counts) -->
            <div class="mt-10 inline-flex flex-wrap justify-center divide-x divide-white/10 rounded-2xl bg-white/[0.03] border border-white/10">
                <div class="px-6 sm:px-10 py-4">
                    <div class="text-2xl sm:text-3xl font-semibold text-primary">{{ $totalCount }}</div>
                    <div class="text-xs uppercase tracking-wider text-white/50 mt-1">Case Studies</div>
                </div>
                <div class="px-6 sm:px-10 py-4">
                    <div class="text-2xl sm:text-3xl font-semibold text-primary">{{ $categories->count() }}</div>
                    <div class="text-xs uppercase tracking-wider text-white/50 mt-1">Service Areas</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================== LISTING ================== -->
    <section class="max-w-7xl mx-auto px-6 pb-24">

        <!-- Filter -->
        @if ($categories->isNotEmpty())
            <div class="flex justify-center mb-12">
                <div class="flex gap-2 overflow-x-auto scrollbar-hide p-1.5 rounded-full bg-white/[0.04] border border-white/10 max-w-full">
                    <button type="button" wire:click="setCategory('')"
                        class="shrink-0 px-5 py-2 rounded-full text-sm font-medium transition
                            {{ $category === '' ? 'bg-primary text-black' : 'text-white/70 hover:text-white hover:bg-white/5' }}">
                        All
                    </button>
                    @foreach ($categories as $cat)
                        <button type="button" wire:click="setCategory('{{ $cat->slug }}')" wire:key="cat-{{ $cat->id }}"
                            class="shrink-0 px-5 py-2 rounded-full text-sm font-medium transition
                                {{ $category === $cat->slug ? 'bg-primary text-black' : 'text-white/70 hover:text-white hover:bg-white/5' }}">
                            {{ $cat->title }}
                            <span class="ml-1 text-xs {{ $category === $cat->slug ? 'text-black/60' : 'text-white/35' }}">{{ $cat->case_studies_count }}</span>
                        </button>
                    @endforeach
                </div>
            </div>
        @endif

        <div wire:loading.class="opacity-50 pointer-events-none" class="transition-opacity">
            @if ($caseStudies->isEmpty())
                <div class="text-center py-24 rounded-3xl border border-dashed border-white/10">
                    <i class="ri-folder-open-line text-4xl text-white/30"></i>
                    <p class="mt-4 text-white/50">No case studies found in this category yet.</p>
                </div>
            @else
                @php $featured = $caseStudies->first(); @endphp

                <!-- Featured (first item on each page) -->
                <a href="{{ route('case-study.view', $featured->slug) }}" wire:key="featured-{{ $featured->id }}"
                    class="group grid lg:grid-cols-2 bg-white/[0.03] border border-white/10 rounded-3xl overflow-hidden mb-8
                           transition-all duration-300 hover:border-primary/40 hover:shadow-2xl hover:shadow-primary/10">
                    <div class="relative aspect-[16/10] lg:aspect-auto lg:min-h-[400px] overflow-hidden bg-neutral-900">
                        @if ($featured->featured_image)
                            <img src="{{ asset('storage/' . $featured->featured_image) }}" alt="{{ $featured->project_name }}"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-primary/20 to-transparent">
                                <i class="ri-briefcase-4-line text-6xl text-primary/70"></i>
                            </div>
                        @endif
                    </div>

                    <div class="flex flex-col justify-center p-7 sm:p-10 lg:p-12">
                        <div class="flex flex-wrap items-center gap-3 mb-5">
                            <span class="px-3 py-1 rounded-full text-[11px] font-semibold uppercase tracking-wider bg-primary/10 text-primary border border-primary/20">
                                Featured
                            </span>
                            @if ($featured->category)
                                <span class="text-xs uppercase tracking-wider text-white/50">{{ $featured->category->title }}</span>
                            @endif
                        </div>

                        <h2 class="text-2xl sm:text-3xl font-semibold leading-tight group-hover:text-primary transition-colors">
                            {{ $featured->project_name }}
                        </h2>

                        <p class="mt-4 text-white/60 leading-relaxed line-clamp-4">
                            {{ $featured->meta_description ?: Str::limit(strip_tags($featured->content), 220) }}
                        </p>

                        <span class="mt-8 inline-flex items-center gap-2 self-start px-6 py-3 rounded-full bg-primary text-black text-sm font-semibold
                                     shadow-lg shadow-primary/20 transition group-hover:gap-3">
                            Read the full story <i class="ri-arrow-right-line"></i>
                        </span>
                    </div>
                </a>

                <!-- Grid -->
                @if ($caseStudies->count() > 1)
                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($caseStudies->skip(1) as $caseStudy)
                            <div wire:key="cs-{{ $caseStudy->id }}">
                                @include('livewire.public.case-study.partials.card', ['caseStudy' => $caseStudy])
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="mt-12">
                    {{ $caseStudies->links('vendor.pagination.theme') }}
                </div>
            @endif
        </div>
    </section>

    <!-- ================== CTA ================== -->
    <section class="max-w-7xl mx-auto px-6 pb-24">
        <div class="relative overflow-hidden rounded-3xl border border-primary/20 bg-gradient-to-br from-primary/15 via-white/[0.03] to-transparent px-8 py-14 sm:px-14 text-center">
            <div class="absolute -top-20 -right-20 w-72 h-72 bg-primary/20 rounded-full blur-3xl"></div>
            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-light leading-tight">
                    Ready to be our next <span class="font-semibold text-primary">success story?</span>
                </h2>
                <p class="mt-4 text-white/60 max-w-xl mx-auto">
                    Tell us about your goals and we'll show you how we can get there together.
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <button @click="$dispatch('open-modal', { to: 'contact' })"
                        class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-primary text-black font-semibold shadow-lg shadow-primary/20 hover:bg-primary/90 transition">
                        Start Your Project <i class="ri-arrow-right-line"></i>
                    </button>
                    <a href="{{ route('portfolio') }}"
                        class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full border border-white/20 text-white font-medium hover:bg-white hover:text-black transition">
                        View Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

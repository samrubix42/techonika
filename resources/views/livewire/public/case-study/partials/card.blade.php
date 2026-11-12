{{-- Case study card. Expects: $caseStudy --}}
<a href="{{ route('case-study.view', $caseStudy->slug) }}"
    class="group flex flex-col h-full bg-white/[0.03] border border-white/10 rounded-3xl overflow-hidden
           transition-all duration-300 hover:-translate-y-1.5 hover:border-primary/40 hover:shadow-2xl hover:shadow-primary/10">

    <div class="relative aspect-[16/10] overflow-hidden bg-neutral-900">
        @if ($caseStudy->featured_image)
            <img src="{{ asset('storage/' . $caseStudy->featured_image) }}" alt="{{ $caseStudy->project_name }}" loading="lazy"
                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        @else
            <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-primary/20 to-transparent">
                <i class="ri-briefcase-4-line text-5xl text-primary/70"></i>
            </div>
        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

        @if ($caseStudy->category)
            <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[11px] font-semibold uppercase tracking-wider
                         bg-black/60 backdrop-blur-md border border-white/15 text-primary">
                {{ $caseStudy->category->title }}
            </span>
        @endif
    </div>

    <div class="flex flex-col flex-1 p-6 sm:p-7">
        <h3 class="text-lg sm:text-xl font-semibold leading-snug text-white group-hover:text-primary transition-colors">
            {{ $caseStudy->project_name }}
        </h3>

        <p class="mt-3 text-sm text-white/55 leading-relaxed line-clamp-3">
            {{ $caseStudy->meta_description ?: Str::limit(strip_tags($caseStudy->content), 150) }}
        </p>

        <div class="mt-auto pt-6 flex items-center justify-between">
            <span class="inline-flex items-center gap-2 text-sm font-semibold text-primary">
                Read case study
                <i class="ri-arrow-right-up-line transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
            </span>
            <span class="text-xs text-white/35">{{ $caseStudy->created_at->format('M Y') }}</span>
        </div>
    </div>
</a>

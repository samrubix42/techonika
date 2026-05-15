@section('meta')
<title>SEO Portfolio | Ranking Results & Search Growth | Technonika</title>
<meta name="description" content="Explore Technonika SEO portfolio with keyword ranking improvements, search performance highlights, and real client growth snapshots.">
<meta name="keywords" content="SEO portfolio, keyword ranking results, SEO case studies, search engine optimization portfolio, Technonika">
@endsection

<div>
    <section class="relative overflow-hidden bg-black pt-24 pb-14 text-white">
        <div class="absolute left-1/2 top-0 h-80 w-80 -translate-x-1/2 rounded-full bg-primary/15 blur-3xl"></div>

        <div class="relative mx-auto max-w-5xl px-6 text-center">
            <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-[11px] uppercase tracking-[0.24em] text-primary">
                SEO Portfolio
            </span>

            <h1 class="mt-6 text-4xl font-light leading-tight sm:text-5xl lg:text-6xl">
                Clean Reporting Of
                <span class="font-semibold text-primary">SEO Growth</span>
            </h1>

            <p class="mx-auto mt-5 max-w-2xl text-sm leading-relaxed text-white/65 sm:text-base">
                A simple showcase of keyword ranking movement and supporting screenshots, designed to match the calm visual language of the Technonika theme.
            </p>
        </div>
    </section>

    <section class="relative overflow-hidden bg-black pb-24">
        <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#ffffff_1px,transparent_1px)] bg-[size:24px_24px]"></div>

        <div id="seo-portfolio-list" class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                @forelse($items as $item)
                    <article class="rounded-[2rem] border border-white/12 bg-white/[0.07] p-4 shadow-[0_18px_60px_rgba(0,0,0,0.35)] backdrop-blur-2xl sm:p-6">
                        <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.92] px-4 py-7 text-slate-900 backdrop-blur-xl sm:px-7 sm:py-8 lg:px-10">
                            <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
                                <div class="flex h-20 w-20 items-center justify-center rounded-full border border-white/40 bg-white/70 shadow-sm backdrop-blur">
                                    @if($item->logo)
                                        <img
                                            src="{{ asset('storage/' . $item->logo) }}"
                                            alt="{{ $item->title }}"
                                            class="max-h-14 max-w-[64px] object-contain"
                                        >
                                    @else
                                        <i class="ri-line-chart-line text-3xl text-primary"></i>
                                    @endif
                                </div>

                                <h3 class="mt-5 text-2xl font-semibold tracking-tight text-slate-900 sm:text-[30px]">
                                    {{ $item->title }}
                                </h3>

                                <div class="mt-5 h-px w-full bg-slate-300/80"></div>
                            </div>

                            <div class="mt-7 overflow-hidden rounded-[1.4rem] border border-white/40 bg-white/70 backdrop-blur">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full text-left">
                                        <thead class="bg-white/75">
                                            <tr class="[&>th]:px-4 [&>th]:py-4 [&>th]:text-center [&>th]:text-[11px] [&>th]:font-semibold [&>th]:uppercase [&>th]:tracking-[0.14em] [&>th]:text-slate-700 sm:[&>th]:px-6">
                                                <th>Keywords</th>
                                                <th>Initial Rank</th>
                                                <th>Current Rank (Google.com)</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-slate-200/80 bg-transparent">
                                            @forelse(($item->seo_results ?? []) as $row)
                                                <tr class="[&>td]:px-4 [&>td]:py-4 [&>td]:text-center sm:[&>td]:px-6 sm:[&>td]:py-5">
                                                    <td class="text-sm font-medium text-slate-900 sm:text-base">
                                                        {{ $row['keyword'] ?? '-' }}
                                                    </td>
                                                    <td>
                                                        <span class="inline-flex min-w-16 items-center justify-center rounded-full bg-rose-50/90 px-4 py-2 text-sm font-semibold text-rose-500">
                                                            {{ $row['initial_rank'] ?: 'N/R' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="inline-flex items-center gap-2">
                                                            <span class="inline-flex min-w-16 items-center justify-center rounded-full bg-[#3c166a] px-4 py-2 text-sm font-semibold text-white">
                                                                {{ $row['current_rank'] ?: '-' }}
                                                            </span>
                                                            <span class="text-lg font-semibold text-emerald-500">↑</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="px-4 py-8 text-center text-sm text-slate-500">
                                                        Ranking details will appear here soon.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @if(!empty($item->result_images))
                                <div class="mt-8">
                                    <div class="flex items-center justify-between gap-3">
                                        <div>
                                            <h4 class="text-lg font-semibold text-slate-900">Result Screenshots</h4>
                                            <p class="mt-1 text-sm text-slate-500">Additional proof images for this project.</p>
                                        </div>
                                        <span class="rounded-full bg-white/70 px-3 py-1 text-xs font-medium text-slate-600 backdrop-blur">
                                            {{ count($item->result_images) }} image{{ count($item->result_images) > 1 ? 's' : '' }}
                                        </span>
                                    </div>

                                    <div class="mt-5 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                                        @foreach($item->result_images as $image)
                                            <div class="group overflow-hidden rounded-[1.25rem] border border-white/40 bg-white/60 shadow-sm backdrop-blur transition duration-300 hover:-translate-y-1">
                                                <div class="relative aspect-[4/3] overflow-hidden bg-white/80">
                                                    <img
                                                        src="{{ asset('storage/' . $image) }}"
                                                        alt="{{ $item->title }} result image"
                                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                                    >
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </article>
                @empty
                    <div class="rounded-[2rem] border border-white/10 bg-white/[0.05] px-6 py-16 text-center text-white/70 backdrop-blur-xl">
                        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full border border-white/10 bg-white/5">
                            <i class="ri-bar-chart-grouped-line text-3xl text-primary"></i>
                        </div>
                        <h3 class="mt-6 text-2xl font-semibold text-white">SEO portfolio coming soon</h3>
                        <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-white/60 sm:text-base">
                            Add SEO portfolio entries from the admin panel to showcase ranking improvements and result screenshots here.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</div>

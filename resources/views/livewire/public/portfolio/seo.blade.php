@section('meta')
<title>SEO Portfolio | Ranking Results & Growth | Technonika</title>
<meta name="description" content="Explore real SEO case studies with ranking improvements and performance proof.">
@endsection

<div>

    <!-- 🔥 HERO -->
    <section class="relative bg-black text-white overflow-hidden">

        <!-- Glow -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,199,0,0.18),transparent_60%)]"></div>

        <div class="relative max-w-6xl mx-auto px-6 py-28 text-center">
            <span class="text-xs uppercase tracking-[0.3em] text-primary">
                Portfolio
            </span>

            <h1 class="mt-6 text-5xl sm:text-6xl font-light">
                SEO Growth
                <span class="text-primary font-semibold">Case Studies</span>
            </h1>

            <p class="mt-6 max-w-2xl mx-auto text-white/60 text-lg">
                Real keyword ranking improvements with proof screenshots and performance data.
            </p>
        </div>
    </section>


    <!-- 🔥 LIST -->
    <section class="bg-black pb-24">
        <div class="max-w-6xl mx-auto px-4 space-y-20">

            @forelse($items as $item)

            <!-- 🔥 MAIN CARD -->
            <article class="rounded-[2rem] border border-white/10 bg-white/[0.04] backdrop-blur-xl p-6 sm:p-8 shadow-[0_0_80px_rgba(59,130,246,0.08)]">

                <!-- LOGO -->
                @if(!empty($item->logo))
                <div class="flex justify-center mb-6">
                    <div class="relative h-16 w-16 rounded-xl bg-white/10 flex items-center justify-center">

                        <!-- glow -->
                        <div class="absolute inset-0 bg-primary/20 blur-xl rounded-xl"></div>

                        <img
                            src="{{ asset('storage/' . $item->logo) }}"
                            alt="{{ $item->title }}"
                            class="h-10 relative z-10 object-contain"
                        >
                    </div>
                </div>
                @endif


                <!-- TITLE -->
                <div class="text-center mb-8">
                    <h3 class="text-3xl sm:text-4xl font-semibold text-white">
                        {{ $item->title }}
                    </h3>
                    <div class="mt-3 h-[2px] w-16 bg-primary mx-auto rounded-full"></div>
                </div>


                <!-- 🔥 IMAGE -->
                @if(!empty($item->result_images) && isset($item->result_images[0]))
                <div class="rounded-2xl overflow-hidden border border-white/10 bg-white/[0.03] mb-10">

                    <div class="relative h-[260px] sm:h-[420px]">
                        <img
                            src="{{ asset('storage/' . $item->result_images[0]) }}"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105"
                            alt="SEO result image"
                        >

                        <!-- overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>

                </div>
                @endif


                <!-- 🔥 DARK TABLE (MATCH IMAGE STYLE) -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.03] backdrop-blur-xl p-6">

                    <table class="w-full">

                        <!-- HEADER -->
                        <thead>
                            <tr class="text-xs uppercase tracking-wider text-white/50 border-b border-white/10">
                                <th class="py-4 text-left">Keywords</th>
                                <th class="py-4 text-center">Initial Rank</th>
                                <th class="py-4 text-center">Current Rank (Google.com)</th>
                            </tr>
                        </thead>

                        <!-- BODY -->
                        <tbody class="divide-y divide-white/5">

                            @forelse(($item->seo_results ?? []) as $row)
                            <tr class="hover:bg-white/[0.03] transition">

                                <!-- KEYWORD -->
                                <td class="py-5 text-white font-medium flex items-center gap-3">
                                    <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                                    {{ $row['keyword'] ?? '-' }}
                                </td>

                                <!-- INITIAL -->
                                <td class="py-5 text-center">
                                    <span class="px-4 py-1.5 rounded-full text-xs font-semibold bg-red-500/10 text-red-400">
                                        {{ $row['initial_rank'] ?: 'N/R' }}
                                    </span>
                                </td>

                                <!-- CURRENT -->
                                <td class="py-5 text-center">
                                    <div class="flex items-center justify-center gap-2">

                                        <span class="px-4 py-1.5 rounded-full text-sm font-semibold bg-primary/20 text-primary">
                                            {{ $row['current_rank'] ?: '-' }}
                                        </span>

                                        <span class="text-green-400 text-sm font-bold">↑</span>

                                    </div>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="py-8 text-center text-white/50">
                                    No ranking data available
                                </td>
                            </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </article>

            @empty
            <!-- EMPTY -->
            <div class="text-center text-white/60 py-20">
                <h3 class="text-2xl font-semibold text-white">
                    No SEO case studies yet
                </h3>
                <p class="mt-2">
                    Add data from admin panel to display here.
                </p>
            </div>
            @endforelse

        </div>
    </section>

</div>
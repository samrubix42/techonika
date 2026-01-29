@section('meta')
<title>Best Digital Marketing Agency in Noida | Techonika</title>
<meta name="description" content="Looking for the best digital marketing agency in Noida? Techonika delivers results-driven SEO, social media, PPC, and content marketing services to grow your business online.">
<meta name="keywords" content="digital marketing services, SEO services, social media marketing, SMO, PPC advertising, online marketing, content marketing">
@endsection

<div>
    <section class="relative bg-black text-white overflow-hidden">
        <!-- Background glow -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 via-transparent to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6
                py-20 sm:py-24 md:py-28">

            <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">

                <!-- LEFT CONTENT -->
                <div class="text-center lg:text-left">

                    <!-- Badge -->
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 mb-5
                    rounded-full bg-white/10 border border-white/15
                    text-xs sm:text-sm text-white/80 backdrop-blur-md">
                        Digital Marketing Company in Noida
                    </span>

                    <!-- Heading -->
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                    font-semibold leading-snug lg:leading-tight">
                        <span class="text-primary font-bold block sm:inline">
                            Techonika – Digital Marketing Agency in Noida
                        </span>
                        <span class="block sm:inline"> Growth & Leads</span>
                    </h1>

                    <!-- Content -->
                    <div class="mt-5 sm:mt-6 space-y-4
                    max-w-xl mx-auto lg:mx-0">

                        <p class="text-sm sm:text-base text-white/80 leading-relaxed">
                            Techonika is a full-service digital marketing agency in Noida that helps businesses generate qualified
                            leads, improve conversion rates, and build long-term online visibility through SEO, performance
                            marketing, social media, and data-driven growth strategies.
                            Our approach combines local market expertise in Noida and Delhi NCR with proven digital marketing
                            frameworks, analytics, and platform-specific execution.
                            Businesses choose Techonika when they need predictable growth rather than vanity metrics.
                        </p>

                        <p class="text-sm sm:text-base text-white/80 leading-relaxed">
                            Our focus remains on traffic quality, lead intent, and measurable return on investment across every
                            digital channel.
                            <span class="text-primary font-medium"> Techonika</span> helps businesses
                            grow step by step in the online world.
                        </p>

                    </div>

                    <!-- CTA -->
                    <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row gap-3 sm:gap-4
                    justify-center lg:justify-start">
                        <button
                            @click="$dispatch('open-modal', { to: 'contact' })"
                            class="w-full sm:w-auto px-6 py-3 rounded-xl
                        bg-primary text-black font-medium
                        hover:bg-primary/90 transition">
                            Get Free Consultation
                        </button>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="relative w-full">

                    <div class="bg-white/5 border border-white/15
                    rounded-2xl sm:rounded-3xl
                    p-5 sm:p-8 lg:p-10
                    backdrop-blur-xl">

                        <h3 class="text-lg sm:text-xl font-semibold mb-1 sm:mb-2">
                            Let’s Grow Your Business
                        </h3>

                        <p class="text-xs sm:text-sm text-white/70 mb-4 sm:mb-6">
                            Fill in the details and our team will get back to you.
                        </p>

                        <!-- SUCCESS MESSAGE -->
                        @if (session()->has('success'))
                        <div class="mb-4 p-3 rounded-lg bg-green-500/20 text-green-400 text-sm">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form wire:submit.prevent="submit" class="space-y-4">

                            <!-- INPUT -->
                            <input wire:model.defer="name" type="text" placeholder="Your Name"
                                class="w-full px-4 py-3 rounded-xl
                            bg-black/40 border border-white/15
                            text-white placeholder-white/50 focus:outline-none">

                            @error('name') <p class="text-red-400 text-xs">{{ $message }}</p> @enderror

                            <input wire:model.defer="email" type="email" placeholder="Email Address"
                                class="w-full px-4 py-3 rounded-xl
                            bg-black/40 border border-white/15
                            text-white placeholder-white/50 focus:outline-none">

                            @error('email') <p class="text-red-400 text-xs">{{ $message }}</p> @enderror

                            <input wire:model.defer="phone" type="tel" placeholder="Phone Number"
                                class="w-full px-4 py-3 rounded-xl
                            bg-black/40 border border-white/15
                            text-white placeholder-white/50 focus:outline-none">

                            @error('phone') <p class="text-red-400 text-xs">{{ $message }}</p> @enderror

                            <select wire:model.defer="service"
                                class="w-full px-4 py-3 rounded-xl
                            bg-black/40 border border-white/15
                            text-white focus:outline-none">
                                <option value="">Select Service</option>
                                <option>SEO</option>
                                <option>Google Ads</option>
                                <option>Social Media Marketing</option>
                                <option>Website Development</option>
                            </select>

                            @error('service') <p class="text-red-400 text-xs">{{ $message }}</p> @enderror

                            <!-- TURNSTILE -->
                            <div wire:ignore class="pt-1">
                                <div id="turnstile-widget"></div>
                            </div>

                            <!-- BUTTON -->
                            <button wire:loading.attr="disabled"
                                class="w-full py-3 rounded-xl
                            bg-primary text-black font-semibold">
                                <span wire:loading.remove>Request Callback</span>
                                <span wire:loading>Submitting...</span>
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            let widgetId = null;
            let rendered = false;
            const TURNSTILE_SRC = 'https://challenges.cloudflare.com/turnstile/v0/api.js';

            function ensureScriptLoaded(cb) {
                if (window.turnstile) return cb && cb();

                let script = document.querySelector('script[src="' + TURNSTILE_SRC + '"]');
                if (!script) {
                    script = document.createElement('script');
                    script.src = TURNSTILE_SRC;
                    script.async = true;
                    script.defer = true;
                    script.onload = cb;
                    document.head.appendChild(script);
                } else {
                    if (script.getAttribute('data-loaded') === 'true') {
                        return cb && cb();
                    }
                    script.addEventListener('load', cb);
                }
            }

            function renderTurnstile() {
                if (rendered) return;

                const container = document.getElementById('turnstile-widget');
                if (!container) return;

                // Remove any existing iframe
                container.innerHTML = '';

                if (!window.turnstile) {
                    ensureScriptLoaded(renderTurnstile);
                    return;
                }

                widgetId = turnstile.render(container, {
                    sitekey: "{{ config('services.turnstile.site_key') }}",
                    callback: function(token) {
                        @this.set('turnstileToken', token);
                    }
                });

                rendered = true;
            }

            renderTurnstile();

            Livewire.off('turnstile-reset');
            Livewire.on('turnstile-reset', () => {
                if (widgetId !== null && window.turnstile) {
                    turnstile.reset(widgetId);
                    rendered = false; // allow re-render
                    renderTurnstile();
                }
            });
        });
    </script>
    <section class="relative bg-black text-white overflow-hidden">

        <!-- Subtle Background Accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/3 left-1/4 w-[32rem] h-[32rem]
            bg-primary/15 rounded-full blur-[180px]"></div>
            <div class="absolute bottom-0 right-0 w-[24rem] h-[24rem]
            bg-primary/10 rounded-full blur-[140px]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto
        px-4 sm:px-6 lg:px-8
        py-10 sm:py-24 lg:py-20">

            <!-- HEADER -->
            <div class="max-w-4xl mb-16 sm:mb-20">

                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                font-semibold leading-tight">
                    Why Choose Techonika as Your Digital Marketing Company in Noida?
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                    Choosing a digital marketing company in Noida requires more than comparing service lists.
                    It requires understanding how strategy, platforms, data, and execution work together
                    to drive business outcomes.
                </p>

                <p class="mt-4 text-white/75 leading-relaxed text-sm sm:text-base">
                    Techonika operates at this intersection by aligning marketing objectives with real
                    customer behavior, platform algorithms, and conversion mechanics.
                </p>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid gap-8 lg:grid-cols-2 lg:gap-12">

                <!-- LOCAL EXPERTISE -->
                <div class="bg-white/5 border border-white/10
                rounded-2xl sm:rounded-3xl
                p-6 sm:p-8 lg:p-10 backdrop-blur-xl">

                    <div class="flex items-start gap-4">
                        <span class="w-11 h-11 flex items-center justify-center
                        rounded-xl bg-primary/15 text-primary">
                            <i class="ri-map-pin-2-line text-xl"></i>
                        </span>

                        <h3 class="text-base sm:text-lg lg:text-xl font-semibold">
                            Deep Local Market Expertise in Noida & Delhi NCR
                        </h3>
                    </div>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Techonika operates with an in-depth understanding of Noida's local business ecosystem,
                        search behavior, and competitive landscape. This includes sector-specific demand
                        patterns across IT services, real estate, healthcare, education, manufacturing,
                        and local service businesses.
                    </p>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Local SEO performance depends on factors such as proximity, relevance,
                        Google Business Profile optimization, and localized content signals.
                        Our strategies account for these variables rather than applying generic
                        national-level templates.
                    </p>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        For businesses targeting Delhi NCR, we structure campaigns that reflect
                        inter-city competition, location-based keywords, and local user intent.
                    </p>
                </div>

                <!-- DATA STRATEGY -->
                <div class="bg-white/5 border border-white/10
                rounded-2xl sm:rounded-3xl
                p-6 sm:p-8 lg:p-10 backdrop-blur-xl">

                    <div class="flex items-start gap-4">
                        <span class="w-11 h-11 flex items-center justify-center
                        rounded-xl bg-primary/15 text-primary">
                            <i class="ri-bar-chart-box-line text-xl"></i>
                        </span>

                        <h3 class="text-base sm:text-lg lg:text-xl font-semibold">
                            Data-Driven Digital Strategies That Scale
                        </h3>
                    </div>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Every digital marketing campaign at Techonika begins with data analysis
                        rather than assumptions. We rely on platforms such as Google Analytics,
                        Google Search Console, Google Ads, Meta Ads Manager,
                        and SEO intelligence tools to guide decisions.
                    </p>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Strategy development considers traffic sources, keyword intent,
                        funnel drop-offs, cost per acquisition,
                        and lifetime value alignment.
                    </p>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Data insights are continuously fed back into optimization cycles
                        across SEO, paid media, and conversion rate optimization.
                    </p>
                </div>

                <!-- TRANSPARENCY -->
                <div class="bg-white/5 border border-white/10
                rounded-2xl sm:rounded-3xl
                p-6 sm:p-8 lg:p-10 backdrop-blur-xl">

                    <div class="flex items-start gap-4">
                        <span class="w-11 h-11 flex items-center justify-center
                        rounded-xl bg-primary/15 text-primary">
                            <i class="ri-file-chart-line text-xl"></i>
                        </span>

                        <h3 class="text-base sm:text-lg lg:text-xl font-semibold">
                            Transparent Reporting & ROI-Focused Execution
                        </h3>
                    </div>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Transparency is foundational to sustainable digital marketing partnerships.
                        Techonika provides clear reporting that connects activities to outcomes
                        rather than isolated metrics.
                    </p>

                    <ul class="mt-4 space-y-2 text-white/80 text-sm sm:text-base">
                        <li>• Organic traffic quality</li>
                        <li>• Keyword visibility by intent</li>
                        <li>• Lead attribution</li>
                        <li>• Conversion trends</li>
                        <li>• Cost efficiency across paid campaigns</li>
                    </ul>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        This allows stakeholders to understand what is working,
                        why it is working, and where improvements are required.
                    </p>
                </div>

                <!-- GROWTH -->
                <div class="bg-white/5 border border-white/10
                rounded-2xl sm:rounded-3xl
                p-6 sm:p-8 lg:p-10 backdrop-blur-xl">

                    <div class="flex items-start gap-4">
                        <span class="w-11 h-11 flex items-center justify-center
                        rounded-xl bg-primary/15 text-primary">
                            <i class="ri-rocket-2-line text-xl"></i>
                        </span>

                        <h3 class="text-base sm:text-lg lg:text-xl font-semibold">
                            Growth Solutions for Startups, SMEs & Enterprises
                        </h3>
                    </div>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Techonika designs marketing systems suitable for different business
                        maturity levels. Startups often require rapid validation and lead generation.
                        SMEs focus on predictable pipelines and cost efficiency.
                        Enterprises require scale, governance, and cross-channel attribution.
                    </p>

                    <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
                        Our frameworks adapt to these requirements without compromising
                        performance discipline.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <section class="relative bg-black text-white py-10 sm:py-28 border-t border-white/10 overflow-hidden">

        <!-- Soft background accent -->
        <div class="absolute -top-48 left-1/2 -translate-x-1/2 w-[720px] h-[360px] bg-primary/10 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4">

            <!-- INTRO -->
            <div class="mb-24">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold mb-6 leading-tight">
                    Our <span class="text-primary">Digital Marketing Services</span> in Noida
                </h2>
                <p class="text-white/65 text-base sm:text-lg leading-relaxed">
                    Techonika offers a complete portfolio of digital marketing services in Noida,
                    designed to work independently or as an integrated growth engine.
                    Each service is built around search intent, platform mechanics,
                    and measurable business outcomes.
                </p>
            </div>

            <!-- SERVICES -->
            <div class="space-y-20">

                <!-- SEO -->
                <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-24 items-start">

                    <!-- LEFT: STORY + IMAGE -->
                    <div>

                        <h3 class="text-2xl sm:text-3xl font-semibold mb-6">
                            SEO Services in <span class="text-primary">Noida</span>
                        </h3>

                        <div class="space-y-6 max-w-xl text-white/70 leading-[1.75]">
                            <p>
                                Search Engine Optimization remains a core growth driver for sustainable online visibility.
                                Techonika delivers SEO services in Noida that focus on rankings, relevance,
                                and conversion intent.
                            </p>

                            <p>
                                Our SEO methodology aligns with search engine guidelines,
                                entity-based indexing, and evolving AI-driven search experiences.
                            </p>
                        </div>

                        <!-- IMAGE -->
                        <div class="mt-12 relative rounded-2xl overflow-hidden border border-white/10">
                            <img
                                src="{{ asset('images/seo-analytics-team-concept-illustration_114360-9255.jpg') }}"
                                alt="SEO analytics and optimization process"
                                class="w-full h-full object-cover opacity-95">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/45 to-transparent"></div>
                        </div>

                    </div>

                    <!-- RIGHT: FEATURE RAIL -->
                    <div class="relative">

                        <!-- Vertical guide -->
                        <div class="absolute left-3 top-0 bottom-0 w-px bg-white/10"></div>

                        <div class="space-y-14 pl-12">

                            <!-- Feature -->
                            <div>
                                <div class="flex items-center gap-4 mb-4">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                        <i class="ri-map-pin-line text-primary"></i>
                                    </span>
                                    <h4 class="font-medium">
                                        Local SEO & Google Business Profile
                                    </h4>
                                </div>

                                <p class="text-sm text-white/70 leading-[1.7]">
                                    Local SEO helps businesses appear for geographically relevant searches.
                                    This includes optimization for Google Maps, local pack results,
                                    and proximity-based queries.
                                    <br><br>
                                    We optimize Google Business Profiles by improving category relevance,
                                    NAP consistency, service descriptions, images, reviews,
                                    and engagement signals. Location-specific landing pages
                                    support local intent while maintaining content uniqueness.
                                </p>
                            </div>

                            <!-- Feature -->
                            <div>
                                <div class="flex items-center gap-4 mb-4">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                        <i class="ri-settings-3-line text-primary"></i>
                                    </span>
                                    <h4 class="font-medium">
                                        Technical SEO, On-Page & Off-Page Optimization
                                    </h4>
                                </div>

                                <p class="text-sm text-white/70 leading-[1.7]">
                                    Technical SEO ensures search engines can crawl, index,
                                    and interpret website content efficiently.
                                    This includes site architecture, page speed optimization,
                                    mobile usability, structured data, and index management.
                                    <br><br>
                                    On-page SEO focuses on content structure, entity usage,
                                    internal linking, and semantic relevance.
                                    Off-page SEO strengthens authority through earned backlinks,
                                    brand mentions, and digital PR signals.
                                </p>
                            </div>

                            <!-- Feature -->
                            <div>
                                <div class="flex items-center gap-4 mb-4">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                        <i class="ri-ai-generate text-primary"></i>
                                    </span>
                                    <h4 class="font-medium">
                                        AI-Driven SEO & LLM Optimization
                                    </h4>
                                </div>

                                <p class="text-sm text-white/70 leading-[1.7] max-w-xl">
                                    Modern search increasingly relies on machine learning and large language models.
                                    Techonika incorporates AI-driven SEO practices that improve content comprehension
                                    for both traditional search engines and AI-powered discovery systems.
                                    <br><br>
                                    This includes entity consistency, topical authority building,
                                    and structured content frameworks aligned with generative search behavior.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- Divider -->
                <div class="h-px bg-white/10"></div>
                <div class="grid lg:grid-cols-2 gap-16 items-start">

                    <!-- LEFT : FEATURE CARDS -->
                    <div class="grid sm:grid-cols-2 gap-6 order-2 lg:order-1">

                        <!-- Card -->
                        <div class="rounded-xl border border-white/10 bg-white/[0.04] p-7
                hover:bg-white/[0.06] transition">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                <i class="ri-google-line text-primary"></i>
                            </div>
                            <h4 class="font-medium mb-2">Google Ads (Search, Display & Shopping Ads)</h4>
                            <p class="text-sm text-white/70 leading-relaxed">
                                We design and manage Google Ads campaigns across search, display, and shopping networks. Campaign structure reflects keyword intent, match types, quality score optimization, and landing page relevance.
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="rounded-xl border border-white/10 bg-white/[0.04] p-7
                hover:bg-white/[0.06] transition">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                <i class="ri-funds-line text-primary"></i>
                            </div>
                            <h4 class="font-medium mb-2">Performance Marketing Campaigns for Lead & Sales Growth</h4>
                            <p class="text-sm text-white/70 leading-relaxed">
                                Meta Ads, remarketing, and cross-channel funnels aligned
                                with each stage of the buyer journey.
                            </p>
                        </div>

                        <!-- Wide Card -->
                        <div class="sm:col-span-2 rounded-xl border border-white/10 bg-white/[0.04] p-7
                hover:bg-white/[0.06] transition">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                <i class="ri-layout-bottom-line text-primary"></i>
                            </div>
                            <h4 class="font-medium mb-2">Conversion-Optimized Landing Pages</h4>
                            <p class="text-sm text-white/70 leading-relaxed">
                                Paid traffic requires dedicated landing environments to convert effectively. Techonika designs landing pages focused on clarity, relevance, and user experience.
                                Elements such as page speed, CTA placement, form structure, and messaging hierarchy are optimized using CRO principles.

                            </p>
                        </div>

                    </div>

                    <!-- RIGHT : IMAGE + CONTENT -->
                    <div class="order-1 lg:order-2">

                        <!-- IMAGE -->
                        <div class="mb-8 relative overflow-hidden rounded-2xl border border-white/10">
                            <img
                                src="{{ asset('images/ppc-specialist-pay-per-click-manager-contextual-advertsing-targeting_277904-14744.jpg') }}"
                                alt="PPC campaign analytics and performance marketing"
                                class="w-full object-cover opacity-95">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        </div>

                        <!-- TEXT -->
                        <h3 class="text-2xl sm:text-3xl font-semibold mb-4">
                            Pay-Per-Click (PPC) & <span class="text-primary">Performance Marketing Services</span>
                        </h3>

                        <p class="text-white/70 leading-relaxed max-w-xl">
                            Performance marketing enables immediate visibility and controlled scaling when executed correctly. The best digital marketing agency in Noida manages PPC campaigns with a focus on intent, efficiency, and conversion performance.
                        </p>

                        <!-- Micro highlights -->
                        <div class="mt-8 flex flex-wrap gap-4 text-sm text-white/60">
                            <span class="flex items-center gap-2">
                                <i class="ri-check-line text-primary"></i> Intent-driven targeting
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="ri-check-line text-primary"></i> ROI-focused bidding
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="ri-check-line text-primary"></i> Conversion attribution
                            </span>
                        </div>

                    </div>

                </div>



                <!-- Divider -->
                <div class="h-px bg-white/10"></div>

                <!-- SOCIAL + CONTENT -->
                <div class="grid lg:grid-cols-2 gap-16 items-start">

                    <!-- LEFT : CONTENT + IMAGE -->
                    <div>

                        <!-- IMAGE -->
                        <div class="mb-8 relative overflow-hidden rounded-2xl border border-white/10">
                            <img
                                src="{{ asset('images/collaborating-develop-startup-business_18660-3166.jpg') }}"
                                alt="Social media, content marketing and growth analytics"
                                class="w-full h-full object-cover opacity-95">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        </div>

                        <!-- TEXT -->
                        <h3 class="text-2xl sm:text-3xl font-semibold mb-4">
                            Social Media Marketing & <span class="text-primary">SMO Services</span>
                        </h3>

                        <p class="text-white/70 leading-relaxed max-w-xl">
                            Social media supports both demand generation and brand credibility. The noida digital marketing agency delivers social media marketing services that balance organic presence with paid amplification.
                        </p>

                        <!-- Micro highlights -->
                        <div class="mt-8 flex flex-wrap gap-4 text-sm text-white/60">
                            <span class="flex items-center gap-2">
                                <i class="ri-check-line text-primary"></i> Brand credibility
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="ri-check-line text-primary"></i> Audience engagement
                            </span>
                            <span class="flex items-center gap-2">
                                <i class="ri-check-line text-primary"></i> Conversion support
                            </span>
                        </div>

                    </div>

                    <!-- RIGHT : CARDS -->
                    <div class="grid sm:grid-cols-2 gap-6">

                        <!-- Card -->
                        <div class="rounded-xl border border-white/10 bg-white/[0.04] p-7
                hover:bg-white/[0.06] transition">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                <i class="ri-share-line text-primary"></i>
                            </div>
                            <h4 class="font-medium mb-2">
                                Social Media Marketing & SMO
                            </h4>
                            <p class="text-sm text-white/70 leading-relaxed">
                                Organic growth, paid amplification, and platform-specific
                                optimization strategies for visibility and engagement.
                            </p>
                        </div>

                        <!-- Card -->
                        <div class="rounded-xl border border-white/10 bg-white/[0.04] p-7
                hover:bg-white/[0.06] transition">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                <i class="ri-file-text-line text-primary"></i>
                            </div>
                            <h4 class="font-medium mb-2">
                                Paid Social Media Advertising
                            </h4>
                            <p class="text-sm text-white/70 leading-relaxed">
                                Paid social campaigns are structured around audience segmentation, creative testing, and conversion tracking. We manage campaigns across platforms such as Facebook, Instagram, and LinkedIn depending on business objectives.
                            </p>
                        </div>

                        <!-- Wide Card -->
                        <div class="sm:col-span-2 rounded-xl border border-white/10 bg-white/[0.04] p-7
                hover:bg-white/[0.06] transition">
                            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-primary/15">
                                <i class="ri-bar-chart-box-line text-primary"></i>
                            </div>
                            <h4 class="font-medium mb-2">
                                SMO Services for Brand Visibility & Engagement </h4>
                            <p class="text-sm text-white/70 leading-relaxed">
                                Social Media Optimization improves profile discoverability, content performance, and engagement rates. This includes bio-optimization, hashtag strategy, content formats, and platform-specific best practices.
                            </p>
                        </div>

                    </div>

                </div>
    </section>
    <section class="relative px-[12%] bg-black text-white py-28 border-t border-white/10">

        <div class="mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-24 items-start">

                <!-- LEFT : CORE MESSAGE -->
                <div class="max-w-xl">

                    <h3 class="text-2xl sm:text-3xl font-semibold leading-tight mb-6">
                        Creative <span class="text-primary">Advertising Agency</span> Services
                    </h3>

                    <p class="text-white/70 leading-[1.75]">
                        Creative execution directly influences campaign performance.
                        Techonika operates as a creative advertising agency focused on clarity,
                        relevance, and conversion impact.
                    </p>

                </div>

                <!-- RIGHT : CREATIVE CAPABILITIES -->
                <div class="space-y-14">

                    <!-- Item -->
                    <div class="relative pl-10">
                        <span class="absolute left-0 top-1 h-6 w-[2px] bg-primary/60 rounded-full"></span>

                        <h4 class="font-medium mb-3">
                            Creative Ad Campaigns That Drive Clicks & Conversions
                        </h4>

                        <p class="text-sm text-white/70 leading-[1.7] max-w-xl">
                            Ad creatives are developed based on audience psychology,
                            platform norms, and performance data.
                            Messaging emphasizes value propositions rather than
                            generic promotional claims.
                        </p>
                    </div>

                    <!-- Item -->
                    <div class="relative pl-10">
                        <span class="absolute left-0 top-1 h-6 w-[2px] bg-primary/60 rounded-full"></span>

                        <h4 class="font-medium mb-3">
                            Visual Storytelling & Brand Communication
                        </h4>

                        <p class="text-sm text-white/70 leading-[1.7] max-w-xl">
                            Visual consistency supports brand recognition across channels.
                            We design creatives that reinforce brand identity
                            while supporting campaign objectives.
                        </p>
                    </div>

                    <!-- Item -->
                    <div class="relative pl-10">
                        <span class="absolute left-0 top-1 h-6 w-[2px] bg-primary/60 rounded-full"></span>

                        <h4 class="font-medium mb-3">
                            Platform-Specific Ad Creatives
                        </h4>

                        <p class="text-sm text-white/70 leading-[1.7] max-w-xl">
                            Each platform requires different creative specifications
                            and messaging styles.
                            Techonika adapts creatives accordingly to maintain
                            relevance, compliance, and performance.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative bg-black text-white py-28 border-t border-white/10">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-24 items-start">

                <!-- LEFT : CORE MESSAGE -->
                <div class="max-w-xl">

                    <h3 class="text-2xl sm:text-3xl font-semibold leading-tight mb-6">
                        Website <span class="text-primary">Design & Development</span> Services
                    </h3>

                    <p class="text-white/70 leading-[1.75]">
                        A website acts as the central conversion hub for digital marketing.
                        As an online marketing agency in Noida, Techonika builds websites
                        that support SEO, paid traffic, and user experience goals.
                    </p>

                </div>

                <!-- RIGHT : DEVELOPMENT CAPABILITIES -->
                <div class="space-y-14">

                    <!-- Item -->
                    <div class="relative pl-10">
                        <span class="absolute left-0 top-1 h-6 w-[2px] bg-primary/60 rounded-full"></span>

                        <h4 class="font-medium mb-3">
                            SEO-Friendly Website Design
                        </h4>

                        <p class="text-sm text-white/70 leading-[1.7] max-w-xl">
                            SEO considerations are integrated at the design stage rather than added later.
                            This includes clean code, logical URL structures, optimized content sections,
                            and internal linking frameworks.
                        </p>
                    </div>

                    <!-- Item -->
                    <div class="relative pl-10">
                        <span class="absolute left-0 top-1 h-6 w-[2px] bg-primary/60 rounded-full"></span>

                        <h4 class="font-medium mb-3">
                            CMS & E-Commerce Website Development
                        </h4>

                        <p class="text-sm text-white/70 leading-[1.7] max-w-xl">
                            We develop websites using reliable CMS and e-commerce platforms
                            based on scalability and security requirements.
                            This ensures ease of content management and future expansion.
                        </p>
                    </div>

                    <!-- Item -->
                    <div class="relative pl-10">
                        <span class="absolute left-0 top-1 h-6 w-[2px] bg-primary/60 rounded-full"></span>

                        <h4 class="font-medium mb-3">
                            Mobile-First & High-Converting UX Design
                        </h4>

                        <p class="text-sm text-white/70 leading-[1.7] max-w-xl">
                            Mobile usability directly impacts search rankings and conversion rates.
                            Our UX design process prioritizes speed, clarity,
                            friction reduction, and conversion optimization.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="relative bg-black text-white py-10 border-t border-white/10">

        <div class="max-w-7xl mx-auto px-6">

            <!-- SECTION INTRO -->
            <div class="max-w-3xl mb-24">
                <h3 class="text-2xl sm:text-3xl font-semibold leading-tight mb-6">
                    Content, Reputation & <span class="text-primary">Growth Services</span>
                </h3>

                <p class="text-white/70 leading-[1.75]">
                    Content supports SEO, authority building, and buyer education.
                    As a top digital marketing company in Noida, Techonika delivers
                    content, reputation, and growth services aligned with
                    search intent and conversion goals.
                </p>
            </div>

            <!-- SERVICES GRID -->
            <div class="grid lg:grid-cols-2 gap-24">

                <!-- LEFT COLUMN -->
                <div class="space-y-20">

                    <!-- CONTENT WRITING -->
                    <div>
                        <div class="flex items-center gap-4 mb-5">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary/15">
                                <i class="ri-file-text-line text-primary text-lg"></i>
                            </span>
                            <h4 class="text-xl font-medium">
                                Content Writing & Content Marketing Services
                            </h4>
                        </div>

                        <p class="text-white/70 leading-[1.7] mb-8 max-w-xl">
                            Content is planned to support organic visibility,
                            authority building, and informed buying decisions
                            throughout the customer journey.
                        </p>

                        <div class="space-y-6 pl-10 relative">
                            <span class="absolute left-4 top-0 bottom-0 w-px bg-white/10"></span>

                            <div>
                                <h5 class="font-medium mb-2">
                                    SEO Content Writing for Websites & Blogs
                                </h5>
                                <p class="text-sm text-white/70 leading-[1.7]">
                                    SEO content is structured around entities, topics,
                                    and semantic relevance. Each piece is designed
                                    to comprehensively answer user queries.
                                </p>
                            </div>

                            <div>
                                <h5 class="font-medium mb-2">
                                    Content Marketing Strategies for Long-Term Growth
                                </h5>
                                <p class="text-sm text-white/70 leading-[1.7]">
                                    Content marketing focuses on sustained visibility
                                    rather than short-term traffic spikes.
                                    We plan content clusters that reinforce
                                    topical authority.
                                </p>
                            </div>

                            <div>
                                <h5 class="font-medium mb-2">
                                    High-Impact Copywriting Services
                                </h5>
                                <p class="text-sm text-white/70 leading-[1.7]">
                                    Copywriting supports conversions across landing pages,
                                    ads, and email campaigns. Messaging clarity
                                    remains the priority.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- EMAIL -->
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary/15">
                                <i class="ri-mail-send-line text-primary text-lg"></i>
                            </span>
                            <h4 class="text-xl font-medium">
                                Email Marketing & Marketing Automation
                            </h4>
                        </div>

                        <p class="text-white/70 leading-[1.7] max-w-xl">
                            Email marketing supports lead nurturing and customer retention.
                            Techonika builds email workflows aligned with buyer journeys
                            and automation triggers.
                        </p>
                    </div>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="space-y-20">

                    <!-- ORM -->
                    <div>
                        <div class="flex items-center gap-4 mb-5">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary/15">
                                <i class="ri-shield-star-line text-primary text-lg"></i>
                            </span>
                            <h4 class="text-xl font-medium">
                                Online Reputation Management (ORM) Services
                            </h4>
                        </div>

                        <p class="text-white/70 leading-[1.7] mb-8 max-w-xl">
                            Online reputation directly influences trust
                            and conversion behavior. As a top digital marketing agency
                            in Noida, we manage and improve brand perception
                            across key platforms.
                        </p>

                        <div class="space-y-6 pl-10 relative">
                            <span class="absolute left-4 top-0 bottom-0 w-px bg-white/10"></span>

                            <div>
                                <h5 class="font-medium mb-2">
                                    Brand Reputation Monitoring & Review Management
                                </h5>
                                <p class="text-sm text-white/70 leading-[1.7]">
                                    We track reviews, mentions, and sentiment
                                    across relevant platforms, enabling
                                    timely responses and reputation stabilization.
                                </p>
                            </div>

                            <div>
                                <h5 class="font-medium mb-2">
                                    Trust-Building ORM Strategies
                                </h5>
                                <p class="text-sm text-white/70 leading-[1.7]">
                                    ORM strategies focus on authenticity and consistency
                                    rather than suppression tactics, aligning with
                                    platform policies and long-term credibility.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ANALYTICS -->
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary/15">
                                <i class="ri-line-chart-line text-primary text-lg"></i>
                            </span>
                            <h4 class="text-xl font-medium">
                                Analytics, CRO & Growth Marketing
                            </h4>
                        </div>

                        <p class="text-white/70 leading-[1.7] max-w-xl">
                            Analytics connects strategy to outcomes.
                            We use data insights to improve conversion rates,
                            optimize user experience, and increase
                            marketing efficiency across channels.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="relative bg-black text-white py-10 overflow-hidden border-t border-white/10">

        <!-- Soft background glow -->
        <div class="absolute -top-40 right-0 w-[520px] h-[320px]
              bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Header -->
            <div class="max-w-3xl mb-20">
                <h2 class="text-3xl sm:text-4xl font-semibold leading-tight">
                    Industries Techonika Serves in
                    <span class="text-primary">Noida & Across India</span>
                </h2>
                <p class="mt-6 text-white/70 leading-relaxed">
                    As a digital marketing agency in Noida, we work across diverse industries,
                    adapting strategies to sector-specific challenges, regulations, and buying behavior.
                </p>
            </div>

            <!-- Industries Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Healthcare -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-11 h-11 rounded-xl bg-primary/15 text-primary
                       flex items-center justify-center text-xl">
                            <i class="ri-heart-pulse-line"></i>
                        </span>
                        <h3 class="text-lg font-medium">Healthcare & Hospitals</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Healthcare marketing demands accuracy, compliance, and trust.
                        We design campaigns aligned with platform guidelines and patient intent.
                    </p>
                </div>

                <!-- Education -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-11 h-11 rounded-xl bg-primary/15 text-primary
                       flex items-center justify-center text-xl">
                            <i class="ri-graduation-cap-line"></i>
                        </span>
                        <h3 class="text-lg font-medium">Education & EdTech</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Education marketing focuses on lead quality and enrollment intent.
                        Our strategies align with academic cycles and decision timelines.
                    </p>
                </div>

                <!-- E-commerce -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-11 h-11 rounded-xl bg-primary/15 text-primary
                       flex items-center justify-center text-xl">
                            <i class="ri-shopping-bag-3-line"></i>
                        </span>
                        <h3 class="text-lg font-medium">E-Commerce & D2C Brands</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Growth depends on traffic quality and conversion optimization.
                        We support SEO, paid ads, and funnel optimization for online stores.
                    </p>
                </div>

                <!-- B2B -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-11 h-11 rounded-xl bg-primary/15 text-primary
                       flex items-center justify-center text-xl">
                            <i class="ri-building-4-line"></i>
                        </span>
                        <h3 class="text-lg font-medium">B2B, SaaS & Corporate</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed">
                        B2B marketing involves longer sales cycles and multi-touch attribution.
                        We focus on lead qualification and nurturing strategies.
                    </p>
                </div>

                <!-- Local Services -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="w-11 h-11 rounded-xl bg-primary/15 text-primary
                       flex items-center justify-center text-xl">
                            <i class="ri-map-pin-line"></i>
                        </span>
                        <h3 class="text-lg font-medium">Local Service-Based Businesses</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Local businesses benefit from location-driven SEO and lead generation.
                        We prioritize calls, inquiries, and appointment bookings.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <section class="relative bg-black text-white py-10 border-t border-white/10 overflow-hidden">

        <!-- Subtle Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[600px] h-[320px]
              bg-primary/15 blur-[220px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Header -->
            <div class="max-w-3xl mb-20">
                <h2 class="text-3xl sm:text-4xl font-semibold leading-tight">
                    Techonika’s <span class="text-primary">Digital Marketing Process</span>
                </h2>
                <p class="mt-6 text-white/70 leading-relaxed">
                    Our process ensures consistency, accountability,
                    and measurable growth across all digital channels.
                </p>
            </div>

            <!-- Process Steps -->
            <div class="max-w-5xl mx-auto space-y-8">

                <!-- Step 1 -->
                <div class="flex gap-6 bg-white/5 border border-white/15
                  rounded-2xl p-6 md:p-8 hover:border-primary transition">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full
                    bg-primary/15 text-primary
                    flex items-center justify-center text-xl font-semibold">
                        1
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
                            <i class="ri-search-line text-primary"></i>
                            Discovery & Digital Audit
                        </h3>
                        <p class="text-white/80 leading-relaxed">
                            We begin with a comprehensive audit of existing assets,
                            performance data, analytics, and technical foundations.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex gap-6 bg-white/5 border border-white/15
                  rounded-2xl p-6 md:p-8 hover:border-primary transition">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full
                    bg-primary/15 text-primary
                    flex items-center justify-center text-xl font-semibold">
                        2
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
                            <i class="ri-bar-chart-grouped-line text-primary"></i>
                            Market Research & Competitor Analysis
                        </h3>
                        <p class="text-white/80 leading-relaxed">
                            Competitor research helps identify gaps, opportunities,
                            audience behavior, and clear differentiation points.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex gap-6 bg-white/5 border border-white/15
                  rounded-2xl p-6 md:p-8 hover:border-primary transition">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full
                    bg-primary/15 text-primary
                    flex items-center justify-center text-xl font-semibold">
                        3
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
                            <i class="ri-flow-chart text-primary"></i>
                            Strategy & Funnel Planning
                        </h3>
                        <p class="text-white/80 leading-relaxed">
                            We align marketing channels with user intent,
                            decision stages, and optimized conversion paths.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flex gap-6 bg-white/5 border border-white/15
                  rounded-2xl p-6 md:p-8 hover:border-primary transition">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full
                    bg-primary/15 text-primary
                    flex items-center justify-center text-xl font-semibold">
                        4
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
                            <i class="ri-megaphone-line text-primary"></i>
                            Execution Across SEO, Paid & Social
                        </h3>
                        <p class="text-white/80 leading-relaxed">
                            Campaign execution follows platform best practices,
                            performance benchmarks, and proven frameworks.
                        </p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="flex gap-6 bg-white/5 border border-white/15
                  rounded-2xl p-6 md:p-8 hover:border-primary transition">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full
                    bg-primary/15 text-primary
                    flex items-center justify-center text-xl font-semibold">
                        5
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
                            <i class="ri-line-chart-line text-primary"></i>
                            Performance Tracking & Optimization
                        </h3>
                        <p class="text-white/80 leading-relaxed">
                            Continuous monitoring allows timely adjustments
                            to improve efficiency, ROI, and scalability.
                        </p>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="flex gap-6 bg-white/5 border border-white/15
                  rounded-2xl p-6 md:p-8 hover:border-primary transition">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full
                    bg-primary/15 text-primary
                    flex items-center justify-center text-xl font-semibold">
                        6
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 flex items-center gap-2">
                            <i class="ri-file-chart-line text-primary"></i>
                            Transparent Reporting & Continuous Scaling
                        </h3>
                        <p class="text-white/80 leading-relaxed">
                            Clear reporting supports informed decisions
                            and sustainable, performance-led growth.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="relative bg-black text-white py-10 border-t border-white/10 overflow-hidden">

        <!-- Soft glow -->
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[300px]
              bg-primary/15 blur-[220px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Header -->
            <div class="max-w-3xl mb-20">
                <h2 class="text-3xl sm:text-4xl font-semibold leading-tight">
                    Why Businesses Trust
                    <span class="text-primary">Techonika</span>
                    as Their Digital Marketing Partner in Noida
                </h2>
                <p class="mt-6 text-white/70 leading-relaxed">
                    Trust is built through results, transparency, and consistency —
                    not promises or short-term tactics.
                </p>
            </div>

            <!-- Trust Pillars -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Item -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary
                    flex items-center justify-center text-xl mb-5">
                        <i class="ri-award-line"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3">
                        Proven Results Across Multiple Industries
                    </h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Experience across diverse sectors strengthens execution quality
                        and improves decision-making at every stage.
                    </p>
                </div>

                <!-- Item -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary
                    flex items-center justify-center text-xl mb-5">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3">
                        Certified Digital Marketing Experts
                    </h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Our team follows platform standards, compliance requirements,
                        and industry best practices across channels.
                    </p>
                </div>

                <!-- Item -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary
                    flex items-center justify-center text-xl mb-5">
                        <i class="ri-eye-line"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3">
                        Ethical, Transparent & Scalable Marketing
                    </h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        We prioritize sustainable growth methods with clear reporting,
                        honest communication, and measurable outcomes.
                    </p>
                </div>

                <!-- Item -->
                <div class="group rounded-2xl border border-white/10 bg-white/[0.04] p-8
                  hover:bg-white/[0.06] transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary
                    flex items-center justify-center text-xl mb-5">
                        <i class="ri-infinity-line"></i>
                    </div>
                    <h3 class="text-lg font-medium mb-3">
                        Long-Term Growth Mindset
                    </h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Our strategies are built for durability —
                        not short-term hacks or risky growth shortcuts.
                    </p>
                </div>

            </div>

        </div>
    </section>




    <section class="relative bg-black text-white py-16 overflow-hidden">
        <!-- subtle accent -->
        <div class="absolute inset-0 bg-gradient-to-bl from-primary/5 via-transparent to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- LEFT IMAGE -->
                <div class="relative order-1 lg:order-none">
                    <div class="rounded-3xl overflow-hidden
                          backdrop-blur-sm">
                        <img
                            src="{{ asset('images/prototyping-process-concept-illustration_114360-7588.jpg') }}"
                            alt="How people find businesses online"
                            class="w-auto h-full object-contain
                               aspect-[2/3] sm:aspect-[16/11]" />
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="order-2 lg:order-none">

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold leading-tight">
                        How People
                        <span class="text-primary font-bold">
                            Find Businesses Online Today
                        </span>
                    </h2>

                    <div class="mt-6 space-y-4 max-w-xl">
                        <p class="text-sm sm:text-base text-white/80 leading-relaxed">
                            Most people start with a search. They type a problem, a service, or a
                            location into Google or scroll through social media for recommendations.
                            If your business does not show up clearly, you lose that chance.
                        </p>

                        <p class="text-sm sm:text-base text-white/80 leading-relaxed">
                            We help your business appear where people are already looking. We also
                            make sure that when they find you, your message feels
                            <span class="text-white font-medium">
                                clear and honest.
                            </span>
                        </p>

                        <p class="text-sm sm:text-base text-white/80 leading-relaxed">
                            That balance is what we maintain at
                            <span class="text-white font-medium">Techonika</span> as a trusted
                            <span class="text-primary font-medium">
                                digital marketing company in Noida.
                            </span>
                        </p>
                    </div>

                    <!-- Optional CTA -->
                    <div class="mt-8">
                        <a @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex items-center justify-center
                              px-6 py-3 rounded-xl
                              bg-primary text-black font-medium
                              hover:bg-primary/90 transition">
                            See How We Help
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>




    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- subtle background -->
        <div class="absolute inset-0 "></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6">

            <!-- SECTION TITLE -->
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                    FREQUENTLY ASKED <span class="text-primary">QUESTIONS</span>
                </h2>
                <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
                    Clear answers to common questions about Techonika’s digital marketing
                    services, pricing, timelines, and performance measurement.
                </p>
            </div>

            <!-- FAQ List -->
            <div class="space-y-4" x-data="{ open: 1 }">

                <!-- FAQ 1 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 1 ? open = null : open = 1"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            What digital marketing services does Techonika offer in Noida?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 1 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 1" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Techonika offers SEO, PPC advertising, social media marketing,
                        content marketing, web development, online reputation management (ORM),
                        email marketing, and analytics services tailored for businesses in Noida.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 2 ? open = null : open = 2"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How much does digital marketing cost in Noida?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 2 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 2" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Digital marketing costs depend on your business goals, competition level,
                        selected services, and campaign scope. We offer scalable pricing models
                        aligned with realistic growth objectives.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 3 ? open = null : open = 3"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How long does SEO take to show results?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 3 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 3" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        SEO typically takes several months to demonstrate sustained improvements.
                        The timeline depends on competition, website history, and content quality,
                        but results are designed to compound over time.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 4 ? open = null : open = 4"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            Does Techonika provide local SEO services in Noida?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 4 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 4" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Yes. Local SEO is a core service provided by our digital marketing agency
                        in Noida, helping businesses improve map visibility, local rankings,
                        calls, and inquiries.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 5 ? open = null : open = 5"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            Which digital marketing service is right for my business?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 5 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 5" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        The right service depends on your business goals, budget,
                        competition, and timelines. We assess these factors and recommend
                        a strategy aligned with measurable outcomes.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 6 ? open = null : open = 6"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How does Techonika measure campaign success?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 6 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 6" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Campaign success is measured using traffic quality,
                        conversion rates, lead generation, and ROI metrics
                        aligned with your business objectives.
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 7 ? open = null : open = 7"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            Do you offer customized digital marketing strategies?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 7 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 7" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Yes. Every strategy is customized by our digital agency in Noida
                        based on your industry, audience behavior, goals, and growth stage.
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="relative bg-black text-white overflow-hidden
    py-14 sm:py-20 lg:py-28 border-t border-white/10">

        <!-- Soft background glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[520px] sm:w-[640px] lg:w-[700px]
        h-[260px] sm:h-[300px] lg:h-[320px]
        bg-primary/20 blur-[220px] rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 text-center">

            <!-- Headline -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
            font-semibold leading-tight">
                Get a Free
                <span class="text-primary block sm:inline">
                    Digital Marketing Consultation
                </span>
                with Techonika
            </h2>

            <!-- Subheadline -->
            <p class="mt-5 sm:mt-6 text-white/70
            leading-relaxed text-sm sm:text-base
            max-w-3xl mx-auto">
                Request a free digital audit and growth plan.
                A strategic audit identifies visibility gaps,
                conversion bottlenecks, and scalable growth
                opportunities through a structured marketing approach.
            </p>

            <!-- CTA Box -->
            <div class="mt-10 sm:mt-14 max-w-3xl mx-auto
            rounded-2xl sm:rounded-3xl
       
            p-6 sm:p-10 lg:p-12">

                <h3 class="text-lg sm:text-xl md:text-2xl
                font-medium mb-3 sm:mb-4">
                    Let’s Build Your Digital Growth Engine Together
                </h3>

                <p class="text-white/70 leading-relaxed
                text-sm sm:text-base mb-8 sm:mb-10">
                    Techonika partners with businesses ready for structured,
                    measurable digital growth.
                    As one of the best digital marketing services in Noida and
                    among the top digital marketing agencies in Noida,
                    we deliver performance-driven strategies that transform
                    online presence into measurable business outcomes.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row
                items-stretch sm:items-center
                justify-center gap-3 sm:gap-4">

                    <button
                        @click="$dispatch('open-modal', { to: 'contact' })"
                        class="inline-flex items-center justify-center gap-2
                    rounded-xl bg-primary px-6 sm:px-8 py-3 sm:py-4
                    text-black font-medium
                    hover:bg-primary/90 transition">
                        <i class="ri-calendar-line"></i>
                        Request Free Consultation
                    </button>

                    <button
                        @click="$dispatch('open-modal', { to: 'audit' })"
                        class="inline-flex items-center justify-center gap-2
                    rounded-xl border border-white/20
                    px-6 sm:px-8 py-3 sm:py-4
                    text-white/80 hover:bg-white/[0.05] transition">
                        <i class="ri-search-line"></i>
                        Get Free Digital Audit
                    </button>

                </div>
            </div>

            <!-- Trust Signals -->
            <div class="mt-8 sm:mt-10
            flex flex-wrap justify-center
            gap-x-6 gap-y-3
            text-xs sm:text-sm text-white/60">

                <span class="flex items-center gap-2">
                    <i class="ri-check-line text-primary"></i>
                    No obligation
                </span>

                <span class="flex items-center gap-2">
                    <i class="ri-check-line text-primary"></i>
                    Strategy-first approach
                </span>

                <span class="flex items-center gap-2">
                    <i class="ri-check-line text-primary"></i>
                    Transparent recommendations
                </span>
            </div>

        </div>
    </section>




</div>
@section('meta')
<title>Branding Agency in Noida | Brand Strategy, Design & Identity</title>
<meta name="description" content="Professional branding agency in Noida offering brand strategy, visual identity, and 
positioning to help businesses stand out and grow.">
<meta name="keywords" content="branding agency Noida, brand identity design, branding services, logo design, brand strategy, business branding, startup branding">
@endsection

<div>
    <section class="relative bg-black text-white overflow-hidden
py-20 sm:py-28 lg:py-32 border-b border-white/10">

        <!-- Ambient Brand Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-56 left-1/2 -translate-x-1/2
            w-[900px] h-[420px] bg-primary/30 blur-[260px] rounded-full"></div>

            <div class="absolute bottom-0 right-0
            w-[420px] h-[420px] bg-white/5 blur-[180px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

            <!-- LEFT CONTENT -->
            <div>

                <!-- Badge -->
                <span class="inline-flex items-center gap-2 mb-6
                px-4 py-1.5 rounded-full
                bg-white/10 border border-white/20
                text-xs tracking-widest uppercase text-white/70 backdrop-blur">
                    <i class="ri-palette-line text-primary"></i>
                    Branding & Identity
                </span>

                <!-- Heading -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl
                font-semibold leading-tight max-w-2xl">
                    Best Branding Agency in Noida
                    <span class="text-primary block mt-3">
                        Build a Brand That Stands Out
                    </span>
                </h1>

                <!-- Description -->
                <p class="mt-6 text-white/75 leading-relaxed max-w-xl text-base sm:text-lg">
                    In a market where hundreds of businesses compete for the same attention, your brand is the only thing
                    that makes you unforgettable. As a creative branding agency in Noida, we understand that a brand is
                    not just a logo or a tagline. It is the experience, the emotion, and the promise you make to your
                    audience. And building that kind of brand requires the right partner.
                </p>

                <p class="mt-4 text-white/70 leading-relaxed max-w-xl text-base sm:text-lg">
                    Techonika is a creative agency in Noida built around one core belief: every business, regardless of
                    size, deserves a brand that commands attention, earns trust, and drives real growth.
                    Whether you are launching something entirely new or reinventing what already exists, our team
                    brings strategy, creativity, and measurable results to the table.
                </p>
                <p class="mt-4 text-white/70 leading-relaxed max-w-xl text-base sm:text-lg">We do not believe in shortcuts, and we do not believe in generic solutions. Your brand is unique, and
                    the way we build it should be too. </p>

                <!-- CTA -->
                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <button
                        @click="$dispatch('open-modal', { to: 'contact' })"
                        class="inline-flex items-center justify-center gap-2
                    px-8 py-4 rounded-xl
                    bg-primary text-black font-medium
                    hover:bg-primary/90 transition">
                        <i class="ri-rocket-line"></i>
                        Start Your Brand Journey
                    </button>

                    <button
                        class="inline-flex items-center justify-center gap-2
                    px-8 py-4 rounded-xl
                    border border-white/25 text-white/80
                    hover:bg-white/[0.05] transition">
                        <i class="ri-eye-line"></i>
                        View Branding Work
                    </button>
                </div>

                <!-- Trust Line -->
                <div class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm text-white/60">
                    <span class="flex items-center gap-2">
                        <i class="ri-check-line text-primary"></i> Strategy-Driven Branding
                    </span>
                    <span class="flex items-center gap-2">
                        <i class="ri-check-line text-primary"></i> Unique Brand Identity
                    </span>
                    <span class="flex items-center gap-2">
                        <i class="ri-check-line text-primary"></i> Growth-Focused Approach
                    </span>
                </div>

            </div>

            <!-- RIGHT BRAND PILLARS -->
            <div class="relative grid grid-cols-1 sm:grid-cols-2 gap-6">

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-lightbulb-flash-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Brand Strategy</h4>
                    <p class="text-sm text-white/70">
                        Positioning, messaging, and market clarity.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-brush-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Visual Identity</h4>
                    <p class="text-sm text-white/70">
                        Logos, colors, typography, and brand systems.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-emotion-happy-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Brand Experience</h4>
                    <p class="text-sm text-white/70">
                        Consistent, memorable customer touchpoints.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-line-chart-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Brand Growth</h4>
                    <p class="text-sm text-white/70">
                        Designed to scale with your business.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black text-white py-16 sm:py-24 border-b border-white/10 overflow-hidden">

        <!-- Subtle Strategy Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2
            w-[780px] h-[360px] bg-primary/20 blur-[240px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

            <!-- LEFT: CONTENT -->
            <div>

                <!-- Eyebrow -->
                <span class="inline-flex items-center gap-2 mb-5
                px-4 py-1.5 rounded-full
                bg-white/10 border border-white/20
                text-xs tracking-widest uppercase text-white/70">
                    <i class="ri-focus-3-line text-primary"></i>
                    Brand Strategy
                </span>

                <!-- Heading -->
                <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl
                font-semibold leading-tight max-w-2xl">
                    Strategic Branding Solutions
                    <span class="text-primary block mt-2">
                        Designed to Grow Your Business
                    </span>
                </h2>

                <!-- Paragraphs -->
                <p class="mt-6 text-white/75 leading-relaxed max-w-xl text-base sm:text-lg">
                    Noida is one of the fastest-growing commercial hubs in India, home to thousands of startups, mid-
                    sized companies, and established enterprises, all competing for the same customers. Standing out in
                    that kind of environment demands more than guesswork. It demands a strategy that is backed by
                    research and driven by intent.
                </p>

                <p class="mt-4 text-white/70 leading-relaxed max-w-xl text-base sm:text-lg">
                    At Techonika, as a branding and marketing agency, we combine deep market research with creative
                    thinking to build brands that resonate. Our approach is not about aesthetics alone. It is about
                    positioning your business in a way that speaks directly to what your audience actually needs, trusts,
                    and values.
                </p>

                <p class="mt-4 text-white/70 leading-relaxed max-w-xl text-base sm:text-lg">
                    From the very first interaction a customer has with your company, whether that is your website, a
                    social media post, or a printed brochure, we ensure every touchpoint tells a cohesive and compelling
                    story. That consistency is what transforms a business into a brand people remember and choose, again
                    and again.
                </p>

            </div>

            <!-- RIGHT: STRATEGY POINTS -->
            <div class="grid sm:grid-cols-2 gap-6">

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-search-eye-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Market Research</h4>
                    <p class="text-sm text-white/70">
                        Understanding competitors, audience behavior, and opportunities.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-map-pin-user-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Brand Positioning</h4>
                    <p class="text-sm text-white/70">
                        Clear messaging that defines why your brand is different.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-brush-3-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Creative Direction</h4>
                    <p class="text-sm text-white/70">
                        Visual and verbal identity aligned with brand intent.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition">
                    <i class="ri-links-line text-primary text-2xl mb-3"></i>
                    <h4 class="font-medium text-lg mb-1">Consistent Touchpoints</h4>
                    <p class="text-sm text-white/70">
                        Unified brand experience across all platforms.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <section class="relative bg-black text-white py-16 sm:py-24 border-b border-white/10 overflow-hidden">

        <!-- Ambient Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2
            w-[820px] h-[380px] bg-primary/20 blur-[260px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="max-w-3xl mb-20">
                <span class="inline-flex items-center gap-2 mb-5
                px-4 py-1.5 rounded-full
                bg-white/10 border border-white/20
                text-xs tracking-widest uppercase text-white/70">
                    <i class="ri-stack-line text-primary"></i>
                    Our Services
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-6">
                    What We Offer –
                    <span class="text-primary">
                        End-to-End Brand Building Services
                    </span>
                </h2>

                <p class="text-white/75 leading-relaxed text-base sm:text-lg">
                    A strong brand is built from multiple layers working in harmony.
                    Our branding services cover every stage of that process,
                    giving your business a complete foundation to grow with clarity,
                    consistency, and confidence.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Logo & Identity -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-shape-2-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">Custom Logo Design & Visual Identity</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        We create logos and visual identities that are recognizable,
                        strategically aligned with your industry,
                        and designed to stay relevant for years.
                    </p>
                </div>

                <!-- Email Marketing -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-mail-send-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">Email Marketing That Converts</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Personalized, well-timed campaigns designed to get opened,
                        build trust, and turn inboxes into a consistent revenue channel.
                    </p>
                </div>

                <!-- LinkedIn Marketing -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-linkedin-box-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">LinkedIn Marketing & B2B Leads</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Profile optimization, content strategy, and positioning
                        that puts your brand in front of real decision-makers.
                    </p>
                </div>

                <!-- SEO Content -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-file-text-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">SEO-Driven Content Creation</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Blog posts, landing pages, and web content
                        that rank in Google and genuinely help your audience.
                    </p>
                </div>

                <!-- SEO Services -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-bar-chart-2-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">Search Engine Optimization</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Keyword research, on-page SEO, technical audits,
                        and link building to rank — and stay ranked.
                    </p>
                </div>

                <!-- Website -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-window-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">Website Design & Development</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Fast, clean, conversion-focused websites
                        that make strong first impressions and sell for you.
                    </p>
                </div>

                <!-- Visiting Card -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-id-card-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">Visiting Card Designing</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Thoughtfully designed visiting cards
                        that turn a simple exchange into a brand moment.
                    </p>
                </div>

                <!-- Company Profile -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-file-list-3-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">Company Profile Designing</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Clear, polished profiles that communicate
                        who you are, what you do, and why clients should choose you.
                    </p>
                </div>

                <!-- Packaging -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-box-3-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">Package Designing</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Packaging that grabs attention on shelves
                        and delivers a memorable unboxing experience.
                    </p>
                </div>

                <!-- Video Explainer -->
                <div class="group p-7 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06] transition-all">
                    <i class="ri-video-line text-primary text-2xl mb-4"></i>
                    <h3 class="text-lg font-medium mb-2">2D Video Explainers</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Short animated videos that simplify complex ideas
                        and motivate viewers to take action.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black text-white py-16 sm:py-24 border-b border-white/10 overflow-hidden">

        <!-- Subtle Background Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2
            w-[760px] h-[360px] bg-primary/20 blur-[240px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">

            <!-- LEFT CONTENT -->
            <div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-6">
                    Why Noida Businesses
                    <span class="text-primary">Trust Techonika</span>
                    for Branding
                </h2>

                <p class="text-white/75 leading-relaxed mb-5">
                    There is no shortage of branding companies out there.
                    So why work with us?
                    Because Techonika does not treat branding as a one-time deliverable.
                    As a creative branding agency in Noida, we treat it as an ongoing relationship.
                </p>

                <p class="text-white/75 leading-relaxed mb-5">
                    When you partner with us, you are not just getting a logo
                    or a strategy document. You are getting a team that understands
                    your business, your market, and your goals,
                    and works with you to make all three align.
                </p>

                <p class="text-white/75 leading-relaxed mb-5">
                    We have worked with businesses across industries,
                    from technology and healthcare to food, fashion,
                    and real estate. That breadth of experience allows us
                    to bring perspectives and ideas that a single-niche agency
                    simply cannot offer.
                </p>

                <p class="text-white/75 leading-relaxed">
                    And because we are based right here in Noida,
                    we understand the local market dynamics,
                    the pace of business, and the expectations
                    of the customers you are trying to reach.
                    Our clients stay with Techonika because we deliver
                    results they can see and measure —
                    real growth in brand awareness, customer trust, and revenue.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative">

                <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                    <img
                        src="/images/brand-building-business-marketing-words-typography-concept_21336-10502.jpg"
                        alt="Trusted branding agency in Noida"
                        class="w-full h-full object-cover">

                    <!-- Image Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>

                <!-- Accent Glow -->
                <div class="absolute -bottom-10 -right-10
                w-48 h-48 bg-primary/25 blur-[140px]
                rounded-full -z-10"></div>

            </div>

        </div>

    </section>

    <section class="relative bg-black text-white py-20 sm:py-28 border-b border-white/10 overflow-hidden">

        <!-- Ambient Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-48 left-1/2 -translate-x-1/2
            w-[800px] h-[380px] bg-primary/20 blur-[240px] rounded-full"></div>

            <div class="absolute bottom-0 right-0
            w-[420px] h-[420px] bg-white/5 blur-[180px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="max-w-3xl mb-20">
                <span class="inline-flex items-center gap-2 mb-5
                px-4 py-1.5 rounded-full
                bg-white/5 border border-white/10
                text-xs uppercase tracking-widest text-primary">
                    Our Process
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-5">
                    How We Build <span class="text-primary">Brands That Last</span>
                </h2>

                <p class="text-white/70 leading-relaxed">
                    Great brands are not created overnight.
                    They are built through research, clarity,
                    and disciplined execution at every stage.
                </p>
            </div>

            <!-- Process Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card -->
                <div class="group p-8 rounded-2xl
                bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06]
                hover:-translate-y-1 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-full bg-primary text-black font-semibold">
                            1
                        </span>
                        <i class="ri-search-eye-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Discovery & Brand Audit
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We deeply understand your business, audience,
                        and goals. Existing brands are audited to uncover
                        strengths, gaps, and opportunities for growth.
                    </p>
                </div>

                <!-- Card -->
                <div class="group p-8 rounded-2xl
                bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06]
                hover:-translate-y-1 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-full bg-primary text-black font-semibold">
                            2
                        </span>
                        <i class="ri-bar-chart-grouped-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Market & Competitor Research
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We study competitors, industry trends,
                        and customer behavior to identify
                        positioning opportunities others miss.
                    </p>
                </div>

                <!-- Card -->
                <div class="group p-8 rounded-2xl
                bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06]
                hover:-translate-y-1 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-full bg-primary text-black font-semibold">
                            3
                        </span>
                        <i class="ri-compass-3-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Brand Strategy & Positioning
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We define your brand voice, messaging,
                        and visual direction — creating a clear
                        foundation for long-term growth.
                    </p>
                </div>

                <!-- Card -->
                <div class="group p-8 rounded-2xl
                bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06]
                hover:-translate-y-1 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-full bg-primary text-black font-semibold">
                            4
                        </span>
                        <i class="ri-palette-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Creative Execution & Launch
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        From logos and websites to social media
                        and marketing assets — everything is
                        executed with consistency and precision.
                    </p>
                </div>

                <!-- Card -->
                <div class="group p-8 rounded-2xl
                bg-white/[0.04] border border-white/10
                hover:border-primary/40 hover:bg-white/[0.06]
                hover:-translate-y-1 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-full bg-primary text-black font-semibold">
                            5
                        </span>
                        <i class="ri-line-chart-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Performance & Refinement
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We track results, analyze feedback,
                        and continuously refine your brand
                        to stay sharp, relevant, and competitive.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black text-white py-20 sm:py-28 border-b border-white/10 overflow-hidden">

        <!-- Ambient Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/3
            w-[700px] h-[360px] bg-primary/15 blur-[220px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="max-w-xl">

                <span class="inline-flex items-center gap-2 mb-5
                px-4 py-1.5 rounded-full
                bg-white/5 border border-white/10
                text-xs uppercase tracking-widest text-primary">
                    Proven Impact
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-6">
                    Real Results –
                    <span class="text-primary">Projects That Delivered Impact</span>
                </h2>

                <p class="text-white/75 leading-relaxed mb-4">
                    Across dozens of projects for businesses of all sizes,
                    Techonika has helped brands go from being unknown
                    to becoming the trusted choice in their space.
                    From Noida-based startups building their identity
                    from scratch to established enterprises refreshing
                    their image for new market segments, every project
                    receives the same strategic focus and care.
                </p>

                <p class="text-white/70 leading-relaxed">
                    We measure success not just in how a brand looks,
                    but in how it performs. Stronger brand recognition,
                    higher website traffic, improved conversion rates,
                    and customers who return and refer others —
                    that is the standard we hold ourselves to on
                    every single project.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative">

                <div class="relative rounded-2xl overflow-hidden
                border border-white/10 bg-white/[0.04]">

                    <img
                        src="{{ asset('images/flat-tiny-people-innovation-concept-business-partner-generating-idea-projects_513217-80.jpg') }}"
                        alt="Branding project success and collaboration"
                        class="w-full h-full object-cover opacity-90">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t
                    from-black/60 via-black/20 to-transparent"></div>
                </div>

                <!-- Floating Stat -->
                <div class="absolute -bottom-6 -left-6
                bg-black/80 backdrop-blur
                border border-white/10
                rounded-xl px-6 py-4">

                    <p class="text-sm text-white/60">Impact Delivered</p>
                    <p class="text-xl font-semibold text-primary">
                        Growth • Trust • Conversions
                    </p>
                </div>

            </div>

        </div>
    </section>


    <section class="relative bg-black text-white py-20 sm:py-28 border-b border-white/10 overflow-hidden">

        <!-- Soft Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2
            w-[760px] h-[360px] bg-primary/20 blur-[240px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="max-w-3xl mb-20">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-6">
                    The Pillars of a
                    <span class="text-primary">Strong Brand</span>
                </h2>

                <p class="text-white/75 leading-relaxed">
                    A powerful brand is not built by chance.
                    It is built on clear fundamentals that work
                    together to create recognition, trust,
                    and long-term growth.
                </p>
            </div>

            <!-- Pillars Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Pillar 1 -->
                <div class="group p-8 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/30 hover:bg-white/[0.06] transition-all">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-shape-2-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Brand Identity & Messaging
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We build visual identity and messaging together,
                        ensuring how your brand looks and how it speaks
                        reinforce each other at every customer touchpoint.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="group p-8 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/30 hover:bg-white/[0.06] transition-all">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-chat-voice-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Brand Voice & Tone
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We define a clear voice and tone that feels authentic,
                        resonates with your audience, and stays consistent
                        across every platform and communication.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="group p-8 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/30 hover:bg-white/[0.06] transition-all">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-focus-3-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Brand Positioning & Differentiation
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We help you own a clear position in your market,
                        defining the unique value and promise that
                        separates your brand from competitors.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="group p-8 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/30 hover:bg-white/[0.06] transition-all">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-book-open-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Brand Guidelines & Consistency
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We create detailed brand guidelines that ensure
                        your brand looks and sounds consistent across
                        teams, platforms, and future campaigns.
                    </p>
                </div>

                <!-- Pillar 5 -->
                <div class="group p-8 rounded-2xl bg-white/[0.04] border border-white/10
                hover:border-primary/30 hover:bg-white/[0.06] transition-all">

                    <div class="mb-5 flex h-12 w-12 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-refresh-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Rebranding & Revitalization
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        When your business evolves, your brand should too.
                        We handle rebranding carefully, preserving what works
                        while building a stronger foundation for growth.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <section class="relative bg-black text-white py-20 sm:py-28 border-b border-white/10 overflow-hidden">

        <!-- Subtle Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2
            w-[760px] h-[360px] bg-primary/20 blur-[240px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="max-w-xl">

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-6">
                    What Sets Us Apart –
                    <span class="text-primary block mt-1">
                        Our Branding Philosophy
                    </span>
                </h2>

                <p class="text-white/80 leading-relaxed mb-4">
                    A lot of agencies will sell you a logo and call it branding.
                    <strong class="text-white">Techonika is not one of them.</strong>
                </p>

                <p class="text-white/70 leading-relaxed mb-4">
                    True branding is strategic. It starts with a deep understanding
                    of your business, your audience, and your competitive landscape,
                    and it ends with a brand that does real work for you every single day.
                </p>

                <p class="text-white/70 leading-relaxed mb-4">
                    It attracts the right customers, repels the wrong ones,
                    and makes every marketing rupee you spend more effective.
                </p>

                <p class="text-white/70 leading-relaxed">
                    That is the kind of branding agency in India that Techonika
                    is built to be. Strategic and creative in equal measure.
                    Whether you are a solo founder in Noida or a national company
                    seeking a complex rebrand, we bring the same commitment
                    to quality, honesty, and results.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative">

                <!-- Image Glow -->
                <div class="absolute -bottom-10 -right-10
                w-64 h-64 bg-primary/20 blur-[180px] rounded-full -z-10"></div>

                <div class="rounded-2xl overflow-hidden border border-white/10">
                    <img
                        src="{{asset('images/hand-drawn-rebranding-illustration_23-2149538413.jpg')}}"
                        alt="Techonika Branding Philosophy"
                        class="w-full h-[360px] object-cover">
                </div>

            </div>

        </div>

    </section>
    <section class="bg-black text-white py-16 sm:py-20 border-b border-white/10">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-6">
                Brands We’ve Helped
                <span class="text-primary block mt-1">
                    Build & Transform
                </span>
            </h2>

            <p class="text-white/75 leading-relaxed mb-5">
                From startups finding their voice to enterprises redefining
                their market presence, Techonika, a branding agency in Noida,
                has partnered with businesses across technology, healthcare,
                consumer products, real estate, and education.
            </p>

            <p class="text-white/70 leading-relaxed mb-5">
                Every brand we have built shares one thing in common:
                clarity about who they are, who they serve,
                and why it matters.
            </p>

            <p class="text-white/70 leading-relaxed">
                That clarity is not something we hand over at the end
                of a project. It is something we help you build,
                maintain, and grow over time.
            </p>
            <div class="space-y-10 mt-10">

                <!-- ROW 1 (LEFT) -->
                <div class="relative overflow-hidden">
                    <div
                        x-data="{ pause: false }"
                        class="flex w-max gap-16 animate-marquee-left"
                        :class="{ 'pause-marquee': pause }"
                        @mouseenter="pause = true"
                        @mouseleave="pause = false">

                        <!-- Logos -->
                        <template x-for="i in 2">
                            <div class="flex gap-16">
                                <img src="/clients/6.jpg" class="client-logo" alt="">
                                <img src="/clients/7.jpg" class="client-logo" alt="">
                                <img src="/clients/8.jpg" class="client-logo" alt="">
                                <img src="/clients/9.jpg" class="client-logo" alt="">
                                <img src="/clients/10.jpg" class="client-logo" alt="">
                            </div>
                        </template>
                    </div>
                </div>

                <!-- ROW 2 (RIGHT) -->
                <div class="relative overflow-hidden">
                    <div
                        x-data="{ pause: false }"
                        class="flex w-max gap-16 animate-marquee-right"
                        :class="{ 'pause-marquee': pause }"
                        @mouseenter="pause = true"
                        @mouseleave="pause = false">

                        <template x-for="i in 2">
                            <div class="flex gap-16">
                                <img src="/clients/11.jpg" class="client-logo" alt="">
                                <img src="/clients/12.jpg" class="client-logo" alt="">
                                <img src="/clients/13.jpg" class="client-logo" alt="">
                                <img src="/clients/14.jpg" class="client-logo" alt="">
                                <img src="/clients/6.jpg" class="client-logo" alt="">
                            </div>
                        </template>
                    </div>
                </div>

                <!-- ROW 3 (LEFT) -->
                <div class="relative overflow-hidden">
                    <div
                        x-data="{ pause: false }"
                        class="flex w-max gap-16 animate-marquee-left"
                        :class="{ 'pause-marquee': pause }"
                        @mouseenter="pause = true"
                        @mouseleave="pause = false">

                        <template x-for="i in 2">
                            <div class="flex gap-16">
                                <img src="/clients/7.jpg" class="client-logo" alt="">
                                <img src="/clients/8.jpg" class="client-logo" alt="">
                                <img src="/clients/9.jpg" class="client-logo" alt="">
                                <img src="/clients/10.jpg" class="client-logo" alt="">
                                <img src="/clients/11.jpg" class="client-logo" alt="">
                            </div>
                        </template>
                    </div>
                </div>

            </div>
            <style>
                .client-logo {
                    height: 56px;
                    width: auto;
                    opacity: 0.75;
                    filter: grayscale(100%);
                    transition: all 0.3s ease;
                }

                .client-logo:hover {
                    opacity: 1;
                    filter: grayscale(0%);
                }

                @media (min-width: 640px) {
                    .client-logo {
                        height: 90px;
                    }
                }

                @keyframes marquee-left {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-50%);
                    }
                }

                @keyframes marquee-right {
                    0% {
                        transform: translateX(-50%);
                    }

                    100% {
                        transform: translateX(0);
                    }
                }

                .animate-marquee-left {
                    animation: marquee-left 28s linear infinite;
                }

                .animate-marquee-right {
                    animation: marquee-right 32s linear infinite;
                }

                .pause-marquee {
                    animation-play-state: paused;
                }
            </style>
        </div>


    </section>





    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- subtle primary accent -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-transparent"></div>

        <div class="relative max-w-4xl mx-auto px-6">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold leading-tight">
                    Frequently Asked
                    <span class="text-primary font-bold">
                        Questions About Branding in Noida
                    </span>
                </h2>

                <p class="mt-4 text-white/70 max-w-2xl mx-auto">
                    Clear answers to common questions businesses ask before working with a branding agency.
                </p>
            </div>

            <!-- FAQ Wrapper -->
            <div class="space-y-4" x-data="{ open: 1 }">

                <!-- FAQ 1 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 1 ? open = null : open = 1"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            What exactly does a branding agency do?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 1 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 1" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        A branding agency helps businesses define, create, and communicate
                        their identity. This includes brand strategy, logo design, messaging,
                        visual identity, and long-term brand consistency across all platforms.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 2 ? open = null : open = 2"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How long does the branding process usually take?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 2 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 2" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        A basic brand identity typically takes four to six weeks.
                        A complete brand strategy and identity system may take
                        eight to twelve weeks, depending on the project scope.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 3 ? open = null : open = 3"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            What branding services do you provide in Noida?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 3 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 3" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Techonika offers logo design, brand strategy,
                        brand guidelines, website design, SEO,
                        content creation, email marketing,
                        and LinkedIn marketing — all tailored to your business goals.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 4 ? open = null : open = 4"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How is branding different from marketing?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 4 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 4" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Branding defines who you are, what you stand for,
                        and how people perceive your business.
                        Marketing is how you promote that brand
                        and reach your audience.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 5 ? open = null : open = 5"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            What are brand guidelines and why are they important?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 5 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 5" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Brand guidelines ensure your brand looks, sounds,
                        and feels consistent across every platform.
                        Consistency builds recognition, trust,
                        and long-term brand value.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 6 ? open = null : open = 6"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How do I choose the right branding agency?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 6 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 6" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        The right branding agency listens before it creates.
                        Look for a team that understands your goals,
                        asks the right questions, and builds strategy
                        before jumping into design.
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 7 ? open = null : open = 7"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            What makes a brand truly successful?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 7 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 7" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        A successful brand is clear, consistent,
                        and emotionally connected to its audience.
                        It builds trust over time and makes every interaction
                        feel intentional and meaningful.
                    </div>
                </div>

            </div>
        </div>
    </section>
<section class="relative bg-black text-white py-16 sm:py-20 border-t border-white/10 overflow-hidden">

    <!-- Subtle Background Accent -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2
            w-[620px] h-[320px] bg-primary/15 blur-[220px] rounded-full">
        </div>
    </div>

    <div class="relative max-w-4xl mx-auto px-6 text-center">

        <!-- Heading -->
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
            Build a Brand
            <span class="text-primary font-bold block sm:inline">
                People Remember
            </span>
        </h2>

        <!-- Description -->
        <p class="mt-6 text-white/70 leading-relaxed max-w-2xl mx-auto text-base sm:text-lg">
            If you are looking for a dependable branding agency in Noida that helps
            your business appear clear, confident, and trustworthy,
            <span class="text-white font-medium">Techonika</span> is ready to partner with you.
            We build brands designed to be remembered and chosen.
        </p>

        <!-- Quiet brand statement -->
        <div class="mt-6 text-white/60 text-sm sm:text-base">
            <p>Good branding does not shout.</p>
            <p class="text-white font-medium">It stays with people.</p>
        </div>

        <!-- CTAs -->
        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">

            <button
                @click="$dispatch('open-modal', { to: 'contact' })"
                class="inline-flex items-center justify-center
                px-9 py-3.5 rounded-xl
                bg-primary text-black font-medium
                hover:bg-primary/90 transition">
                Start Your Branding Journey
            </button>

            <a href="{{ route('contact') }}"
                class="inline-flex items-center justify-center
                px-9 py-3.5 rounded-xl
                border border-white/20 text-white/80
                hover:bg-white/[0.05] transition">
                Get In Touch
            </a>

        </div>

        <!-- Trust line -->
        <p class="mt-10 text-xs sm:text-sm text-white/50">
            Thoughtful branding • Clear decisions • Long-term value
        </p>

    </div>
</section>




</div>
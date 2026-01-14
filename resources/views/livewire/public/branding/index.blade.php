@section('meta')
<title>Professional Branding Services | Brand Identity Design Agency in Noida</title>
<meta name="description" content="Techonika is a leading branding agency in Noida helping businesses build clear, consistent, and memorable brand identities. Professional branding services for startups and businesses.">
<meta name="keywords" content="branding agency Noida, brand identity design, branding services, logo design, brand strategy, business branding, startup branding">
@endsection

<div>
    <section class="relative bg-black text-white overflow-hidden">

        <!-- Primary Gradient Orbs -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 -left-40 w-[32rem] h-[32rem]
                    rounded-full blur-3xl
                    bg-gradient-to-br from-primary/40 via-primary/20 to-transparent">
            </div>

            <div class="absolute bottom-[-14rem] right-[-14rem] w-[30rem] h-[30rem]
                    rounded-full blur-3xl
                    bg-gradient-to-tr from-primary/35 via-primary/15 to-transparent">
            </div>

            <div class="absolute inset-0 bg-black/70"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-12 sm:py-36">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold
                           leading-tight tracking-tight max-w-xl">
                        Techonika – A Branding Agency in Noida That Helps
                        <span class="text-primary font-bold">
                            People Remember Your Business
                        </span>
                    </h1>

                    <div class="mt-8 max-w-xl space-y-4">
                        <p class="text-white/75 leading-relaxed">
                            Your brand is more than a logo or a color. It is the feeling people get when
                            they see your business name, visit your website, or talk about you with others.
                            At <span class="text-white font-medium">Techonika</span>, we help businesses
                            build a clear and lasting identity people can recognize and trust.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            When your brand feels strong and consistent, people feel confident choosing you.
                            When it feels unclear, people hesitate.
                            We remove that confusion with a
                            <span class="text-primary font-medium">
                                simple, honest, and natural branding approach.
                            </span>
                        </p>
                    </div>

                    <!-- CTA -->
                    <div class="mt-12 flex flex-col sm:flex-row gap-4">
                        <button @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex items-center justify-center
                              px-8 py-4 rounded-full
                              bg-primary text-black font-medium
                              hover:bg-primary/90 transition">
                            Start Building Your Brand
                        </button>

                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center
                              px-8 py-4 rounded-full
                              border border-white/20 text-white
                              hover:bg-white/5 transition">
                            Contact Us
                        </a>
                    </div>

                    <p class="mt-10 text-sm text-white/50">
                        Branding built for clarity, consistency, and long-term recall.
                    </p>

                </div>

                <!-- RIGHT IMAGE (SMALLER & SUBTLE) -->
                <div class="relative lg:flex lg:justify-end">
                    <div class="relative w-full sm:w-[80%] lg:w-[80%]
                            rounded-3xl overflow-hidden
                            border border-white/15
                            bg-white/5 backdrop-blur-sm
                            shadow-xl">

                        <img
                            src="{{ asset('black-brick-wall-with-word-branding-written-colorful-letters-surrounded-by-digital-marketing-icons-symbols_872074-30987.jpg') }}"
                            alt="Brand identity design mockup"
                            class="w-full h-full object-cover
                               aspect-[8/5]" />
                    </div>

                    <!-- soft glow accent -->
                    <div class="absolute -bottom-6 -left-6 w-28 h-28
                            bg-primary/20 rounded-full blur-2xl"></div>
                </div>

            </div>
        </div>
    </section>


    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 left-1/4 w-[28rem] h-[28rem]
                    bg-primary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT GLASS CARD -->
                <div class="order-2 lg:order-1 bg-white/5 border border-white/15
                        rounded-3xl p-8 lg:p-10 backdrop-blur-xl">

                    <!-- Card Title -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h3 class="text-lg sm:text-xl font-semibold">
                            Your brand is made of
                        </h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                The way your business
                                <span class="text-white font-medium">looks</span>
                                across platforms
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                The way your business
                                <span class="text-white font-medium">speaks</span>
                                to people
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                The way people
                                <span class="text-white font-medium">remember</span>
                                you
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                The
                                <span class="text-white font-medium">feeling</span>
                                your brand leaves behind
                            </p>
                        </li>
                    </ul>

                    <!-- Divider -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-white/70 leading-relaxed text-sm sm:text-base">
                            As a practical branding agency in Noida,
                            <span class="text-white font-medium">Techonika</span>
                            helps you shape this story so your business feels
                            clear, confident, and consistent wherever people find you.
                        </p>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="order-1 lg:order-2">

                    <!-- Section eyebrow -->
                    <span class="inline-flex items-center gap-2 mb-4
                             text-xs tracking-widest uppercase text-white/60">
                        Branding Explained
                        <span class="w-6 h-px bg-primary/60"></span>
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-semibold leading-tight max-w-xl">
                        What Branding Really Means
                        <span class="text-primary font-bold">
                            in Everyday Business
                        </span>
                    </h2>

                    <div class="mt-6 space-y-5 max-w-xl">
                        <p class="text-white/75 leading-relaxed">
                            Branding is not only for big companies.
                            Every business already has a brand — planned or not.
                            The real question is whether your brand is working
                            <span class="text-white font-medium">for you</span>
                            or quietly working
                            <span class="text-white font-medium">against you</span>.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            Branding shows up in everyday moments —
                            when someone visits your website,
                            reads your message, or hears your name mentioned.
                            Those moments shape trust.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 right-1/4 w-[26rem] h-[26rem]
                    bg-primary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <!-- Eyebrow -->
                    <span class="inline-flex items-center gap-2 mb-4
                             text-xs tracking-widest uppercase text-white/60">
                        Brand Trust " Psychology
                        <span class="w-6 h-px bg-primary/60"></span>
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold leading-tight max-w-xl">
                        Why People Trust
                        <span class="text-primary font-bold">
                            Some Brands More Than Others
                        </span>
                    </h2>

                    <div class="mt-6 space-y-5 max-w-xl">
                        <p class="text-white/75 leading-relaxed">
                            People trust brands that feel familiar and consistent.
                            When the same style, tone, and message appear again and again,
                            people begin to feel comfortable.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            That comfort slowly turns into trust.
                            Consistency signals reliability, care, and long-term intent —
                            qualities people naturally look for in a business.
                        </p>
                    </div>
                </div>

                <!-- RIGHT GLASS CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-8 lg:p-10
                        backdrop-blur-xl">

                    <!-- Card Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h3 class="text-lg sm:text-xl font-semibold">
                            Where consistency matters most
                        </h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Website and
                                <span class="text-white font-medium">social media</span>
                                experience
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Business cards,
                                <span class="text-white font-medium">
                                    brochures, and print
                                </span>
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Online ads and
                                <span class="text-white font-medium">
                                    offline brand materials
                                </span>
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Everyday
                                <span class="text-white font-medium">
                                    customer communication
                                </span>
                            </p>
                        </li>
                    </ul>

                    <!-- Emphasis Line -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-white/75 leading-relaxed text-sm sm:text-base">
                            Consistency is not boring.
                            <span class="text-primary font-medium">
                                It is reassuring.
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 left-1/3 w-[30rem] h-[30rem]
                    bg-primary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <!-- Eyebrow -->
                    <span class="inline-flex items-center gap-2 mb-4
                             text-xs tracking-widest uppercase text-white/60">
                        Our Branding Philosophy
                        <span class="w-6 h-px bg-primary/60"></span>
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-semibold leading-tight max-w-xl">
                        How Techonika
                        <span class="text-primary font-bold">
                            Approaches Branding
                        </span>
                    </h2>

                    <div class="mt-6 space-y-5 max-w-xl">
                        <p class="text-white/75 leading-relaxed">
                            We do not rush branding decisions.
                            Strong brands are built with understanding, not pressure.
                            That is why we take time to learn who you are,
                            what you stand for, and who you want to reach.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            Branding works best when it feels honest and natural —
                            not designed just to look good for a moment,
                            but built to last.
                        </p>
                    </div>
                </div>

                <!-- RIGHT GLASS CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-8 lg:p-10
                        backdrop-blur-xl">

                    <!-- Card Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h3 class="text-lg sm:text-xl font-semibold">
                            We begin by asking
                        </h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                What do you want people to
                                <span class="text-white font-medium">remember</span>
                                about your brand?
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                What
                                <span class="text-white font-medium">problem do you solve</span>
                                for your customers?
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                How do you want your brand to
                                <span class="text-white font-medium">feel</span>
                                when people interact with it?
                            </p>
                        </li>
                    </ul>

                    <!-- Emphasis Line -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-white/75 leading-relaxed text-sm sm:text-base">
                            As a reliable branding agency in Noida,
                            <span class="text-white font-medium">Techonika</span>
                            builds your brand step by step so it feels
                            <span class="text-primary font-medium">
                                natural, consistent, and genuine
                            </span>
                            — never forced.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute bottom-1/3 right-1/4 w-[28rem] h-[28rem]
                    bg-primary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <!-- Eyebrow -->
                    <span class="inline-flex items-center gap-2 mb-4
                             text-xs tracking-widest uppercase text-white/60">
                        Branding & Growth
                        <span class="w-6 h-px bg-primary/60"></span>
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-semibold leading-tight max-w-xl">
                        Branding That
                        <span class="text-primary font-bold">
                            Supports Business Growth
                        </span>
                    </h2>

                    <div class="mt-6 space-y-5 max-w-xl">
                        <p class="text-white/75 leading-relaxed">
                            A strong brand makes marketing easier.
                            When people already recognize and trust your business,
                            they need less convincing before choosing you.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            Branding works quietly in the background —
                            supporting your business even when you are not
                            actively running ads or promotions.
                        </p>
                    </div>
                </div>

                <!-- RIGHT GLASS CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-8 lg:p-10
                        backdrop-blur-xl">

                    <!-- Card Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h3 class="text-lg sm:text-xl font-semibold">
                            How branding helps your business
                        </h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Stand out in a
                                <span class="text-white font-medium">
                                    crowded market
                                </span>
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Look more
                                <span class="text-white font-medium">
                                    professional and reliable
                                </span>
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Build
                                <span class="text-white font-medium">
                                    long-term trust
                                </span>
                                with your audience
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Create a real
                                <span class="text-white font-medium">
                                    emotional connection
                                </span>
                                with customers
                            </p>
                        </li>
                    </ul>

                    <!-- Emphasis Line -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-white/75 leading-relaxed text-sm sm:text-base">
                            This kind of branding keeps working for your business —
                            building recognition, confidence, and loyalty
                            <span class="text-primary font-medium">
                                over time.
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/3 left-1/4 w-[30rem] h-[30rem]
                    bg-primary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- SECTION HEADER -->
            <div class="max-w-3xl mb-20">
                <span class="inline-flex items-center gap-2 mb-4
                         text-xs tracking-widest uppercase text-white/60">
                    Real Business Moments
                    <span class="w-6 h-px bg-primary/60"></span>
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl
                       font-semibold leading-tight">
                    When Businesses Usually
                    <span class="text-primary font-bold">
                        Need Branding Support
                    </span>
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed">
                    Instead of listing branding services, these are the real moments
                    when branding makes a meaningful difference for a business.
                </p>
            </div>

            <!-- MOMENTS GRID -->
            <div class="grid md:grid-cols-2 gap-8 lg:gap-10">

                <!-- MOMENT CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-7 sm:p-9
                        backdrop-blur-xl">

                    <span class="inline-block mb-3 text-primary text-sm font-semibold">
                        Starting a New Business
                    </span>

                    <h3 class="text-lg font-semibold">
                        Start With Clarity, Not Guesswork
                    </h3>

                    <p class="mt-4 text-white/80 leading-relaxed text-sm sm:text-base">
                        We help you build a brand identity that feels clear from day one.
                        This creates a strong foundation so people quickly understand
                        who you are and what you stand for.
                    </p>
                </div>

                <!-- MOMENT CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-7 sm:p-9
                        backdrop-blur-xl">

                    <span class="inline-block mb-3 text-primary text-sm font-semibold">
                        Brand Feels Confusing
                    </span>

                    <h3 class="text-lg font-semibold">
                        Bring Everything Back Into Alignment
                    </h3>

                    <p class="mt-4 text-white/80 leading-relaxed text-sm sm:text-base">
                        When visuals, messaging, and tone feel disconnected,
                        we align everything into one clear and consistent
                        brand story people can follow.
                    </p>
                </div>

                <!-- MOMENT CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-7 sm:p-9
                        backdrop-blur-xl">

                    <span class="inline-block mb-3 text-primary text-sm font-semibold">
                        Growing or Changing Direction
                    </span>

                    <h3 class="text-lg font-semibold">
                        Let Your Brand Grow With You
                    </h3>

                    <p class="mt-4 text-white/80 leading-relaxed text-sm sm:text-base">
                        As your business evolves, your brand should evolve too.
                        We refine your brand so it supports growth
                        without losing recognition.
                    </p>
                </div>

                <!-- MOMENT CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-7 sm:p-9
                        backdrop-blur-xl">

                    <span class="inline-block mb-3 text-primary text-sm font-semibold">
                        Brand Looks Outdated
                    </span>

                    <h3 class="text-lg font-semibold">
                        Refresh Without Losing Familiarity
                    </h3>

                    <p class="mt-4 text-white/80 leading-relaxed text-sm sm:text-base">
                        We modernize your brand while preserving the elements
                        people already recognize and trust.
                    </p>
                </div>

            </div>

            <!-- BOTTOM STATEMENT -->
            <div class="mt-16 max-w-4xl">
                <p class="text-white/75 leading-relaxed">
                    Branding support is not about changing everything.
                    It is about making sure your brand feels
                    <span class="text-primary font-medium">
                        clear, confident, and aligned
                    </span>
                    at every stage of your business.
                </p>
            </div>

        </div>
    </section>


    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/3 right-1/4 w-[30rem] h-[30rem]
                    bg-primary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <!-- Eyebrow -->
                    <span class="inline-flex items-center gap-2 mb-4
                             text-xs tracking-widest uppercase text-white/60">
                        Human-Centered Branding
                        <span class="w-6 h-px bg-primary/60"></span>
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-semibold leading-tight max-w-xl">
                        Branding That Feels
                        <span class="text-primary font-bold">
                            Human, Not Corporate
                        </span>
                    </h2>

                    <div class="mt-6 space-y-5 max-w-xl">
                        <p class="text-white/75 leading-relaxed">
                            Some branding feels cold and distant.
                            It looks polished but feels hard to connect with.
                            We believe branding should feel human —
                            something people can relate to and trust.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            As a people-focused branding agency in Noida,
                            <span class="text-white font-medium">Techonika</span>
                            designs brands that feel natural and genuine,
                            never forced or overly corporate.
                        </p>
                    </div>
                </div>

                <!-- RIGHT GLASS CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-8 lg:p-10
                        backdrop-blur-xl">

                    <!-- Card Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h3 class="text-lg sm:text-xl font-semibold">
                            Our branding feels
                        </h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Honest and
                                <span class="text-white font-medium">
                                    true to who you are
                                </span>
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Clear and
                                <span class="text-white font-medium">
                                    easy to understand
                                </span>
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Approachable without
                                <span class="text-white font-medium">
                                    losing professionalism
                                </span>
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Confident, not
                                <span class="text-white font-medium">
                                    loud or aggressive
                                </span>
                            </p>
                        </li>
                    </ul>

                    <!-- Emphasis Line -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-white/75 leading-relaxed text-sm sm:text-base">
                            This kind of branding makes it easier for people to
                            <span class="text-primary font-medium">
                                connect with your business
                            </span>
                            and remember you for the right reasons.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                    w-[44rem] h-[44rem] rounded-full blur-[120px]
                    bg-gradient-to-br from-primary/20 via-primary/8 to-transparent">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">

            <!-- CENTERED INTRO -->
            <div class="max-w-3xl mx-auto text-center mb-20">
                <span class="inline-flex items-center gap-2 mb-4
                         text-xs tracking-widest uppercase text-white/60">
                    Consistent Brand Experience
                    <span class="w-6 h-px bg-primary/60"></span>
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl
                       font-semibold leading-tight">
                    A Brand That
                    <span class="text-primary font-bold">
                        Works Everywhere
                    </span>
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed">
                    Your brand should feel strong whether it appears on a phone screen,
                    a website, or a printed page.
                    We design brand elements that remain clear, recognizable,
                    and professional everywhere people encounter you.
                </p>
            </div>

            <!-- CAPABILITY GRID -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                <!-- CARD -->
                <div class="group bg-white/5 border border-white/15
                        rounded-3xl p-7 backdrop-blur-xl
                        transition-all duration-300
                        hover:-translate-y-1 hover:border-primary/40">
                    <span class="block text-primary font-semibold text-sm mb-3">
                        Digital First
                    </span>
                    <h3 class="text-base font-medium mb-2">
                        Websites
                    </h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Clean layouts, readable typography, and strong hierarchy
                        that feel consistent across all screen sizes.
                    </p>
                </div>

                <!-- CARD -->
                <div class="group bg-white/5 border border-white/15
                        rounded-3xl p-7 backdrop-blur-xl
                        transition-all duration-300
                        hover:-translate-y-1 hover:border-primary/40">
                    <span class="block text-primary font-semibold text-sm mb-3">
                        Everyday Visibility
                    </span>
                    <h3 class="text-base font-medium mb-2">
                        Social Media
                    </h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Visual systems that stay recognizable
                        even when content changes daily.
                    </p>
                </div>

                <!-- CARD -->
                <div class="group bg-white/5 border border-white/15
                        rounded-3xl p-7 backdrop-blur-xl
                        transition-all duration-300
                        hover:-translate-y-1 hover:border-primary/40">
                    <span class="block text-primary font-semibold text-sm mb-3">
                        Offline Presence
                    </span>
                    <h3 class="text-base font-medium mb-2">
                        Marketing Materials
                    </h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Brochures, cards, and presentations
                        that align perfectly with your digital identity.
                    </p>
                </div>

                <!-- CARD -->
                <div class="group bg-white/5 border border-white/15
                        rounded-3xl p-7 backdrop-blur-xl
                        transition-all duration-300
                        hover:-translate-y-1 hover:border-primary/40">
                    <span class="block text-primary font-semibold text-sm mb-3">
                        Internal Consistency
                    </span>
                    <h3 class="text-base font-medium mb-2">
                        Office Branding
                    </h3>
                    <p class="text-white/70 text-sm leading-relaxed">
                        Visual elements that reinforce your brand
                        for teams, visitors, and partners.
                    </p>
                </div>

            </div>

            <!-- CLOSING LINE -->
            <div class="mt-20 max-w-3xl mx-auto text-center">
                <p class="text-white/75 leading-relaxed">
                    When your brand works everywhere,
                    your business feels more
                    <span class="text-primary font-medium">
                        organized, confident, and trustworthy
                    </span>
                    — without extra effort.
                </p>
            </div>

        </div>
    </section>

    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/3 right-1/4 w-[30rem] h-[30rem]
                    rounded-full blur-[110px]
                    bg-gradient-to-br from-primary/20 via-primary/8 to-transparent">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <!-- Eyebrow -->
                    <span class="inline-flex items-center gap-2 mb-4
                             text-xs tracking-widest uppercase text-white/60">
                        Ongoing Partnership
                        <span class="w-6 h-px bg-primary/60"></span>
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-semibold leading-tight max-w-xl">
                        Long-Term
                        <span class="text-primary font-bold">
                            Branding Support
                        </span>
                    </h2>

                    <div class="mt-6 space-y-5 max-w-xl">
                        <p class="text-white/75 leading-relaxed">
                            Branding is not a one-time task.
                            As your business grows, changes direction, or launches
                            new ideas, your brand often needs thoughtful updates
                            and steady guidance.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            We stay involved so your brand continues to feel
                            clear, relevant, and aligned with your goals —
                            never outdated or disconnected.
                        </p>
                    </div>
                </div>

                <!-- RIGHT SUPPORT CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-8 lg:p-10
                        backdrop-blur-xl">

                    <!-- Card Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h3 class="text-lg sm:text-xl font-semibold">
                            We stay available to
                        </h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Improve
                                <span class="text-white font-medium">
                                    brand consistency
                                </span>
                                across every touchpoint
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Support
                                <span class="text-white font-medium">
                                    new campaigns and launches
                                </span>
                                as you grow
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Adjust
                                <span class="text-white font-medium">
                                    visuals or messaging
                                </span>
                                when your direction evolves
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Keep your brand aligned with
                                <span class="text-white font-medium">
                                    long-term business goals
                                </span>
                            </p>
                        </li>
                    </ul>

                    <!-- Emphasis Line -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-white/75 leading-relaxed text-sm sm:text-base">
                            At <span class="text-white font-medium">Techonika</span>,
                            we see branding as a
                            <span class="text-primary font-medium">
                                long-term relationship
                            </span>
                            — not a one-off project.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- layered primary accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/3 left-1/4 w-[30rem] h-[30rem]
                    bg-primary/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <!-- Eyebrow -->
                    <span class="inline-flex items-center gap-2 mb-4
                             text-xs tracking-widest uppercase text-white/60">
                        Why Clients Trust Us
                        <span class="w-6 h-px bg-primary/60"></span>
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-semibold leading-tight max-w-xl">
                        Why Businesses Choose
                        <span class="text-primary font-bold">
                            Techonika
                        </span>
                        as Their Branding Agency in Noida
                    </h2>

                    <div class="mt-6 space-y-5 max-w-xl">
                        <p class="text-white/75 leading-relaxed">
                            Clients choose us because we respect their business story
                            and help them express it clearly.
                            We listen carefully, ask the right questions,
                            and explain every decision in simple, honest words.
                        </p>

                        <p class="text-white/75 leading-relaxed">
                            Your brand is not just a project to us.
                            It represents your effort, your ideas,
                            and the future you are building.
                        </p>
                    </div>
                </div>

                <!-- RIGHT VALUES CARD -->
                <div class="bg-white/5 border border-white/15
                        rounded-3xl p-8 lg:p-10
                        backdrop-blur-xl">

                    <!-- Card Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <h3 class="text-lg sm:text-xl font-semibold">
                            What we believe in
                        </h3>
                    </div>

                    <ul class="space-y-6">
                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Clear
                                <span class="text-white font-medium">
                                    thinking and direction
                                </span>
                                before design begins
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Honest
                                <span class="text-white font-medium">
                                    advice without exaggeration
                                </span>
                                or pressure
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Simple
                                <span class="text-white font-medium">
                                    design decisions that make sense
                                </span>
                                for your business
                            </p>
                        </li>

                        <li class="flex gap-4">
                            <span class="mt-2 w-2 h-2 rounded-full bg-primary"></span>
                            <p class="text-white/80 leading-relaxed">
                                Long-term
                                <span class="text-white font-medium">
                                    value over quick results
                                </span>
                                or trends
                            </p>
                        </li>
                    </ul>

                    <!-- Emphasis Line -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-white/75 leading-relaxed text-sm sm:text-base">
                            We treat your brand with care,
                            because it represents your work, your reputation,
                            and the trust people place in your business.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black text-white py-12 overflow-hidden">
        <!-- primary gradient atmosphere -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/3 w-[34rem] h-[34rem]
                    rounded-full blur-3xl
                    bg-gradient-to-br from-primary/25 via-primary/10 to-transparent">
            </div>
            <div class="absolute bottom-[-16rem] right-[-16rem] w-[30rem] h-[30rem]
                    rounded-full blur-3xl
                    bg-gradient-to-tr from-primary/20 via-primary/8 to-transparent">
            </div>
            <div class="absolute inset-0 bg-black/70"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-6 text-center">

            <!-- Heading -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
                Build a Brand
                <span class="text-primary font-bold">
                    People Remember
                </span>
                With Techonika
            </h2>

            <!-- Copy -->
            <p class="mt-8 text-white/75 leading-relaxed max-w-3xl mx-auto">
                If you are looking for a dependable branding agency in Noida that helps
                your business look clear, confident, and trustworthy,
                <span class="text-white font-medium">Techonika</span> is here to help.
                We shape brands that people remember and feel comfortable choosing.
            </p>

            <!-- Statement -->
            <div class="mt-8 space-y-2 text-white/60">
                <p>Good branding does not shout.</p>
                <p class="text-white">It stays with people.</p>
            </div>

            <!-- CTA -->
            <div class="mt-14 flex flex-col sm:flex-row items-center justify-center gap-4">
                <button @click="$dispatch('open-modal', { to: 'contact' })"
                    class="inline-flex items-center justify-center
                      px-10 py-4 rounded-full
                      bg-primary text-black font-medium
                      hover:bg-primary/90 transition">
                    Start Your Branding Journey
                </button>

                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center
                      px-10 py-4 rounded-full
                      border border-white/20 text-white
                      hover:bg-white/5 transition">
                    Get In Touch
                </a>
            </div>

            <!-- Trust line -->
            <p class="mt-12 text-sm text-white/50">
                Thoughtful branding. Clear decisions. Long-term value.
            </p>

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
                        Questions (FAQs)
                    </span>
                </h2>

                <p class="mt-4 text-white/70 max-w-2xl mx-auto">
                    Simple answers to common questions about working with a branding agency in Noida.
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
                            What does a branding agency in Noida do for a business?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 1 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 1" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        A branding agency helps shape how your business looks, sounds, and feels to people.
                        At <span class="text-white font-medium">Techonika</span>, we help you build a clear
                        identity so people recognize your brand and trust it easily.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 2 ? open = null : open = 2"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            Is branding important for small businesses and startups?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 2 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 2" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Yes. Branding is especially important for small businesses and startups.
                        A clear brand helps you look professional, builds trust early,
                        and makes your business easier to remember even when you are new.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 3 ? open = null : open = 3"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            Can you help if my brand already exists but feels unclear?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 3 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 3" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Yes. We help refine and improve existing brands.
                        We keep what already works and fix what causes confusion,
                        so your brand feels more consistent and confident.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 4 ? open = null : open = 4"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How long does branding work usually take?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 4 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 4" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Branding timelines depend on your needs, but most branding projects
                        take a few weeks. We explain the process clearly from the start,
                        so you always know what to expect.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button
                        @click="open === 5 ? open = null : open = 5"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="font-medium">
                            How is Techonika different from other branding agencies in Noida?
                        </span>
                        <span class="text-primary text-xl" x-text="open === 5 ? '−' : '+'"></span>
                    </button>

                    <div x-show="open === 5" x-collapse
                        class="px-6 pb-5 text-white/80 leading-relaxed">
                        Techonika focuses on clarity, simplicity, and long-term value.
                        We avoid complex terms and involve you in every decision,
                        so your brand truly feels like your own.
                    </div>
                </div>

            </div>
        </div>
    </section>



</div>
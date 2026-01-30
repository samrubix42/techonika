@section('meta')
<title>Website Designing Company in Noida – Custom & Responsive Design</title>
<meta name="description" content="Techonika is a trusted website designing company in Noida offering SEO-friendly, 
responsive, and business-focused web design services.">
<meta name="keywords" content="web designing company in noida, website design noida, responsive web design noida, 
professional web designers noida, custom website design noida">
@endsection

<div>
    <section class="relative bg-black text-white overflow-hidden">
        <!-- Background Glows -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-48 -left-40 w-[650px] h-[650px]
            bg-primary/25 blur-[180px] rounded-full"></div>

            <div class="absolute bottom-0 right-0 w-[520px] h-[520px]
            bg-white/5 blur-[160px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto py-10 md:py-32">
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <!-- Label -->
                    <span class="inline-block mb-6 text-sm tracking-widest uppercase text-white/60">
                        Website Designing Company in Noida
                    </span>

                    <!-- Heading -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight">
                        Website Designing Company in Noida
                        <span class="text-primary font-bold block mt-2">
                            Techonika
                        </span>
                    </h1>

                    <!-- Subheading -->
                    <p class="mt-6 text-xl md:text-2xl text-white/80 font-light leading-relaxed">
                        Your Partner for
                        <span class="text-white font-medium">
                            Smart, SEO-Ready & High-Converting Website Designs
                        </span>
                    </p>

                    <!-- Content Blocks -->
                    <div class="mt-8 space-y-5 text-white/70 leading-relaxed">

                        <p>
                            Your website is no longer just an online address.
                            It is your <span class="text-white font-medium">sales tool, brand voice,</span>
                            and <span class="text-white font-medium">first impression</span> rolled into one.
                            If you are looking for a website designing company in Noida that builds websites
                            with purpose, clarity, and results,
                            <span class="text-white font-medium">Techonika</span> is built for you.
                        </p>

                        <p>
                            We help businesses turn ideas into strong digital identities.
                            At Techonika, every website starts with understanding your audience,
                            your goals, and how people actually use the web.
                        </p>

                        <p>
                            Instead of creating designs that only look good, we focus on
                            <span class="text-white font-medium">
                                usability, speed, mobile experience, and SEO-friendly structure.
                            </span>
                            This approach helps your website attract visitors, keep them engaged,
                            and convert them into leads or customers.
                        </p>



                    </div>

                    <!-- Buttons -->
                    <div class="mt-12 flex flex-wrap gap-4">
                        <button
                            @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex items-center justify-center
                        px-8 py-3 rounded-full
                        bg-primary text-black font-medium
                        hover:bg-primary/90 transition">
                            Start Your Project
                        </button>

                        <a href="{{ route('portfolio') }}"
                            class="inline-flex items-center justify-center
                        px-8 py-3 rounded-full
                        border border-white/20
                        text-white/80 hover:text-white
                        hover:border-white/40 transition">
                            View Portfolio
                        </a>
                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative">
                    <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img
                            src="{{asset('images/technology-hologram-indoors_23-2151833348.jpg')}}"
                            alt="Website Design Services in Noida"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Image Glow -->
                    <div class="absolute -bottom-10 -right-10 w-64 h-64
                    bg-primary/30 blur-[120px] rounded-full -z-10"></div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black text-white overflow-hidden border-t border-white/10">
        <!-- Background Accent -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/2 -left-40 -translate-y-1/2
            w-[520px] h-[520px] bg-primary/20 blur-[180px] rounded-full"></div>
        </div>

        <div class="relative mx-auto px-[10%] py-10 md:py-16">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <!-- LEFT CONTENT -->
                <div>
                    <span class="inline-block mb-5 text-sm tracking-widest uppercase text-white/60">
                        Why Choose Techonika
                    </span>

                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold leading-tight">
                        Why Techonika Is the Best
                        <span class="text-primary font-bold block mt-2">
                            Website Designing Company in Noida
                        </span>
                    </h2>

                    <p class="mt-8 text-white/70 leading-relaxed text-lg">
                        Many companies claim to be the best website design company in Noida,
                        but very few focus on performance, clarity, and user intent together.
                        Here’s what makes <span class="text-white font-medium">Techonika</span> different:
                    </p>

                    <p class="mt-6 text-white/70 leading-relaxed">
                        We design with users in mind and optimize with search engines in focus.
                        This balance helps your website
                        <span class="text-white font-medium">rank better and perform better.</span>
                    </p>
                </div>

                <!-- RIGHT FEATURE GRID -->
                <div class="grid sm:grid-cols-2 gap-6">

                    <!-- Card -->
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="w-10 h-10 flex items-center justify-center
                            rounded-full bg-primary/15 text-primary">
                                <i class="ri-focus-3-line text-xl"></i>
                            </span>
                            <h4 class="text-lg font-medium">Clear, business-focused</h4>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="w-10 h-10 flex items-center justify-center
                            rounded-full bg-primary/15 text-primary">
                                <i class="ri-seo-line text-xl"></i>
                            </span>
                            <h4 class="text-lg font-medium">SEO-Friendly Structure</h4>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="w-10 h-10 flex items-center justify-center
                            rounded-full bg-primary/15 text-primary">
                                <i class="ri-smartphone-line text-xl"></i>
                            </span>
                            <h4 class="text-lg font-medium">Mobile-First & Responsive</h4>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="w-10 h-10 flex items-center justify-center
                            rounded-full bg-primary/15 text-primary">
                                <i class="ri-speed-line text-xl"></i>
                            </span>
                            <h4 class="text-lg font-medium">Fast Loading & Clean Code</h4>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="w-10 h-10 flex items-center justify-center
                            rounded-full bg-primary/15 text-primary">
                                <i class="ri-settings-3-line text-xl"></i>
                            </span>
                            <h4 class="text-lg font-medium">Easy-to-Manage Websites</h4>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="w-10 h-10 flex items-center justify-center
                            rounded-full bg-primary/15 text-primary">
                                <i class="ri-price-tag-3-line text-xl"></i>
                            </span>
                            <h4 class="text-lg font-medium">Transparent Pricing</h4>
                        </div>
                    </div>

                    <!-- Highlight Card -->
                    <div class="sm:col-span-2 p-6 rounded-2xl
                    bg-primary/10 border border-primary/30 backdrop-blur">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="w-10 h-10 flex items-center justify-center
                            rounded-full bg-primary/20 text-primary">
                                <i class="ri-customer-service-2-line text-xl"></i>
                            </span>
                            <h4 class="text-lg font-medium text-primary">
                                Dedicated Support After Delivery
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="relative bg-black text-white overflow-hidden
    py-16 sm:py-10 lg:py-28 border-t border-white/10">

        <!-- Soft Background Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[600px] h-[300px] bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- SECTION INTRO -->
            <div class="max-w-3xl mb-14 sm:mb-20">

                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                font-semibold leading-tight">
                    Our <span class="text-primary">Website Designing Services</span> in Noida
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                    As a top website designing company in Noida, Techonika offers complete web
                    design solutions under one roof. Whether you need a simple business website
                    or a complex web platform, our team delivers with precision and care.
                </p>

            </div>

            <!-- SERVICES GRID -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                <!-- CARD -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7
                hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-building-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Business Website Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We create professional websites that represent your brand clearly
                        and build trust. These websites are perfect for service providers,
                        consultants, and local businesses in Noida.
                    </p>
                </div>

                <!-- CARD -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7
                hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-seo-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        SEO-Friendly Website Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        A good-looking website is not enough. We design websites with
                        proper heading structure, clean URLs, optimized images,
                        and fast performance to support SEO from the start.
                    </p>
                </div>

                <!-- CARD -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7
                hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-smartphone-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Mobile-First Web Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        More than half of users visit websites from mobile devices.
                        Our designs work smoothly on mobiles, tablets, and desktops
                        without breaking layouts or slowing down.
                    </p>
                </div>

                <!-- CARD -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7
                hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-layout-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        UI/UX Focused Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We design layouts that guide users naturally.
                        Clear navigation, readable content, and strong
                        call-to-actions help users take the right steps.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <section class="relative bg-black text-white overflow-hidden
    py-16 sm:py-10 lg:py-28 border-t border-white/10">

        <!-- Soft Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[650px] h-[320px] bg-primary/15 blur-[220px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- INTRO -->
            <div class="max-w-3xl mb-14 sm:mb-20">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                font-semibold leading-tight">
                    Explore Our <span class="text-primary">Website Design Solutions</span>
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                    We offer specialized services for different business needs.
                    Explore our web design subcategories below:
                </p>
            </div>

            <!-- GRID -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7
                hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-shopping-cart-2-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Ecommerce Website Designing
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        We design secure and easy-to-use ecommerce websites
                        that help you sell products online.
                    </p>

                    <a href="{{route('ecommerce-web-design')}}" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-layout-2-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Static Website Designing
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Simple, fast, and cost-effective static websites
                        for small businesses and startups.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-smartphone-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Responsive Website Designing
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Websites that adjust smoothly across all screen sizes
                        for better user experience.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-pencil-ruler-2-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Custom Web Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Unique website designs built from scratch
                        based on your brand and goals.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-angularjs-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Angular Website Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Modern and dynamic Angular-based websites
                        for advanced web applications.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-palette-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Graphic Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Creative graphics, banners, and visuals
                        that match your website and branding.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-building-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Corporate Website Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Professional corporate websites designed
                        for credibility and business growth.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-article-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Hindi Website Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Hindi language websites to connect better
                        with regional and local audiences.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-database-2-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Dynamic Website Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        Websites with dynamic content, admin panels,
                        and database integration.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- CARD -->
                <div class="group rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7 hover:bg-white/[0.06] transition">

                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-focus-3-line text-primary text-xl"></i>
                    </div>

                    <h3 class="text-lg font-medium mb-2">
                        Landing Page Design
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed mb-4">
                        High-converting landing pages for ads,
                        campaigns, and lead generation.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2
                    text-sm text-primary hover:underline">
                        Learn More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black text-white overflow-hidden
    py-16 sm:py-10 lg:py-28 border-t border-white/10">

        <!-- Soft Background Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[600px] h-[300px] bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- SECTION HEADER -->
            <div class="max-w-3xl mb-14 sm:mb-20">

                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                font-semibold leading-tight">
                    Our <span class="text-primary">Website Design Process</span>
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                    As a trusted web design company in Noida, we follow a clear and simple process
                    to ensure smooth execution, transparency, and high-quality results.
                </p>
            </div>

            <!-- PROCESS GRID -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <!-- STEP 1 -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7">

                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-primary/15">
                            <i class="ri-questionnaire-line text-primary text-xl"></i>
                        </span>
                        <span class="text-sm font-medium text-primary">
                            Step 01
                        </span>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Requirement Understanding
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We learn about your business, goals, and target audience to
                        align the website with real business objectives.
                    </p>
                </div>

                <!-- STEP 2 -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7">

                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-primary/15">
                            <i class="ri-flow-chart text-primary text-xl"></i>
                        </span>
                        <span class="text-sm font-medium text-primary">
                            Step 02
                        </span>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Planning & Structure
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        We plan the website pages, layout, navigation, and user flow
                        to ensure clarity and ease of use.
                    </p>
                </div>

                <!-- STEP 3 -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7">

                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-primary/15">
                            <i class="ri-palette-line text-primary text-xl"></i>
                        </span>
                        <span class="text-sm font-medium text-primary">
                            Step 03
                        </span>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Design & UI
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        Clean, modern, and brand-aligned designs that create
                        a strong first impression.
                    </p>
                </div>

                <!-- STEP 4 -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7">

                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-primary/15">
                            <i class="ri-code-line text-primary text-xl"></i>
                        </span>
                        <span class="text-sm font-medium text-primary">
                            Step 04
                        </span>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Development
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        Fast, secure, and responsive implementation using
                        clean and scalable code.
                    </p>
                </div>

                <!-- STEP 5 -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7">

                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-primary/15">
                            <i class="ri-bug-line text-primary text-xl"></i>
                        </span>
                        <span class="text-sm font-medium text-primary">
                            Step 05
                        </span>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Testing
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        Speed, mobile compatibility, browser support, and usability
                        checks before launch.
                    </p>
                </div>

                <!-- STEP 6 -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-7">

                    <div class="flex items-center gap-4 mb-4">
                        <span class="flex h-11 w-11 items-center justify-center
                        rounded-xl bg-primary/15">
                            <i class="ri-rocket-line text-primary text-xl"></i>
                        </span>
                        <span class="text-sm font-medium text-primary">
                            Step 06
                        </span>
                    </div>

                    <h3 class="text-lg font-medium mb-3">
                        Launch & Support
                    </h3>

                    <p class="text-sm text-white/70 leading-relaxed">
                        Smooth website launch with ongoing support
                        and assistance when needed.
                    </p>
                </div>

            </div>

            <!-- FOOTNOTE -->
            <p class="mt-12 text-white/60 text-sm max-w-3xl">
                This structured process helps us deliver quality websites
                without delays or confusion.
            </p>

        </div>
    </section>

    <section class="relative bg-black text-white overflow-hidden
    py-16 sm:py-10 lg:py-28 border-t border-white/10">

        <!-- Soft background glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[600px] h-[300px] bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- SECTION HEADER -->
            <div class="max-w-3xl mb-14 sm:mb-20">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                font-semibold leading-tight">
                    Industries <span class="text-primary">We Serve</span>
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                    We have experience working with businesses across multiple industries,
                    delivering tailored digital solutions that align with industry-specific
                    goals and customer behavior.
                </p>
            </div>

            <!-- INDUSTRIES GRID -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Card -->
                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-code-box-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        IT & Software Companies
                    </h3>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-lightbulb-flash-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        Startups & Entrepreneurs
                    </h3>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-heart-pulse-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        Healthcare & Clinics
                    </h3>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-graduation-cap-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        Education & Coaching Centers
                    </h3>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-building-4-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        Real Estate Companies
                    </h3>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-settings-5-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        Manufacturing Businesses
                    </h3>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-shopping-bag-3-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        E-commerce Brands
                    </h3>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/[0.04]
                p-6 sm:p-7 hover:bg-white/[0.06] transition">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center
                    rounded-xl bg-primary/15">
                        <i class="ri-store-2-line text-primary text-xl"></i>
                    </div>
                    <h3 class="text-base font-medium">
                        Local Service Providers
                    </h3>
                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black text-white overflow-hidden
    py-16 sm:py-10 lg:py-28 border-t border-white/10">

        <!-- Soft Background Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[600px] h-[300px] bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                    font-semibold leading-tight">
                        Local Website Designing Company in
                        <span class="text-primary">Noida You Can Trust</span>
                    </h2>

                    <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                        Being a local website design company in Noida gives us an edge.
                        We understand the local market, competition, and customer behavior
                        in areas like Noida Extension, Sector 62, Sector 63, and Greater Noida.
                    </p>

                    <p class="mt-4 text-white/75 leading-relaxed text-sm sm:text-base">
                        Techonika works closely with Noida-based businesses
                        to help them grow online through practical,
                        location-aware website strategies.
                    </p>

                    <!-- BENEFITS LIST -->
                    <div class="mt-8 grid sm:grid-cols-2 gap-4 text-sm sm:text-base">

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-map-pin-2-line"></i>
                            </span>
                            <span class="text-white/80">
                                Better local SEO structure
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-file-text-line"></i>
                            </span>
                            <span class="text-white/80">
                                Location-focused content
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-chat-3-line"></i>
                            </span>
                            <span class="text-white/80">
                                Faster communication
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-customer-service-2-line"></i>
                            </span>
                            <span class="text-white/80">
                                Personalized support
                            </span>
                        </div>

                    </div>

                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative">

                    <div class="relative overflow-hidden rounded-2xl
                    border border-white/10">

                        <!-- Replace image path -->
                        <img
                            src="{{asset('images/business-merger-concept-flat-composition-with-laptop-icons-documents-chat-bubbles-people-key-vector-illustration_98292-8980.jpg')}}"
                            alt="Local website designing company in Noida"
                            class="w-full h-full object-cover">

                        <div class="absolute inset-0
                        bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>

                    <!-- Image Accent -->
                    <div class="absolute -bottom-8 -right-8
                    w-40 h-40 bg-primary/20 blur-[120px]
                    rounded-full -z-10"></div>

                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black text-white overflow-hidden
    py-16 sm:py-10 lg:py-28 border-t border-white/10">

        <!-- Subtle Background Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[600px] h-[300px] bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- LEFT IMAGE -->
                <div class="relative">

                    <div class="relative overflow-hidden rounded-2xl
                    border border-white/10">

                        <!-- Replace image path -->
                        <img
                            src="{{asset('images/visual-teenager-reading-book-mobile-phone-educate-learing-online-concept-design-isometric-illustration_1150-37270.jpg')}}"
                            alt="Why businesses choose Techonika web design company"
                            class="w-full h-full object-cover">

                        <div class="absolute inset-0
                        bg-gradient-to-t from-black/45 to-transparent"></div>
                    </div>

                    <!-- Image Accent -->
                    <div class="absolute -bottom-8 -left-8
                    w-40 h-40 bg-primary/20 blur-[120px]
                    rounded-full -z-10"></div>

                </div>

                <!-- RIGHT CONTENT -->
                <div>

                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                    font-semibold leading-tight">
                        Why Businesses Choose
                        <span class="text-primary">Techonika</span>
                        Over Other Web Design Companies
                    </h2>

                    <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                        Many competitors focus only on design or only on pricing.
                        We focus on results.
                    </p>

                    <p class="mt-4 text-white/75 leading-relaxed text-sm sm:text-base">
                        Where others lack, we deliver:
                    </p>

                    <!-- DIFFERENTIATORS -->
                    <div class="mt-8 space-y-4">

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-search-eye-line"></i>
                            </span>
                            <p class="text-white/80 text-sm sm:text-base">
                                Real SEO-ready design instead of just visuals
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-route-line"></i>
                            </span>
                            <p class="text-white/80 text-sm sm:text-base">
                                Simple content flow that users understand
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-speed-line"></i>
                            </span>
                            <p class="text-white/80 text-sm sm:text-base">
                                Fast websites with performance focus
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-customer-service-2-line"></i>
                            </span>
                            <p class="text-white/80 text-sm sm:text-base">
                                Long-term support, not project-only delivery
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="mt-1 text-primary">
                                <i class="ri-chat-check-line"></i>
                            </span>
                            <p class="text-white/80 text-sm sm:text-base">
                                Clear timelines and honest communication
                            </p>
                        </div>

                    </div>

                    <!-- CLOSING LINE -->
                    <p class="mt-8 text-white/70 leading-relaxed text-sm sm:text-base max-w-xl">
                        This makes Techonika one of the best web design companies in Noida
                        for businesses that want sustainable growth.
                    </p>

                </div>

            </div>

        </div>
    </section>
    <section class="relative bg-black text-white overflow-hidden
    py-16 sm:py-24 lg:py-28 border-t border-white/10">

        <!-- Soft background glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[600px] h-[300px] bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADER -->
            <div class=" mb-14 sm:mb-20">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                font-semibold leading-tight">
                    Companies <span class="text-primary">We Have Worked With</span>
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                    Over the years, Techonika has partnered with businesses of different
                    sizes and industries. From early-stage startups to well-established
                    companies, we have helped brands build websites that support
                    growth and credibility.
                </p>

                <p class="mt-4 text-white/75 leading-relaxed text-sm sm:text-base">
                    Our experience across industries allows us to understand
                    varied user behavior, market expectations,
                    and business needs.
                </p>
            </div>
            <div class="space-y-10">

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


    <section class="relative bg-black text-white overflow-hidden
    py-10 sm:py-24 lg:py-28 border-t border-white/10">

        <!-- Soft background glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
        w-[600px] h-[300px] bg-primary/15 blur-[200px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- SECTION HEADER -->
            <div class="max-w-3xl mb-14 sm:mb-20">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                font-semibold leading-tight">
                    Our <span class="text-primary">Satisfied Clients</span>
                </h2>

                <p class="mt-6 text-white/75 leading-relaxed text-sm sm:text-base">
                    Client satisfaction is at the core of everything we do at Techonika.
                    We believe a successful website is one that works smoothly for both
                    the business owner and the end user.
                </p>

                <p class="mt-4 text-white/75 leading-relaxed text-sm sm:text-base">
                    That is why many of our clients continue working with us for redesigns,
                    upgrades, and ongoing support.
                </p>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">

                <!-- LEFT : VALUES -->
                <div>

                    <h3 class="text-lg sm:text-xl font-medium mb-6">
                        Our clients value us for:
                    </h3>

                    <div class="space-y-4 text-sm sm:text-base">

                        <div class="flex items-start gap-3">
                            <i class="ri-chat-check-line text-primary mt-1"></i>
                            <span class="text-white/80">
                                Clear communication and regular updates
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="ri-layout-line text-primary mt-1"></i>
                            <span class="text-white/80">
                                Simple and easy-to-use website designs
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="ri-time-line text-primary mt-1"></i>
                            <span class="text-white/80">
                                On-time project delivery
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="ri-lightbulb-flash-line text-primary mt-1"></i>
                            <span class="text-white/80">
                                Honest guidance and practical suggestions
                            </span>
                        </div>

                        <div class="flex items-start gap-3">
                            <i class="ri-customer-service-2-line text-primary mt-1"></i>
                            <span class="text-white/80">
                                Reliable post-launch support
                            </span>
                        </div>

                    </div>
                </div>

                <!-- RIGHT : TRUST MESSAGE -->
                <div class="rounded-2xl border border-white/10
                bg-white/[0.04] p-6 sm:p-8 lg:p-10 backdrop-blur-xl">

                    <p class="text-white/75 leading-relaxed text-sm sm:text-base mb-6">
                        Most of our new projects come through referrals and repeat clients.
                        This trust reflects our commitment to quality work and long-term
                        relationships.
                    </p>

                    <p class="text-white/75 leading-relaxed text-sm sm:text-base">
                        When businesses choose Techonika as their website designing company
                        in Noida, they choose a partner focused on results,
                        not just delivery.
                    </p>

                    <!-- Trust Highlights -->
                    <div class="mt-8 flex flex-wrap gap-4 text-sm text-white/60">
                        <span class="flex items-center gap-2">
                            <i class="ri-check-line text-primary"></i>
                            Long-term partnerships
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="ri-check-line text-primary"></i>
                            Repeat clients
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="ri-check-line text-primary"></i>
                            Referral-driven growth
                        </span>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black py-10 overflow-hidden border-t border-white/10">
        <!-- Soft Background Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 left-1/3 w-[520px] h-[520px]
                bg-primary/10 rounded-full blur-[200px]"></div>
            <div class="absolute bottom-0 -right-32 w-[420px] h-[420px]
                bg-white/5 rounded-full blur-[160px]"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center mb-16">
                <span class="inline-block mb-4 text-sm tracking-widest uppercase text-white/60">
                    FAQs
                </span>

                <h2 class="text-3xl md:text-4xl lg:text-5xl
                   font-semibold leading-tight text-white">
                    Frequently Asked
                    <span class="text-primary font-bold">
                        Questions
                    </span>
                </h2>

                <p class="mt-6 text-lg text-white/70">
                    Clear answers to common questions about our website design services.
                </p>
            </div>

            <!-- FAQ List -->
            <div x-data="{ active: null }" class="space-y-6">

                <!-- FAQ 1 -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl">
                    <button @click="active === 1 ? active = null : active = 1"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-lg font-medium text-white">
                            How much does website designing cost in Noida?
                        </span>
                        <span class="text-primary text-2xl" x-text="active === 1 ? '−' : '+'"></span>
                    </button>

                    <div x-show="active === 1" x-collapse
                        class="px-6 pb-6 text-white/70 leading-relaxed">
                        The cost depends on the type of website, required features,
                        and number of pages. We offer flexible pricing options
                        based on your specific business needs.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl">
                    <button @click="active === 2 ? active = null : active = 2"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-lg font-medium text-white">
                            How long does it take to design a website?
                        </span>
                        <span class="text-primary text-2xl" x-text="active === 2 ? '−' : '+'"></span>
                    </button>

                    <div x-show="active === 2" x-collapse
                        class="px-6 pb-6 text-white/70 leading-relaxed">
                        A basic website usually takes 7–15 working days.
                        More complex websites may take longer depending on
                        functionality and design requirements.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl">
                    <button @click="active === 3 ? active = null : active = 3"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-lg font-medium text-white">
                            Will my website be mobile-friendly?
                        </span>
                        <span class="text-primary text-2xl" x-text="active === 3 ? '−' : '+'"></span>
                    </button>

                    <div x-show="active === 3" x-collapse
                        class="px-6 pb-6 text-white/70 leading-relaxed">
                        Yes. All our websites are fully responsive and
                        mobile-friendly, ensuring smooth performance
                        across mobiles, tablets, and desktops.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl">
                    <button @click="active === 4 ? active = null : active = 4"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-lg font-medium text-white">
                            Do you provide SEO-friendly website design?
                        </span>
                        <span class="text-primary text-2xl" x-text="active === 4 ? '−' : '+'"></span>
                    </button>

                    <div x-show="active === 4" x-collapse
                        class="px-6 pb-6 text-white/70 leading-relaxed">
                        Yes. We follow SEO best practices during design and
                        development, including clean structure,
                        optimized images, and fast performance.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl">
                    <button @click="active === 5 ? active = null : active = 5"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-lg font-medium text-white">
                            Can you redesign my existing website?
                        </span>
                        <span class="text-primary text-2xl" x-text="active === 5 ? '−' : '+'"></span>
                    </button>

                    <div x-show="active === 5" x-collapse
                        class="px-6 pb-6 text-white/70 leading-relaxed">
                        Yes. We redesign old or poorly performing websites
                        to improve design, speed, usability,
                        and overall performance.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl">
                    <button @click="active === 6 ? active = null : active = 6"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-lg font-medium text-white">
                            Do you offer website maintenance support?
                        </span>
                        <span class="text-primary text-2xl" x-text="active === 6 ? '−' : '+'"></span>
                    </button>

                    <div x-show="active === 6" x-collapse
                        class="px-6 pb-6 text-white/70 leading-relaxed">
                        Yes. We provide ongoing website maintenance and
                        support plans to keep your website
                        secure, updated, and running smoothly.
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl">
                    <button @click="active === 7 ? active = null : active = 7"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-lg font-medium text-white">
                            Why should I choose Techonika as my website designing company in Noida?
                        </span>
                        <span class="text-primary text-2xl" x-text="active === 7 ? '−' : '+'"></span>
                    </button>

                    <div x-show="active === 7" x-collapse
                        class="px-6 pb-6 text-white/70 leading-relaxed">
                        Because we focus on clarity, performance,
                        SEO best practices, and long-term
                        business growth — not just visual design.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black text-white py-14 sm:py-20 border-t border-white/10 overflow-hidden">

        <!-- Soft CTA Glow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 left-1/2 -translate-x-1/2
            w-[600px] h-[300px] bg-primary/20 blur-[220px] rounded-full"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-6 text-center">

            <!-- Headline -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl
            font-semibold leading-tight">
                Get Started With
                <span class="text-primary">Techonika Today</span>
            </h2>

            <!-- Copy -->
            <p class="mt-5 text-white/75 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
                If you want a reliable, professional, and growth-driven
                website designing company in Noida, Techonika is ready to help.
                Let’s build a website that works for your business,
                not just looks good.
            </p>

            <!-- CTA Button -->
            <div class="mt-8">
                <button
                    @click="$dispatch('open-modal', { to: 'contact' })"
                    class="inline-flex items-center justify-center
                px-8 sm:px-10 py-4 rounded-xl
                bg-primary text-black font-medium
                hover:bg-primary/90 transition">
                    Contact Techonika Today
                </button>
            </div>

            <!-- Trust Line -->
            <p class="mt-6 text-xs sm:text-sm text-white/60">
                Take the first step towards a stronger online presence
            </p>

        </div>
    </section>


</div>
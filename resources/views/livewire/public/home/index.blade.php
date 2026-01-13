<div>
    <section class="relative isolate font-mono  px-6 pt-32 lg:px-8 bg-black overflow-hidden">

        <!-- TOP GRADIENT -->
        <div class="absolute inset-x-0 -top-40 -z-10 blur-3xl">
            <div class="w-[600px] h-[600px] bg-gradient-to-tr
                from-amber-400 to-yellow-400
                opacity-20 rounded-full mx-auto"></div>
        </div>

        <div class="mx-auto max-w-4xl text-center py-32">

            <span class="inline-flex items-center gap-2 mb-6
      text-xs font-semibold text-amber-400
      bg-white/5 px-5 py-2 rounded-full border border-white/10">
                Software Development Company
            </span>

            <h1 class="text-5xl sm:text-7xl  tracking-tight text-white">
                We Build
                <span class="bg-gradient-to-r from-amber-400 to-yellow-400
                   bg-clip-text text-transparent font-normal">
                    Scalable Software
                </span>
                <br class="hidden sm:block" />
                For the Next Generation
            </h1>

            <p class="mt-8 text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto">
                Empowering startups and enterprises with secure, high-performance
                web & mobile applications.
            </p>

            <!-- CTA -->
            <div class="mt-10 flex justify-center gap-6">
                <button  @click="$dispatch('open-modal', { to: 'contact' })"
                    class="rounded-md bg-amber-400 px-6 py-3
                font-semibold text-black">
                    Get Free Consultation
</button>

               
            </div>
        </div>

        <!-- BOTTOM GRADIENT -->
        <div class="absolute inset-x-0 top-[calc(100%-20rem)] -z-10 blur-3xl">
            <div class="w-[600px] h-[600px] bg-gradient-to-tr
                from-yellow-400 to-amber-400
                opacity-20 rounded-full mx-auto"></div>
        </div>
    </section>



    <section class="bg-black py-16 sm:py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Heading -->
            <div class="text-center mb-12">
                <span class="text-xs tracking-widest uppercase text-amber-400">
                    Our Clients
                </span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-white">
                    Trusted By Growing Brands
                </h2>
            </div>

            <!-- Slider -->
            <div
                x-data="{ pause: false }"
                class="relative overflow-hidden">

                <!-- Track -->
                <div
                    class="flex w-max gap-16 animate-marquee"
                    :class="{ 'pause-marquee': pause }"
                    @mouseenter="pause = true"
                    @mouseleave="pause = false">

                    <img src="/clients/6.jpg" class="client-logo" alt="">
                    <img src="/clients/7.jpg" class="client-logo" alt="">
                    <img src="/clients/8.jpg" class="client-logo" alt="">
                    <img src="/clients/9.jpg" class="client-logo" alt="">
                    <img src="/clients/10.jpg" class="client-logo" alt="">
                    <img src="/clients/11.jpg" class="client-logo" alt="">
                    <img src="/clients/12.jpg" class="client-logo" alt="">
                    <img src="/clients/13.jpg" class="client-logo" alt="">
                    <img src="/clients/14.jpg" class="client-logo" alt="">
                    <img src="/clients/16.jpg" class="client-logo" alt="">
                    <img src="/clients/17.jpg" class="client-logo" alt="">
                    <img src="/clients/18.jpg" class="client-logo" alt="">
                    <img src="/clients/19.jpg" class="client-logo" alt="">
                    <img src="/clients/20.jpg" class="client-logo" alt="">
                    <img src="/clients/21.jpg" class="client-logo" alt="">
                    <img src="/clients/22.jpg" class="client-logo" alt="">
                    <img src="/clients/23.jpg" class="client-logo" alt="">
                    <img src="/clients/24.jpg" class="client-logo" alt="">
                    <img src="/clients/25.jpg" class="client-logo" alt="">
                    <img src="/clients/26.jpg" class="client-logo" alt="">
                    <img src="/clients/27.jpg" class="client-logo" alt="">
                    <img src="/clients/28.jpg" class="client-logo" alt="">
                    <img src="/clients/29.jpg" class="client-logo" alt="">
                    <img src="/clients/30.jpg" class="client-logo" alt="">
                    <img src="/clients/31.jpg" class="client-logo" alt="">
                    <img src="/clients/32.jpg" class="client-logo" alt="">
                    <img src="/clients/33.jpg" class="client-logo" alt="">
                    <img src="/clients/34.jpg" class="client-logo" alt="">
                    <img src="/clients/35.jpg" class="client-logo" alt="">
                    <img src="/clients/36.jpg" class="client-logo" alt="">
                    <img src="/clients/37.jpg" class="client-logo" alt="">
                    <img src="/clients/38.jpg" class="client-logo" alt="">
                    <img src="/clients/39.jpg" class="client-logo" alt="">
                    <img src="/clients/40.jpg" class="client-logo" alt="">
                    <img src="/clients/41.jpg" class="client-logo" alt="">
                    <img src="/clients/42.jpg" class="client-logo" alt="">
                    <img src="/clients/43.jpg" class="client-logo" alt="">
                    <img src="/clients/44.jpg" class="client-logo" alt="">
                    <img src="/clients/45.jpg" class="client-logo" alt="">
                    <img src="/clients/46.jpg" class="client-logo" alt="">
                    <img src="/clients/47.jpg" class="client-logo" alt="">
                    <img src="/clients/48.jpg" class="client-logo" alt="">
                    <img src="/clients/49.jpg" class="client-logo" alt="">
                    <img src="/clients/50.jpg" class="client-logo" alt="">
                    <img src="/clients/51.jpg" class="client-logo" alt="">
                    <img src="/clients/52.jpg" class="client-logo" alt="">
                    <img src="/clients/53.jpg" class="client-logo" alt="">
                    <img src="/clients/54.jpg" class="client-logo" alt="">
                    <img src="/clients/55.jpg" class="client-logo" alt="">
                    <img src="/clients/56.jpg" class="client-logo" alt="">
                    <img src="/clients/57.jpg" class="client-logo" alt="">
                    <img src="/clients/58.jpg" class="client-logo" alt="">
                    <img src="/clients/59.jpg" class="client-logo" alt="">
                    <img src="/clients/60.jpg" class="client-logo" alt="">
                    <img src="/clients/61.jpg" class="client-logo" alt="">

                </div>
                <style>
                    .client-logo {
                        height: 58px;
                        width: auto;
                        opacity: 0.8;
                        transition: all 0.3s ease;
                        filter: grayscale(100%);
                    }

                    .client-logo:hover {
                        opacity: 1;
                        filter: grayscale(0%);
                    }

                    @media (min-width: 640px) {
                        .client-logo {
                            height: 100px;
                        }
                    }

                    @keyframes marquee {
                        0% {
                            transform: translateX(0);
                        }

                        100% {
                            transform: translateX(-50%);
                        }
                    }

                    .animate-marquee {
                        animation: marquee 30s linear infinite;
                    }

                    .pause-marquee {
                        animation-play-state: paused;
                    }
                </style>

            </div>
        </div>
    </section>
    <section class="bg-gradient-to-b from-black to-slate-950 py-20 sm:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Section Heading -->
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl  text-white">
                    What We Do
                </h2>
                <p class="mt-4 text-slate-400 max-w-3xl mx-auto">
                    End-to-end design and development services that help businesses
                    build scalable, secure, and future-ready digital products.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Card 1 -->
                <div class="border border-white/10 rounded-2xl p-6 bg-white/5 backdrop-blur
                  hover:border-amber-400 transition">
                    <h3 class="text-white font-semibold mb-4">
                        Web Design & Development
                    </h3>
                    <ul class="text-slate-400 text-sm space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Responsive & Mobile-First Design
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Custom Frontend & Backend Development
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Laravel, React, Next.js & Django
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            CMS, Admin Panels & Dashboards
                        </li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="border border-white/10 rounded-2xl p-6 bg-white/5 backdrop-blur
                  hover:border-amber-400 transition">
                    <h3 class="text-white font-semibold mb-4">
                        Mobile App Development
                    </h3>
                    <ul class="text-slate-400 text-sm space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Android & iOS Native Apps
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Cross-Platform Apps (Flutter, React Native)
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Secure API Integration
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            App Maintenance & Upgrades
                        </li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="border border-white/10 rounded-2xl p-6 bg-white/5 backdrop-blur
                  hover:border-amber-400 transition">
                    <h3 class="text-white font-semibold mb-4">
                        AI & Machine Learning
                    </h3>
                    <ul class="text-slate-400 text-sm space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            AI Chatbots & Virtual Assistants
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Predictive Analytics & Insights
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            NLP & Computer Vision Solutions
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Custom ML Model Development
                        </li>
                    </ul>
                </div>

                <!-- Card 4 -->
                <div class="border border-white/10 rounded-2xl p-6 bg-white/5 backdrop-blur
                  hover:border-amber-400 transition">
                    <h3 class="text-white font-semibold mb-4">
                        Cloud & DevOps
                    </h3>
                    <ul class="text-slate-400 text-sm space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            AWS, EC2 & Cloud Infrastructure
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            CI/CD Pipeline Automation
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Performance Optimization & Scaling
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Nginx & Server Management
                        </li>
                    </ul>
                </div>

                <!-- Card 5 -->
                <div class="border border-white/10 rounded-2xl p-6 bg-white/5 backdrop-blur
                  hover:border-amber-400 transition">
                    <h3 class="text-white font-semibold mb-4">
                        UI / UX Design
                    </h3>
                    <ul class="text-slate-400 text-sm space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            User-Centric Interface Design
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Wireframing & Interactive Prototypes
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Design Systems & Branding
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            UX Audits & Improvements
                        </li>
                    </ul>
                </div>

                <!-- Card 6 -->
                <div class="border border-white/10 rounded-2xl p-6 bg-white/5 backdrop-blur
                  hover:border-amber-400 transition">
                    <h3 class="text-white font-semibold mb-4">
                        Maintenance & Support
                    </h3>
                    <ul class="text-slate-400 text-sm space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Ongoing Monitoring & Maintenance
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Bug Fixes & Security Updates
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Performance Optimization
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            24/7 Technical Support
                        </li>
                    </ul>
                </div>
                <!-- Digital Marketing Card -->
                <div class="border border-white/10 rounded-2xl p-6 bg-white/5 backdrop-blur
            hover:border-amber-400 transition group">

                    <h3 class="text-white font-semibold mb-4">
                        Digital Marketing & Brand Promotion
                    </h3>

                    <ul class="text-slate-400 text-sm space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Search Engine Optimization (SEO & Local SEO)
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Google Ads, Meta Ads & Performance Marketing
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Social Media Marketing & Brand Awareness
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Content Marketing & Copywriting
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-amber-400">★</span>
                            Conversion Rate Optimization (CRO)
                        </li>
                    </ul>

                    <!-- SEO Keywords (hidden but crawlable) -->
                    <p class="sr-only">
                        Digital marketing services, SEO company in India, online brand promotion,
                        social media marketing, Google Ads agency, performance marketing services.
                    </p>

                </div>


            </div>
        </div>
    </section>
    <section class="bg-black py-20 sm:py-32" x-data="{ filter: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="text-xs tracking-widest uppercase text-amber-400">
                    Our Work
                </span>
                <h2 class="mt-4 text-3xl sm:text-5xl font-bold text-white">
                    Featured Portfolio
                </h2>
                <p class="mt-4 text-slate-400 max-w-3xl mx-auto">
                    A glimpse of our recent projects showcasing innovation, performance,
                    and scalable digital solutions.
                </p>
            </div>

            <!-- FILTER TAGS -->
            <div class="flex flex-wrap justify-center gap-3 mb-14">
                <button @click="filter='all'"
                    :class="filter==='all' ? 'bg-amber-400 text-black' : 'border border-white/20 text-white'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition">
                    All
                </button>
                <button @click="filter='web'"
                    :class="filter==='web' ? 'bg-amber-400 text-black' : 'border border-white/20 text-white'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition">
                    Web App
                </button>
                <button @click="filter='mobile'"
                    :class="filter==='mobile' ? 'bg-amber-400 text-black' : 'border border-white/20 text-white'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition">
                    Mobile App
                </button>
                <button @click="filter='ecommerce'"
                    :class="filter==='ecommerce' ? 'bg-amber-400 text-black' : 'border border-white/20 text-white'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition">
                    E-Commerce
                </button>
                <button @click="filter='seo'"
                    :class="filter==='seo' ? 'bg-amber-400 text-black' : 'border border-white/20 text-white'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition">
                    SEO
                </button>
            </div>

            <!-- PORTFOLIO GRID -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Card 1 -->
                <div x-show="filter==='all' || filter==='web'"
                    class="group relative rounded-2xl overflow-hidden
                  border border-white/10 bg-white/5 backdrop-blur">

                    <img src="/portfolio/project1.jpg"
                        alt="Web Application Project"
                        class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/60 opacity-0
                    group-hover:opacity-100 transition"></div>

                    <!-- Content -->
                    <div class="absolute bottom-0 p-6 z-10">
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="tag">Web App</span>
                            <span class="tag">Laravel</span>
                            <span class="tag">React</span>
                        </div>
                        <h3 class="text-white font-semibold text-lg">
                            SaaS Management Platform
                        </h3>
                        <p class="text-slate-300 text-sm mt-1">
                            Scalable SaaS dashboard with role-based access.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div x-show="filter==='all' || filter==='mobile'"
                    class="group relative rounded-2xl overflow-hidden
                  border border-white/10 bg-white/5 backdrop-blur">

                    <img src="/portfolio/project2.jpg"
                        alt="Mobile App Project"
                        class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/60 opacity-0
                    group-hover:opacity-100 transition"></div>

                    <div class="absolute bottom-0 p-6 z-10">
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="tag">Mobile App</span>
                            <span class="tag">Flutter</span>
                            <span class="tag">API</span>
                        </div>
                        <h3 class="text-white font-semibold text-lg">
                            On-Demand Service App
                        </h3>
                        <p class="text-slate-300 text-sm mt-1">
                            Cross-platform app for service bookings.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div x-show="filter==='all' || filter==='seo'"
                    class="group relative rounded-2xl overflow-hidden
                  border border-white/10 bg-white/5 backdrop-blur">

                    <img src="/portfolio/project3.jpg"
                        alt="SEO Project"
                        class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/60 opacity-0
                    group-hover:opacity-100 transition"></div>

                    <div class="absolute bottom-0 p-6 z-10">
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="tag">SEO</span>
                            <span class="tag">Digital Marketing</span>
                            <span class="tag">Growth</span>
                        </div>
                        <h3 class="text-white font-semibold text-lg">
                            Brand Growth Campaign
                        </h3>
                        <p class="text-slate-300 text-sm mt-1">
                            SEO-driven marketing campaign with 3x traffic growth.
                        </p>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-16">
                <a href="#contact"
                    class="inline-block px-8 py-3 rounded-xl font-semibold text-black
                bg-gradient-to-r from-amber-400 to-yellow-400
                hover:opacity-90 transition">
                    Start Your Project →
                </a>
            </div>

        </div>
    </section>


    <section class="bg-black py-20 sm:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="text-xs tracking-widest uppercase text-amber-400">
                    How We Work
                </span>
                <h2 class="mt-4 text-3xl sm:text-5xl font-bold text-white">
                    Our Working Process
                </h2>
                <p class="mt-4 text-slate-400 max-w-3xl mx-auto">
                    A transparent, collaborative, and agile workflow that turns your ideas
                    into scalable digital products.
                </p>
            </div>

            <!-- Flow Grid -->
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Step 1 -->
                <div class="relative bg-white/5 border border-white/10 rounded-2xl p-6 sm:p-8
                  hover:border-amber-400 transition">
                    <div class="w-14 h-14 flex items-center justify-center rounded-xl
                    bg-amber-400/10 text-amber-400 mb-6">
                        <!-- Icon: Discovery -->
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M12 6v6l4 2" />
                            <circle cx="12" cy="12" r="9" />
                        </svg>
                    </div>

                    <span class="absolute top-6 right-6 text-6xl font-bold text-white/5">
                        01
                    </span>

                    <h3 class="text-white font-semibold mb-3">
                        Discovery & Planning
                    </h3>
                    <p class="text-slate-400 text-sm">
                        We understand your business goals, analyze requirements, and define a
                        clear roadmap for success.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative bg-white/5 border border-white/10 rounded-2xl p-6 sm:p-8
                  hover:border-amber-400 transition">
                    <div class="w-14 h-14 flex items-center justify-center rounded-xl
                    bg-amber-400/10 text-amber-400 mb-6">
                        <!-- Icon: Design -->
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M4 20h4l10-10a2.8 2.8 0 0 0-4-4L4 16v4z" />
                        </svg>
                    </div>

                    <span class="absolute top-6 right-6 text-6xl font-bold text-white/5">
                        02
                    </span>

                    <h3 class="text-white font-semibold mb-3">
                        UI / UX Design
                    </h3>
                    <p class="text-slate-400 text-sm">
                        Our designers craft intuitive, user-centric interfaces with modern
                        aesthetics and smooth experiences.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative bg-white/5 border border-white/10 rounded-2xl p-6 sm:p-8
                  hover:border-amber-400 transition">
                    <div class="w-14 h-14 flex items-center justify-center rounded-xl
                    bg-amber-400/10 text-amber-400 mb-6">
                        <!-- Icon: Development -->
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M16 18l6-6-6-6" />
                            <path d="M8 6l-6 6 6 6" />
                        </svg>
                    </div>

                    <span class="absolute top-6 right-6 text-6xl font-bold text-white/5">
                        03
                    </span>

                    <h3 class="text-white font-semibold mb-3">
                        Development & Testing
                    </h3>
                    <p class="text-slate-400 text-sm">
                        We build scalable, secure solutions using modern technologies with
                        continuous testing and quality checks.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="relative bg-white/5 border border-white/10 rounded-2xl p-6 sm:p-8
                  hover:border-amber-400 transition">
                    <div class="w-14 h-14 flex items-center justify-center rounded-xl
                    bg-amber-400/10 text-amber-400 mb-6">
                        <!-- Icon: Launch -->
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M5 12l14-7-7 14-2-5-5-2z" />
                        </svg>
                    </div>

                    <span class="absolute top-6 right-6 text-6xl font-bold text-white/5">
                        04
                    </span>

                    <h3 class="text-white font-semibold mb-3">
                        Launch & Support
                    </h3>
                    <p class="text-slate-400 text-sm">
                        After deployment, we monitor performance, provide ongoing support,
                        and help you scale confidently.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-black py-20">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center mb-14">
                <span class="text-xs tracking-widest uppercase text-amber-400">
                    Our Clients
                </span>
                <h2 class="mt-4 text-3xl sm:text-5xl font-bold text-white">
                    Trusted By Companies
                </h2>
            </div>

            <!-- Slider -->
            <div
                x-data="{
        current: 0,
        slides: 5,
        interval: null,
        start() {
          this.interval = setInterval(() => {
            this.next()
          }, 3000)
        },
        stop() {
          clearInterval(this.interval)
        },
        next() {
          this.current = (this.current + 1) % this.slides
        },
        prev() {
          this.current = (this.current - 1 + this.slides) % this.slides
        }
      }"
                x-init="start()"
                @mouseenter="stop()"
                @mouseleave="start()"
                class="relative overflow-hidden">

                <!-- Slides -->
                <div
                    class="flex transition-transform duration-700 ease-in-out"
                    :style="`transform: translateX(-${current * 100}%)`">

                    <!-- Slide 1 -->
                    <div class="min-w-full flex justify-center items-center gap-10">
                        <img src="/clients/client1.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client2.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client3.png" class="h-12 opacity-80 hover:opacity-100 transition">
                    </div>

                    <!-- Slide 2 -->
                    <div class="min-w-full flex justify-center items-center gap-10">
                        <img src="/clients/client4.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client5.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client6.png" class="h-12 opacity-80 hover:opacity-100 transition">
                    </div>

                    <!-- Slide 3 -->
                    <div class="min-w-full flex justify-center items-center gap-10">
                        <img src="/clients/client7.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client8.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client9.png" class="h-12 opacity-80 hover:opacity-100 transition">
                    </div>

                    <!-- Slide 4 -->
                    <div class="min-w-full flex justify-center items-center gap-10">
                        <img src="/clients/client10.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client11.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client12.png" class="h-12 opacity-80 hover:opacity-100 transition">
                    </div>

                    <!-- Slide 5 -->
                    <div class="min-w-full flex justify-center items-center gap-10">
                        <img src="/clients/client13.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client14.png" class="h-12 opacity-80 hover:opacity-100 transition">
                        <img src="/clients/client15.png" class="h-12 opacity-80 hover:opacity-100 transition">
                    </div>

                </div>

                <!-- Controls -->
                <button
                    @click="prev()"
                    class="absolute left-3 top-1/2 -translate-y-1/2
               bg-white/10 hover:bg-white/20
               text-white p-2 rounded-full">
                    ‹
                </button>

                <button
                    @click="next()"
                    class="absolute right-3 top-1/2 -translate-y-1/2
               bg-white/10 hover:bg-white/20
               text-white p-2 rounded-full">
                    ›
                </button>

                <!-- Dots -->
                <div class="flex justify-center gap-2 mt-6">
                    <template x-for="i in slides" :key="i">
                        <button
                            @click="current = i - 1"
                            :class="current === i - 1 ? 'bg-amber-400' : 'bg-white/20'"
                            class="w-3 h-3 rounded-full">
                        </button>
                    </template>
                </div>

            </div>


        </div>
    </section>



    <section class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <h2 class="text-3xl sm:text-4xl font-bold text-center text-white mb-16">
                Frequently Asked Questions
            </h2>

            <div class="grid sm:grid-cols-2 gap-6" x-data="{ open: null }">

                <template x-for="(faq, index) in [
        'Project timelines usually range from 4–8 weeks.',
        'Yes, we provide long-term maintenance.',
        'We work with international clients.',
        'We integrate third-party APIs securely.',
        'We specialize in Laravel, React, Next.js, Flutter.'
      ]" :key="index">

                    <div class="border border-white/10 rounded-xl">
                        <button
                            @click="open === index ? open = null : open = index"
                            class="w-full flex justify-between items-center p-5 text-left text-white">
                            <span x-text="'Question ' + (index + 1)"></span>
                            <span class="text-amber-400">+</span>
                        </button>

                        <div x-show="open === index"
                            x-transition
                            class="px-5 pb-5 text-slate-400 text-sm"
                            x-text="faq">
                        </div>
                    </div>

                </template>

            </div>
        </div>
    </section>

</div>
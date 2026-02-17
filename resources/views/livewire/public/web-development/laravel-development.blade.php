<div>
    @section('meta')
    <title>Laravel Development Company in India | Techonika</title>
    <meta name="description" content="Techonika offers professional Laravel development services in India. We build 
custom web applications, APIs, and eCommerce solutions. Get a free consultation today.">
    @endsection

    <section class="relative bg-black text-white overflow-hidden">

        <!-- Background -->
        <div class="absolute -top-48 sm:-top-64 left-1/2 -translate-x-1/2
                w-[700px] sm:w-[1000px] h-[360px] sm:h-[420px]
                bg-primary/35 blur-[220px] sm:blur-[260px] rounded-full"></div>

        <div class="absolute inset-0
        bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.05),transparent_60%)]"></div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-[0.03]
        bg-[linear-gradient(to_right,white_1px,transparent_1px),
            linear-gradient(to_bottom,white_1px,transparent_1px)]
        bg-[size:72px_72px]"></div>

        <div class="relative max-w-7xl mx-auto px-4 pt-24 sm:pt-32 pb-20 sm:pb-28">

            <!-- CONTENT GRID -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-24 items-center">

                <!-- LEFT -->
                <div class="w-full">

                    <span class="inline-flex items-center gap-2 text-primary text-[11px] sm:text-xs tracking-[0.35em] uppercase">
                        <i class="ri-code-box-line"></i>
                        Laravel Development
                    </span>

                    <h1 class="mt-8 sm:mt-10 text-3xl sm:text-4xl md:text-5xl xl:text-6xl
                           font-semibold leading-tight">
                        Laravel Development Company
                        & <span class="text-primary">Services in India</span>
                    </h1>

                    <p class="mt-6 sm:mt-7 text-white/75 text-base sm:text-lg leading-relaxed">
                        Looking for a Laravel development company in India that actually delivers?
                        At Techonika, we build fast, secure web applications that grow with your business.
                        No corporate speak — just clean code and real results.
                    </p>

                    <p class="mt-4 sm:mt-5 text-white/60 text-sm sm:text-base leading-relaxed">
                        Businesses don’t need fancy tech terms. They need applications that work,
                        load fast, stay secure, and don’t break the bank.
                        That’s exactly what we deliver.
                    </p>

                    <!-- CTA -->
                    <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row gap-4 sm:gap-5">

                        <button
                            @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex justify-center items-center gap-2
                              px-7 sm:px-9 py-4 rounded-xl
                              bg-primary text-black font-medium
                              hover:bg-primary/90 transition">
                            Start Your Laravel Project
                            <i class="ri-arrow-right-line"></i>
                        </button>

                        <a href="#portfolio"
                            class="inline-flex justify-center items-center gap-2
                              px-7 sm:px-9 py-4 rounded-xl
                              border border-white/15 text-white/80
                              hover:bg-white/5 transition">
                            View Case Studies
                        </a>

                    </div>

                    <!-- TRUST -->
                    <div class="mt-10 sm:mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm text-white/65">
                        <div class="flex items-center gap-3">
                            <i class="ri-flashlight-line text-primary"></i>
                            High Performance
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="ri-shield-check-line text-primary"></i>
                            Secure by Design
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="ri-stack-line text-primary"></i>
                            Scalable Architecture
                        </div>
                    </div>

                </div>
                <!-- RIGHT CODE BLOCK -->
                <div class="relative hidden lg:flex justify-center items-center">

                    <!-- Soft ambient glow -->
                    <div class="absolute inset-0 rounded-[2rem]
                bg-gradient-to-br from-primary/20 via-primary/5 to-transparent
                blur-[180px]"></div>

                    <!-- Code Card -->
                    <div class="relative w-full max-w-xl xl:max-w-2xl
                p-8 sm:p-10
                border border-white/10 rounded-[2rem]
                bg-white/5 backdrop-blur-md shadow-2xl">

                        <!-- Header -->
                        <div class="mb-6 flex items-center justify-between">
                            <div class="flex items-center gap-2 text-xs uppercase tracking-widest text-white/50">
                                <i class="ri-terminal-line text-primary"></i>
                                Laravel Example
                            </div>

                            <!-- Fake window controls (optional but classy) -->
                            <div class="flex gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-400/60"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-400/60"></span>
                                <span class="w-3 h-3 rounded-full bg-green-400/60"></span>
                            </div>
                        </div>

                        <!-- Code -->
                        <pre class="text-sm sm:text-base font-mono
                    text-white/75 leading-loose
                    overflow-x-auto whitespace-pre rounded-xl">

<span class="text-primary">Route</span>::get('/growth', function () {
    return <span class="text-primary">Techonika</span>::build([
        'speed',
        'security',
        'scalability',
        'clean_code'
    ]);
});
        </pre>

                    </div>
                </div>



            </div>

            <!-- TECH STACK -->
            <div class="mt-20 sm:mt-28 border-t border-white/10 pt-12 sm:pt-14">

                <p class="text-center text-[11px] sm:text-xs tracking-[0.35em] uppercase text-white/50">
                    Built With Modern Laravel Stack
                </p>

                <div class="mt-8 sm:mt-10
                        grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6
                        gap-8 sm:gap-10 justify-items-center">

                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/tech/modern-laravel.png') }}" class="w-10 sm:w-12 mt-2" alt="">
                        <span class="text-xs sm:text-sm text-white/70">Laravel</span>
                    </div>

                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/tech/livewire.png') }}" class="w-12 sm:w-14" alt="">
                        <span class="text-xs sm:text-sm text-white/70">Livewire</span>
                    </div>

                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/tech/mysql.png') }}" class="w-12 sm:w-16" alt="">
                        <span class="text-xs sm:text-sm text-white/70">MySQL</span>
                    </div>

                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/tech/Tailwind CSS.png') }}" class="w-12 sm:w-14" alt="">
                        <span class="text-xs sm:text-sm text-white/70">Tailwind</span>
                    </div>

                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/tech/Alpine.js.png') }}" class="w-12 sm:w-14" alt="">
                        <span class="text-xs sm:text-sm text-white/70">Alpine.js</span>
                    </div>

                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('images/tech/redis.png') }}" class="w-12 sm:w-14" alt="">
                        <span class="text-xs sm:text-sm text-white/70">Redis</span>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10">

        <div class="max-w-7xl mx-auto px-4">

            <!-- Section Header -->
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.35em] uppercase">
                    <i class="ri-questionnaire-line"></i>
                    Why Laravel
                </span>

                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Why Laravel?
                    <span class="text-primary">(And Why We’re Good at It)</span>
                </h2>

                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Laravel is a PHP framework that makes building web applications faster and more secure. Think of it
                    as a toolkit that already has most of the parts you need, so we're not starting from zero every time.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="mt-16 grid lg:grid-cols-2 gap-14 lg:gap-20 items-start">

                <!-- LEFT: Explanation -->
                <div class="space-y-6 text-white/65 leading-relaxed">
                    <p>
                        Here's what this means for you: your project launches faster, costs less to build, and stays easier to
                        maintain. Laravel comes with built-in security features, so you don't have to worry about common
                        hacking attempts. It also has a massive community of developers worldwide, which means you're
                        never locked into working with just one company.
                    </p>

                    <p>
                        We've built everything from simple business websites to complex SaaS platforms using Laravel. Our
                        team knows the framework inside and out, which means we can spot problems before they happen
                        and find solutions quickly.
                    </p>
                </div>

                <!-- RIGHT: Benefit Cards -->
                <div class="grid sm:grid-cols-2 gap-6">

                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <i class="ri-flashlight-line text-primary text-2xl"></i>
                        <h4 class="mt-4 font-medium text-white">
                            Faster Development
                        </h4>
                        <p class="mt-2 text-white/60 text-sm leading-relaxed">
                            Built-in tools and conventions reduce development time
                            without cutting corners.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <i class="ri-shield-check-line text-primary text-2xl"></i>
                        <h4 class="mt-4 font-medium text-white">
                            Strong Security
                        </h4>
                        <p class="mt-2 text-white/60 text-sm leading-relaxed">
                            Protection against common attacks comes standard,
                            not as an afterthought.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <i class="ri-group-line text-primary text-2xl"></i>
                        <h4 class="mt-4 font-medium text-white">
                            Massive Community
                        </h4>
                        <p class="mt-2 text-white/60 text-sm leading-relaxed">
                            Thousands of developers worldwide ensure long-term support
                            and flexibility.
                        </p>
                    </div>

                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <i class="ri-settings-3-line text-primary text-2xl"></i>
                        <h4 class="mt-4 font-medium text-white">
                            Easy Maintenance
                        </h4>
                        <p class="mt-2 text-white/60 text-sm leading-relaxed">
                            Clean structure makes updates, scaling, and fixes easier
                            as your business grows.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10">

        <div class="max-w-7xl mx-auto px-4">

            <!-- SECTION HEADER -->
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase">
                    <i class="ri-stack-line"></i>
                    Our Services
                </span>

                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Our <span class="text-primary">Laravel Development Services</span>
                </h2>

                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    From custom web applications to scalable SaaS platforms, we offer
                    end-to-end Laravel development services designed to solve real
                    business problems — not just write code.
                </p>
            </div>

            <!-- SERVICES GRID -->
            <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Service Card -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-code-s-slash-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        Custom Laravel Development Solutions
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        We build web applications tailored to your exact needs —
                        from internal tools to complex business systems that
                        simplify daily operations and improve efficiency.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-link text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        Laravel API Development & Integration
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        We connect your CRM, payment gateways, email tools,
                        and accounting software so your systems work together
                        automatically — no manual data copying.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-shopping-cart-2-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        Laravel eCommerce Solutions
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        From simple online stores to full multi-vendor marketplaces,
                        we build secure eCommerce platforms with products, payments,
                        shipping, and inventory management.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-cloud-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        SaaS Application Development with Laravel
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        We build subscription-based platforms, customer portals,
                        and SaaS products with secure authentication, billing,
                        and scalable architecture.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-refresh-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        Laravel Migration & Upgrade Services
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        We migrate legacy PHP applications to Laravel while
                        keeping your data safe, URLs intact, and downtime minimal —
                        leaving you with cleaner, maintainable code.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-rocket-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        MVP Development for Startups
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        We help startups validate ideas quickly by building MVPs
                        that launch fast, stay affordable, and evolve based on
                        real user feedback.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-tools-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        Laravel Maintenance & Support
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        Our work doesn’t stop at launch. We provide ongoing support,
                        security updates, bug fixes, and quick changes with a
                        dedicated contact who knows your project.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-shield-check-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">
                        Performance Optimization & Security Audits
                    </h3>
                    <p class="mt-4 text-white/65 leading-relaxed text-sm">
                        We identify performance bottlenecks, speed up slow Laravel
                        applications, and conduct security audits to fix
                        vulnerabilities before they become problems.
                    </p>
                </div>

            </div>


        </div>
    </section>


    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">

        <!-- Background Glow -->
        <div class="absolute left-1/2 top-0 -translate-x-1/2 w-[900px] h-[320px]
                bg-primary/20 blur-[240px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4">

            <!-- HEADER -->
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase">
                    <i class="ri-git-branch-line"></i>
                    Our Process
                </span>

                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    How We Work
                    <span class="block sm:inline text-primary">
                        (Our Laravel Development Process)
                    </span>
                </h2>

                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    A clear, transparent workflow that keeps you involved from
                    the first call to long after launch.
                </p>
            </div>

            <!-- PROCESS -->
            <div class="relative mt-20 sm:mt-28">

                <!-- Vertical Line (Desktop only) -->
                <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-px
                        bg-gradient-to-b from-transparent via-primary/30 to-transparent"></div>

                <div class="space-y-12 sm:space-y-20">

                    <!-- STEP -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-chat-3-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">01</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Discovery Call</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                We start by listening — understanding your problem,
                                users, timeline, and budget before suggesting solutions.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-map-2-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">02</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Blueprint & Planning</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                A clear roadmap outlining features, timelines, and cost —
                                so there are no surprises later.
                            </p>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-layout-2-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">03</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Design & Prototyping</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                We design mockups and clickable prototypes so you can
                                review and refine the experience early.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-code-box-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">04</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Development in Sprints</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                Two-week sprints with working features delivered regularly,
                                allowing continuous feedback.
                            </p>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-bug-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">05</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Testing & QA</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                Automated and manual testing ensures performance,
                                security, and reliability.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-rocket-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">06</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Launch & Deployment</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                We handle servers, domains, and deployment —
                                you don’t need to touch the technical side.
                            </p>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-graduation-cap-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">07</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Training & Handoff</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                Documentation, tutorials, and guidance so your team
                                feels confident managing the application.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-customer-service-2-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest">08</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Ongoing Support</h3>
                            <p class="mt-4 text-white/65 leading-relaxed">
                                Bug fixes, updates, and improvements —
                                like having an extended tech team.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10">

        <div class="max-w-7xl mx-auto px-4">

            <!-- SECTION HEADER -->
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase">
                    <i class="ri-thumb-up-line"></i>
                    Why Choose Us
                </span>

                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Why Choose Us as Your
                    <span class="text-primary">Laravel Development Agency</span>
                </h2>

                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Choosing a development partner is about trust, communication,
                    and long-term reliability — not just writing code.
                    Here’s what makes working with us different.
                </p>
            </div>

            <!-- CARDS -->
            <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-money-dollar-circle-line text-primary text-2xl"></i>
                    <h3 class="mt-5 text-xl font-medium">
                        Transparent Pricing, No Surprises
                    </h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        You get a detailed quote upfront with clear deliverables
                        and timelines. If something changes, we discuss it first —
                        no hidden costs, no unexpected invoices.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-global-line text-primary text-2xl"></i>
                    <h3 class="mt-5 text-xl font-medium">
                        India Pricing, Global Quality
                    </h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        You benefit from cost-effective Indian development rates
                        without compromising on quality. Our developers have worked
                        with clients across the US, UK, and Europe.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-user-voice-line text-primary text-2xl"></i>
                    <h3 class="mt-5 text-xl font-medium">
                        Direct Access to Developers
                    </h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        You communicate directly with the people writing your code.
                        No middlemen, no miscommunication — faster decisions and
                        clearer understanding.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-code-s-slash-line text-primary text-2xl"></i>
                    <h3 class="mt-5 text-xl font-medium">
                        Maintainable, Clean Code
                    </h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        We write clean, well-documented Laravel code following best
                        practices. If another developer joins later, they’ll thank us —
                        not curse us.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-briefcase-4-line text-primary text-2xl"></i>
                    <h3 class="mt-5 text-xl font-medium">
                        Proven Track Record Across Industries
                    </h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        From healthcare and eCommerce to education and real estate,
                        we’ve built Laravel applications across industries —
                        and likely solved problems similar to yours.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                    <i class="ri-shield-check-line text-primary text-2xl"></i>
                    <h3 class="mt-5 text-xl font-medium">
                        Security-First Approach
                    </h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Security is built in from day one — input validation,
                        encrypted data, secure authentication, and protection
                        against common attacks are standard in everything we build.
                    </p>
                </div>

            </div>

            <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">

                <!-- Background Accent -->
                <div class="absolute -top-40 right-0 w-[500px] h-[500px]
                bg-primary/20 blur-[220px] rounded-full"></div>

                <div class="relative max-w-7xl mx-auto px-4">

                    <!-- HEADER -->
                    <div class="max-w-3xl">
                        <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                            <i class="ri-cpu-line"></i>
                            Tech Stack
                        </span>

                        <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                            Our <span class="text-primary">Laravel Tech Stack</span>
                        </h2>

                        <p class="mt-6 text-white/70 text-lg leading-relaxed">
                            We use modern, battle-tested technologies that keep your Laravel
                            applications fast, secure, and ready to scale.
                        </p>
                    </div>

                    <!-- MAIN LAYOUT -->
                    <div class="mt-20 grid lg:grid-cols-2 gap-16 lg:gap-24 items-start">

                        <!-- LEFT: STACK GROUPS -->
                        <div class="space-y-10">

                            <!-- Backend -->
                            <div class="group p-7 sm:p-8 rounded-2xl border border-white/10 bg-white/5
                            hover:border-primary/40 transition">
                                <div class="flex items-start gap-4">
                                    <i class="ri-database-2-line text-primary text-3xl"></i>
                                    <div>
                                        <h3 class="text-xl font-medium">Backend</h3>
                                        <p class="mt-2 text-white/60 text-sm">
                                            Laravel 10.x & 11.x, MySQL, PostgreSQL, Redis for caching and queues
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Frontend -->
                            <div class="group p-7 sm:p-8 rounded-2xl border border-white/10 bg-white/5
                            hover:border-primary/40 transition">
                                <div class="flex items-start gap-4">
                                    <i class="ri-layout-masonry-line text-primary text-3xl"></i>
                                    <div>
                                        <h3 class="text-xl font-medium">Frontend</h3>
                                        <p class="mt-2 text-white/60 text-sm">
                                            Vue.js, React, Alpine.js, and Tailwind CSS for responsive interfaces
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Cloud -->
                            <div class="group p-7 sm:p-8 rounded-2xl border border-white/10 bg-white/5
                            hover:border-primary/40 transition">
                                <div class="flex items-start gap-4">
                                    <i class="ri-cloud-line text-primary text-3xl"></i>
                                    <div>
                                        <h3 class="text-xl font-medium">Cloud & Hosting</h3>
                                        <p class="mt-2 text-white/60 text-sm">
                                            AWS, DigitalOcean, Cloudflare, and custom server setups
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- RIGHT: STACK CARDS -->
                        <div class="grid sm:grid-cols-2 gap-8">

                            <!-- DevOps -->
                            <div class="relative p-7 rounded-2xl border border-white/10 bg-white/5">
                                <i class="ri-settings-3-line text-primary text-2xl"></i>
                                <h4 class="mt-4 font-medium">DevOps & CI/CD</h4>
                                <p class="mt-2 text-white/60 text-sm leading-relaxed">
                                    Docker for consistent environments, Git for version control,
                                    and automated deployment pipelines.
                                </p>
                            </div>

                            <!-- Payments -->
                            <div class="relative p-7 rounded-2xl border border-white/10 bg-white/5">
                                <i class="ri-bank-card-line text-primary text-2xl"></i>
                                <h4 class="mt-4 font-medium">Payment Processing</h4>
                                <p class="mt-2 text-white/60 text-sm leading-relaxed">
                                    Stripe, PayPal, Razorpay, and other secure payment gateways.
                                </p>
                            </div>

                            <!-- APIs -->
                            <div class="relative p-7 rounded-2xl border border-white/10 bg-white/5 sm:col-span-2">
                                <div class="flex items-center gap-3">
                                    <i class="ri-plug-line text-primary text-2xl"></i>
                                    <h4 class="font-medium">APIs & Integrations</h4>
                                </div>
                                <p class="mt-3 text-white/60 text-sm leading-relaxed max-w-xl">
                                    RESTful APIs, third-party integrations, and webhook handling
                                    to connect your application with external services.
                                </p>
                            </div>

                        </div>

                    </div>



                </div>
            </section>
            <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">

                <!-- Background Accent -->
                <div class="absolute -top-40 left-0 w-[500px] h-[500px]
                bg-primary/15 blur-[220px] rounded-full"></div>

                <div class="relative max-w-7xl mx-auto px-4">

                    <!-- SECTION HEADER -->
                    <div class="max-w-3xl">
                        <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase">
                            <i class="ri-building-2-line"></i>
                            Industries
                        </span>

                        <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                            Industries <span class="text-primary">We Serve</span>
                        </h2>

                        <p class="mt-6 text-white/70 text-lg leading-relaxed">
                            We build Laravel applications across multiple industries —
                            each with unique workflows, compliance needs, and scalability challenges.
                        </p>
                    </div>

                    <!-- INDUSTRY GRID -->
                    <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                        <!-- Healthcare -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-heart-pulse-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                Healthcare & Telemedicine
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Patient portals, appointment booking systems, telemedicine
                                platforms with video consultations, and secure,
                                HIPAA-compliant data handling.
                            </p>
                        </div>

                        <!-- FinTech -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-bank-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                FinTech & Banking
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Payment processing systems, lending platforms,
                                financial dashboards, and applications built
                                with bank-level security standards.
                            </p>
                        </div>

                        <!-- Education -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-graduation-cap-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                Education & eLearning
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Learning management systems, student portals,
                                online courses, quizzes, and progress tracking
                                platforms.
                            </p>
                        </div>

                        <!-- Real Estate -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-building-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                Real Estate & Property Management
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Property listing websites, tenant portals,
                                maintenance request systems, and CRMs
                                for real estate agencies.
                            </p>
                        </div>

                        <!-- Logistics -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-truck-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                Logistics & Supply Chain
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Shipment tracking, warehouse management,
                                delivery route optimization, and supplier
                                portals.
                            </p>
                        </div>

                        <!-- More -->
                        <div class="group p-8 rounded-2xl border border-dashed border-white/15 bg-white/5
                        flex flex-col justify-center">
                            <i class="ri-more-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                And More
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                If your industry isn’t listed, chances are we’ve
                                built something similar — let’s talk.
                            </p>
                        </div>

                    </div>


                </div>
            </section>
            <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">

                <!-- Background Accent -->
                <div class="absolute -top-40 right-0 w-[520px] h-[520px]
                bg-primary/20 blur-[240px] rounded-full"></div>

                <div class="relative max-w-7xl mx-auto px-4">

                    <!-- HEADER -->
                    <div class="max-w-3xl">
                        <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                            <i class="ri-lightbulb-line"></i>
                            Why Laravel
                        </span>

                        <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                            What Makes <span class="text-primary">Laravel Right</span>
                            for Your Project
                        </h2>

                        <p class="mt-6 text-white/70 text-lg leading-relaxed">
                            Laravel isn’t just popular — it’s practical. It helps you
                            launch faster, spend less, and build applications that
                            are easy to grow and maintain.
                        </p>
                    </div>

                    <!-- BENEFITS -->
                    <div class="mt-20 grid md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">

                        <!-- Faster -->
                        <div class="relative pl-14">
                            <i class="ri-timer-flash-line text-primary text-3xl absolute left-0 top-0"></i>
                            <h3 class="text-xl font-medium">
                                Faster Time to Market
                            </h3>
                            <p class="mt-3 text-white/65 leading-relaxed text-sm">
                                Laravel includes ready-made features like authentication,
                                password resets, and file uploads — so we focus on what
                                makes your product unique. Projects typically launch
                                30–40% faster.
                            </p>
                        </div>

                        <!-- Cost -->
                        <div class="relative pl-14">
                            <i class="ri-money-rupee-circle-line text-primary text-3xl absolute left-0 top-0"></i>
                            <h3 class="text-xl font-medium">
                                Lower Development Costs
                            </h3>
                            <p class="mt-3 text-white/65 leading-relaxed text-sm">
                                Less boilerplate code means fewer development hours.
                                You pay for real business logic — not for reinventing
                                features that already exist.
                            </p>
                        </div>

                        <!-- Scale -->
                        <div class="relative pl-14">
                            <i class="ri-line-chart-line text-primary text-3xl absolute left-0 top-0"></i>
                            <h3 class="text-xl font-medium">
                                Easy to Scale
                            </h3>
                            <p class="mt-3 text-white/65 leading-relaxed text-sm">
                                Start small and grow confidently. Laravel makes it easy
                                to add users, features, and data without rebuilding
                                your application.
                            </p>
                        </div>

                        <!-- Security -->
                        <div class="relative pl-14">
                            <i class="ri-shield-keyhole-line text-primary text-3xl absolute left-0 top-0"></i>
                            <h3 class="text-xl font-medium">
                                Built-in Security Features
                            </h3>
                            <p class="mt-3 text-white/65 leading-relaxed text-sm">
                                Laravel protects against SQL injection, XSS, and common
                                vulnerabilities by default. Password encryption and
                                session handling are secure out of the box.
                            </p>
                        </div>

                        <!-- Community -->
                        <div class="relative pl-14">
                            <i class="ri-community-line text-primary text-3xl absolute left-0 top-0"></i>
                            <h3 class="text-xl font-medium">
                                Large Community Support
                            </h3>
                            <p class="mt-3 text-white/65 leading-relaxed text-sm">
                                With thousands of developers worldwide, Laravel has
                                extensive documentation, packages, and talent —
                                so you’re never locked into one vendor.
                            </p>
                        </div>

                        <!-- Maintenance -->
                        <div class="relative pl-14">
                            <i class="ri-tools-line text-primary text-3xl absolute left-0 top-0"></i>
                            <h3 class="text-xl font-medium">
                                Easy Maintenance
                            </h3>
                            <p class="mt-3 text-white/65 leading-relaxed text-sm">
                                Laravel’s clean structure makes debugging simple and
                                future changes painless. New developers can step in
                                without untangling messy code.
                            </p>
                        </div>

                    </div>



                </div>
            </section>
            <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">

                <!-- Background Accent -->
                <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[700px] h-[300px]
                bg-primary/20 blur-[220px] rounded-full"></div>

                <div class="relative max-w-7xl mx-auto px-4">

                    <!-- SECTION HEADER -->
                    <div class="max-w-3xl">
                        <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                            <i class="ri-handshake-line"></i>
                            Engagement Models
                        </span>

                        <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                            How We Work <span class="text-primary">Together</span>
                        </h2>

                        <p class="mt-6 text-white/70 text-lg leading-relaxed">
                            Different projects need different engagement models.
                            Choose the one that fits your goals, budget, and working style.
                        </p>
                    </div>

                    <!-- MODELS -->
                    <div class="mt-20 grid md:grid-cols-3 gap-8">

                        <!-- Fixed Price -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-price-tag-3-line text-primary text-3xl"></i>

                            <h3 class="mt-6 text-xl font-medium">
                                Fixed Price Projects
                            </h3>

                            <p class="mt-4 text-white/65 leading-relaxed text-sm">
                                Best for projects with a clear and well-defined scope.
                                You tell us exactly what you need, and we provide a
                                total cost upfront.
                            </p>

                            <ul class="mt-5 space-y-2 text-white/60 text-sm">
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Ideal for MVPs & redesigns
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Predictable budget
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Defined features & timelines
                                </li>
                            </ul>
                        </div>

                        <!-- Dedicated -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-user-settings-line text-primary text-3xl"></i>

                            <h3 class="mt-6 text-xl font-medium">
                                Dedicated Laravel Developers
                            </h3>

                            <p class="mt-4 text-white/65 leading-relaxed text-sm">
                                Hire one or more Laravel developers who work
                                exclusively on your project. You pay a monthly
                                fee and get consistent, focused development.
                            </p>

                            <ul class="mt-5 space-y-2 text-white/60 text-sm">
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Full-time commitment
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Flexible requirements
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Long-term development
                                </li>
                            </ul>
                        </div>

                        <!-- Hourly -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 hover:-translate-y-1 transition">
                            <i class="ri-timer-line text-primary text-3xl"></i>

                            <h3 class="mt-6 text-xl font-medium">
                                Hourly Consulting
                            </h3>

                            <p class="mt-4 text-white/65 leading-relaxed text-sm">
                                Perfect for small tasks, bug fixes, audits,
                                or expert guidance. You pay only for the
                                time we actually spend working.
                            </p>

                            <ul class="mt-5 space-y-2 text-white/60 text-sm">
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    No long-term commitment
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Fast problem-solving
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="ri-check-line text-primary"></i>
                                    Pay-as-you-go
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>
            </section>
            <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">

                <!-- Background Accent -->
                <div class="absolute -top-40 right-0 w-[500px] h-[500px]
                bg-primary/20 blur-[240px] rounded-full"></div>

                <div class="relative max-w-7xl mx-auto px-4">

                    <!-- HEADER -->
                    <div class="max-w-3xl">
                        <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                            <i class="ri-scales-3-line"></i>
                            Comparison
                        </span>

                        <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                            Laravel vs <span class="text-primary">Other Frameworks</span>
                        </h2>

                        <p class="mt-6 text-white/70 text-lg leading-relaxed">
                            Not every framework is built for the same purpose.
                            Here’s how Laravel compares to other popular options —
                            and when it makes the most sense for your project.
                        </p>
                    </div>

                    <!-- COMPARISON GRID -->
                    <div class="mt-20 grid sm:grid-cols-2 gap-8">

                        <!-- CodeIgniter -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <div class="flex items-center gap-3">
                                <i class="ri-code-box-line text-primary text-2xl"></i>
                                <h3 class="text-xl font-medium">
                                    Laravel vs CodeIgniter
                                </h3>
                            </div>

                            <p class="mt-4 text-white/65 leading-relaxed text-sm">
                                CodeIgniter is lightweight and simple, but Laravel comes with
                                far more built-in features. For applications that need user
                                management, APIs, queues, or complex workflows, Laravel is
                                the better long-term choice.
                            </p>
                        </div>

                        <!-- Symfony -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <div class="flex items-center gap-3">
                                <i class="ri-puzzle-2-line text-primary text-2xl"></i>
                                <h3 class="text-xl font-medium">
                                    Laravel vs Symfony
                                </h3>
                            </div>

                            <p class="mt-4 text-white/65 leading-relaxed text-sm">
                                Symfony offers high flexibility but has a steeper learning curve.
                                Laravel is built on Symfony components while providing a
                                simpler, more developer-friendly experience — ideal for
                                most business applications.
                            </p>
                        </div>

                        <!-- WordPress -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <div class="flex items-center gap-3">
                                <i class="ri-wordpress-line text-primary text-2xl"></i>
                                <h3 class="text-xl font-medium">
                                    Laravel vs WordPress
                                </h3>
                            </div>

                            <p class="mt-4 text-white/65 leading-relaxed text-sm">
                                WordPress is excellent for blogs and content-focused sites.
                                Laravel is the better choice for custom business applications,
                                APIs, dashboards, and systems that require complex logic
                                and scalability.
                            </p>
                        </div>

                        <!-- Custom PHP -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <div class="flex items-center gap-3">
                                <i class="ri-tools-line text-primary text-2xl"></i>
                                <h3 class="text-xl font-medium">
                                    Laravel vs Custom PHP
                                </h3>
                            </div>

                            <p class="mt-4 text-white/65 leading-relaxed text-sm">
                                Building everything in custom PHP takes longer and requires
                                extra effort for security and structure. Laravel provides
                                a solid foundation with built-in security, saving both
                                time and development costs.
                            </p>
                        </div>

                    </div>

                </div>
            </section>
            <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">

                <!-- Background Accent -->
                <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[600px] h-[300px]
                bg-primary/20 blur-[220px] rounded-full"></div>

                <div class="relative max-w-7xl mx-auto px-4">

                    <!-- HEADER -->
                    <div class="max-w-3xl">
                        <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                            <i class="ri-team-line"></i>
                            Our Team
                        </span>

                        <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                            Our <span class="text-primary">Laravel Development Team</span>
                        </h2>

                        <p class="mt-6 text-white/70 text-lg leading-relaxed">
                            You don’t just hire a framework — you hire the people behind it.
                            Our team combines deep Laravel expertise with strong frontend,
                            design, and infrastructure skills.
                        </p>
                    </div>

                    <!-- TEAM ROLES -->
                    <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                        <!-- Laravel Devs -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <i class="ri-code-box-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                Senior Laravel Developers
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Developers with 5–10 years of experience building
                                secure, scalable Laravel applications across
                                different industries.
                            </p>
                        </div>

                        <!-- Frontend -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <i class="ri-layout-2-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                Frontend Specialists
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Vue.js and React developers who turn backend logic
                                into fast, responsive interfaces users actually
                                enjoy using.
                            </p>
                        </div>

                        <!-- UI/UX -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <i class="ri-paint-brush-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                UI/UX Designers
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Designers focused on usability and clarity —
                                creating interfaces that feel intuitive,
                                not confusing.
                            </p>
                        </div>

                        <!-- DevOps -->
                        <div class="group p-8 rounded-2xl border border-white/10 bg-white/5
                        hover:border-primary/40 transition">
                            <i class="ri-cloud-line text-primary text-3xl"></i>
                            <h3 class="mt-5 text-xl font-medium">
                                DevOps Engineers
                            </h3>
                            <p class="mt-3 text-white/65 text-sm leading-relaxed">
                                Infrastructure experts who handle deployments,
                                performance tuning, monitoring, and uptime —
                                so your app stays reliable.
                            </p>
                        </div>

                    </div>

                    <!-- TEAM PHILOSOPHY -->
                    <div class="mt-24 max-w-4xl border-t border-white/10 pt-12">
                        <p class="text-white/70 leading-relaxed">
                            We’re not a massive agency with hundreds of developers.
                            We’re a focused, experienced team that takes on projects
                            we know we can deliver well.
                        </p>

                        <p class="mt-4 text-white/65 leading-relaxed">
                            When you work with Techonika as your Laravel development
                            services provider, you work directly with developers who
                            care about quality, maintainability, and long-term success —
                            not just shipping code.
                        </p>
                    </div>

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
                                Questions About Laravel Development
                            </span>
                        </h2>

                        <p class="mt-4 text-white/70 max-w-2xl mx-auto">
                            Honest answers to common questions businesses ask
                            before choosing a Laravel development partner.
                        </p>
                    </div>

                    <!-- FAQ Wrapper -->
                    <div class="space-y-4" x-data="{ open: 1 }">

                        <!-- FAQ 1 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 1 ? open = null : open = 1"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    What is Laravel and why should I choose it?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 1 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 1" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                Laravel is a PHP framework that makes web development
                                faster, more secure, and easier to maintain. It includes
                                built-in features that save development time and help
                                applications scale cleanly.
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 2 ? open = null : open = 2"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    How much does Laravel development cost in India?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 2 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 2" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                Costs depend on project size and complexity.
                                Simple projects usually start around <strong>$3,000</strong>,
                                while complex applications can exceed <strong>$20,000+</strong>.
                                We provide a detailed quote after understanding your needs.
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 3 ? open = null : open = 3"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    How long does it take to build a Laravel application?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 3 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 3" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                A basic Laravel application typically takes
                                <strong>4–6 weeks</strong>. More complex platforms
                                may require <strong>3–6 months</strong>.
                                You’ll receive a clear timeline during planning.
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 4 ? open = null : open = 4"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    Can you migrate my existing website to Laravel?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 4 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 4" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                Yes. We migrate websites from other frameworks or
                                plain PHP to Laravel while keeping your data
                                and URLs intact.
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 5 ? open = null : open = 5"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    Do you sign NDAs?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 5 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 5" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                Absolutely. We sign NDAs before discussing
                                any project details. Your ideas and business
                                information remain fully confidential.
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 6 ? open = null : open = 6"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    What’s included in your maintenance packages?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 6 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 6" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                Security updates, bug fixes, minor feature enhancements,
                                performance monitoring, backup management,
                                and priority support.
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 7 ? open = null : open = 7"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    Can Laravel integrate with my existing systems?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 7 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 7" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                Yes. Laravel integrates smoothly with CRMs,
                                payment gateways, email tools, APIs,
                                and third-party services.
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 8 ? open = null : open = 8"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    What happens if I’m not satisfied with the work?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 8 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 8" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                We work in sprints with regular check-ins,
                                so issues are addressed early.
                                If something isn’t right, we fix it immediately.
                                Your satisfaction comes first.
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                            <button @click="open === 9 ? open = null : open = 9"
                                class="w-full flex justify-between items-center px-6 py-5 text-left">
                                <span class="font-medium">
                                    Do you provide DevOps and hosting support?
                                </span>
                                <span class="text-primary text-xl" x-text="open === 9 ? '−' : '+'"></span>
                            </button>

                            <div x-show="open === 9" x-collapse
                                class="px-6 pb-5 text-white/80 leading-relaxed">
                                Yes. We handle hosting setup, server configuration,
                                deployments, and infrastructure maintenance
                                across all major cloud providers.
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="relative bg-black text-white py-24 sm:py-32 overflow-hidden">

                <!-- Soft ambient glow -->
                <div class="absolute -top-32 left-1/2 -translate-x-1/2
                w-[720px] h-[260px]
                bg-primary/20 blur-[200px] rounded-full"></div>

                <div class="relative max-w-5xl mx-auto px-6 text-center">

                    <!-- Heading -->
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
                        Ready to Start Your
                        <span class="text-primary">Laravel Project?</span>
                    </h2>

                    <!-- Description -->
                    <p class="mt-8 text-white/70 text-lg leading-relaxed max-w-3xl mx-auto">
                        Let’s talk about what you’re trying to build. We offer a free consultation
                        to understand your requirements, answer your questions, and give you
                        an honest assessment of what’s possible.
                    </p>

                    <p class="mt-4 text-white/60 leading-relaxed max-w-2xl mx-auto">
                        No pressure. No sales pitch. Just a clear conversation about your goals
                        and whether we’re the right fit.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">

                        <button @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex items-center justify-center gap-2
                      px-12 py-4 rounded-xl
                      bg-primary text-black font-medium
                      hover:bg-primary/90 transition">
                            Get Free Consultation
                            <i class="ri-arrow-right-line"></i>
                        </button>

                        <a href="mailto:info@techonika.com"
                            class="inline-flex items-center justify-center gap-2
                      px-10 py-4 rounded-xl
                      border border-white/15
                      text-white/80
                      hover:bg-white/5 transition">
                            <i class="ri-mail-line"></i>
                            Email Us
                        </a>

                        <a href="https://wa.me/+918810599816" target="_blank"
                            class="inline-flex items-center justify-center gap-2
                      px-10 py-4 rounded-xl
                      border border-white/15
                      text-white/80
                      hover:bg-white/5 transition">
                            <i class="ri-whatsapp-line"></i>
                            WhatsApp
                        </a>

                    </div>

                    <!-- Response note -->
                    <p class="mt-8 text-white/50 text-sm">
                        We respond to all inquiries within 24 hours.
                    </p>

                    <!-- Divider -->
                    <div class="mt-14 max-w-3xl mx-auto h-px bg-gradient-to-r
                    from-transparent via-white/15 to-transparent"></div>

                    <!-- Brand statement -->
                    <p class="mt-8 text-white/65 leading-relaxed max-w-3xl mx-auto">
                        <strong class="text-white">Techonika</strong> is your trusted partner for
                        Laravel development in India. We build applications that work reliably,
                        scale with your business, and stand the test of time.
                    </p>

                </div>
            </section>




        </div>
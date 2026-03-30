<div>
    @section('meta')
        <title>Symfony Development Company in India</title>
        <meta name="description" content="Techonika is a Symfony development company in India building secure, scalable web applications. Custom portals, SaaS platforms, API development and ERP integrations. Free consultation.">
    @endsection

    <!-- Hero -->
    <section class="relative bg-black text-white py-20 sm:py-24 lg:py-32 overflow-hidden border-b border-white/10">
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[900px] bg-primary/15 blur-[260px] rounded-full"></div>
        <div class="absolute -bottom-40 -left-40 w-[560px] h-[560px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="absolute inset-0 opacity-[0.06] [background:radial-gradient(circle_at_20%_20%,white,transparent_35%),radial-gradient(circle_at_80%_30%,white,transparent_32%),radial-gradient(circle_at_50%_80%,white,transparent_36%)]"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/15 bg-white/5 backdrop-blur text-xs tracking-[0.45em] uppercase">
                        <i class="ri-code-s-slash-line text-primary"></i>
                        Symfony Development
                    </div>

                    <div class="mt-6 flex flex-wrap justify-center lg:justify-start gap-2">
                        <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">Symfony 6 LTS</span>
                        <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">PHP 8.x</span>
                        <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">API-first</span>
                        <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">SaaS & Portals</span>
                        <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">ERP/CRM Integrations</span>
                    </div>

                    <h1 class="mt-8 text-3xl sm:text-4xl md:text-4xl lg:text-4xl font-semibold tracking-tight leading-tight">
                        Symfony Development Company in India That Builds
                        <span class="text-primary block">Secure, High-Performance Web Applications</span>
                    </h1>

                    <h2 class="mt-6 text-lg sm:text-xl text-white/80 font-medium">
                        Reliable Symfony Development Services for Businesses That Need More Than a Basic Web App
                    </h2>

                    <p class="mt-8 text-white/75 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        We are Techonika, a Symfony development company in India that builds web applications for businesses with serious technical requirements. Our team works with Symfony and its ecosystem to deliver applications that are structured, secure, and built to last.
                    </p>

                    <p class="mt-4 text-white/60 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        We’ve used Symfony to build enterprise portals, SaaS platforms, fintech tools, and complex B2B systems. If your project needs a framework that handles high complexity without becoming a maintenance nightmare, Symfony is the right choice — and we know how to use it well.
                    </p>

                    <ul class="mt-8 grid sm:grid-cols-2 gap-3 text-left max-w-2xl mx-auto lg:mx-0 text-white/75">
                        <li class="flex items-start gap-3">
                            <i class="ri-check-line text-primary text-xl mt-0.5"></i>
                            <span>Clean architecture with maintainable modules and bundles</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-check-line text-primary text-xl mt-0.5"></i>
                            <span>Secure RBAC, audit-friendly permissions, and best practices</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-check-line text-primary text-xl mt-0.5"></i>
                            <span>Fast APIs and portals with caching + query optimization</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-check-line text-primary text-xl mt-0.5"></i>
                            <span>Integrations built as services (ERP/CRM, gateways, logistics)</span>
                        </li>
                    </ul>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button
                            @click="$dispatch('open-modal', { to: 'contact' })"
                            class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3.5 rounded-xl bg-primary text-black font-medium transition-all duration-300 hover:bg-primary/90 hover:-translate-y-1 shadow-lg shadow-primary/20">
                            Get Free Consultation
                            <i class="ri-arrow-right-line ml-2"></i>
                        </button>

                        <a href="#services"
                           class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3.5 rounded-xl border border-white/20 bg-white/5 text-white/90 transition-all duration-300 hover:border-primary/50 hover:bg-white/10 hover:-translate-y-1">
                            View Services
                            <i class="ri-stack-line ml-2"></i>
                        </a>
                    </div>

                    <div class="mt-5 flex flex-wrap items-center justify-center lg:justify-start gap-3 text-sm text-white/60">
                        <span class="inline-flex items-center gap-2">
                            <i class="ri-time-line text-primary"></i>
                            Response in 1 business day
                        </span>
                        <span class="text-white/25">•</span>
                        <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 text-white/70 hover:text-primary transition">
                            View Portfolio
                            <i class="ri-external-link-line"></i>
                        </a>
                        <span class="text-white/25">•</span>
                        <a href="mailto:info@techonika.com" class="inline-flex items-center gap-2 text-white/70 hover:text-primary transition">
                            Email Us
                            <i class="ri-mail-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Right -->
                <div class="relative max-w-xl mx-auto w-full">
                    <div class="absolute -inset-3 rounded-3xl bg-gradient-to-r from-primary/25 via-primary/5 to-transparent blur-2xl opacity-90"></div>
                    <div class="relative rounded-3xl border border-white/10 bg-gradient-to-br from-white/6 to-white/0 backdrop-blur-xl overflow-hidden shadow-[0_40px_120px_-60px_rgba(0,0,0,0.9)]">
                        <div class="flex items-center gap-2 px-4 py-3 border-b border-white/10 bg-white/5">
                            <span class="w-2.5 h-2.5 rounded-full bg-white/20"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-white/15"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-white/10"></span>
                            <div class="ml-3 h-2.5 w-40 max-w-[55%] rounded-full bg-white/10"></div>
                        </div>
                        <div class="p-7 sm:p-9 relative">
                            <div class="pointer-events-none absolute inset-0 opacity-40 [background:radial-gradient(circle_at_50%_0%,rgba(255,199,0,0.22),transparent_60%)]"></div>

                            <div class="relative">
                                <div class="flex items-start justify-between gap-6 mb-6">
                                    <div>
                                        <p class="text-xs tracking-[0.45em] uppercase text-white/60">Delivery Snapshot</p>
                                        <p class="mt-2 text-xl font-semibold">What you get with our Symfony team</p>
                                        <p class="mt-2 text-white/65 text-sm">Structured build, sprint delivery, and clean handover.</p>
                                    </div>
                                    <span class="shrink-0 inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-white/10 bg-white/5 text-xs text-white/70">
                                        <i class="ri-timer-flash-line text-primary"></i>
                                        Sprint delivery
                                    </span>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex gap-4 p-4 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                                        <div class="w-11 h-11 rounded-xl bg-primary/10 border border-primary/20 flex items-center justify-center shrink-0">
                                            <i class="ri-shield-check-line text-primary text-2xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-medium">Security-first build</p>
                                            <p class="mt-1 text-white/65 text-sm">RBAC, CSRF/XSS protection, dependency audits</p>
                                        </div>
                                    </div>

                                    <div class="flex gap-4 p-4 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                                        <div class="w-11 h-11 rounded-xl bg-primary/10 border border-primary/20 flex items-center justify-center shrink-0">
                                            <i class="ri-speed-up-line text-primary text-2xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-medium">Performance tuning</p>
                                            <p class="mt-1 text-white/65 text-sm">Caching, profiler-based fixes, query optimization</p>
                                        </div>
                                    </div>

                                    <div class="flex gap-4 p-4 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                                        <div class="w-11 h-11 rounded-xl bg-primary/10 border border-primary/20 flex items-center justify-center shrink-0">
                                            <i class="ri-plug-2-line text-primary text-2xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-medium">Integrations that stay maintainable</p>
                                            <p class="mt-1 text-white/65 text-sm">ERP/CRM, payments, logistics built as services</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 flex flex-wrap gap-2">
                                    <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">Symfony 6 LTS</span>
                                    <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">REST / GraphQL</span>
                                    <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">Doctrine ORM</span>
                                    <span class="px-3 py-1.5 rounded-full text-xs text-white/80 border border-white/10 bg-white/5">Redis cache</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 right-0 w-[520px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-stack-line"></i>
                    Services
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    What We Build with Symfony:
                    <span class="text-primary block">Full Range of Development Services</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Our Symfony development services span new builds, migrations, integrations, and ongoing maintenance. Here’s the full picture of what we do.
                </p>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-apps-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Custom Symfony Web Application Development</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Web applications built from scratch around your business logic, user roles, and data structures — not generic templates.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-shopping-bag-3-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Symfony eCommerce Development</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Flexible eCommerce builds for complex catalogs, custom pricing engines, multi-warehouse inventory, and advanced checkout flows.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-share-forward-2-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Symfony API Development and Integrations</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        REST and GraphQL APIs that connect your application to payment gateways, CRMs, ERPs, shipping providers, and other systems.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-puzzle-2-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Module and Bundle Development</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Custom bundles for business-specific features, plus clean integration of third-party bundles where they fit.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-loop-right-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Migration and Version Upgrades</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Move from legacy PHP or older Symfony versions to a supported Symfony release without losing functionality.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-layout-masonry-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Theme and Frontend Integration</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Twig themes, React/Vue frontends connected to Symfony backends, or a full UI redesign with a clean component approach.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-dashboard-3-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">CMS and Portal Development</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Custom portals and CMS workflows with strong access controls that go well beyond a standard off-the-shelf CMS.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-smartphone-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">App Development for Mobile and Web</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Responsive web apps with API-first architecture — plus native mobile apps when required (built in parallel).
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-tools-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Ongoing Support and Maintenance</h3>
                    <p class="mt-3 text-white/65 leading-relaxed text-sm">
                        Patches, upgrades, monitoring, bug fixes, and new features — including takeover support for apps built by other teams.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fit -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div class="max-w-xl">
                    <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                        <i class="ri-question-answer-line"></i>
                        Fit Check
                    </span>
                    <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                        Is Symfony the Right
                        <span class="text-primary">Framework</span> for Your Project?
                    </h2>
                    <p class="mt-6 text-white/70 text-lg leading-relaxed">
                        Symfony is the right framework when your project is complex, long-term, or needs to scale across a large development team. It works best for enterprise applications, SaaS platforms, API-heavy systems, and projects where code quality and maintainability matter as much as delivery speed.
                    </p>
                    <p class="mt-4 text-white/60 leading-relaxed">
                        For simple websites or small apps, a lighter framework like <a href="{{ route('codeigniter-development') }}" class="text-primary hover:underline">CodeIgniter</a> or a CMS like <a href="{{ route('wordpress-development') }}" class="text-primary hover:underline">WordPress</a> may be more practical.
                    </p>
                </div>

                <div class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl p-7 sm:p-8">
                    <h3 class="text-xl font-medium">Symfony fits your project if:</h3>
                    <ul class="mt-6 space-y-4 text-white/70">
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i>
                            <span>Your application has multiple user roles with different permissions.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i>
                            <span>Your team will grow and new developers need to pick up the codebase fast.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i>
                            <span>You need strict coding standards enforced across a large codebase.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i>
                            <span>Your application connects to multiple external systems through APIs.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i>
                            <span>You’re building a platform that needs to run reliably for five or more years.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i>
                            <span>You need long-term support versions and a predictable release cycle.</span>
                        </li>
                    </ul>
                    <p class="mt-8 text-white/60 text-sm leading-relaxed">
                        If most of these don’t apply, we’ll recommend something better suited. We’d rather recommend the right tool than sell you the most expensive one.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Symfony -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[780px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-award-line"></i>
                    Advantages
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Why Symfony Beats Other PHP Frameworks
                    <span class="text-primary">for Complex Web Applications</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Symfony has been the framework of choice for large-scale PHP projects for over a decade. It’s not the flashiest option, but it’s the most reliable one when your project has serious technical demands.
                </p>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                    <i class="ri-team-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Built for Long-Term Projects with Large Teams</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Symfony enforces structure so new developers can navigate the codebase without a guided tour, even years after launch.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                    <i class="ri-recycle-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Reusable Components That Speed Up Builds</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Routing, HTTP handling, security, and forms are widely reused across the PHP ecosystem and thoroughly battle-tested.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                    <i class="ri-braces-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Strict Standards That Keep Code Clean</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        PSR conventions ensure code written by different developers stays consistent and readable at scale.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                    <i class="ri-global-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Battle-Tested by Global Enterprises</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Symfony components power platforms like Drupal 8+ and phpBB and are used across high-traffic products worldwide.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">
                    <i class="ri-calendar-check-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Active Release Cycle with LTS Support</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Predictable releases and long-term support versions keep your application supported without emergency rewrites.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-scales-3-line"></i>
                    Comparison
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Symfony vs Laravel vs Zend (Laminas):
                    <span class="text-primary">Which PHP Framework Should You Choose?</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    The right choice depends on your project’s complexity, your team’s experience, and how long the application needs to run without a major rebuild.
                </p>
            </div>

            <div class="mt-14 rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-[900px] w-full text-left text-sm">
                        <thead class="bg-white/5 border-b border-white/10">
                            <tr class="text-white/80">
                                <th class="px-6 py-4 font-medium">Factor</th>
                                <th class="px-6 py-4 font-medium">Symfony</th>
                                <th class="px-6 py-4 font-medium">Laravel</th>
                                <th class="px-6 py-4 font-medium">Zend/Laminas</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/10">
                            <tr>
                                <td class="px-6 py-4 text-white/70">Best For</td>
                                <td class="px-6 py-4 text-white/70">Enterprise apps, SaaS, complex APIs</td>
                                <td class="px-6 py-4 text-white/70">Custom web apps, startups, mid-size projects</td>
                                <td class="px-6 py-4 text-white/70">High-security enterprise, financial systems</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Learning Curve</td>
                                <td class="px-6 py-4 text-white/70">Steep</td>
                                <td class="px-6 py-4 text-white/70">Moderate</td>
                                <td class="px-6 py-4 text-white/70">Steep</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Flexibility</td>
                                <td class="px-6 py-4 text-white/70">Very high</td>
                                <td class="px-6 py-4 text-white/70">High</td>
                                <td class="px-6 py-4 text-white/70">Very high</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Community Size</td>
                                <td class="px-6 py-4 text-white/70">Large</td>
                                <td class="px-6 py-4 text-white/70">Very large</td>
                                <td class="px-6 py-4 text-white/70">Medium</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Long-Term Support</td>
                                <td class="px-6 py-4 text-white/70">Yes, formal LTS versions</td>
                                <td class="px-6 py-4 text-white/70">Less structured</td>
                                <td class="px-6 py-4 text-white/70">Yes</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Performance</td>
                                <td class="px-6 py-4 text-white/70">Excellent</td>
                                <td class="px-6 py-4 text-white/70">Excellent</td>
                                <td class="px-6 py-4 text-white/70">Excellent</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Reusable Components</td>
                                <td class="px-6 py-4 text-white/70">Yes, used by Laravel too</td>
                                <td class="px-6 py-4 text-white/70">Partly Symfony-based</td>
                                <td class="px-6 py-4 text-white/70">Yes</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">eCommerce Support</td>
                                <td class="px-6 py-4 text-white/70">Strong</td>
                                <td class="px-6 py-4 text-white/70">Strong</td>
                                <td class="px-6 py-4 text-white/70">Moderate</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Best Team Size</td>
                                <td class="px-6 py-4 text-white/70">Medium to large teams</td>
                                <td class="px-6 py-4 text-white/70">Small to large teams</td>
                                <td class="px-6 py-4 text-white/70">Large enterprise teams</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-white/70">Ideal Project Length</td>
                                <td class="px-6 py-4 text-white/70">3 to 10+ years</td>
                                <td class="px-6 py-4 text-white/70">1 to 5 years</td>
                                <td class="px-6 py-4 text-white/70">5 to 10+ years</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-5 border-t border-white/10 text-white/70 text-sm">
                    Laravel is often the better starting point for mid-size projects because it’s fast to get up and running. Symfony is the better choice when your application needs to stay clean and maintainable across a large team over many years. Zend/Laminas suits highly regulated industries where formal architecture standards are a requirement.
                </div>
            </div>

            <div class="mt-12 flex flex-col sm:flex-row gap-4">
                <button @click="$dispatch('open-modal', { to: 'contact' })"
                        class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-primary text-black font-medium hover:bg-primary/90 transition">
                    Get a Recommendation
                    <i class="ri-arrow-right-line"></i>
                </button>
                <a href="{{ route('laravel-development') }}"
                   class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl border border-white/15 text-white/80 hover:bg-white/5 transition">
                    Explore Laravel Services
                    <i class="ri-arrow-right-up-line text-primary"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Industries -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 right-0 w-[520px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-building-4-line"></i>
                    Industries
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Industries We Serve with
                    <span class="text-primary">Custom Symfony Development</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Our team has delivered custom Symfony development projects across industries with very different requirements.
                </p>
            </div>

            <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">SaaS and Software Product Companies</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">Multi-tenant platforms with isolated environments and clean extensibility.</p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Healthcare and Patient Data Platforms</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">Portals and systems with strong access control, audit trails, and encryption.</p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Finance and Fintech Applications</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">Dashboards and reporting tools requiring strict validation and precise data handling.</p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Education and eLearning Portals</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">Progress tracking, assessments, certificates, and video platform integrations.</p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Logistics and Supply Chain Management</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">Tracking dashboards, WMS tools, and integrations with ERP and logistics APIs.</p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Enterprise B2B Platforms and Internal Tools</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">Procurement portals, vendor management, and permission-heavy workflow systems.</p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 lg:col-span-3">
                    <h3 class="text-xl font-medium">Media, Publishing, and Content Platforms</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">Editorial workflows, high content volumes, and multi-channel publishing via web, app, and APIs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div class="max-w-xl">
                    <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                        <i class="ri-price-tag-3-line"></i>
                        Pricing
                    </span>
                    <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                        How Much Does Symfony Development
                        <span class="text-primary">Cost in India?</span>
                    </h2>
                    <p class="mt-6 text-white/70 text-lg leading-relaxed">
                        Custom Symfony development in India typically costs between <strong class="text-white">₹80,000 and ₹5,00,000+</strong> depending on the complexity of the application, the number of integrations, and the size of the development team.
                    </p>
                    <p class="mt-4 text-white/60 leading-relaxed">
                        A standard web portal or API project starts around ₹80,000. An enterprise SaaS platform with multi-tenancy, ERP integration, and a complex permission system can exceed ₹4,00,000. Monthly support and maintenance plans start from ₹8,000 per month.
                    </p>

                    <div class="mt-10 grid gap-6">
                        <div class="rounded-2xl border border-white/10 bg-white/5 overflow-hidden">
                            <div class="px-6 py-4 border-b border-white/10 bg-white/5">
                                <h3 class="font-medium">Cost Range for a Custom Symfony Web Application</h3>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-[640px] w-full text-left text-sm">
                                    <thead class="text-white/80">
                                        <tr>
                                            <th class="px-6 py-4 font-medium">Project Type</th>
                                            <th class="px-6 py-4 font-medium">Estimated Cost (INR)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-white/10">
                                        <tr>
                                            <td class="px-6 py-4 text-white/70">Standard portal or API application</td>
                                            <td class="px-6 py-4 text-white/70">₹80,000 to ₹1,50,000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 text-white/70">Mid-size app (custom logic, 2 to 4 integrations)</td>
                                            <td class="px-6 py-4 text-white/70">₹1,50,000 to ₹3,00,000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 text-white/70">Enterprise platform (multi-tenant, 5+ integrations)</td>
                                            <td class="px-6 py-4 text-white/70">₹3,00,000 to ₹5,00,000+</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-white/5 overflow-hidden">
                            <div class="px-6 py-4 border-b border-white/10 bg-white/5">
                                <h3 class="font-medium">Monthly Support and Maintenance Plan Pricing</h3>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-[640px] w-full text-left text-sm">
                                    <thead class="text-white/80">
                                        <tr>
                                            <th class="px-6 py-4 font-medium">Plan Type</th>
                                            <th class="px-6 py-4 font-medium">Monthly Cost (INR)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-white/10">
                                        <tr>
                                            <td class="px-6 py-4 text-white/70">Basic (patches, bug fixes, monitoring)</td>
                                            <td class="px-6 py-4 text-white/70">₹8,000 to ₹15,000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 text-white/70">Standard (above plus minor dev hours)</td>
                                            <td class="px-6 py-4 text-white/70">₹15,000 to ₹30,000</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 text-white/70">Active development retainer</td>
                                            <td class="px-6 py-4 text-white/70">Custom, based on hours</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="px-6 py-5 border-t border-white/10 text-white/65 text-sm">
                                Every support plan includes a single point of contact who knows your codebase. You're not sending tickets into a shared inbox.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl p-7 sm:p-8">
                    <h3 class="text-xl font-medium">What affects the price</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        The main factors that drive cost are: the number of user roles and permission levels, how many third-party systems the application connects to, whether the project requires a custom design and frontend build, the volume of data the application needs to handle, and how many Symfony bundles need to be built from scratch versus configured from existing packages.
                    </p>
                    <ul class="mt-6 space-y-4 text-white/70">
                        <li class="flex items-start gap-3"><i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i><span>User roles and permission levels</span></li>
                        <li class="flex items-start gap-3"><i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i><span>Third-party systems and integrations</span></li>
                        <li class="flex items-start gap-3"><i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i><span>Custom design + frontend development</span></li>
                        <li class="flex items-start gap-3"><i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i><span>Data volume and performance requirements</span></li>
                        <li class="flex items-start gap-3"><i class="ri-checkbox-circle-line text-primary text-xl mt-0.5"></i><span>Custom bundles vs existing packages</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 left-0 w-[520px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-route-line"></i>
                    Process
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Our Symfony Development Process:
                    <span class="text-primary">Step by Step</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    We follow a clear, repeatable process on every Symfony project. You'll know exactly what's happening at each stage and who to contact if you have a question.
                </p>
            </div>

            <div class="mt-16 grid gap-6 lg:grid-cols-2">
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Project discovery and requirement analysis</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        We start by asking the right questions. What does the application need to do? Who uses it and how? What systems does it need to connect to? The answers to these questions shape every technical decision that follows.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Technical architecture and Symfony version selection</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Before any code is written, we plan the full application architecture. This includes which Symfony version to use, how the bundle structure will be organized, the database schema, the API design, and the hosting setup. Good architecture at this stage saves weeks of rework later.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">UI/UX wireframing and prototyping</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        We design your application's screens and user flows before development starts. You review and approve clickable wireframes so you know exactly what the finished product will look like before we write a single line of code.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Symfony development and sprint delivery</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        We build the application in two-week sprints. Each sprint delivers a working, tested piece of the application for you to review. This means you see real progress regularly and catch issues early rather than at the end.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Quality assurance and security testing</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Before any piece of work moves to production, it goes through our QA process. This covers unit tests, integration tests, security vulnerability checks, performance benchmarks, and cross-browser testing.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Deployment and go-live support</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        We handle deployment to your hosting environment and stay available on launch day to monitor the application and fix anything that comes up in the first 48 hours. You won't manage go-live alone.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 lg:col-span-2">
                    <h3 class="text-xl font-medium">Post-launch monitoring and iteration</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        After launch, we monitor error logs, performance metrics, and uptime. We catch problems before your users do. This phase also covers adding new features as your product evolves.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Security + Performance -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div>
                    <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                        <i class="ri-shield-keyhole-line"></i>
                        Security
                    </span>
                    <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                        Symfony Security:
                        <span class="text-primary">How We Protect Your Application</span>
                    </h2>
                    <p class="mt-6 text-white/70 text-lg leading-relaxed">
                        Symfony has a strong built-in security layer — and it only works well when configured and used correctly. Here’s what we do on every project.
                    </p>

                    <div class="mt-10 space-y-5">
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">Built-In CSRF and XSS Protection Using Symfony's Security Component</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                CSRF (Cross-Site Request Forgery) is an attack where someone tricks your users into submitting actions they didn't intend to. XSS (Cross-Site Scripting) lets attackers inject malicious scripts into your pages. Symfony's security component includes built-in protection against both when it's correctly configured, which it always is on our projects.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">Role-Based Access Control and Authentication Flows</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                We use Symfony's Voter system to control exactly what each user role can see and do. This means a customer can't access admin functions, a manager can't see another region's data, and every access decision is enforced at the application layer, not just the interface layer.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">Dependency Auditing and Patch Management</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                Every Symfony project depends on third-party packages, and those packages have their own vulnerabilities. We run Composer security audits before launch and as part of every maintenance cycle. Outdated dependencies get updated before they become a problem.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">OWASP-Aligned Development on Every Project</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                OWASP (Open Web Application Security Project) publishes a list of the most critical web security risks. We treat the OWASP Top 10 as a checklist, not a suggestion. For enterprise and regulated industry clients, OWASP compliance is documented as part of project delivery.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                        <i class="ri-flashlight-line"></i>
                        Performance
                    </span>
                    <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                        Symfony Performance Optimization:
                        <span class="text-primary">How We Keep Your App Fast</span>
                    </h2>
                    <p class="mt-6 text-white/70 text-lg leading-relaxed">
                        A Symfony application can be extremely fast or frustratingly slow depending on how it's built. Here's how we make sure yours stays fast.
                    </p>

                    <div class="mt-10 space-y-5">
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">HTTP Caching with Symfony's Cache Component</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                Symfony has a built-in HTTP cache that stores responses and serves them without hitting the database every time. For pages or API responses that don't change on every request, caching cuts response times dramatically. We configure caching strategies that match your application's actual usage patterns.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">Database Query Optimization with Doctrine ORM</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                Doctrine ORM translates your PHP code into database queries. Poorly written Doctrine queries are a common cause of slow Symfony applications. We audit queries during development and fix N+1 problems, unnecessary joins, and missing indexes before they reach production.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">Profiler-Based Bottleneck Detection</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                Symfony includes a built-in Profiler tool that shows exactly how long each part of a request takes and how many database queries it triggers. We use it during development and testing to find and fix slow spots before launch.
                            </p>
                        </div>
                        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                            <h3 class="font-medium">CDN Integration and Asset Optimization</h3>
                            <p class="mt-2 text-white/65 text-sm leading-relaxed">
                                We set up CDN (Content Delivery Network) integration to serve static files from servers close to your users. We also compress and bundle CSS and JavaScript so pages load faster, especially for users on mobile connections.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[780px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-cpu-line"></i>
                    Tech Stack
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Our Tech Stack for
                    <span class="text-primary">Symfony Development Projects</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    We use well-supported, production-tested tools at every layer of your application.
                </p>
            </div>

            <div class="mt-16 grid gap-6 lg:grid-cols-2">
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Frontend</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        HTML5, CSS3, JavaScript, React.js, Vue.js. For server-rendered pages we use Twig; for decoupled apps we connect a JS frontend to a Symfony API.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Backend and Symfony Components</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        PHP 8.x, Symfony 5/6, Doctrine ORM, and native components for security, routing, forms, validation, and event handling — following PSR and Symfony best practices.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Databases</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        MySQL/PostgreSQL for relational data, MongoDB when needed, Redis for caching/sessions — with indexing, backups, and clear retention policies.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">DevOps, Cloud, and QA</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        AWS/DigitalOcean, Docker, CI/CD, Nginx, uptime monitoring and backups. PHPUnit/Behat/Postman + WebTestCase with defined coverage targets.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement Models -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-handshake-line"></i>
                    Engagement
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Engagement Models:
                    <span class="text-primary">Choose How You Work with Us</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Three ways to work with us so you can choose what fits your project and budget.
                </p>
            </div>

            <div class="mt-16 grid gap-6 lg:grid-cols-3">
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Fixed-Price Project Delivery</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Scoped delivery at a fixed price and timeline — best for projects with clear requirements.
                    </p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Dedicated Symfony Developer Hire</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Monthly retainer: developers join your standups and communicate directly using your tools.
                    </p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Staff Augmentation</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Add Symfony expertise to your existing team to fill gaps and accelerate delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 right-0 w-[520px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-briefcase-4-line"></i>
                    Portfolio
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Recent Symfony Projects
                    <span class="text-primary">We’ve Delivered</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Here are three recent Symfony projects that show the kind of work we do. Visit our <a href="{{ route('portfolio') }}" class="text-primary hover:underline">project portfolio</a> to see more examples across technologies and industries.
                </p>
            </div>

            <div class="mt-16 grid gap-6 lg:grid-cols-3">
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <h3 class="text-xl font-medium">Enterprise SaaS Platform with Multi-Tenant Architecture</h3>
                    <p class="mt-4 text-white/65 text-sm leading-relaxed">
                        Each customer gets an isolated environment with their own data, settings, and user management — designed to scale cleanly as new tenants are onboarded.
                    </p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <h3 class="text-xl font-medium">B2B Procurement Portal with ERP and CRM Integration</h3>
                    <p class="mt-4 text-white/65 text-sm leading-relaxed">
                        Purchase orders, supplier onboarding, contracts, invoice tracking, and live data sync to existing ERP/CRM systems.
                    </p>
                </div>
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <h3 class="text-xl font-medium">High-Traffic Media Platform Migrated to Symfony 6</h3>
                    <p class="mt-4 text-white/65 text-sm leading-relaxed">
                        Migration from legacy PHP with editorial workflows and CDN/ad integrations — improving performance and maintainability.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Techonika -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-star-smile-line"></i>
                    Why Us
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Why Businesses in India Choose Techonika
                    <span class="text-primary">as Their Symfony Development Company</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    There are many Symfony development companies in India. Here’s what’s different about working with us.
                </p>
            </div>

            <div class="mt-16 grid gap-6 lg:grid-cols-2">
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Senior Symfony developers on every project</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Your project is led by developers who have delivered production Symfony applications — not juniors learning on your budget.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Weekly progress updates and full transparency</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Written updates every week: what shipped, what’s next, and any timeline impacts — communicated early.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">One project owner from brief to launch</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        One person owns your project end-to-end so you don’t repeat yourself at every stage.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-xl font-medium">Clean, documented code you can hand off</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        PSR standards and clear documentation so your codebase can be maintained by any Symfony developer.
                    </p>
                </div>
                <div class="p-7 rounded-2xl border border-white/10 bg-white/5 lg:col-span-2">
                    <h3 class="text-xl font-medium">Active post-launch support</h3>
                    <p class="mt-3 text-white/65 text-sm leading-relaxed">
                        Monitoring, patching, and fast support after go-live — not just a handover document.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Getting Started -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 left-0 w-[520px] h-[520px] bg-primary/10 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div class="max-w-xl">
                    <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                        <i class="ri-play-circle-line"></i>
                        Get Started
                    </span>
                    <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                        How to Start Your
                        <span class="text-primary">Symfony Project</span> with Techonika
                    </h2>
                    <p class="mt-6 text-white/70 text-lg leading-relaxed">
                        Here’s exactly what happens from your first message to your application going live.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <button @click="$dispatch('open-modal', { to: 'contact' })"
                                class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-primary text-black font-medium hover:bg-primary/90 transition">
                            Share Your Requirements
                            <i class="ri-arrow-right-line"></i>
                        </button>
                        <a href="{{ route('portfolio') }}"
                           class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl border border-white/15 text-white/80 hover:bg-white/5 transition">
                            View Portfolio
                            <i class="ri-arrow-right-up-line text-primary"></i>
                        </a>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <h3 class="font-medium">Step 1: Share What You're Building</h3>
                        <p class="mt-2 text-white/65 text-sm leading-relaxed">
                            Fill out our contact form or reach us on WhatsApp. Tell us what you want to build, who will use it, what systems it needs to connect to, and your rough timeline. A detailed brief helps us respond faster and more accurately.
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <h3 class="font-medium">Step 2: Free Technical Consultation with Our Symfony Team</h3>
                        <p class="mt-2 text-white/65 text-sm leading-relaxed">
                            We schedule a call to go deeper into your project. We ask technical questions, suggest the right Symfony approach for your requirements, and give you an honest view of what the project involves.
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <h3 class="font-medium">Step 3: Review Your Proposal and Cost Breakdown</h3>
                        <p class="mt-2 text-white/65 text-sm leading-relaxed">
                            We send a clear proposal with the full scope of work, the Symfony version and architecture we recommend, a milestone-based timeline, and a cost breakdown. Everything is written in plain language.
                        </p>
                    </div>
                    <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                        <h3 class="font-medium">Step 4: We Start Development</h3>
                        <p class="mt-2 text-white/65 text-sm leading-relaxed">
                            Once you approve the proposal, we start the project. You get access to a project tracker, weekly updates, and a direct line to your project owner throughout the entire build.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ open: 1 }">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase">
                    <i class="ri-questionnaire-line"></i>
                    FAQ
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Frequently Asked Questions About
                    <span class="text-primary">Symfony Development</span>
                </h2>
            </div>

            <div class="mt-14 space-y-4">
                @php
                    $faqs = [
                        [
                            'q' => 'What is Symfony and what kind of projects is it built for?',
                            'a' => 'Symfony is a PHP framework designed for building complex, long-running web applications. It\'s best suited for enterprise platforms, SaaS products, API-heavy systems, B2B portals, and any project where code quality and long-term maintainability are as important as delivery speed. It\'s not the best choice for simple websites or small apps where speed of setup matters more than structure.',
                        ],
                        [
                            'q' => 'Which version of Symfony do you develop on?',
                            'a' => 'We develop on Symfony 6.x for new projects, which is the current Long-Term Support version. We also work on Symfony 5.x for projects still on that version. For clients on older versions (Symfony 3.x or 4.x), we provide migration services to bring the application up to a supported version. Running an end-of-life Symfony version is a security risk and we always recommend upgrading.',
                        ],
                        [
                            'q' => 'How long does a Symfony web application take to build?',
                            'a' => 'A standard Symfony portal or API application typically takes 6 to 10 weeks from discovery to launch. A mid-size application with custom features and three to four integrations usually takes 12 to 18 weeks. An enterprise platform with multi-tenancy, complex workflows, and five or more integrations can take 20 to 30 weeks. Timelines depend on how detailed your requirements are upfront and how quickly feedback is given during the build.',
                        ],
                        [
                            'q' => 'Can you migrate our existing PHP or Symfony project to a newer version?',
                            'a' => 'Yes. We handle migrations from legacy custom PHP codebases to Symfony, and we upgrade existing Symfony applications from older versions to the current LTS version. The process starts with a full code audit so we understand what\'s there before we change anything. We migrate features incrementally and test thoroughly before moving anything to production.',
                        ],
                        [
                            'q' => 'Is Symfony good for eCommerce development?',
                            'a' => 'Yes, for the right kind of eCommerce project. Symfony works well for custom eCommerce platforms where the business logic is too complex for a standard platform like Shopify or WooCommerce. If you need custom pricing engines, complex product configurations, multi-warehouse inventory, or tight integration with an ERP system, a Symfony-based platform gives you the flexibility to build exactly what you need.',
                        ],
                        [
                            'q' => 'How does Symfony handle third-party API and ERP integrations?',
                            'a' => 'Symfony has a built-in HTTP client and a service container that makes integrating external systems clean and maintainable. We\'ve connected Symfony applications to SAP, Salesforce, HubSpot, Razorpay, Stripe, DHL, FedEx, and dozens of other platforms. Each integration is built as a separate Symfony service so it can be tested, swapped, or updated without affecting the rest of the application.',
                        ],
                        [
                            'q' => 'Can we hire a dedicated Symfony developer from your team?',
                            'a' => 'Yes. You can hire dedicated Symfony developers on a monthly retainer who work full-time and communicate directly with your team.',
                        ],
                        [
                            'q' => 'Is Symfony open source and free to use?',
                            'a' => 'Yes. Symfony is MIT licensed with no framework licensing fees. Costs come from development time, hosting, and ongoing maintenance.',
                        ],
                        [
                            'q' => 'How do you make sure the Symfony code you deliver is maintainable?',
                            'a' => 'We follow PSR coding standards, write clear inline documentation, use Git for version control, and deliver a full technical documentation package with every project. We separate concerns properly so business logic, database queries, and presentation code live in their right places. Any Symfony developer should be able to pick up our code and understand it within a few hours.',
                        ],
                    ];
                @endphp

                @foreach($faqs as $i => $faq)
                    <div class="bg-white/5 border border-white/10 rounded-2xl backdrop-blur-xl transition hover:border-primary/20">
                        <button @click="open === {{ $i + 1 }} ? open = null : open = {{ $i + 1 }}"
                                class="w-full flex justify-between items-center px-6 py-5 text-left group">
                            <span class="font-medium group-hover:text-primary transition-colors">{{ $faq['q'] }}</span>
                            <i class="text-primary text-xl transition-transform" :class="open === {{ $i + 1 }} ? 'ri-subtract-line' : 'ri-add-line'"></i>
                        </button>
                        <div x-show="open === {{ $i + 1 }}" x-collapse class="px-6 pb-5 text-white/65 leading-relaxed text-sm sm:text-base">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden text-center">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[720px] h-[260px] bg-primary/20 blur-[200px] rounded-full"></div>
        <div class="relative max-w-4xl mx-auto px-6">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
                Ready to Build Your
                <span class="text-primary">Symfony Application</span>?
            </h2>
            <p class="mt-8 text-white/70 text-lg leading-relaxed max-w-3xl mx-auto">
                Reach out to our Symfony team today and we’ll get back to you within one business day.
            </p>
            <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
                <button @click="$dispatch('open-modal', { to: 'contact' })"
                        class="inline-flex items-center justify-center gap-2 px-12 py-4 rounded-xl bg-primary text-black font-medium hover:bg-primary/90 transition">
                    Get Free Consultation
                    <i class="ri-arrow-right-line"></i>
                </button>
                <a href="mailto:info@techonika.com"
                   class="inline-flex items-center justify-center gap-2 px-10 py-4 rounded-xl border border-white/15 text-white/80 hover:bg-white/5 transition">
                    <i class="ri-mail-line"></i>
                    Email Us
                </a>
            </div>
        </div>
    </section>
</div>

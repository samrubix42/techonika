<div>
<section class="relative bg-black text-white py-24 overflow-hidden">
    <!-- Ambient Glows -->
    <div class="absolute -top-52 -left-52 w-[600px] h-[600px] bg-primary/25 blur-[160px] rounded-full"></div>
    <div class="absolute top-1/2 right-[-200px] w-[500px] h-[500px] bg-primary/10 blur-[140px] rounded-full"></div>

    <!-- Subtle Grid -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-[size:40px_40px] opacity-[0.15]"></div>

    <div class="relative max-w-6xl mx-auto px-4">
        <!-- Stack Badge -->
        <div class="inline-flex items-center gap-3 mb-8 px-4 py-2 rounded-full border border-white/15 bg-white/5 text-sm">
            <i class="ri-stack-line text-primary text-base"></i>
            <span class="text-primary font-medium">MERN Stack</span>
            <span class="text-white/50 hidden sm:inline">MongoDB • Express • React • Node</span>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight max-w-4xl">
            Scalable <span class="text-primary">MERN Applications</span><br>
            Built for Performance
        </h1>

        <p class="mt-6 text-white/75 max-w-2xl leading-relaxed text-lg">
            We design and develop high-performance MERN stack applications that are
            secure, scalable, and engineered for long-term business growth.
        </p>

        <!-- CTAs -->
        <div class="mt-12 flex flex-wrap items-center gap-4">
            <a @click="$dispatch('open-modal', { to: 'contact' })"
               class="group px-8 py-3 bg-primary text-black font-medium rounded-full flex items-center gap-2 transition hover:scale-105">
                <i class="ri-rocket-line text-lg"></i>
                Start Your Project
                <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
            </a>

            <a href="{{ route('portfolio') }}"
               class="px-8 py-3 border border-white/20 rounded-full hover:bg-white/5 transition flex items-center gap-2">
                <i class="ri-git-merge-line"></i>
                View work
            </a>
        </div>

        <!-- Trust / Highlights -->
        <div class="mt-14 flex flex-wrap gap-6 text-sm text-white/70">
            <div class="flex items-center gap-2">
                <i class="ri-flashlight-line text-primary"></i>
                Fast Performance
            </div>
            <div class="flex items-center gap-2">
                <i class="ri-shield-check-line text-primary"></i>
                Secure Architecture
            </div>
            <div class="flex items-center gap-2">
                <i class="ri-line-chart-line text-primary"></i>
                Scalable Systems
            </div>
            <div class="flex items-center gap-2">
                <i class="ri-code-line text-primary"></i>
                Clean Code
            </div>
        </div>
    </div>
</section>

<section class="relative bg-black py-12 overflow-hidden">
    <!-- Ambient Glow -->
    <div class="absolute -top-32 -right-32 w-[420px] h-[420px] bg-primary/15 blur-[140px] rounded-full"></div>

    <div class="relative max-w-6xl mx-auto px-4 grid lg:grid-cols-2 gap-20 items-center">

        <!-- LEFT CONTENT -->
        <div>
            <span class="inline-flex items-center gap-2 text-primary text-sm mb-4">
                <i class="ri-stack-line"></i>
                Technology Choice
            </span>

            <h2 class="text-3xl sm:text-4xl font-semibold text-white leading-tight">
                Why Businesses Choose the<br>
                <span class="text-primary">MERN Stack</span>
            </h2>

            <p class="mt-6 text-white/75 leading-relaxed max-w-xl">
                MERN is a modern JavaScript-based technology stack that enables us to
                build fast, scalable, and maintainable applications using a single,
                unified development ecosystem.
            </p>

            <!-- BENEFITS -->
            <div class="mt-10 grid sm:grid-cols-2 gap-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/15 text-primary">
                        <i class="ri-code-s-slash-line"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-medium">Single Language</h4>
                        <p class="text-sm text-white/70">JavaScript across frontend & backend</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/15 text-primary">
                        <i class="ri-speed-line"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-medium">High Performance</h4>
                        <p class="text-sm text-white/70">Optimized & scalable architecture</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/15 text-primary">
                        <i class="ri-rocket-line"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-medium">Startup Friendly</h4>
                        <p class="text-sm text-white/70">Perfect for MVPs & SaaS products</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/15 text-primary">
                        <i class="ri-plug-line"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-medium">API Driven</h4>
                        <p class="text-sm text-white/70">Real-time & microservice ready</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT STACK CARDS -->
        <div class="grid grid-cols-2 gap-6">
            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                <div class="flex items-center gap-3 mb-4">
                    <i class="ri-database-2-line text-2xl text-primary"></i>
                    <h4 class="text-white font-medium">MongoDB</h4>
                </div>
                <p class="text-sm text-white/70">
                    Flexible NoSQL database for high-speed data handling.
                </p>
            </div>

            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                <div class="flex items-center gap-3 mb-4">
                    <i class="ri-server-line text-2xl text-primary"></i>
                    <h4 class="text-white font-medium">Express.js</h4>
                </div>
                <p class="text-sm text-white/70">
                    Lightweight backend framework for APIs & logic.
                </p>
            </div>

            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                <div class="flex items-center gap-3 mb-4">
                    <i class="ri-reactjs-line text-2xl text-primary"></i>
                    <h4 class="text-white font-medium">React.js</h4>
                </div>
                <p class="text-sm text-white/70">
                    Dynamic UI components for seamless user experience.
                </p>
            </div>

            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                <div class="flex items-center gap-3 mb-4">
                    <i class="ri-nodejs-line text-2xl text-primary"></i>
                    <h4 class="text-white font-medium">Node.js</h4>
                </div>
                <p class="text-sm text-white/70">
                    Fast, event-driven server-side runtime environment.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="relative bg-black py-12 overflow-hidden">
    <!-- Glow -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-primary/10 blur-[140px] rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="max-w-2xl mb-16">
            <span class="inline-flex items-center gap-2 text-primary text-sm mb-4">
                <i class="ri-service-line"></i>
                What We Offer
            </span>

            <h2 class="text-3xl sm:text-4xl font-semibold text-white leading-tight">
                Our <span class="text-primary">MERN Development</span> Services
            </h2>

            <p class="mt-4 text-white/70 leading-relaxed">
                From idea to scale, we deliver end-to-end MERN stack solutions designed
                for performance, security, and growth.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card -->
            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/15 text-primary mb-6">
                    <i class="ri-stack-line text-xl"></i>
                </div>
                <h3 class="text-xl font-medium text-white">Custom MERN Apps</h3>
                <p class="mt-3 text-white/70">
                    Fully customized web applications aligned with your business goals.
                </p>
            </div>

            <!-- Card -->
            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/15 text-primary mb-6">
                    <i class="ri-reactjs-line text-xl"></i>
                </div>
                <h3 class="text-xl font-medium text-white">React Frontend</h3>
                <p class="mt-3 text-white/70">
                    Interactive, fast, and SEO-friendly frontend experiences.
                </p>
            </div>

            <!-- Card -->
            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/15 text-primary mb-6">
                    <i class="ri-server-line text-xl"></i>
                </div>
                <h3 class="text-xl font-medium text-white">Node & Express APIs</h3>
                <p class="mt-3 text-white/70">
                    Secure, scalable APIs built for performance and reliability.
                </p>
            </div>

            <!-- Card -->
            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/15 text-primary mb-6">
                    <i class="ri-database-2-line text-xl"></i>
                </div>
                <h3 class="text-xl font-medium text-white">MongoDB Architecture</h3>
                <p class="mt-3 text-white/70">
                    Optimized data structures for speed, flexibility, and scale.
                </p>
            </div>

            <!-- Card -->
            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/15 text-primary mb-6">
                    <i class="ri-rocket-line text-xl"></i>
                </div>
                <h3 class="text-xl font-medium text-white">SaaS Development</h3>
                <p class="mt-3 text-white/70">
                    MVPs, dashboards, subscriptions, and scalable SaaS platforms.
                </p>
            </div>

            <!-- Card -->
            <div class="group p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/15 text-primary mb-6">
                    <i class="ri-line-chart-line text-xl"></i>
                </div>
                <h3 class="text-xl font-medium text-white">Maintenance & Scaling</h3>
                <p class="mt-3 text-white/70">
                    Continuous monitoring, optimization, and long-term support.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="relative bg-black py-28 overflow-hidden">
    <!-- Glow Effects -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-primary/20 blur-[160px] rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-primary/10 blur-[140px] rounded-full"></div>

    <div class="relative max-w-6xl mx-auto px-4">
        <div class="bg-white/5 border border-white/10 rounded-3xl p-10 sm:p-14 text-center">
            
            <!-- Icon -->
            <div class="mx-auto w-14 h-14 flex items-center justify-center rounded-2xl bg-primary/15 text-primary mb-6">
                <i class="ri-rocket-line text-2xl"></i>
            </div>

            <!-- Heading -->
            <h2 class="text-3xl sm:text-4xl font-semibold text-white leading-tight">
                Ready to Build Your <span class="text-primary">MERN Application?</span>
            </h2>

            <!-- Text -->
            <p class="mt-5 text-white/70 max-w-2xl mx-auto leading-relaxed">
                Whether you're launching a startup, scaling a SaaS platform, or upgrading
                an existing system, our MERN experts are ready to turn your idea into
                a powerful, scalable product.
            </p>

            <!-- CTA Buttons -->
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a @click="$dispatch('open-modal', { to: 'contact' })"
                   class="group inline-flex items-center gap-2 px-8 py-3 bg-primary text-black font-medium rounded-full transition hover:scale-105">
                    <i class="ri-chat-3-line"></i>
                    Get Free Consultation
                    <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
                </a>

                <a href="{{ route('portfolio') }}"
                   class="inline-flex items-center gap-2 px-8 py-3 border border-white/20 rounded-full text-white hover:bg-white/5 transition">
                    <i class="ri-eye-line"></i>
                    View Our Work
                </a>
            </div>

            <!-- Trust Signals -->
            <div class="mt-10 flex flex-wrap justify-center gap-6 text-sm text-white/60">
                <div class="flex items-center gap-2">
                    <i class="ri-check-line text-primary"></i>
                    Free Project Consultation
                </div>
                <div class="flex items-center gap-2">
                    <i class="ri-check-line text-primary"></i>
                    Clear Pricing
                </div>
                <div class="flex items-center gap-2">
                    <i class="ri-check-line text-primary"></i>
                    Fast Turnaround
                </div>
            </div>

        </div>
    </div>
</section>

</div>

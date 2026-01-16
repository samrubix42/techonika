<div>
    <section class="relative bg-black text-white py-24 overflow-hidden">
        <!-- Glow -->
        <div class="absolute -top-52 -left-52 w-[600px] h-[600px] bg-primary/20 blur-[160px] rounded-full"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-primary/10 blur-[140px] rounded-full"></div>

        <!-- Subtle Grid -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-[size:40px_40px] opacity-[0.15]"></div>

        <div class="relative max-w-6xl mx-auto px-4">
            <!-- Badge -->
            <div class="inline-flex items-center gap-3 mb-8 px-4 py-2 rounded-full border border-white/15 bg-white/5 text-sm">
                <i class="ri-wordpress-line text-primary"></i>
                <span class="text-primary font-medium">WordPress Development</span>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight max-w-4xl">
                Custom <span class="text-primary">WordPress Websites</span><br>
                Built for Growth
            </h1>

            <p class="mt-6 text-white/75 max-w-2xl leading-relaxed text-lg">
                We build fast, secure, and scalable WordPress websites tailored to your
                business goals — from corporate sites to WooCommerce stores.
            </p>

            <!-- CTAs -->
            <div class="mt-12 flex flex-wrap items-center gap-4">
                <a @click="$dispatch('open-modal', { to: 'contact' })"
                    class="group px-8 py-3 bg-primary text-black font-medium rounded-full flex items-center gap-2 transition hover:scale-105">
                    <i class="ri-chat-3-line"></i>
                    Get Free Consultation
                    <i class="ri-arrow-right-line transition group-hover:translate-x-1"></i>
                </a>

                <a href="{{ route('portfolio') }}"
                    class="px-8 py-3 border border-white/20 rounded-full hover:bg-white/5 transition flex items-center gap-2">
                    <i class="ri-layout-line"></i>
                    View work
                </a>
            </div>
        </div>
    </section>
    <section class="relative bg-black py-12 overflow-hidden">
        <!-- Ambient Effects -->
        <div class="absolute -top-56 -right-56 w-[600px] h-[600px] bg-primary/20 blur-[180px] rounded-full"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,rgba(255,255,255,0.06),transparent_40%)]"></div>

        <div class="relative max-w-6xl mx-auto px-4 grid lg:grid-cols-2 gap-24 items-center">

            <!-- LEFT CONTENT -->
            <div>
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-white/5 border border-white/10 text-sm">
                    <i class="ri-wordpress-line text-primary"></i>
                    <span class="text-primary font-medium">Why WordPress</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-semibold text-white leading-tight max-w-xl">
                    The Smart Platform for<br>
                    <span class="text-primary">Modern Business Websites</span>
                </h2>

                <p class="mt-6 text-white/75 max-w-xl leading-relaxed">
                    WordPress is the world’s most trusted content management system,
                    offering unmatched flexibility, scalability, and ease of use for
                    businesses of all sizes.
                </p>

                <!-- BENEFITS -->
                <div class="mt-12 space-y-6">
                    <div class="flex items-start gap-5">
                        <div class="w-11 h-11 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-pencil-ruler-2-line"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium">Simple Content Management</h4>
                            <p class="text-sm text-white/70">
                                Easily manage pages, blogs, and media without technical expertise.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-11 h-11 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-speed-line"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium">SEO & Performance Ready</h4>
                            <p class="text-sm text-white/70">
                                Built-in SEO structure with optimization for speed and rankings.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-11 h-11 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-lock-2-line"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium">Secure & Reliable</h4>
                            <p class="text-sm text-white/70">
                                Regular updates, security best practices, and safe deployments.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-11 h-11 rounded-xl bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-store-2-line"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium">Commerce & Growth Ready</h4>
                            <p class="text-sm text-white/70">
                                Sell products, services, and subscriptions using WooCommerce.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT FEATURE CARDS -->
            <div class="grid grid-cols-2 gap-6">
                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-layout-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">Custom Themes</h4>
                    <p class="mt-2 text-sm text-white/70">
                        Brand-focused UI designed for conversions.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-plug-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">Plugin Development</h4>
                    <p class="mt-2 text-sm text-white/70">
                        Custom functionality tailored to your needs.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-shopping-cart-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">WooCommerce</h4>
                    <p class="mt-2 text-sm text-white/70">
                        Powerful eCommerce stores that scale.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-bar-chart-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">Performance Optimization</h4>
                    <p class="mt-2 text-sm text-white/70">
                        Faster load times and better user experience.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="relative bg-black py-12 overflow-hidden">
        <!-- Ambient Glow -->
        <div class="absolute -top-48 left-1/2 -translate-x-1/2 w-[520px] h-[520px] bg-primary/15 blur-[160px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4">
            <!-- Section Header -->
            <div class="max-w-2xl mb-16">
                <span class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-white/5 border border-white/10 text-sm">
                    <i class="ri-wordpress-line text-primary"></i>
                    <span class="text-primary font-medium">WordPress Services</span>
                </span>

                <h2 class="text-3xl sm:text-4xl font-semibold text-white leading-tight">
                    Our <span class="text-primary">WordPress Development</span> Services
                </h2>

                <p class="mt-4 text-white/70 leading-relaxed">
                    We deliver high-performance WordPress solutions focused on usability,
                    scalability, and business growth.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card -->
                <div class="group relative p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                            <i class="ri-layout-line text-xl"></i>
                        </div>
                        <h3 class="text-xl text-white font-medium">Custom WordPress Websites</h3>
                        <p class="mt-3 text-white/70">
                            Fully custom websites designed for branding and conversions.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                            <i class="ri-paint-brush-line text-xl"></i>
                        </div>
                        <h3 class="text-xl text-white font-medium">Theme Development</h3>
                        <p class="mt-3 text-white/70">
                            Lightweight, fast, and scalable custom WordPress themes.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                            <i class="ri-plug-line text-xl"></i>
                        </div>
                        <h3 class="text-xl text-white font-medium">Plugin Development</h3>
                        <p class="mt-3 text-white/70">
                            Custom plugins built for unique business requirements.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                            <i class="ri-shopping-cart-line text-xl"></i>
                        </div>
                        <h3 class="text-xl text-white font-medium">WooCommerce Stores</h3>
                        <p class="mt-3 text-white/70">
                            Scalable online stores with payments & inventory.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                            <i class="ri-speed-line text-xl"></i>
                        </div>
                        <h3 class="text-xl text-white font-medium">Speed Optimization</h3>
                        <p class="mt-3 text-white/70">
                            Faster loading times and better Core Web Vitals.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 bg-white/5 rounded-2xl border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="w-12 h-12 mb-6 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                            <i class="ri-shield-check-line text-xl"></i>
                        </div>
                        <h3 class="text-xl text-white font-medium">Maintenance & Security</h3>
                        <p class="mt-3 text-white/70">
                            Ongoing updates, backups, and security monitoring.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black py-12 border-t border-white/10 overflow-hidden">
        <!-- Subtle Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[520px] h-[520px] bg-primary/10 blur-[160px] rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4">
            <!-- Section Header -->
            <div class="max-w-2xl mb-20">
                <span class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-white/5 border border-white/10 text-sm">
                    <i class="ri-git-merge-line text-primary"></i>
                    <span class="text-primary font-medium">Our Workflow</span>
                </span>

                <h2 class="text-3xl sm:text-4xl font-semibold text-white leading-tight">
                    Our <span class="text-primary">Development Process</span>
                </h2>

                <p class="mt-4 text-white/70 leading-relaxed">
                    A structured and transparent process that ensures quality,
                    efficiency, and timely delivery.
                </p>
            </div>

            <!-- Process Steps -->
            <div class="grid md:grid-cols-4 gap-8">

                <!-- Step 01 -->
                <div class="group relative p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                                <i class="ri-search-line text-xl"></i>
                            </div>
                            <span class="text-primary text-xl font-semibold">01</span>
                        </div>

                        <h4 class="text-white font-medium text-lg">Discovery</h4>
                        <p class="mt-3 text-sm text-white/70">
                            Understanding your goals, audience, and business requirements.
                        </p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="group relative p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                                <i class="ri-pencil-ruler-2-line text-xl"></i>
                            </div>
                            <span class="text-primary text-xl font-semibold">02</span>
                        </div>

                        <h4 class="text-white font-medium text-lg">Design</h4>
                        <p class="mt-3 text-sm text-white/70">
                            Creating intuitive UI/UX aligned with your brand identity.
                        </p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="group relative p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                                <i class="ri-code-s-slash-line text-xl"></i>
                            </div>
                            <span class="text-primary text-xl font-semibold">03</span>
                        </div>

                        <h4 class="text-white font-medium text-lg">Development</h4>
                        <p class="mt-3 text-sm text-white/70">
                            Clean, optimized WordPress development with best practices.
                        </p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="group relative p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition">
                    <div class="absolute inset-0 rounded-2xl bg-primary/5 opacity-0 group-hover:opacity-100 transition"></div>

                    <div class="relative">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center">
                                <i class="ri-rocket-line text-xl"></i>
                            </div>
                            <span class="text-primary text-xl font-semibold">04</span>
                        </div>

                        <h4 class="text-white font-medium text-lg">Launch & Support</h4>
                        <p class="mt-3 text-sm text-white/70">
                            Testing, deployment, and continuous improvement support.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black py-20 overflow-hidden">
        <!-- Ambient Glow -->
        <div class="absolute -top-40 left-0 w-[420px] h-[420px] bg-primary/10 blur-[140px] rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4 grid lg:grid-cols-2 gap-24 items-center">

            <!-- LEFT CONTENT -->
            <div>
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-white/5 border border-white/10 text-sm">
                    <i class="ri-group-line text-primary"></i>
                    <span class="text-primary font-medium">Ideal For</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-semibold text-white leading-tight max-w-xl">
                    Who Should Use <span class="text-primary">WordPress</span>?
                </h2>

                <p class="mt-6 text-white/75 max-w-xl leading-relaxed">
                    WordPress is the perfect choice for individuals and businesses
                    seeking flexibility, scalability, and cost-effective web solutions.
                </p>

                <!-- Benefit List -->
                <div class="mt-10 space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-9 h-9 rounded-lg bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-building-line"></i>
                        </div>
                        <p class="text-white/70">Business & corporate websites</p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-9 h-9 rounded-lg bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-rocket-line"></i>
                        </div>
                        <p class="text-white/70">Startups & small businesses</p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-9 h-9 rounded-lg bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-article-line"></i>
                        </div>
                        <p class="text-white/70">Blogs & content-driven platforms</p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-9 h-9 rounded-lg bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-store-2-line"></i>
                        </div>
                        <p class="text-white/70">WooCommerce eCommerce stores</p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-9 h-9 rounded-lg bg-primary/15 text-primary flex items-center justify-center shrink-0">
                            <i class="ri-user-star-line"></i>
                        </div>
                        <p class="text-white/70">Personal brands & creators</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT CARDS -->
            <div class="grid grid-cols-2 gap-6">
                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-building-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">Businesses</h4>
                    <p class="mt-2 text-sm text-white/70">
                        Professional websites that build trust.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-rocket-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">Startups</h4>
                    <p class="mt-2 text-sm text-white/70">
                        MVPs and scalable early-stage platforms.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-store-2-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">eCommerce</h4>
                    <p class="mt-2 text-sm text-white/70">
                        Flexible online stores with WooCommerce.
                    </p>
                </div>

                <div class="group p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 hover:bg-white/10 transition">
                    <div class="w-12 h-12 rounded-xl bg-primary/15 text-primary flex items-center justify-center mb-5">
                        <i class="ri-user-star-line text-xl"></i>
                    </div>
                    <h4 class="text-white font-medium">Creators</h4>
                    <p class="mt-2 text-sm text-white/70">
                        Personal brands, portfolios, and blogs.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="relative bg-black py-24">
        <div class="absolute inset-0 bg-primary/10 blur-[160px]"></div>

        <div class="relative max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl sm:text-4xl font-semibold text-white">
                Let’s Build Your <span class="text-primary">WordPress Website</span>
            </h2>

            <p class="mt-4 text-white/70 max-w-xl mx-auto">
                Get a fast, secure, and conversion-focused WordPress site
                built by experienced professionals.
            </p>

            <a @click="$dispatch('open-modal', { to: 'contact' })" 
                class="inline-flex items-center gap-2 mt-10 px-8 py-3 bg-primary text-black rounded-full hover:scale-105 transition">
                <i class="ri-chat-3-line"></i>
                Get Free Consultation
            </a>
        </div>
    </section>

</div>
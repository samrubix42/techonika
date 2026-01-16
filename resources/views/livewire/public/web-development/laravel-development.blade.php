<div>
    <!-- Hero Section - Fully Responsive -->
    <section class="relative bg-black text-white py-20 sm:py-20 md:py-24 lg:py-28 overflow-hidden">
        <!-- Glow -->
        <div class="absolute -top-40 -left-40 w-[300px] h-[300px] sm:w-[400px] sm:h-[400px] lg:w-[500px] lg:h-[500px] bg-primary/20 blur-[120px] rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-semibold leading-tight">
                Laravel Development <br class="hidden sm:block">
                <span class="text-primary">Built for Scale & Speed</span>
            </h1>

            <p class="mt-4 sm:mt-6 max-w-2xl text-base sm:text-lg text-white/70 leading-relaxed">
                We craft secure, high-performance Laravel applications with clean architecture,
                modern tooling, and long-term scalability in mind.
            </p>

            <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row gap-3 sm:gap-4">
                <a
                    @click="$dispatch('open-modal', { to: 'contact' })" 
                    class="inline-flex items-center justify-center gap-2 bg-primary text-black px-6 sm:px-8 py-3 sm:py-3.5 rounded-full font-medium hover:scale-105 transition text-sm sm:text-base">
                    <i class="ri-rocket-line text-lg sm:text-xl"></i>
                    <span>Start Your Project</span>
                </a>

                <a
                    href="{{ route('portfolio') }}"
                    class="inline-flex items-center justify-center gap-2 border border-white/15 px-6 sm:px-8 py-3 sm:py-3.5 rounded-full text-white/80 hover:border-primary hover:text-primary transition text-sm sm:text-base">
                    <i class="ri-eye-line text-lg sm:text-xl"></i>
                    <span>View Work</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section - Fully Responsive -->
    <section class="bg-black text-white py-12 sm:py-16 md:py-20 border-t border-white/10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-semibold mb-8 sm:mb-12 md:mb-14 text-center sm:text-left">
                Laravel Development <span class="text-primary">Services</span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">

                <!-- Card -->
                <div class="group border border-white/10 p-5 sm:p-6 md:p-7 rounded-xl sm:rounded-2xl hover:border-primary/40 transition">
                    <i class="ri-code-box-line text-primary text-2xl sm:text-3xl mb-3 sm:mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-medium mb-2">Custom Web Applications</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Tailor-made Laravel applications built for performance, security, and scale.
                    </p>
                </div>

                <div class="group border border-white/10 p-5 sm:p-6 md:p-7 rounded-xl sm:rounded-2xl hover:border-primary/40 transition">
                    <i class="ri-plug-line text-primary text-2xl sm:text-3xl mb-3 sm:mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-medium mb-2">API Development</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Robust REST & JSON APIs for mobile apps and third-party integrations.
                    </p>
                </div>

                <div class="group border border-white/10 p-5 sm:p-6 md:p-7 rounded-xl sm:rounded-2xl hover:border-primary/40 transition">
                    <i class="ri-dashboard-line text-primary text-2xl sm:text-3xl mb-3 sm:mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-medium mb-2">SaaS Platforms</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Subscription systems, billing, roles, permissions, and admin dashboards.
                    </p>
                </div>

                <div class="group border border-white/10 p-5 sm:p-6 md:p-7 rounded-xl sm:rounded-2xl hover:border-primary/40 transition">
                    <i class="ri-speed-up-line text-primary text-2xl sm:text-3xl mb-3 sm:mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-medium mb-2">Performance Optimization</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Query tuning, caching, queues, and infrastructure optimization.
                    </p>
                </div>

                <div class="group border border-white/10 p-5 sm:p-6 md:p-7 rounded-xl sm:rounded-2xl hover:border-primary/40 transition">
                    <i class="ri-shield-check-line text-primary text-2xl sm:text-3xl mb-3 sm:mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-medium mb-2">Security & Maintenance</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Secure authentication, authorization, updates, and long-term support.
                    </p>
                </div>

                <div class="group border border-white/10 p-5 sm:p-6 md:p-7 rounded-xl sm:rounded-2xl hover:border-primary/40 transition">
                    <i class="ri-layout-masonry-line text-primary text-2xl sm:text-3xl mb-3 sm:mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-medium mb-2">Laravel + Frontend</h3>
                    <p class="text-sm text-white/70 leading-relaxed">
                        Laravel with Livewire, Alpine.js, or modern frontend stacks.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Section - Fully Responsive -->
    <section class="relative bg-black text-white py-12 sm:py-16 md:py-20 lg:py-24 overflow-hidden border-t border-white/10">

        <!-- Background Glow -->
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[400px] h-[200px] sm:w-[500px] sm:h-[250px] lg:w-[600px] lg:h-[300px] bg-primary/15 blur-[120px] rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16">

            <!-- LEFT CONTENT -->
            <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold mb-4 sm:mb-6 leading-tight">
                    Why Choose <span class="text-primary">Techonika</span>
                </h2>

                <p class="text-white/70 leading-relaxed max-w-xl text-sm sm:text-base">
                    We don’t just build Laravel applications — we engineer reliable,
                    scalable systems that support your business as it grows.
                </p>

                <!-- STATS -->
                <div class="mt-6 sm:mt-8 md:mt-10 flex flex-wrap gap-4 sm:gap-6">
                    <div class="border border-white/10 rounded-xl px-4 sm:px-6 py-3 sm:py-4 flex-1 min-w-[140px]">
                        <p class="text-primary text-xl sm:text-2xl font-semibold">5+</p>
                        <p class="text-white/60 text-xs sm:text-sm">Years Experience</p>
                    </div>
                    <div class="border border-white/10 rounded-xl px-4 sm:px-6 py-3 sm:py-4 flex-1 min-w-[140px]">
                        <p class="text-primary text-xl sm:text-2xl font-semibold">50+</p>
                        <p class="text-white/60 text-xs sm:text-sm">Projects Delivered</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT FEATURES -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">

                <!-- ITEM -->
                <div class="group flex items-start gap-3 sm:gap-4 p-4 sm:p-5 md:p-6 rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 backdrop-blur hover:border-primary/40 hover:-translate-y-1 transition">

                    <div class="icon-wrap relative grid place-items-center h-9 w-9 sm:h-10 sm:w-10 aspect-square rounded-full bg-primary/15 text-primary overflow-hidden transition group-hover:bg-primary group-hover:text-black flex-shrink-0">
                        <span class="absolute inset-0 rounded-full border border-white/15 group-hover:border-primary/40 transition"></span>
                        <i class="ri-stack-line icon relative z-10 text-base sm:text-lg"></i>
                    </div>

                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium mb-1 text-sm sm:text-base">Clean Architecture</h4>
                        <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                            Maintainable Laravel structure with clear separation of concerns.
                        </p>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="group flex items-start gap-3 sm:gap-4 p-4 sm:p-5 md:p-6 rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 backdrop-blur hover:border-primary/40 hover:-translate-y-1 transition">

                    <div class="icon-wrap relative grid place-items-center h-9 w-9 sm:h-10 sm:w-10 aspect-square rounded-full bg-primary/15 text-primary overflow-hidden transition group-hover:bg-primary group-hover:text-black flex-shrink-0">
                        <span class="absolute inset-0 rounded-full border border-white/15 group-hover:border-primary/40 transition"></span>
                        <i class="ri-database-2-line icon relative z-10 text-base sm:text-lg"></i>
                    </div>

                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium mb-1 text-sm sm:text-base">Scalable Backend</h4>
                        <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                            Databases and APIs designed to scale without rewrites.
                        </p>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="group flex items-start gap-3 sm:gap-4 p-4 sm:p-5 md:p-6 rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 backdrop-blur hover:border-primary/40 hover:-translate-y-1 transition">

                    <div class="icon-wrap relative grid place-items-center h-9 w-9 sm:h-10 sm:w-10 aspect-square rounded-full bg-primary/15 text-primary overflow-hidden transition group-hover:bg-primary group-hover:text-black flex-shrink-0">
                        <span class="absolute inset-0 rounded-full border border-white/15 group-hover:border-primary/40 transition"></span>
                        <i class="ri-chat-4-line icon relative z-10 text-base sm:text-lg"></i>
                    </div>

                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium mb-1 text-sm sm:text-base">Clear Communication</h4>
                        <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                            Transparent updates, clear timelines, no surprises.
                        </p>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="group flex items-start gap-3 sm:gap-4 p-4 sm:p-5 md:p-6 rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 backdrop-blur hover:border-primary/40 hover:-translate-y-1 transition">

                    <div class="icon-wrap relative grid place-items-center h-9 w-9 sm:h-10 sm:w-10 aspect-square rounded-full bg-primary/15 text-primary overflow-hidden transition group-hover:bg-primary group-hover:text-black flex-shrink-0">
                        <span class="absolute inset-0 rounded-full border border-white/15 group-hover:border-primary/40 transition"></span>
                        <i class="ri-cloud-line icon relative z-10 text-base sm:text-lg"></i>
                    </div>

                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium mb-1 text-sm sm:text-base">Deployment & Support</h4>
                        <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                            Server setup, deployment pipelines, and long-term support.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <style>
            /* Remix Icon Stability Fix */
            .icon {
                font-size: 18px;
                line-height: 1;
                display: block;
            }

            .icon-wrap {
                flex-shrink: 0;
            }
        </style>
    </section>


    <!-- Additional Services Section - Fully Responsive -->
    <section class="relative bg-black text-white py-12 sm:py-16 md:py-20 lg:py-24 overflow-hidden border-t border-white/10">

        <!-- Background Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[400px] h-[250px] sm:w-[550px] sm:h-[350px] lg:w-[700px] lg:h-[400px] bg-primary/10 blur-[140px] rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="max-w-2xl mb-8 sm:mb-12 md:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold leading-tight">
                    Laravel Development <span class="text-primary">Services</span>
                </h2>
                <p class="mt-3 sm:mt-4 text-white/70 text-sm sm:text-base">
                    End-to-end Laravel solutions designed for performance, security,
                    and long-term scalability.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">

                <!-- Card -->
                <div
                    class="group relative rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 p-5 sm:p-6 md:p-8 backdrop-blur transition
               hover:-translate-y-2 hover:border-primary/40">

                    <!-- Icon -->
                    <div
                        class="mb-4 sm:mb-5 md:mb-6 inline-flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-lg sm:rounded-xl
                 bg-primary/15 text-primary text-2xl sm:text-3xl group-hover:bg-primary group-hover:text-black transition">
                        <i class="ri-code-box-line"></i>
                    </div>

                    <h3 class="text-lg sm:text-xl font-medium mb-2 sm:mb-3">
                        Custom Web Applications
                    </h3>

                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Robust Laravel applications tailored to your business workflows,
                        built for speed and future growth.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group relative rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 p-5 sm:p-6 md:p-8 backdrop-blur transition
               hover:-translate-y-2 hover:border-primary/40">

                    <div
                        class="mb-4 sm:mb-5 md:mb-6 inline-flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-lg sm:rounded-xl
                 bg-primary/15 text-primary text-2xl sm:text-3xl group-hover:bg-primary group-hover:text-black transition">
                        <i class="ri-plug-line"></i>
                    </div>

                    <h3 class="text-lg sm:text-xl font-medium mb-2 sm:mb-3">
                        API Development
                    </h3>

                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Secure REST & JSON APIs for mobile apps, SaaS platforms,
                        and third-party integrations.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group relative rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 p-5 sm:p-6 md:p-8 backdrop-blur transition
               hover:-translate-y-2 hover:border-primary/40">

                    <div
                        class="mb-4 sm:mb-5 md:mb-6 inline-flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-lg sm:rounded-xl
                 bg-primary/15 text-primary text-2xl sm:text-3xl group-hover:bg-primary group-hover:text-black transition">
                        <i class="ri-dashboard-line"></i>
                    </div>

                    <h3 class="text-lg sm:text-xl font-medium mb-2 sm:mb-3">
                        SaaS Platforms
                    </h3>

                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Subscription systems, role management, billing,
                        and powerful admin dashboards.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group relative rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 p-5 sm:p-6 md:p-8 backdrop-blur transition
               hover:-translate-y-2 hover:border-primary/40">

                    <div
                        class="mb-4 sm:mb-5 md:mb-6 inline-flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-lg sm:rounded-xl
                 bg-primary/15 text-primary text-2xl sm:text-3xl group-hover:bg-primary group-hover:text-black transition">
                        <i class="ri-speed-up-line"></i>
                    </div>

                    <h3 class="text-lg sm:text-xl font-medium mb-2 sm:mb-3">
                        Performance Optimization
                    </h3>

                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Faster load times using caching, queues,
                        database tuning, and server optimization.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group relative rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 p-5 sm:p-6 md:p-8 backdrop-blur transition
               hover:-translate-y-2 hover:border-primary/40">

                    <div
                        class="mb-4 sm:mb-5 md:mb-6 inline-flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-lg sm:rounded-xl
                 bg-primary/15 text-primary text-2xl sm:text-3xl group-hover:bg-primary group-hover:text-black transition">
                        <i class="ri-shield-check-line"></i>
                    </div>

                    <h3 class="text-lg sm:text-xl font-medium mb-2 sm:mb-3">
                        Security & Maintenance
                    </h3>

                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Authentication, authorization, regular updates,
                        and long-term technical support.
                    </p>
                </div>

                <!-- Card -->
                <div
                    class="group relative rounded-xl sm:rounded-2xl border border-white/10 bg-white/5 p-5 sm:p-6 md:p-8 backdrop-blur transition
               hover:-translate-y-2 hover:border-primary/40">

                    <div
                        class="mb-4 sm:mb-5 md:mb-6 inline-flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-lg sm:rounded-xl
                 bg-primary/15 text-primary text-2xl sm:text-3xl group-hover:bg-primary group-hover:text-black transition">
                        <i class="ri-layout-masonry-line"></i>
                    </div>

                    <h3 class="text-lg sm:text-xl font-medium mb-2 sm:mb-3">
                        Laravel + Frontend
                    </h3>

                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Laravel paired with Livewire, Alpine.js,
                        or modern frontend frameworks.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section - Fully Responsive -->
    <section class="bg-black text-white py-16 sm:py-20 md:py-24 lg:py-28 border-t border-white/10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold mb-4 sm:mb-6">
                Ready to Build with <span class="text-primary">Laravel</span>?
            </h2>
            <p class="text-sm sm:text-base md:text-lg text-white/70 mb-8 sm:mb-10 max-w-2xl mx-auto">
                Let's turn your idea into a secure, scalable, and high-performance application.
            </p>
            <button
                @click="$dispatch('open-modal', { to: 'contact' })"
                class="inline-flex items-center justify-center gap-2 bg-primary text-black px-6 sm:px-8 py-3 sm:py-4 rounded-full font-medium hover:scale-105 transition text-sm sm:text-base">
                <i class="ri-chat-3-line text-lg sm:text-xl"></i>
                <span>Talk to Us</span>
</button>
        </div>
    </section>


</div>
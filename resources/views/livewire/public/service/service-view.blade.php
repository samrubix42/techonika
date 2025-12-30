<div class="min-h-screen bg-black text-white relative isolate overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 py-12 px-[9%] sm:py-16">
        <a href="/services" class="inline-flex items-center gap-2 text-sm text-amber-300 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Services
        </a>

        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <style>
                /* TinyMCE content helpers */
                .tinymce-content img {
                    max-width: 100%;
                    height: auto;
                    display: block;
                    margin: 0.75rem 0;
                    border-radius: 0.5rem;
                }

                .tinymce-content iframe {
                    max-width: 100%;
                }

                .tinymce-content table {
                    width: 100%;
                    border-collapse: collapse;
                }

                .tinymce-content table td,
                .tinymce-content table th {
                    border: 1px solid rgba(255, 255, 255, 0.06);
                    padding: 0.5rem;
                }

                .tinymce-content figure {
                    margin: 1rem 0;
                }

                .tinymce-content figcaption {
                    color: rgba(203, 213, 225, 1);
                    font-size: 0.875rem;
                    margin-top: 0.5rem;
                }

                /* List / marker helpers so <li> bullets are visible in dark theme and inside TinyMCE */
                .tinymce-content ul,
                .tinymce-content ol {
                    margin-top: 0.75rem;
                    margin-bottom: 0.75rem;
                    padding-left: 1.25rem;
                }

                .tinymce-content ul li,
                .tinymce-content ol li {
                    margin-top: 0.35rem;
                    line-height: 1.6;
                }

                /* Ensure markers (bullets / numbers) are visible and use amber accent (stronger specificity and !important) */
                .tinymce-content ul li::marker,
                .tinymce-content ol li::marker,
                #service-content ul li::marker,
                #service-content ol li::marker {
                    color: #f6b615 !important;
                    font-weight: 600 !important;
                }

                /* Fallback: ensure list style type if reset elsewhere */
                .tinymce-content ul {
                    list-style-type: disc !important;
                }

                .tinymce-content ol {
                    list-style-type: decimal !important;
                }

                .tinymce-content :where(h1, h2, h3, h4, h5) {
                    color: #fff;
                }
            </style>
        </div>

        <div class="mt-6">
            <h1 class="font-semibold tracking-wide leading-tight text-3xl sm:text-4xl lg:text-5xl xl:text-[64px]">SERVICE NAME</span></h1>
            <div class="flex items-center justify-between gap-3 text-sm text-slate-300 mt-3">
                <span class="inline-block px-2 py-1 rounded bg-amber-400 text-black text-xs">Category</span>
                <span>Duration: <strong class="text-white">6–12 weeks</strong></span>
            </div>
            <div class="mt-4 flex items-center justify-between gap-3">
                <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-md bg-[#f6b615] text-black font-semibold hover:brightness-110 transition">Request Proposal</a>
                <a href="#" class="flex items-center gap-1  text-primary hover:text-white">
                    Share
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                    </svg>
                </a>

            </div>
        </div>
        </header>

        <section class="mt-6">
            <!-- TinyMCE-ready content container. Initialize TinyMCE on #service-editor (textarea) or inline on #service-content -->
            <div id="service-content" class="tinymce-content prose prose-lg prose-invert text-neutral-400 text-base sm:text-lg text-justify leading-relaxed">
                <h2 class="text-2xl font-semibold text-white mb-4">Overview</h2>
                <p>This is a static service detail page that explains the offering, deliverables, processes, and outcomes. Replace with real content as needed.</p>

                <!-- Demo image placeholder -->
                <figure class="my-6">
                    <img src="https://source.unsplash.com/1200x600/?technology,work" alt="Service demo" class="w-full rounded-lg">
                    <figcaption class="text-sm text-gray-400 mt-2">Example: service implementation snapshot</figcaption>
                </figure>

                <h3 class="text-xl font-semibold text-white mt-6 mb-3">What's included</h3>
                <ul class="list-disc pl-5 marker:text-[#f6b615] marker:font-semibold space-y-1">
                    <li>Discovery &amp; planning</li>
                    <li>Design &amp; prototyping</li>
                    <li>Development &amp; QA</li>
                    <li>Deployment &amp; support</li>
                </ul>

                <blockquote>
                    <p>We deliver practical, production-ready solutions with a focus on scalability and maintainability.</p>
                </blockquote>

                <p class="mt-4">To get started, reach out for a free consultation and estimate.</p>
            </div>

            <!-- Hidden textarea for TinyMCE initialization / server-side form use -->
            <textarea id="service-editor" name="content" class="hidden" aria-hidden="true"></textarea>
        </section>

        <section class="mt-12 border-t border-white/10 pt-8">
            <h3 class="text-lg font-semibold mb-4">What our approach includes</h3>
            <div class="grid sm:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold">Discovery</h4>
                    <p class="text-sm text-slate-300 mt-1">User research, stakeholder interviews and roadmap planning.</p>
                </div>
                <div>
                    <h4 class="font-semibold">Delivery</h4>
                    <p class="text-sm text-slate-300 mt-1">Design sprints, iterative development and continuous testing.</p>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <h3 class="text-xl font-semibold mb-4">Other services in this category</h3>
            <div class="grid gap-4 sm:grid-cols-2">
                <a href="#" class="block p-4 hover:underline">
                    <h4 class="font-semibold">Service A</h4>
                    <p class="text-sm text-slate-300 mt-1">Short description of service A.</p>
                </a>

                <a href="#" class="block p-4 hover:underline">
                    <h4 class="font-semibold">Service B</h4>
                    <p class="text-sm text-slate-300 mt-1">Short description of service B.</p>
                </a>
            </div>
        </section>

        <div class="bg-black py-8 flex flex-col">
            <!-- Heading -->
            <h2 class="text-white text-4xl md:text-5xl font-bold py-10 px-6 text-center">
                Why Choose Us
            </h2>

            <section class="relative bg-black py-6 overflow-hidden bg-center bg-no-repeat bg-cover"
                style="background-image: url('{{ asset('images/lines.png') }}'); object-fit: contain;">

                <!-- Yellow blur circles -->
                <div class="absolute top-20 right-0 md:right-20 lg:right-32 w-72 h-72 bg-primary opacity-20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 left-0 md:left-20 lg:left-32 w-72 h-72 bg-primary opacity-20 rounded-full blur-3xl"></div>

                <!-- Content wrapper -->
                <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">

                    <!-- Card 1 -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-yellow-400/10">
                            <svg class="w-6 h-6 text-[#f6b615]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 21l3-1.5L15 21l-.75-4M12 3l3.09 6.26L22 10l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.87 2 10l6.91-.74L12 3z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Experienced Developers</h3>
                        <p class="text-gray-200 italic">
                            A skilled team delivering scalable, secure, and high-performance web solutions.
                        </p>
                        <a href="#" class="text-[#f6b615] font-medium hover:underline">Read More</a>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-yellow-400/10">
                            <svg class="w-6 h-6 text-[#f6b615]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10v2m0 8v2" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Custom Solutions</h3>
                        <p class="text-gray-200 italic">
                            Tailor-made development aligned with your business goals and brand identity.
                        </p>
                        <a href="#" class="text-[#f6b615] font-medium hover:underline">Read More</a>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-yellow-400/10">
                            <svg class="w-6 h-6 text-[#f6b615]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4-4-4-4m16 8l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Modern UI / UX</h3>
                        <p class="text-gray-200 italic">
                            Clean, intuitive, and responsive interfaces that enhance user engagement.
                        </p>
                        <a href="#" class="text-[#f6b615] font-medium hover:underline">Read More</a>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-yellow-400/10">
                            <svg class="w-6 h-6 text-[#f6b615]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold text-lg">High Performance</h3>
                        <p class="text-gray-200 italic">
                            Optimized websites built for speed, SEO, and smooth performance.
                        </p>
                        <a href="#" class="text-[#f6b615] font-medium hover:underline">Read More</a>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-yellow-400/10">
                            <svg class="w-6 h-6 text-[#f6b615]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0-3.866-3.582-7-8-7v14c4.418 0 8-3.134 8-7zm0 0c0 3.866 3.582 7 8 7V4c-4.418 0-8 3.134-8 7z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Secure Architecture</h3>
                        <p class="text-gray-200 italic">
                            Strong security practices to protect data and ensure reliability.
                        </p>
                        <a href="#" class="text-[#f6b615] font-medium hover:underline">Read More</a>
                    </div>

                    <!-- Card 6 -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                        <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-yellow-400/10">
                            <svg class="w-6 h-6 text-[#f6b615]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-1.414 1.414M6.343 17.657l-1.414 1.414M5.636 5.636l1.414 1.414M17.657 17.657l1.414 1.414M12 8v4l3 3" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold text-lg">Ongoing Support</h3>
                        <p class="text-gray-200 italic">
                            Continuous support and maintenance even after project delivery.
                        </p>
                        <a href="#" class="text-[#f6b615] font-medium hover:underline">Read More</a>
                    </div>

                </div>

                <!-- CTA -->
                <div class="mt-12 text-center relative z-10">
                    <button class="bg-[#f6b615] text-black px-6 py-3 rounded-lg font-semibold shadow-lg hover:brightness-110 transition">
                        Book Your Call
                    </button>
                </div>
            </section>

        </div>


        <section class="bg-black py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">

                <!-- SECTION TITLE -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                        FREQUENTLY ASKED <span class="text-[#f6b615]">QUESTIONS</span>
                    </h2>
                    <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
                        Everything you need to know about our web development process,
                        technology stack, and collaboration.
                    </p>
                </div>

                <!-- FAQ LIST -->
                <div
                    x-data="{ active: null }"
                    class="space-y-4">

                    <!-- ITEM -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button
                            @click="active === 1 ? active = null : active = 1"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                What technologies do you use for web development?
                            </span>
                            <span
                                class="text-[#f6b615] text-xl transform transition"
                                :class="active === 1 ? 'rotate-45' : ''">
                                +
                            </span>
                        </button>

                        <div
                            x-show="active === 1"
                            x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            We primarily work with modern stacks such as Laravel, React, Vue,
                            Next.js, Tailwind CSS, and REST or GraphQL APIs. Our focus is on
                            scalable, maintainable, and performance-driven architectures.
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button
                            @click="active === 2 ? active = null : active = 2"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Do you build custom websites or use templates?
                            </span>
                            <span
                                class="text-[#f6b615] text-xl transform transition"
                                :class="active === 2 ? 'rotate-45' : ''">
                                +
                            </span>
                        </button>

                        <div
                            x-show="active === 2"
                            x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Every project is built custom. We don’t rely on generic templates.
                            Instead, we design and develop solutions tailored to your business
                            goals, users, and long-term scalability.
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button
                            @click="active === 3 ? active = null : active = 3"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                How long does a typical project take?
                            </span>
                            <span
                                class="text-[#f6b615] text-xl transform transition"
                                :class="active === 3 ? 'rotate-45' : ''">
                                +
                            </span>
                        </button>

                        <div
                            x-show="active === 3"
                            x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Timelines vary based on complexity. A standard website usually
                            takes 3–6 weeks, while larger web applications or SaaS products
                            may take 8–16 weeks including planning, development, and testing.
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button
                            @click="active === 4 ? active = null : active = 4"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Will my website be scalable and secure?
                            </span>
                            <span
                                class="text-[#f6b615] text-xl transform transition"
                                :class="active === 4 ? 'rotate-45' : ''">
                                +
                            </span>
                        </button>

                        <div
                            x-show="active === 4"
                            x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Yes. We follow best practices for security, performance, and
                            scalability. This includes optimized database design, secure
                            authentication, clean code architecture, and cloud-ready deployment.
                        </div>
                    </div>

                    <!-- ITEM -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button
                            @click="active === 5 ? active = null : active = 5"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Do you provide support after launch?
                            </span>
                            <span
                                class="text-[#f6b615] text-xl transform transition"
                                :class="active === 5 ? 'rotate-45' : ''">
                                +
                            </span>
                        </button>

                        <div
                            x-show="active === 5"
                            x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Absolutely. We offer ongoing maintenance, performance monitoring,
                            feature enhancements, and technical support to ensure your product
                            continues to grow with your business.
                        </div>
                    </div>

                </div>
            </div>
        </section>

        </main>
    </div>
</div>
</div>
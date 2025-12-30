<div class="min-h-screen bg-black text-white relative isolate overflow-hidden" x-data="{ filter: 'all', preview: null }">
    <!-- TOP ACCENT -->
    <div class="absolute left-1/2 -top-36 -z-10 -translate-x-1/2 blur-3xl pointer-events-none">
        <div class="w-[500px] h-[500px] bg-gradient-to-tr from-amber-400 to-yellow-400 opacity-12 rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-16 sm:py-20">
        <header class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl sm:text-4xl font-Bold">Portfolio</h1>
                <p class="mt-2 text-sm text-slate-400 max-w-xl">Selected projects demonstrating our work across web, mobile, and cloud.</p>
            </div>

            <div class="w-full sm:w-auto flex items-center gap-3">
                <div class="hidden sm:flex items-center gap-2 bg-white/5 rounded-md p-1">
                    <button @click="filter='all'" :class="filter==='all' ? 'bg-amber-400 text-black' : 'text-white'" class="px-3 py-2 rounded">All</button>
                    <button @click="filter='web'" :class="filter==='web' ? 'bg-amber-400 text-black' : 'text-white'" class="px-3 py-2 rounded">Web App</button>
                    <button @click="filter='mobile'" :class="filter==='mobile' ? 'bg-amber-400 text-black' : 'text-white'" class="px-3 py-2 rounded">Mobile</button>
                    <button @click="filter='seo'" :class="filter==='seo' ? 'bg-amber-400 text-black' : 'text-white'" class="px-3 py-2 rounded">SEO</button>
                </div>

                <a href="#contact" class="inline-block px-4 py-2 rounded-md bg-amber-400 text-black font-semibold">Contact</a>
            </div>
        </header>

        <main>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" role="list">
                @for($i = 1; $i <= 9; $i++)
                <div x-show="filter==='all' || filter==='web' || (filter==='mobile' && {{ $i }} % 2 === 0) || (filter==='seo' && {{ $i }} % 3 === 0)"
                     x-transition
                     class="group relative rounded-2xl overflow-hidden border border-white/10 bg-white/5 backdrop-blur p-4 sm:p-6 hover:border-amber-400 transition">

                    <img src="https://source.unsplash.com/collection/190727/900x600?sig={{ $i }}" alt="Project {{ $i }}" class="w-full h-44 sm:h-48 object-cover rounded-lg mb-4">

                    <h3 class="text-lg font-semibold mb-1">Project Title {{ $i }}</h3>
                    <p class="text-sm text-slate-300 mb-3">Short summary of the project that explains goals and results. Static placeholder content.</p>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="inline-block px-2 py-1 rounded bg-amber-400 text-black text-xs">Web App</span>
                            <span class="text-xs text-slate-400">Case Study</span>
                        </div>

                        <div class="flex items-center gap-2">
                            <button @click="preview = {{ $i }}" class="inline-flex items-center gap-2 px-3 py-2 rounded-md border border-white/10">Preview</button>
                            <a href="#" class="inline-flex items-center gap-2 px-3 py-2 rounded-md bg-gradient-to-r from-amber-400 to-yellow-400 text-black text-sm font-semibold">View</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <div class="mt-8 flex items-center justify-center">
                <nav class="inline-flex rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#" class="px-3 py-2 rounded-l-md bg-white/5 border border-r-0 border-white/10">Prev</a>
                    <a href="#" class="px-3 py-2 bg-white/5 border border-white/10">1</a>
                    <a href="#" class="px-3 py-2 bg-white/5 border border-white/10">2</a>
                    <a href="#" class="px-3 py-2 rounded-r-md bg-white/5 border border-l-0 border-white/10">Next</a>
                </nav>
            </div>
        </main>

        <!-- CTA -->
        <div class="mt-12 text-center">
            <a href="#contact" class="inline-block px-8 py-3 rounded-xl font-semibold text-black bg-gradient-to-r from-amber-400 to-yellow-400 hover:opacity-95">Start Your Project</a>
        </div>
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

    <!-- PREVIEW MODAL -->
    <div x-show="preview" x-cloak x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 p-4">
        <div class="w-full max-w-3xl bg-white text-black rounded-lg overflow-hidden">
            <div class="p-4 border-b flex items-center justify-between">
                <h4 class="font-semibold">Project Preview <span x-text="preview"></span></h4>
                <button @click="preview = null" class="text-sm px-2 py-1 rounded bg-white/5">Close</button>
            </div>
            <div class="p-4">
                <img src="https://source.unsplash.com/collection/190727/1200x500?sig=preview" alt="Preview" class="w-full h-64 object-cover rounded mb-4">
                <p class="text-sm text-slate-700">Detailed project description placeholder. Replace with real content and images for each project.</p>
            </div>
        </div>
    </div>
</div>

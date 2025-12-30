<div class="min-h-screen bg-black text-white relative isolate overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 py-12 sm:py-16">
        <a href="/services" class="inline-flex items-center gap-2 text-sm text-amber-300 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            Back to Services
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <div class="sticky top-24 bg-white/5 backdrop-blur-md p-6 rounded-xl border border-white/10">
                    <h4 class="text-sm tracking-widest uppercase text-[#f6b615] mb-4">Service categories</h4>

                    <!-- Example categories - replace with dynamic categories -->
                    <ul class="space-y-2">
                        <li><a href="/services" class="block px-3 py-2 rounded-md bg-white/10 text-sm text-amber-300 font-semibold hover:bg-amber-400 hover:text-black transition">All Services</a></li>
                        <li><a href="/services/consulting" class="block px-3 py-2 rounded-md text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">Consulting</a></li>
                        <li><a href="/services/design" class="block px-3 py-2 rounded-md text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">Design</a></li>
                        <li><a href="/services/development" class="block px-3 py-2 rounded-md text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">Development</a></li>
                        <li><a href="/services/ai-ml" class="block px-3 py-2 rounded-md text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">AI &amp; Machine Learning</a></li>
                        <li><a href="/services/cloud" class="block px-3 py-2 rounded-md text-sm text-gray-300 hover:bg-white/5 hover:text-white transition">Cloud &amp; DevOps</a></li>
                    </ul>

                    <div class="mt-6">
                        <h5 class="text-xs text-gray-400 uppercase mb-2">Related services</h5>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="text-gray-300 hover:text-white">Performance Audits</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Platform Migrations</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Dedicated Teams</a></li>
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- Main content -->
            <main class="lg:col-span-2">
                <article class="overflow-hidden rounded-xl bg-white/10 backdrop-blur-md border border-white/20 shadow-lg">
                    <div class="h-56 sm:h-72 w-full overflow-hidden rounded-t-xl">
                        <img src="https://source.unsplash.com/collection/190727/1200x600" alt="Service image" class="w-full h-full object-cover opacity-90">
                    </div>

                    <div class="relative p-6">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h1 class="text-3xl sm:text-4xl font-extrabold mb-2 text-white">Service Name</h1>
                                <div class="flex items-center gap-3 text-sm text-slate-300">
                                    <span class="inline-block px-2 py-1 rounded bg-amber-400 text-black text-xs">Category</span>
                                    <span>Duration: <strong class="text-white">6–12 weeks</strong></span>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-md bg-[#f6b615] text-black font-semibold shadow hover:brightness-110 transition">Request Proposal</a>
                                <button class="inline-flex items-center gap-2 px-3 py-2 rounded-md border border-white/10 text-sm text-gray-300 hover:text-white" aria-label="Share">Share
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 8a3 3 0 10-6 0v4a3 3 0 006 0V8z"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="prose prose-lg max-w-none text-slate-200 mt-6">
                            <h2>Overview</h2>
                            <p>This is a static service detail page that explains the offering, deliverables, processes, and outcomes. Replace with real content as needed.</p>

                            <h3>What's included</h3>
                            <ul>
                                <li>Discovery & planning</li>
                                <li>Design & prototyping</li>
                                <li>Development & QA</li>
                                <li>Deployment & support</li>
                            </ul>

                            <blockquote>
                                <p>We deliver practical, production-ready solutions with a focus on scalability and maintainability.</p>
                            </blockquote>

                            <p class="mt-4">To get started, reach out for a free consultation and estimate.</p>
                        </div>

                        <div class="mt-8">
                            <h3 class="text-lg font-semibold mb-4">What our approach includes</h3>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="rounded-xl bg-white/10 p-4 border border-white/10">
                                    <h4 class="font-semibold">Discovery</h4>
                                    <p class="text-sm text-slate-300 mt-1">User research, stakeholder interviews and roadmap planning.</p>
                                </div>
                                <div class="rounded-xl bg-white/10 p-4 border border-white/10">
                                    <h4 class="font-semibold">Delivery</h4>
                                    <p class="text-sm text-slate-300 mt-1">Design sprints, iterative development and continuous testing.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 text-sm text-slate-400 flex items-center justify-between">
                            <div>Starting from <strong class="text-white">$5,000</strong></div>
                            <a href="#contact" class="text-sm text-amber-300 hover:text-white">Request a detailed proposal</a>
                        </div>
                    </div>
                </article>

                <!-- Related / other services grid -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-4">Other services in this category</h3>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <a href="#" class="block rounded-xl p-4 bg-white/10 border border-white/20 hover:border-[#f6b615] transition">
                            <h4 class="font-semibold">Service A</h4>
                            <p class="text-sm text-slate-300 mt-1">Short description of service A.</p>
                        </a>

                        <a href="#" class="block rounded-xl p-4 bg-white/10 border border-white/20 hover:border-[#f6b615] transition">
                            <h4 class="font-semibold">Service B</h4>
                            <p class="text-sm text-slate-300 mt-1">Short description of service B.</p>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

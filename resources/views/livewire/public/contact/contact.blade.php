<div class="bg-black text-white min-h-screen">

    <!-- Hero -->
    <section class="py-20 md:py-28 px-4 md:px-[6%]">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center justify-center bg-[#f6b615] text-black rounded-full px-3 py-1 text-xs font-semibold">LT</span>
                    <span class="text-sm text-gray-400 uppercase tracking-widest">Let’s talk</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">
                    Get in touch <span class="text-[#f6b615]">with TECHNONIKA</span>
                </h1>

                <p class="text-gray-300 max-w-2xl text-lg">
                    Have a project, question, or idea? Tell us about it — we design and build tailored digital products that scale. Share some details and we’ll get back to you within 1–2 business days.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#contact-form" class="inline-flex items-center justify-center bg-[#f6b615] text-black px-6 py-3 rounded-2xl font-semibold hover:brightness-110 transition">Start a conversation</a>
                    <a href="#" class="inline-flex items-center gap-2 border border-white/10 px-5 py-3 rounded-2xl font-medium text-white/90">See our services</a>
                </div>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-md">
                    <div class="bg-white/5 p-4 rounded-lg">
                        <h4 class="text-sm text-[#f6b615] font-semibold">Email</h4>
                        <p class="text-gray-300">hello@technonika.com</p>
                    </div>
                    <div class="bg-white/5 p-4 rounded-lg">
                        <h4 class="text-sm text-[#f6b615] font-semibold">Phone</h4>
                        <p class="text-gray-300">+1 (555) 123-4567</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center lg:justify-end">
                <img src="/images/contact-illustration.png" alt="Contact" class="max-w-[420px] object-contain" />
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="py-16 px-4 md:px-[6%]">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Left: Additional Info / Clients -->
            <div class="space-y-6">
                <h3 class="text-2xl font-semibold">Tell us about your project</h3>
                <p class="text-gray-300">Provide a brief overview including goals, timeline, and any technical constraints. If you have examples of products you like, link them here.</p>

                <div class="mt-6">
                    <h4 class="text-sm text-[#f6b615] font-semibold">What to include</h4>
                    <ul class="text-gray-300 mt-3 space-y-2 list-disc list-inside">
                        <li>Project goals and target audience</li>
                        <li>Deadline and budget range</li>
                        <li>Existing platform or assets</li>
                    </ul>
                </div>

                <div class="mt-8">
                    <h4 class="text-sm text-[#f6b615] font-semibold">Offices</h4>
                    <p class="text-gray-300 mt-2">London · New York · Remote</p>
                </div>
            </div>

            <!-- Right: Form Card -->
            <div>
                <div class="bg-zinc-900/80 p-6 rounded-xl shadow-xl text-white border border-white/5">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold">Send us a message</h3>
                            <p class="text-sm text-gray-400">Fill the form and we’ll reply shortly.</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center justify-center bg-[#f6b615] text-black rounded-full px-3 py-1 text-xs font-semibold">LT</span>
                        </div>
                    </div>

                    @if (session()->has('success'))
                        <div class="mb-4 rounded-md bg-green-900/40 border border-green-800 p-3">
                            <p class="text-green-200">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-300">Name</label>
                                <input type="text" wire:model.defer="name" class="mt-1 block w-full px-3 py-2 rounded-md bg-transparent border border-white/10 placeholder:text-gray-500 text-white focus:border-[#f6b615] focus:ring-[#f6b615]" placeholder="Your full name">
                                @error('name') <span class="text-sm text-red-400">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-300">Email</label>
                                <input type="email" wire:model.defer="email" class="mt-1 block w-full px-3 py-2 rounded-md bg-transparent border border-white/10 placeholder:text-gray-500 text-white focus:border-[#f6b615] focus:ring-[#f6b615]" placeholder="you@example.com">
                                @error('email') <span class="text-sm text-red-400">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300">Subject</label>
                            <input type="text" wire:model.defer="subject" class="mt-1 block w-full px-3 py-2 rounded-md bg-transparent border border-white/10 placeholder:text-gray-500 text-white focus:border-[#f6b615] focus:ring-[#f6b615]" placeholder="Subject (optional)">
                            @error('subject') <span class="text-sm text-red-400">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300">Message</label>
                            <textarea wire:model.defer="message" rows="6" class="mt-1 block w-full px-3 py-2 rounded-md bg-transparent border border-white/10 placeholder:text-gray-500 text-white focus:border-[#f6b615] focus:ring-[#f6b615]" placeholder="How can we help?"></textarea>
                            @error('message') <span class="text-sm text-red-400">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" wire:loading.attr="disabled" class="inline-flex items-center px-4 py-2 bg-[#f6b615] border border-transparent rounded-md font-semibold text-sm text-black hover:brightness-105 focus:outline-none focus:ring-2 focus:ring-[#f6b615]">
                                <span wire:loading.remove>Send Message</span>
                                <span wire:loading>Sending...</span>
                            </button>

                            <p class="text-sm text-gray-400">We reply within 1–2 business days.</p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

        <!-- Clients Section (from home design) -->
        <section class="bg-black py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <h2 class="text-2xl sm:text-3xl py-6 text-slate-200 font-semibold italic text-center sm:text-left">
                    Digital Experiences Built for Growing and Established Brands
                </h2>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-y-10 gap-x-6 items-center justify-items-center">
                    <img src="/clients/6.jpg" class="client-logo" alt="">
                    <img src="/clients/7.jpg" class="client-logo" alt="">
                    <img src="/clients/8.jpg" class="client-logo" alt="">
                    <img src="/clients/9.jpg" class="client-logo" alt="">
                    <img src="/clients/10.jpg" class="client-logo" alt="">
                    <img src="/clients/11.jpg" class="client-logo" alt="">
                    <img src="/clients/12.jpg" class="client-logo" alt="">
                    <img src="/clients/13.jpg" class="client-logo" alt="">
                </div>
            </div>

            <style>
                .client-logo { height:56px; width:auto; opacity:0.75; filter:grayscale(100%); transition: all .3s ease; }
                .client-logo:hover { opacity:1; filter:grayscale(0%); }
                @media (min-width:640px) { .client-logo { height:72px; } }
                @media (min-width:1024px) { .client-logo { height:80px; } }
            </style>
        </section>

        <!-- FAQ Section (from home design) -->
        <section class="bg-black py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                        FREQUENTLY ASKED <span class="text-[#f6b615]">QUESTIONS</span>
                    </h2>
                    <p class="mt-4 text-gray-400 max-w-2xl mx-auto">Everything you need to know about our process, timelines, and collaboration.</p>
                </div>

                <div x-data="{ active: null }" class="space-y-4">
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 1 ? active = null : active = 1" class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">What technologies do you use for web development?</span>
                            <span class="text-[#f6b615] text-xl" :class="active === 1 ? 'rotate-45' : ''">+</span>
                        </button>
                        <div x-show="active === 1" x-collapse class="px-6 pb-5 text-gray-400 leading-relaxed">We primarily work with modern stacks such as Laravel, React, Vue, Next.js, Tailwind CSS, and REST or GraphQL APIs.</div>
                    </div>

                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 2 ? active = null : active = 2" class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">Do you build custom websites or use templates?</span>
                            <span class="text-[#f6b615] text-xl" :class="active === 2 ? 'rotate-45' : ''">+</span>
                        </button>
                        <div x-show="active === 2" x-collapse class="px-6 pb-5 text-gray-400 leading-relaxed">Every project is built custom. We design and develop solutions tailored to your business goals and users.</div>
                    </div>

                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 3 ? active = null : active = 3" class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">How long does a typical project take?</span>
                            <span class="text-[#f6b615] text-xl" :class="active === 3 ? 'rotate-45' : ''">+</span>
                        </button>
                        <div x-show="active === 3" x-collapse class="px-6 pb-5 text-gray-400 leading-relaxed">Timelines vary; a standard website usually takes 3–6 weeks, while larger apps may take 8–16 weeks.</div>
                    </div>
                </div>
            </div>
        </section>

    </div>

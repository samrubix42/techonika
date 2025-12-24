<!-- NAVBAR -->
<nav
    x-data="{
        open: false,
        mega: false,
        scrolled: false
    }"
    x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 60
        })
    "
    x-effect="document.body.classList.toggle('overflow-hidden', open)"
    @click.outside="open = false"
    :class="scrolled
        ? 'bg-black/60 backdrop-blur-xl   shadow-lg'
        : 'bg-transparent'"
    class="fixed top-0 w-full z-50 transition-all duration-300">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-16 transition-all duration-300"
             :class="scrolled ? 'h-14' : 'h-16'">

            <!-- LOGO -->
            <div class="flex items-center transition-all duration-300"
                 :class="scrolled ? 'scale-95' : 'scale-100'">

                <img
                    x-show="!scrolled"
                    x-cloak
                    src="{{ asset('techonika-logo-light.png') }}"
                    class="h-9"
                    alt="Techonika">

                <img
                    x-show="scrolled"
                    x-cloak
                    src="{{ asset('techonika-logo-dark.png') }}"
                    class="h-9"
                    alt="Techonika">
            </div>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex items-center gap-10">

                <a href="#"
                   class="text-sm font-medium transition"
                   :class="scrolled
                       ? 'text-gray-200 hover:text-amber-400'
                       : 'text-gray-900 hover:text-amber-600'">
                    Home
                </a>

                <!-- DESKTOP MEGA MENU -->
                <div class="relative"
                     @mouseenter="mega = true"
                     @mouseleave="mega = false">

                    <button
                        class="flex items-center gap-1 text-sm font-medium transition"
                        :class="scrolled
                            ? 'text-gray-200 hover:text-amber-400'
                            : 'text-gray-900 hover:text-amber-600'">
                        Services
                        <svg class="w-4 h-4 text-amber-400" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- MEGA CONTENT -->
                    <div
                        x-show="mega"
                        x-cloak
                        x-transition
                        class="fixed left-1/2 top-16 -translate-x-1/2
                               w-[920px] bg-zinc-950/95 backdrop-blur
                               border border-white/10 rounded-2xl
                               shadow-2xl p-10 z-[9999]">

                        <div class="grid grid-cols-4 gap-10">

                            <div>
                                <h4 class="text-xs uppercase text-amber-400 mb-4">
                                    Web Development
                                </h4>
                                <ul class="space-y-3 text-sm text-gray-300">
                                    <li>Laravel</li>
                                    <li>Next.js</li>
                                    <li>Django</li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-xs uppercase text-amber-400 mb-4">
                                    Mobile Apps
                                </h4>
                                <ul class="space-y-3 text-sm text-gray-300">
                                    <li>Flutter</li>
                                    <li>React Native</li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-xs uppercase text-amber-400 mb-4">
                                    Cloud & DevOps
                                </h4>
                                <ul class="space-y-3 text-sm text-gray-300">
                                    <li>AWS / EC2</li>
                                    <li>CI / CD</li>
                                    <li>Nginx</li>
                                </ul>
                            </div>

                            <div class="bg-black/60 border border-white/10 rounded-xl p-6">
                                <h5 class="text-white font-semibold mb-2">
                                    Need Expert Help?
                                </h5>
                                <p class="text-sm text-gray-400">
                                    Free consultation for your product idea.
                                </p>

                                <a href="#contact"
                                   class="mt-4 inline-block w-full text-center
                                          bg-amber-400 text-black font-semibold
                                          rounded-lg px-4 py-2 hover:bg-amber-300 transition">
                                    Book Consultation →
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <a href="#"
                   class="text-sm font-medium transition"
                   :class="scrolled
                       ? 'text-gray-200 hover:text-amber-400'
                       : 'text-gray-900 hover:text-amber-600'">
                    About
                </a>

                <a href="#contact"
                   class="px-5 py-2 rounded-lg text-sm font-semibold
                          bg-amber-400 text-black hover:bg-amber-300 transition">
                    Contact
                </a>
            </div>

            <!-- MOBILE BUTTON -->
            <button @click="open = !open" class="md:hidden text-amber-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- MOBILE MEGA MENU -->
    <div
        x-show="open"
        x-cloak
        x-transition.opacity.duration.300ms
        class="md:hidden fixed inset-0 top-14
               bg-black/95 backdrop-blur-xl
               z-40 overflow-y-auto">

        <div class="px-6 py-6 space-y-6">

            <a href="#" @click="open = false"
               class="block text-lg text-gray-100 font-medium">
                Home
            </a>

            <div x-data="{ mobileMega: false }" class="space-y-4">

                <button
                    @click="mobileMega = !mobileMega"
                    class="flex items-center justify-between w-full
                           text-lg text-gray-100 font-medium">
                    Services
                    <svg class="w-5 h-5 transition-transform"
                         :class="mobileMega ? 'rotate-180' : ''"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div x-show="mobileMega" x-transition class="space-y-6">

                    <div class="bg-zinc-900/80 border border-white/10 rounded-xl p-4">
                        <h4 class="text-sm uppercase text-amber-400 mb-3">
                            Web Development
                        </h4>
                        <ul class="space-y-3 text-gray-300">
                            <li>Laravel</li>
                            <li>Next.js</li>
                            <li>Django</li>
                        </ul>
                    </div>

                    <div class="bg-zinc-900/80 border border-white/10 rounded-xl p-4">
                        <h4 class="text-sm uppercase text-amber-400 mb-3">
                            Mobile Apps
                        </h4>
                        <ul class="space-y-3 text-gray-300">
                            <li>Flutter</li>
                            <li>React Native</li>
                        </ul>
                    </div>

                    <div class="bg-zinc-900/80 border border-white/10 rounded-xl p-4">
                        <h4 class="text-sm uppercase text-amber-400 mb-3">
                            Cloud & DevOps
                        </h4>
                        <ul class="space-y-3 text-gray-300">
                            <li>AWS / EC2</li>
                            <li>CI / CD</li>
                            <li>Nginx</li>
                        </ul>
                    </div>

                </div>
            </div>

            <a href="#" @click="open = false"
               class="block text-lg text-gray-100 font-medium">
                About
            </a>

            <a href="#contact" @click="open = false"
               class="block text-center bg-amber-400
                      text-black font-semibold
                      rounded-xl px-4 py-4 text-lg">
                Contact
            </a>

        </div>
    </div>
</nav>

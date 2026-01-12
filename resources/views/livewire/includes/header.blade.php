<div>
  <!-- ROOT WRAPPER (REQUIRED) -->
  <div
    x-data="{ open:false, mega:false, mobileServices:false, packages:false, mobilePackages:false, scrolled:false }"
    x-init="
    window.addEventListener('scroll', () => scrolled = window.scrollY > 60);
    $watch('open', v => document.body.classList.toggle('overflow-hidden', v))
  ">

    <!-- ================= HEADER ================= -->
    <header
      :class="scrolled
    ? 'bg-black/60 backdrop-blur-xl border-b border-white/10'
    : 'bg-transparent'"
      class="fixed inset-x-0 top-0 z-40 transition-all font-sans">

      <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

        <!-- LOGO -->
        <a wire:navigate href="{{ Route::has('home') ? route('home') : url('/') }}" wire:navigate>
          <img src="{{ asset('techonika-logo-dark.png') }}" class="md:h-11 h-9" />
        </a>

        <!-- DESKTOP NAV -->
        <nav class="hidden md:flex items-center uppercase tracking-loose gap-10 text-sm text-white">

          <a wire:navigate href="{{ route('home') }}" class="hover:text-amber-400">Home</a>

          <!-- DESKTOP MEGA MENU -->
          <div class="relative uppercase" @mouseenter="mega=true" @mouseleave="mega=false">
            <button class="flex items-center gap-1 hover:text-amber-400 uppercase">
              Services
              <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <!-- MEGA PANEL -->
            <div
              x-show="mega"
              x-cloak
              x-transition
              class="fixed left-1/2 top-16 -translate-x-1/2
                 w-[1100px] max-w-[95vw]
                 bg-zinc-900/95 backdrop-blur
                 border border-white/10
                 rounded-2xl shadow-2xl p-10 z-50">

              <div class="grid grid-cols-4 gap-10">

                <div>
                  <h4 class="text-xs uppercase text-amber-400 mb-4">Web Development</h4>
                  <ul class="space-y-2 text-gray-300">
                    <li><a class="hover:text-amber-400">Laravel</a></li>
                    <li><a class="hover:text-amber-400">Next.js</a></li>
                    <li><a class="hover:text-amber-400">Django</a></li>
                  </ul>
                </div>

                <div>
                  <h4 class="text-xs uppercase text-amber-400 mb-4">Mobile Apps</h4>
                  <ul class="space-y-2 text-gray-300">
                    <li>Flutter</li>
                    <li>React Native</li>
                  </ul>
                </div>

                <div>
                  <h4 class="text-xs uppercase text-amber-400 mb-4">Cloud & DevOps</h4>
                  <ul class="space-y-2 text-gray-300">
                    <li>AWS</li>
                    <li>CI / CD</li>
                    <li>Nginx</li>
                  </ul>
                </div>

                <div class="bg-black/60 rounded-xl p-6 border border-white/10">
                  <h5 class="font-semibold mb-2">Free Consultation</h5>
                  <p class="text-sm text-gray-400">Let’s discuss your idea.</p>
                  <a wire:navigate href="{{ route('contact') }}"
                    class="mt-4 block text-center bg-amber-400 text-black font-semibold py-2 rounded-lg">
                    Book Call →
                  </a>
                </div>

              </div>
            </div>
          </div>

          <!-- DESKTOP PACKAGES DROPDOWN -->
          <div class="relative uppercase" @mouseenter="packages=true" @mouseleave="packages=false">
            <button class="flex items-center gap-1 hover:text-amber-400 uppercase">
              Packages
              <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <!-- PACKAGES PANEL -->
            <div
              x-show="packages"
              x-cloak
              x-transition
              class="absolute left-1/2 top-10 -translate-x-1/2
                 w-[200px] max-w-[95vw]
                 bg-zinc-900/95 backdrop-blur
                 border border-white/10
                 rounded-2xl shadow-2xl p-6 z-50">

              <div class="grid grid-cols-1 gap-2">
                <a wire:navigate href="{{ route('seo-package') }}" class="block p-3 rounded  hover:bg-white/5">SEO Package</a>
                <a wire:navigate href="{{ route('smo-package') }}" class="block p-3 rounded  hover:bg-white/5">SMO Package</a>
                <a wire:navigate href="{{ route('startup-package') }}" class="block p-3 rounded  hover:bg-white/5">Startup Package</a>
              </div>
            </div>
          </div>

          <a wire:navigate href="{{ route('about') }}" class="hover:text-amber-400">About</a>
          <a wire:navigate href="{{ route('portfolio') }}" class="hover:text-amber-400">Portfolio</a>
          <a wire:navigate href="{{ route('blog') }}" class="hover:text-amber-400">Blog</a>
          <a wire:navigate href="{{ route('clients') }}" class="hover:text-amber-400">Clients</a>
        </nav>

        <a
          wire:navigate
          href="{{ route('contact') }}"
          class="hidden md:inline-flex items-center  justify-center
         px-8 py-2.5 rounded-full
         font-semibold tracking-wide text-black
         bg-gradient-to-r from-orange-500 via-amber-400 to-amber-600
         bg-[length:200%_200%]
         animate-gradient-slide-fast
         transition-transform duration-300 ease-out
         shadow-[0_0_18px_rgba(246,182,21,0.35)]
         hover:shadow-[0_0_32px_rgba(246,182,21,0.6)]
         hover:scale-[1.04] shadow-2xl shadow-amber-400/40">
          Contact
        </a>


        <!-- MOBILE TOGGLE -->
        <button @click="open = true" class="md:hidden text-amber-400 text-2xl">
          ☰
        </button>
      </div>
    </header>

    <!-- ================= MOBILE MENU ================= -->
    <div
      x-show="open"
      x-cloak
      x-transition.opacity
      class="fixed inset-0 z-[999] bg-black md:hidden overflow-y-auto">

      <div class="p-6">

        <button @click="open=false" class="text-white text-2xl mb-8">✕</button>

        <nav class="flex flex-col gap-4 text-lg text-white font-medium">

          <a wire:navigate href="{{ route('home') }}" class="mt-2 rounded hover:bg-white/10">Home</a>

          <!-- MOBILE MEGA -->
          <div>
            <button
              @click="mobileServices = !mobileServices"
              class="flex items-center justify-between w-full  rounded hover:bg-white/10">
              <span>Services</span>
              <svg :class="mobileServices && 'rotate-180'"
                class="w-5 h-5 transition-transform"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div x-show="mobileServices" x-transition class="pl-4 mt-3 space-y-4">

              <div>
                <p class="text-amber-400 uppercase mb-1">Web Development</p>
                <span class="block text-white/80">Laravel</span>
                <span class="block text-white/80">Next.js</span>
                <span class="block text-white/80">Django</span>
              </div>

              <div>
                <p class="text-amber-400 uppercase mb-1">Mobile Apps</p>
                <span class="block text-white/80">Flutter</span>
                <span class="block text-white/80">React Native</span>
              </div>

              <div>
                <p class="text-amber-400 uppercase mb-1">Cloud & DevOps</p>
                <span class="block text-white/80">AWS</span>
                <span class="block text-white/80">CI / CD</span>
                <span class="block text-white/80">Nginx</span>
              </div>
            </div>
          </div>

          <!-- MOBILE PACKAGES -->
          <div class="mt-2">
            <button
              @click="mobilePackages = !mobilePackages"
              class="flex items-center justify-between w-full  rounded hover:bg-white/10">
              <span>Packages</span>
              <svg :class="mobilePackages && 'rotate-180'"
                class="w-5 h-5 transition-transform"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div x-show="mobilePackages" x-transition class="pl-4 mt-3 space-y-3">
              <a wire:navigate href="{{ route('seo-package') }}" class="block text-white/90">SEO Package</a>
              <a wire:navigate href="{{ route('smo-package') }}" class="block text-white/90">SMO Package</a>
              <a wire:navigate href="{{ route('startup-package') }}" class="block text-white/90">Startup Package</a>
            </div>
          </div>

          <a wire:navigate href="{{ route('about') }}">About</a>
          <a wire:navigate href="{{ route('portfolio') }}">Portfolio</a>
          <a wire:navigate href="{{ route('blog') }}">Blog</a>
          <a wire:navigate href="{{ route('clients') }}">Clients</a>

          <a wire:navigate href="{{ route('contact') }}"
            class="mt-6 bg-amber-400 text-black font-semibold py-3 rounded-xl text-center">
            Contact
          </a>
        </nav>
      </div>
    </div>

  </div>
</div>
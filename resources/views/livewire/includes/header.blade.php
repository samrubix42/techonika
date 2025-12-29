<header
  x-data="{ open:false, mega:false, mobileServices:false, scrolled:false }"
  x-init="window.addEventListener('scroll',()=>scrolled=window.scrollY>60)"
  :class="scrolled
    ? 'bg-black/60 backdrop-blur-xl border-b border-white/10'
    : 'bg-transparent'"
  class="fixed font-mono inset-x-0 top-0 z-50 transition-all">

  <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

    <!-- LEFT: LOGO -->
    <a href="{{ Route::has('home') ? route('home') : url('/') }}" wire:navigate class="flex items-center gap-2 font-bold text-xl">
      <img src="{{ asset('techonika-logo-dark.png') }}" class="h-8" />
    </a>

    <!-- CENTER: MENU -->
    <nav class="hidden md:flex items-center gap-10 text-xs  text-white">

      <a href="{{ Route::has('home') ? route('home') : url('/') }}" wire:navigate class="hover:text-amber-400">Home</a>

      <!-- MEGA MENU -->
      <div class="relative" @mouseenter="mega=true" @mouseleave="mega=false">
        <a href="{{ Route::has('services') ? route('services') : url('/services') }}" wire:navigate class="flex items-center gap-1 hover:text-amber-400">
          Services
          <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </a>

        <!-- PANEL -->
        <div
          x-show="mega"
          x-cloak
          x-transition
          class="fixed left-1/2 top-16 -translate-x-1/2
                 w-[1100px] max-w-[95vw]
                 bg-zinc-900/95 backdrop-blur
                 border border-white/10
                 rounded-2xl shadow-2xl p-10">

          <div class="grid grid-cols-4 gap-10">

            <div>
              <h4 class="text-xs uppercase text-amber-400 mb-4">Web Development</h4>
              <ul class="space-y-2 text-gray-300">
                <li><a href="{{ Route::has('services') ? route('services', ['service' => 'laravel']) : url('/services#laravel') }}" wire:navigate class="hover:text-amber-400">Laravel</a></li>
                <li><a href="{{ Route::has('services') ? route('services', ['service' => 'nextjs']) : url('/services#nextjs') }}" wire:navigate class="hover:text-amber-400">Next.js</a></li>
                <li><a href="{{ Route::has('services') ? route('services', ['service' => 'django']) : url('/services#django') }}" wire:navigate class="hover:text-amber-400">Django</a></li>
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

            <!-- CTA CARD -->
            <div class="bg-black/60 rounded-xl p-6 border border-white/10">
              <h5 class="font-semibold mb-2">Free Consultation</h5>
              <p class="text-sm text-gray-400">Let’s discuss your idea.</p>
                      <a href="{{ Route::has('contact') ? route('contact') : '#contact' }}"
                wire:navigate
                class="mt-4 block text-center bg-amber-400
                        text-black font-semibold py-2 rounded-lg">
                Book Call →
              </a>
            </div>

          </div>
        </div>
      </div>

      <a href="{{ Route::has('about') ? route('about') : url('/about') }}" wire:navigate class="hover:text-amber-400">About</a>
      <a href="{{ Route::has('portfolio') ? route('portfolio') : url('/portfolio') }}" wire:navigate class="hover:text-amber-400">Portfolio</a>
      <a href="{{ Route::has('blog') ? route('blog') : url('/blog') }}" wire:navigate class="hover:text-amber-400">Blog</a>
      <a href="{{ Route::has('clients') ? route('clients') : url('/clients') }}" wire:navigate class="hover:text-amber-400">Clients</a>


    </nav>

    <!-- RIGHT: CONTACT -->
    <div class="hidden md:flex">
      <a href="{{ Route::has('contact') ? route('contact') : '#contact' }}" wire:navigate
        class="bg-amber-400 font-mono text-black px-4 py-2 rounded-lg font-semibold shadow-lg">
        Contact
      </a>
    </div>

    <!-- MOBILE TOGGLE -->
    <button @click="open=true" class="md:hidden text-amber-400 text-2xl">
      ☰
    </button>
  </div>

  <!-- MOBILE MENU -->
  <div x-show="open" x-cloak x-transition
    class="fixed inset-0 bg-black/80 backdrop-blur-xl z-50 p-6 md:hidden">

    <button @click="open=false" class="text-white text-xl mb-6">✕</button>

    <nav class="space-y-6 text-lg text-white">
      <a href="{{ Route::has('home') ? route('home') : url('/') }}" wire:navigate>Home</a>

      <div class="mt-3">
        <button @click="mobileServices=!mobileServices"
          class="flex justify-between w-full">
          Services <span>+</span>
        </button>

        <div x-show="mobileServices" class="mt-4 space-y-4 text-gray-300">
          <p class="text-amber-400 uppercase text-xs">Web</p>
          <a href="{{ Route::has('services') ? route('services', ['service' => 'laravel']) : url('/services#laravel') }}" wire:navigate class="block">Laravel</a>
          <a href="{{ Route::has('services') ? route('services', ['service' => 'nextjs']) : url('/services#nextjs') }}" wire:navigate class="block">Next.js</a>
          <a href="{{ Route::has('services') ? route('services', ['service' => 'django']) : url('/services#django') }}" wire:navigate class="block">Django</a>
        </div>
      </div>

      <a href="{{ Route::has('about') ? route('about') : url('/about') }}" wire:navigate>About Us</a>
      <br>
      <a href="{{ Route::has('portfolio') ? route('portfolio') : url('/portfolio') }}" wire:navigate>Portfolio</a>


      <a href="#contact"
        class="block text-center bg-amber-400 text-black py-3 rounded-xl">
        Contact
      </a>
    </nav>
  </div>
</header>
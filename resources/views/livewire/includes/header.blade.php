<header
  x-data="{ open:false, mega:false, mobileServices:false, scrolled:false }"
  x-init="window.addEventListener('scroll',()=>scrolled=window.scrollY>60)"
  :class="scrolled
    ? 'bg-black/60 backdrop-blur-xl border-b border-white/10'
    : 'bg-transparent'"
  class="fixed font-sans inset-x-0 top-0 z-50 transition-all">

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
    class="fixed inset-0 bg-black z-50 p-6 md:hidden overflow-y-auto">

    <button @click="open=false" class="text-white text-2xl mb-8">✕</button>

    <nav class="flex flex-col gap-4 text-lg text-white font-medium">
      <a href="{{ Route::has('home') ? route('home') : url('/') }}" wire:navigate class="px-2 py-2 rounded hover:bg-white/10 transition">Home</a>

      <!-- MEGA SERVICES MOBILE -->
      <div>
        <button @click="mobileServices=!mobileServices" class="flex items-center justify-between w-full px-2 py-2 rounded hover:bg-white/10 transition">
          <span>Services</span>
          <svg :class="{'rotate-180': mobileServices}" class="w-5 h-5 ml-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
        </button>
        <div x-show="mobileServices" x-transition class="pl-4 mt-2 flex flex-col gap-2">
          <div>
            <p class="text-amber-400 uppercase text-xs mb-1">Web Development</p>
            <a href="{{ Route::has('services') ? route('services', ['service' => 'laravel']) : url('/services#laravel') }}" wire:navigate class="block text-white/80 hover:text-amber-400 transition-colors">Laravel</a>
            <a href="{{ Route::has('services') ? route('services', ['service' => 'nextjs']) : url('/services#nextjs') }}" wire:navigate class="block text-white/80 hover:text-amber-400 transition-colors">Next.js</a>
            <a href="{{ Route::has('services') ? route('services', ['service' => 'django']) : url('/services#django') }}" wire:navigate class="block text-white/80 hover:text-amber-400 transition-colors">Django</a>
          </div>
          <div class="mt-3">
            <p class="text-amber-400 uppercase text-xs mb-1">Mobile Apps</p>
            <span class="block text-white/80">Flutter</span>
            <span class="block text-white/80">React Native</span>
          </div>
          <div class="mt-3">
            <p class="text-amber-400 uppercase text-xs mb-1">Cloud & DevOps</p>
            <span class="block text-white/80">AWS</span>
            <span class="block text-white/80">CI / CD</span>
            <span class="block text-white/80">Nginx</span>
          </div>
          <div class="mt-4">
            <a href="{{ Route::has('contact') ? route('contact') : '#contact' }}" wire:navigate class="block text-center bg-amber-400 text-black font-semibold py-2 rounded-lg mt-2">Book Call →</a>
          </div>
        </div>
      </div>

      <a href="{{ Route::has('about') ? route('about') : url('/about') }}" wire:navigate class="px-2 py-2 rounded hover:bg-white/10 transition">About</a>
      <a href="{{ Route::has('portfolio') ? route('portfolio') : url('/portfolio') }}" wire:navigate class="px-2 py-2 rounded hover:bg-white/10 transition">Portfolio</a>
      <a href="{{ Route::has('blog') ? route('blog') : url('/blog') }}" wire:navigate class="px-2 py-2 rounded hover:bg-white/10 transition">Blog</a>
      <a href="{{ Route::has('clients') ? route('clients') : url('/clients') }}" wire:navigate class="px-2 py-2 rounded hover:bg-white/10 transition">Clients</a>

      <a href="{{ Route::has('contact') ? route('contact') : '#contact' }}" wire:navigate class="block text-center bg-amber-400 text-black font-semibold py-3 rounded-xl mt-4">Contact</a>
    </nav>
  </div>
</header>
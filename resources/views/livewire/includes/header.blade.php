<!-- ROOT WRAPPER (REQUIRED) -->
<div
  x-data="{ open:false, mega:false, mobileServices:false, scrolled:false }"
  x-init="
    window.addEventListener('scroll', () => scrolled = window.scrollY > 60);
    $watch('open', v => document.body.classList.toggle('overflow-hidden', v))
  "
>

<!-- ================= HEADER ================= -->
<header
  :class="scrolled
    ? 'bg-black/60 backdrop-blur-xl border-b border-white/10'
    : 'bg-transparent'"
  class="fixed inset-x-0 top-0 z-40 transition-all font-sans">

  <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

    <!-- LOGO -->
    <a href="{{ Route::has('home') ? route('home') : url('/') }}" wire:navigate>
      <img src="{{ asset('techonika-logo-dark.png') }}" class="md:h-11 h-9" />
    </a>

    <!-- DESKTOP NAV -->
    <nav class="hidden md:flex items-center uppercase tracking-loose gap-10 text-sm text-white">

      <a href="{{ route('home') }}" class="hover:text-amber-400">Home</a>

      <!-- DESKTOP MEGA MENU -->
      <div class="relative uppercase" @mouseenter="mega=true" @mouseleave="mega=false">
        <button class="flex items-center gap-1 hover:text-amber-400 uppercase">
          Services
          <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-width="2" d="M19 9l-7 7-7-7"/>
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
              <a href="{{ route('contact') }}"
                 class="mt-4 block text-center bg-amber-400 text-black font-semibold py-2 rounded-lg">
                Book Call →
              </a>
            </div>

          </div>
        </div>
      </div>

      <a href="{{ route('about') }}" class="hover:text-amber-400">About</a>
      <a href="{{ route('portfolio') }}" class="hover:text-amber-400">Portfolio</a>
      <a href="{{ route('blog') }}" class="hover:text-amber-400">Blog</a>
      <a href="{{ route('clients') }}" class="hover:text-amber-400">Clients</a>
    </nav>

    <!-- DESKTOP CTA -->
    <a href="{{ route('contact') }}"
       class="hidden md:block bg-amber-400 text-black px-4 py-2 rounded-lg font-semibold">
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

      <a href="{{ route('home') }}" class="mt-2 rounded hover:bg-white/10">Home</a>

      <!-- MOBILE MEGA -->
      <div>
        <button
          @click="mobileServices = !mobileServices"
          class="flex items-center justify-between w-full  rounded hover:bg-white/10">
          <span>Services</span>
          <svg :class="mobileServices && 'rotate-180'"
               class="w-5 h-5 transition-transform"
               fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-width="2" d="M19 9l-7 7-7-7"/>
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

      <a href="{{ route('about') }}">About</a>
      <a href="{{ route('portfolio') }}">Portfolio</a>
      <a href="{{ route('blog') }}">Blog</a>
      <a href="{{ route('clients') }}">Clients</a>

      <a href="{{ route('contact') }}"
         class="mt-6 bg-amber-400 text-black font-semibold py-3 rounded-xl text-center">
        Contact
      </a>
    </nav>
  </div>
</div>

</div>

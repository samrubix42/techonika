<div
  x-data="{
    open:false,
    mega:false,
    packages:false,
    mobileServices:false,
    mobilePackages:false,
    scrolled:false
  }"
  x-init="
    window.addEventListener('scroll', () => scrolled = window.scrollY > 60);
    $watch('open', v => document.body.classList.toggle('overflow-hidden', v))
  "
>

  <!-- ================= HEADER ================= -->
  <header
    :class="scrolled ? 'bg-black/70 backdrop-blur-xl border-b border-white/10' : 'bg-transparent'"
    class="fixed inset-x-0 top-0 z-40 transition-all">

    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

      <!-- LOGO -->
      <a href="{{ route('home') }}">
        <img src="{{ asset('techonika-logo-dark.png') }}" class="h-9 md:h-11">
      </a>

      <!-- DESKTOP NAV -->
      <nav class="hidden md:flex items-center gap-10 text-sm uppercase tracking-widest text-white">

        <a href="{{ route('home') }}" class="hover:text-amber-400">Home</a>

        <!-- SERVICES -->
        <div class="relative" @mouseenter="mega=true" @mouseleave="mega=false">
          <button class="flex items-center gap-1 hover:text-amber-400">
            Services <i class="ri-arrow-down-s-line text-amber-400"></i>
          </button>

          <div x-show="mega" x-cloak x-transition
            class="absolute left-1/2 top-10 -translate-x-1/2 w-64
                   bg-zinc-900/95 backdrop-blur border border-white/10
                   rounded-2xl shadow-2xl p-4">

            <a href="{{ route('webdevelopment') }}" class="block px-4 py-2 rounded hover:bg-white/5">Web Development</a>
            <a href="{{ route('webdesigning') }}" class="block px-4 py-2 rounded hover:bg-white/5">Web Designing</a>
            <a href="{{ route('digital-marketing') }}" class="block px-4 py-2 rounded hover:bg-white/5">Digital Marketing</a>
            <a href="{{ route('graphicdesigning') }}" class="block px-4 py-2 rounded hover:bg-white/5">Graphic Designing</a>
            <a href="{{ route('mobileappdevelopment') }}" class="block px-4 py-2 rounded hover:bg-white/5">Mobile App Development</a>
          </div>
        </div>

        <!-- PACKAGES -->
        <div class="relative" @mouseenter="packages=true" @mouseleave="packages=false">
          <button class="flex items-center gap-1 hover:text-amber-400">
            Packages <i class="ri-arrow-down-s-line text-amber-400"></i>
          </button>

          <div x-show="packages" x-cloak x-transition
            class="absolute left-1/2 top-10 -translate-x-1/2 w-52
                   bg-zinc-900/95 backdrop-blur border border-white/10
                   rounded-2xl shadow-2xl p-4">

            <a href="{{ route('seo-package') }}" class="block px-4 py-2 rounded hover:bg-white/5">SEO Package</a>
            <a href="{{ route('smo-package') }}" class="block px-4 py-2 rounded hover:bg-white/5">SMO Package</a>
            <a href="{{ route('startup-package') }}" class="block px-4 py-2 rounded hover:bg-white/5">Startup Package</a>
          </div>
        </div>

        <a href="{{ route('about') }}" class="hover:text-amber-400">About</a>
        <a href="{{ route('portfolio') }}" class="hover:text-amber-400">Portfolio</a>
        <a href="{{ route('blog') }}" class="hover:text-amber-400">Blog</a>
        <a href="{{ route('contact') }}" class="hover:text-amber-400">Contact</a>
      </nav>

      <!-- DESKTOP CTA -->
      <a href="{{ route('contact') }}"
        class="hidden md:inline-flex px-8 py-2.5 rounded-full font-semibold text-black
               bg-gradient-to-r from-orange-500 via-amber-400 to-amber-600
               hover:scale-105 transition shadow-lg">
        Quick Enquiry
      </a>

      <!-- MOBILE ACTIONS -->
      <div class="md:hidden flex items-center gap-3">

        <!-- MESSAGE -->
        <a href="{{ route('contact') }}"
          class="w-10 h-10 flex items-center justify-center rounded-full
                 bg-white/10 backdrop-blur border border-white/20 text-amber-400">
          <i class="ri-chat-3-line text-lg"></i>
        </a>

        <!-- MENU -->
        <button @click="open=true" class="text-amber-400 text-2xl">
          <i class="ri-menu-4-line"></i>
        </button>

      </div>
    </div>
  </header>

  <!-- ================= MOBILE MENU ================= -->
  <div x-show="open" x-cloak x-transition
    class="fixed inset-0 z-[999] bg-black md:hidden">

    <div class="p-6">
      <button @click="open=false" class="text-white text-2xl mb-8">
        <i class="ri-close-line"></i>
      </button>

      <nav class="flex flex-col gap-5 text-lg text-white">

        <a href="{{ route('home') }}">Home</a>

        <!-- SERVICES -->
        <div>
          <button @click="mobileServices=!mobileServices" class="flex justify-between w-full">
            Services <i class="ri-arrow-down-s-line"></i>
          </button>

          <div x-show="mobileServices" x-transition class="pl-4 mt-3 space-y-3 text-white/80">
            <a href="{{ route('webdevelopment') }}">Web Development</a>
            <a href="{{ route('webdesigning') }}">Web Designing</a>
            <a href="{{ route('digital-marketing') }}">Digital Marketing</a>
            <a href="{{ route('graphicdesigning') }}">Graphic Designing</a>
            <a href="{{ route('mobileappdevelopment') }}">Mobile App Development</a>
          </div>
        </div>

        <!-- PACKAGES -->
        <div>
          <button @click="mobilePackages=!mobilePackages" class="flex justify-between w-full">
            Packages <i class="ri-arrow-down-s-line"></i>
          </button>

          <div x-show="mobilePackages" x-transition class="pl-4 mt-3 space-y-3 text-white/80">
            <a href="{{ route('seo-package') }}">SEO Package</a>
            <a href="{{ route('smo-package') }}">SMO Package</a>
            <a href="{{ route('startup-package') }}">Startup Package</a>
          </div>
        </div>

        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('portfolio') }}">Portfolio</a>
        <a href="{{ route('blog') }}">Blog</a>

        <a href="{{ route('contact') }}"
          class="mt-6 bg-amber-400 text-black py-3 rounded-xl text-center font-semibold">
          Contact
        </a>
      </nav>
    </div>
  </div>

  <!-- ================= MOBILE STICKY FOOTER ================= -->
  <div x-show="!open"
    class="fixed bottom-0 inset-x-0 z-40 md:hidden
           bg-black/70 backdrop-blur-xl border-t border-white/10">

    <div class="flex justify-around py-3">

      <a href="tel:+919999999999"
        class="flex flex-col items-center text-white/70 hover:text-amber-400 transition">
        <i class="ri-phone-line text-xl"></i>
        <span class="text-[11px] mt-1">Call</span>
      </a>

      <a href="https://wa.me/919999999999" target="_blank"
        class="flex flex-col items-center text-white/70 hover:text-green-400 transition">
        <i class="ri-whatsapp-line text-xl"></i>
        <span class="text-[11px] mt-1">WhatsApp</span>
      </a>

      <a href="mailto:info@techonika.com"
        class="flex flex-col items-center text-white/70 hover:text-amber-400 transition">
        <i class="ri-mail-line text-xl"></i>
        <span class="text-[11px] mt-1">Email</span>
      </a>

    </div>
  </div>

<!-- MOBILE SAFE SPACE -->
<style>
  @media (max-width: 768px) {
    body { padding-bottom: 72px; }
  }
</style>

</div>

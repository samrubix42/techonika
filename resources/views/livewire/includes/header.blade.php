<div
  x-data="{
    open:false,
    mega:false,
    packages:false,
    mobileServices:false,
    mobilePackages:false,
    mobileWebDev:false,
    mobileWebDesign:false,
    mobileMobileApp:false,
    mobileDigitalMarketing:false,
    mobileBranding:false,
    scrolled:false
  }"
  x-init="
    window.addEventListener('scroll', () => scrolled = window.scrollY > 60);
    $watch('open', v => document.body.classList.toggle('overflow-hidden', v))
  ">

  <!-- ================= HEADER ================= -->
  <header
    :class="scrolled ? 'bg-black/70 backdrop-blur-xl border-b border-white/10' : 'bg-transparent'"
    class="fixed inset-x-0 top-0 z-40 transition-all">

    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

      <!-- LOGO -->
      <a href="{{ route('home') }}">
        <img src="{{ asset('logo.png') }}" class="h-9 md:h-11">
      </a>

      <!-- DESKTOP NAV -->
      <nav class="hidden md:flex items-center gap-10 text-sm uppercase tracking-widest text-white">

        <a href="{{ route('home') }}" class="hover:text-amber-400">Home</a>


        <!-- PACKAGES -->
        <div class="relative" @mouseenter="packages=true" @mouseleave="packages=false">
          <button class="flex items-center gap-1 hover:text-amber-400">
            PACKAGES <i class="ri-arrow-down-s-line text-amber-400"></i>
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
        <!-- SERVICES MEGA MENU -->
        <div class="relative" @mouseenter="mega=true" @mouseleave="mega=false">
          <button class="flex items-center gap-1 hover:text-amber-400">
            SERVICES <i class="ri-arrow-down-s-line text-amber-400"></i>
          </button>

          <div x-show="mega" x-cloak x-transition
            class="absolute left-1/2 top-10 transform -translate-x-1/2 w-[92vw] max-w-[980px]
                   bg-zinc-900/95 backdrop-blur-xl border border-white/10 shadow-2xl rounded-xl">

            <div class="max-w-[980px] mx-auto px-4 py-6">
              <div class="grid grid-cols-3 gap-6">

                <!-- WEB DEVELOPMENT -->
                <div>
                  <a href="{{ route('webdevelopment') }}"
                    class="text-amber-400 font-semibold text-sm mb-4 block hover:text-amber-300">
                    WEB DEVELOPMENT
                  </a>
                  <div class="space-y-2 text-sm">
                    <a href="{{ route('laravel-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Laravel Development</a>
                    <a href="{{ route('mern-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">MERN Development</a>
                    <a href="{{ route('wordpress-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">WordPress Development</a>
                    <a href="{{ route('shopify-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Shopify Development</a>
                    <a href="{{ route('woo-commerce-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">WooCommerce Development</a>
                    <a href="{{ route('codeigniter-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">CodeIgniter Development</a>
                    <a href="{{ route('magento-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Magento Development</a>
                    <a href="{{ route('php-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">PHP Development</a>
                    <a href="{{ route('symfony-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Symfony Development</a>
                    <a href="{{ route('yii-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Yii Development</a>
                    <a href="{{ route('wix-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Wix Development</a>
                  </div>

                  <a href="{{ route('webdesigning') }}"
                    class="text-amber-400 font-semibold text-sm mt-6 mb-2 block hover:text-amber-300">
                    WEB DESIGNING
                  </a>
                  <div class="space-y-2 text-sm">
                    <a href="{{ route('responsive-web-design') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Responsive Web Design</a>
                    <a href="{{ route('ecommerce-web-design') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Ecommerce Web Design</a>
                    <a href="{{ route('hindi-website-design') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Hindi Website Design</a>
                    <a href="{{ route('corporate-website-design') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Corporate Website Design</a>
                                        <a href="{{ route('graphicdesigning') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Graphic Designing</a>
                    <a href="{{ route('static-website-design') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Static Website Design</a>
                    <a href="{{ route('custom-web-design') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Custom Web Design</a>
                  </div>


                </div>

                <!-- MOBILE APP & DIGITAL MARKETING -->
                <div>
                  <a href="{{ route('mobileappdevelopment') }}"
                    class="text-amber-400 font-semibold text-sm mb-4 block hover:text-amber-300">
                    MOBILE APP DEVELOPMENT
                  </a>
                  <div class="space-y-2 text-sm">
                    <a href="{{ route('android-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Android Development</a>
                    <a href="{{ route('ios-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">iOS Development</a>
                    <a href="{{ route('hybrid-app-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Hybrid App Development</a>
                    <a href="{{ route('react-native-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">React Native Development</a>
                    <a href="{{ route('flutter-development') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Flutter Development</a>
                  </div>

                  <a href="{{ route('digital-marketing') }}"
                    class="text-amber-400 font-semibold text-sm mt-6 mb-4 block hover:text-amber-300">
                    DIGITAL MARKETING
                  </a>
                  <div class="space-y-2 text-sm">
                    <a href="{{ route('search-engine-optimization') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Search Engine Optimization</a>
                    <a href="{{ route('local-seo') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Local SEO</a>
                    <a href="{{ route('ppc-services') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">PPC Services</a>
                    <a href="{{ route('smo-services') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">SMO Services</a>
                    <a href="{{ route('smm-service') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">SMM Services</a>
                    <a href="{{ route('orm-services') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">ORM Services</a>
                  </div>
                </div>

                <!-- BRANDING & CONTENT -->
                <div>
                  <a href="{{ route('branding') }}"
                    class="text-amber-400 font-semibold text-sm mb-4 block hover:text-amber-300">
                    BRANDING
                  </a>
                  <div class="space-y-2 text-sm">
                    <a href="{{ route('logo-designing') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Logo Designing</a>
                    <a href="{{ route('visit-card-designing') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Visiting Card Designing</a>
                    <a href="{{ route('company-profile-designing') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Company Profile Designing</a>
                    <a href="{{ route('package-designing') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Package Designing</a>
                    <a href="{{ route('2d-video-explaination') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">2D Video Explainer</a>
                  </div>

                  <div class="text-amber-400 font-semibold text-sm mt-6 mb-4">
                    CONTENT SERVICES
                  </div>
                  <div class="space-y-2 text-sm">
                    <a href="{{ route('copywriting') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Copywriting</a>
                    <a href="{{ route('content-writing') }}" class="block text-white/70 hover:text-amber-400 hover:pl-2 transition-all">Content Writing</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>


        <a href="{{ route('about') }}" class="hover:text-amber-400">About</a>
        <a href="{{ route('portfolio') }}" class="hover:text-amber-400">Portfolio</a>
        <a href="{{ route('blog') }}" class="hover:text-amber-400">Blog</a>
        <a href="{{ route('contact') }}" class="hover:text-amber-400">Contact</a>
      </nav>

      <!-- DESKTOP CTA -->
      <button @click="$dispatch('open-modal', { to: 'contact' })"
        class="hidden md:inline-flex px-8 py-2.5 rounded-full font-semibold text-black
               bg-gradient-to-r from-orange-500 via-amber-400 to-amber-600
               hover:scale-105 transition shadow-lg">
        Quick Enquiry
      </button>

      <!-- MOBILE ACTIONS -->
      <div class="md:hidden flex items-center gap-3">

        <!-- MESSAGE -->
        <button @click="$dispatch('open-modal', { to: 'contact' })"
          class="w-10 h-10 flex items-center justify-center rounded-full
                 bg-white/10 backdrop-blur border border-white/20 text-amber-400">
          <i class="ri-chat-3-line text-lg"></i>
        </button>
        <!-- MENU -->
        <button @click="open=true" class="text-amber-400 text-2xl">
          <i class="ri-menu-4-line"></i>
        </button>

      </div>
    </div>
  </header>

  <!-- ================= MOBILE MENU ================= -->
  <div x-show="open" x-cloak x-transition
    class="fixed inset-0 z-[999] bg-black md:hidden overflow-y-auto">

    <div class="p-6">
      <button @click="open=false" class="text-white text-2xl mb-8">
        <i class="ri-close-line"></i>
      </button>

      <nav class="flex flex-col gap-5 text-lg text-white">

        <a href="{{ route('home') }}">Home</a>

        <!-- SERVICES MEGA MENU -->
        <div>
          <button @click="mobileServices=!mobileServices" class="flex justify-between w-full">
            Services <i class="ri-arrow-down-s-line"></i>
          </button>

          <div x-show="mobileServices" x-transition class="pl-4 mt-3 space-y-4 flex flex-col text-white/80">

            <!-- Web Development -->
            <div>
              <button @click="mobileWebDev=!mobileWebDev" class="flex justify-between w-full text-amber-400 font-semibold text-base">
                Web Development <i class="ri-arrow-down-s-line"></i>
              </button>
              <div x-show="mobileWebDev" x-transition class="pl-4 mt-2 space-y-2 text-sm">
                <a href="{{ route('webdevelopment') }}" class="block">Overview</a>
                <a href="{{ route('laravel-development') }}" class="block">Laravel Development</a>
                <a href="{{ route('mern-development') }}" class="block">MERN Development</a>
                <a href="{{ route('wordpress-development') }}" class="block">WordPress Development</a>
                <a href="{{ route('shopify-development') }}" class="block">Shopify Development</a>
                <a href="{{ route('woo-commerce-development') }}" class="block">WooCommerce Development</a>
                <a href="{{ route('codeigniter-development') }}" class="block">CodeIgniter Development</a>
                <a href="{{ route('magento-development') }}" class="block">Magento Development</a>
                <a href="{{ route('php-development') }}" class="block">PHP Development</a>
                <a href="{{ route('symfony-development') }}" class="block">Symfony Development</a>
                <a href="{{ route('yii-development') }}" class="block">Yii Development</a>
                <a href="{{ route('wix-development') }}" class="block">Wix Development</a>
              </div>
            </div>

            <!-- Web Designing -->
            <div>
              <button @click="mobileWebDesign=!mobileWebDesign" class="flex justify-between w-full text-amber-400 font-semibold text-base">
                Web Designing <i class="ri-arrow-down-s-line"></i>
              </button>
              <div x-show="mobileWebDesign" x-transition class="pl-4 mt-2 space-y-2 text-sm">
                <a href="{{ route('webdesigning') }}" class="block">Overview</a>
                <a href="{{ route('responsive-web-design') }}" class="block">Responsive Web Design</a>
                <a href="{{ route('ecommerce-web-design') }}" class="block">Ecommerce Web Design</a>
                <a href="{{ route('hindi-website-design') }}" class="block">Hindi Website Design</a>
                <a href="{{ route('corporate-website-design') }}" class="block">Corporate Website Design</a>
                <a href="{{ route('graphicdesigning') }}" class="block">Graphic Designing</a>
                <a href="{{ route('static-website-design') }}" class="block">Static Website Design</a>
                <a href="{{ route('custom-web-design') }}" class="block">Custom Web Design</a>
              </div>
            </div>

            <!-- Graphic Designing -->

            <!-- Mobile App Development -->
            <div>
              <button @click="mobileMobileApp=!mobileMobileApp" class="flex justify-between w-full text-amber-400 font-semibold text-base">
                Mobile App Development <i class="ri-arrow-down-s-line"></i>
              </button>
              <div x-show="mobileMobileApp" x-transition class="pl-4 mt-2 space-y-2 text-sm">
                <a href="{{ route('mobileappdevelopment') }}" class="block">Overview</a>
                <a href="{{ route('android-development') }}" class="block">Android Development</a>
                <a href="{{ route('ios-development') }}" class="block">iOS Development</a>
                <a href="{{ route('hybrid-app-development') }}" class="block">Hybrid App Development</a>
                <a href="{{ route('react-native-development') }}" class="block">React Native Development</a>
                <a href="{{ route('flutter-development') }}" class="block">Flutter Development</a>
              </div>
            </div>

            <!-- Digital Marketing -->
            <div>
              <button @click="mobileDigitalMarketing=!mobileDigitalMarketing" class="flex justify-between w-full text-amber-400 font-semibold text-base">
                Digital Marketing <i class="ri-arrow-down-s-line"></i>
              </button>
              <div x-show="mobileDigitalMarketing" x-transition class="pl-4 mt-2 space-y-2 text-sm">
                <a href="{{ route('digital-marketing') }}" class="block">Overview</a>
                <a href="{{ route('search-engine-optimization') }}" class="block">Search Engine Optimization</a>
                <a href="{{ route('local-seo') }}" class="block">Local SEO</a>
                <a href="{{ route('ppc-services') }}" class="block">PPC Services</a>
                <a href="{{ route('smo-services') }}" class="block">SMO Services</a>
                <a href="{{ route('smm-service') }}" class="block">SMM Services</a>
                <a href="{{ route('orm-services') }}" class="block">ORM Services</a>
                <a href="{{ route('copywriting') }}" class="block">Copywriting</a>
                <a href="{{ route('content-writing') }}" class="block">Content Writing</a>
              </div>
            </div>

            <!-- Branding -->
            <div>
              <button @click="mobileBranding=!mobileBranding" class="flex justify-between w-full text-amber-400 font-semibold text-base">
                Branding <i class="ri-arrow-down-s-line"></i>
              </button>
              <div x-show="mobileBranding" x-transition class="pl-4 mt-2 space-y-2 text-sm">
                <a href="{{ route('branding') }}" class="block">Overview</a>
                <a href="{{ route('logo-designing') }}" class="block">Logo Designing</a>
                <a href="{{ route('visit-card-designing') }}" class="block">Visiting Card Designing</a>
                <a href="{{ route('company-profile-designing') }}" class="block">Company Profile Designing</a>
                <a href="{{ route('package-designing') }}" class="block">Package Designing</a>
                <a href="{{ route('2d-video-explaination') }}" class="block">2D Video Explainer</a>
              </div>
            </div>

          </div>
        </div>

        <!-- PACKAGES -->
        <div>
          <button @click="mobilePackages=!mobilePackages" class="flex justify-between w-full">
            Packages <i class="ri-arrow-down-s-line"></i>
          </button>

          <div x-show="mobilePackages" x-transition class="pl-4 mt-3 flex flex-col space-y-3 text-white/80">
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

      <a href="tel:+918810599816"
        class="flex flex-col items-center text-white/70 hover:text-amber-400 transition">
        <i class="ri-phone-line text-xl"></i>
        <span class="text-[11px] mt-1">Call</span>
      </a>

      <a href="https://wa.me/918810599816" target="_blank"
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
      body {
        padding-bottom: 72px;
      }
    }
  </style>

</div>
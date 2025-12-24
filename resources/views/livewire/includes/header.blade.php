<header
  x-data="{
    open: false,
    mega: false,
    mobileServices: false
  }"
  class="fixed top-0 inset-x-0 z-50 bg-black text-white">

  <!-- NAVBAR -->
  <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

    <!-- LOGO -->
    <a href="/" class="h-10 flex items-center font-bold text-2xl">
        <img src="{{ asset('techonika-logo-dark.png') }}" class="h-8 w-auto" alt="Techonika Logo">
        </a>

    <!-- DESKTOP MENU -->
    <nav class="hidden md:flex items-center gap-8">

      <a href="#" class="hover:text-amber-400">Home</a>

     <!-- DESKTOP MEGA MENU -->
<div class="relative"
     @mouseenter="mega = true"
     @mouseleave="mega = false">

  <button
    class="flex items-center gap-1 hover:text-amber-400">
    Services
    <svg class="w-4 h-4 text-amber-400"
         fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-width="2" d="M19 9l-7 7-7-7"/>
    </svg>
  </button>

  <!-- HOVER BRIDGE (IMPORTANT) -->
  <div class="absolute left-0 right-0 h-6 top-full"></div>

  <!-- MEGA MENU PANEL -->
  <div
    x-show="mega"
    x-cloak
    x-transition
    class="fixed left-1/2 top-16 -translate-x-1/2
           w-[1100px] max-w-[95vw]
           bg-zinc-900 border border-white/10
           rounded-2xl shadow-2xl p-10 z-[999]">

    <div class="grid grid-cols-4 gap-10">

      <div>
        <h4 class="text-xs uppercase text-amber-400 mb-4">
          Web Development
        </h4>
        <ul class="space-y-2 text-gray-300">
          <li><a class="hover:text-amber-400" href="#">Laravel</a></li>
          <li><a class="hover:text-amber-400" href="#">Next.js</a></li>
          <li><a class="hover:text-amber-400" href="#">Django</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-xs uppercase text-amber-400 mb-4">
          Mobile Apps
        </h4>
        <ul class="space-y-2 text-gray-300">
          <li><a class="hover:text-amber-400" href="#">Flutter</a></li>
          <li><a class="hover:text-amber-400" href="#">React Native</a></li>
        </ul>
      </div>

      <div>
        <h4 class="text-xs uppercase text-amber-400 mb-4">
          Cloud & DevOps
        </h4>
        <ul class="space-y-2 text-gray-300">
          <li><a class="hover:text-amber-400" href="#">AWS</a></li>
          <li><a class="hover:text-amber-400" href="#">CI / CD</a></li>
          <li><a class="hover:text-amber-400" href="#">Nginx</a></li>
        </ul>
      </div>

      <!-- CTA -->
      <div class="bg-black/60 border border-white/10 rounded-xl p-6">
        <h5 class="font-semibold mb-2">Need Help?</h5>
        <p class="text-sm text-gray-400">
          Free consultation for your product.
        </p>
        <a href="#contact"
           class="mt-4 block text-center bg-amber-400
                  text-black font-semibold rounded-lg py-2">
          Book Call →
        </a>
      </div>

    </div>
  </div>
</div>


      <a href="#" class="hover:text-amber-400">About</a>

      <a href="#contact"
         class="bg-amber-400 text-black px-4 py-2 rounded-lg font-semibold">
        Contact
      </a>
    </nav>

    <!-- MOBILE TOGGLE -->
    <button
      @click="open = !open"
      class="md:hidden text-amber-400 text-2xl">
      ☰
    </button>
  </div>

  <!-- MOBILE MENU -->
  <div
    x-show="open"
    x-cloak
    x-transition
    class="md:hidden fixed top-16 left-0 right-0 bottom-0
           bg-black z-[999] overflow-y-auto">

    <div class="p-6 space-y-6">

      <a href="/" class="block text-lg" @click="open = false">Home</a>

      <!-- MOBILE SERVICES MEGA -->
      <div>
        <button
          @click="mobileServices = !mobileServices"
          class="flex justify-between w-full text-lg">

          Services
          <span x-text="mobileServices ? '−' : '+'"></span>
        </button>

        <div
          x-show="mobileServices"
          x-transition
          class="mt-4 space-y-4">

          <div class="bg-zinc-900 rounded-xl p-4">
            <p class="text-xs uppercase text-amber-400 mb-2">
              Web Development
            </p>
            <ul class="space-y-2 text-gray-300">
              <li>Laravel</li>
              <li>Next.js</li>
              <li>Django</li>
            </ul>
          </div>

          <div class="bg-zinc-900 rounded-xl p-4">
            <p class="text-xs uppercase text-amber-400 mb-2">
              Mobile Apps
            </p>
            <ul class="space-y-2 text-gray-300">
              <li>Flutter</li>
              <li>React Native</li>
            </ul>
          </div>

          <div class="bg-zinc-900 rounded-xl p-4">
            <p class="text-xs uppercase text-amber-400 mb-2">
              Cloud & DevOps
            </p>
            <ul class="space-y-2 text-gray-300">
              <li>AWS</li>
              <li>CI / CD</li>
              <li>Nginx</li>
            </ul>
          </div>

        </div>
      </div>

      <a href="#" class="block text-lg" @click="open = false">About</a>

      <a href="#contact"
         class="block text-center bg-amber-400 text-black
                py-3 rounded-xl font-semibold"
         @click="open = false">
        Contact
      </a>

    </div>
  </div>
</header>



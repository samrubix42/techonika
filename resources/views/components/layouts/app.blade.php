<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TFTJW3BS');
    </script>
    
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @hasSection('meta')
    @yield('meta')
    @else
    <title>{{ $title ?? 'Technonika - Web Development, Digital Marketing & IT Solutions' }}</title>
    <meta name="description" content="Technonika offers professional web development, digital marketing, SEO, graphic designing, and IT solutions to grow your business online.">
    <meta name="keywords" content="web development, digital marketing, SEO services, graphic designing, web designing, mobile app development">
    @endif

    <meta name="author" content="Technonika">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="robots" content="noindex, nofollow">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css"
        rel="stylesheet" />
    <!-- Icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- Page specific meta -->
    @stack('meta')

    <!-- Styles & Scripts -->
    @if (file_exists(public_path('build/manifest.json')))
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $css = $manifest['resources/css/app.css']['file'] ?? null;
    $js = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if ($css)
    <link rel="stylesheet" href="{{ asset('build/'.$css) }}">
    @endif

    @if ($js)
    <script src="{{ asset('build/'.$js) }}" defer></script>
    @endif
    @else
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @vite('resources/css/app.css')

    @livewireStyles

    <style>
        [x-cloak] {
            display: none !important;
        }

        .transition-fast {
            transition: all 0.25s ease;
        }
    </style>
    <style>
        /* Make native selects and their options visible on the dark layout */
        select,
        select option {
            background-color: #000 !important;
            color: #fff !important;
        }

        /* Improve placeholder contrast */
        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        /* Remove native focus outline clash */
        select:focus,
        input:focus,
        textarea:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.03);
        }
    </style>

</head>

<body class="antialiased bg-gray-50 text-gray-800 font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFTJW3BS"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header -->
    <livewire:includes.header />

    <main class="min-h-screen max-w-full bg-black overflow-x-hidden">
        {{ $slot }}
        <a href="https://wa.me/918810599816?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
            target="_blank"
            class="hidden md:flex fixed bottom-6 right-6 z-50
          items-center justify-center
          w-14 h-14 rounded-full
          bg-green-600 hover:bg-green-700
          shadow-lg hover:shadow-xl
          transition-all duration-300
          animate-bounce">

            <i class="ri-whatsapp-line text-white text-2xl"></i>
        </a>
        </a>


    </main>


    <!-- Footer -->
    <livewire:includes.footer />
    @if (!request()->routeIs('contact'))
    <livewire:model.contact-modal />
    @endif

    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    @livewireScripts

</body>


</html>
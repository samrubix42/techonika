<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Technonika' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
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


        <!-- WhatsApp Icon -->
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-7 h-7 text-white"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.553 4.164 1.6 5.964L0 24l6.222-1.633A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm6.204 17.793c-.261.732-1.503 1.428-2.064 1.513-.52.079-1.19.112-1.918-.121-.44-.14-1.006-.326-1.737-.64-3.054-1.317-5.045-4.34-5.195-4.54-.15-.198-1.237-1.65-1.237-3.145 0-1.496.784-2.23 1.063-2.535.277-.305.603-.38.805-.38.2 0 .402.002.577.011.185.01.433-.07.677.517.261.634.89 2.191.967 2.35.078.16.13.35.026.547-.104.197-.157.32-.313.493-.157.172-.33.386-.471.52-.156.157-.319.328-.138.64.182.312.807 1.33 1.732 2.154 1.19 1.061 2.19 1.392 2.503 1.548.312.157.495.13.677-.078.183-.21.785-.916.996-1.23.21-.312.418-.26.705-.156.287.104 1.82.858 2.134 1.014.313.157.52.235.597.365.078.13.078.755-.183 1.487z" />
        </svg>
        </a>

    </main>


    <!-- Footer -->
    <livewire:includes.footer />
    @if (!request()->routeIs('contact'))
    <livewire:model.contact-modal />
    @endif

    @livewireScripts

</body>


</html>
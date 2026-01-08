<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Technonika' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css"
    rel="stylesheet"
/>
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
</head>

<body class="antialiased bg-gray-50 text-gray-800 font-sans">

    <!-- Header -->
    <livewire:includes.header />

    <main class="min-h-screen max-w-full bg-black overflow-x-hidden">
        {{ $slot }}
    </main>


    <!-- Footer -->
    <livewire:includes.footer />

    @livewireScripts
</body>

</html>
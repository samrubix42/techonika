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

    <link rel="canonical" href="{{ url()->current() }}" />

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



</head>

<body class="antialiased bg-gray-50 text-gray-800 font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFTJW3BS"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="min-h-screen bg-black text-white flex items-center justify-center relative overflow-hidden">

        <!-- Background Glow -->
        <div class="absolute -top-48 left-1/2 -translate-x-1/2 w-[700px] h-[300px]
              bg-primary/20 blur-[180px] rounded-full"></div>

        <div class="relative max-w-3xl mx-auto px-4 text-center">

            <!-- Icon -->
            <div class="flex justify-center mb-8">
                <div class="w-20 h-20 rounded-full bg-white/5 border border-white/10
                  flex items-center justify-center">
                    <i class="ri-error-warning-line text-primary text-4xl"></i>
                </div>
            </div>

            <!-- Error Code -->
            <h1 class="text-7xl sm:text-8xl font-semibold tracking-tight">
                404
            </h1>

            <!-- Message -->
            <h2 class="mt-6 text-2xl sm:text-3xl font-medium">
                Page Not Found
            </h2>

            <p class="mt-4 text-white/60 text-lg max-w-xl mx-auto leading-relaxed">
                The page you’re looking for doesn’t exist or may have been moved.
                Let’s get you back on track.
            </p>

            <!-- Actions -->
            <div class="mt-12 flex flex-wrap justify-center gap-6">

                <a href="/"
                    class="inline-flex items-center gap-2 px-10 py-4 rounded-lg
                bg-primary text-black font-medium hover:bg-primary/90 transition">
                    <i class="ri-home-4-line"></i>
                    Back to Home
                </a>

                <a href="/contact"
                    class="inline-flex items-center gap-2 px-10 py-4 rounded-lg
                border border-white/20 hover:border-primary hover:text-primary transition">
                    <i class="ri-customer-service-2-line"></i>
                    Contact Support
                </a>

            </div>
        </div>
    </div>


    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    @livewireScripts

</body>


</html>
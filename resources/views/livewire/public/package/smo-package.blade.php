@section('meta')
    <title>SMO Packages | Social Media Optimization & Marketing Services</title>
    <meta name="description" content="Enhance your social media presence with Technonika SMO packages. Get professional social media optimization and marketing services for all major platforms.">
    <meta name="keywords" content="SMO packages, social media optimization, social media marketing, SMO services, social media management, SMO pricing">
@endsection

<div>
    <section class="relative bg-black py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">

            <!-- Soft Accent Glow -->
            <div class="absolute -top-32 left-1/2 -translate-x-1/2
                    w-[500px] h-[500px] bg-primary/10
                    blur-3xl rounded-full -z-10"></div>

            <!-- Small Label -->
            <span class="inline-flex items-center gap-2
                     text-primary uppercase tracking-widest text-sm
                     border border-primary/30 px-4 py-1.5 rounded-full">
                Social Media Optimization
            </span>

            <!-- Main Heading -->
            <h1 class="mt-8 text-3xl sm:text-4xl lg:text-5xl xl:text-[56px]
                   font-light text-white leading-tight">
                SMO Packages That Build
                <span class="block font-semibold text-primary">
                    Trust & Visibility
                </span>
            </h1>

            <!-- Description -->
            <p class="mt-8 max-w-3xl mx-auto
                  text-white/80 text-base sm:text-lg leading-relaxed">
                We help businesses grow on social media with
                <span class="text-white font-medium">consistency, clarity, and purpose</span> not noise.
                Our SMO packages focus on meaningful engagement,
                steady visibility, and long-term brand presence.
            </p>

            <!-- CTA -->
            <div class="mt-12 flex flex-wrap justify-center gap-4">
                <a href="#smo-packages"
                    class="inline-flex items-center gap-2
                      px-10 py-3.5 rounded-full
                      bg-primary text-black font-semibold
                      hover:opacity-90 transition">
                    View SMO Packages
                    <i class="ri-arrow-right-line"></i>
                </a>

                <button @click="$dispatch('open-modal', { to: 'contact' })"
                    class="inline-flex items-center gap-2
                      px-10 py-3.5 rounded-full
                      border border-white/20 text-white
                      hover:bg-white hover:text-black transition">
                    Talk to Expert
                </button>
            </div>

        </div>
    </section>

    <section class="bg-black py-10">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="max-w-3xl mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl
                       text-white font-light leading-tight">
                    What We Do in
                    <span class="font-semibold text-primary">
                        Social Media Optimization
                    </span>
                </h2>

                <p class="mt-6 text-white/80 text-base sm:text-lg">
                    Our SMO process focuses on clarity, consistency,
                    and genuine connection not random posting.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card -->
                <div class="group bg-white/5 border border-white/10
                        rounded-2xl p-6 transition
                        hover:border-primary/40 hover:bg-white/10">
                    <div class="w-12 h-12 rounded-xl
                            bg-primary/10 text-primary
                            flex items-center justify-center mb-5">
                        <i class="ri-calendar-check-line text-2xl"></i>
                    </div>

                    <h3 class="text-white font-semibold mb-2">
                        Content Planning
                    </h3>

                    <p class="text-white/70 text-sm leading-relaxed">
                        Purpose-driven content planned around
                        your brand voice, goals, and audience behavior.
                    </p>
                </div>

                <!-- Card -->
                <div class="group bg-white/5 border border-white/10
                        rounded-2xl p-6 transition
                        hover:border-primary/40 hover:bg-white/10">
                    <div class="w-12 h-12 rounded-xl
                            bg-primary/10 text-primary
                            flex items-center justify-center mb-5">
                        <i class="ri-user-settings-line text-2xl"></i>
                    </div>

                    <h3 class="text-white font-semibold mb-2">
                        Profile Optimization
                    </h3>

                    <p class="text-white/70 text-sm leading-relaxed">
                        Optimized bios, highlights, descriptions,
                        and visual structure for better credibility.
                    </p>
                </div>

                <!-- Card -->
                <div class="group bg-white/5 border border-white/10
                        rounded-2xl p-6 transition
                        hover:border-primary/40 hover:bg-white/10">
                    <div class="w-12 h-12 rounded-xl
                            bg-primary/10 text-primary
                            flex items-center justify-center mb-5">
                        <i class="ri-brush-line text-2xl"></i>
                    </div>

                    <h3 class="text-white font-semibold mb-2">
                        Visual Consistency
                    </h3>

                    <p class="text-white/70 text-sm leading-relaxed">
                        Clean, consistent designs that feel human,
                        approachable, and easy to recognize.
                    </p>
                </div>

                <!-- Card -->
                <div class="group bg-white/5 border border-white/10
                        rounded-2xl p-6 transition
                        hover:border-primary/40 hover:bg-white/10">
                    <div class="w-12 h-12 rounded-xl
                            bg-primary/10 text-primary
                            flex items-center justify-center mb-5">
                        <i class="ri-chat-heart-line text-2xl"></i>
                    </div>

                    <h3 class="text-white font-semibold mb-2">
                        Engagement Support
                    </h3>

                    <p class="text-white/70 text-sm leading-relaxed">
                        Support for likes, replies, and interactions
                        to keep your brand active and responsive.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-black py-10 border-t border-white/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="relative z-10">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl
                       font-light text-white leading-tight">
                    Why SMO Is Important for
                    <span class="font-semibold text-primary">
                        Your Business
                    </span>
                </h2>

                <p class="mt-8 text-white/80 text-base sm:text-lg leading-relaxed">
                    Social media is where people discover, trust,
                    and remember brands.
                    Social Media Optimization helps your business stay
                    visible, consistent, and relatable
                    without sounding forced or salesy.
                </p>

                <p class="mt-5 text-white/80 text-base sm:text-lg leading-relaxed">
                    Instead of chasing trends,
                    we focus on steady growth,
                    meaningful connection,
                    and long-term brand value.
                </p>
            </div>

            <!-- RIGHT CARD -->
            <div class="relative bg-white/5 border border-white/10
                    rounded-3xl p-10 backdrop-blur-md">

                <ul class="space-y-5">

                    <li class="flex items-start gap-4">
                        <span class="w-9 h-9 rounded-full
                                 bg-primary/10 text-primary
                                 flex items-center justify-center">
                            <i class="ri-checkbox-circle-line text-xl"></i>
                        </span>
                        <p class="text-white/80 leading-relaxed">
                            Consistent and recognizable brand presence
                            across social platforms
                        </p>
                    </li>

                    <li class="flex items-start gap-4">
                        <span class="w-9 h-9 rounded-full
                                 bg-primary/10 text-primary
                                 flex items-center justify-center">
                            <i class="ri-chat-smile-2-line text-xl"></i>
                        </span>
                        <p class="text-white/80 leading-relaxed">
                            Better engagement with the right audience,
                            not random followers
                        </p>
                    </li>

                    <li class="flex items-start gap-4">
                        <span class="w-9 h-9 rounded-full
                                 bg-primary/10 text-primary
                                 flex items-center justify-center">
                            <i class="ri-shield-check-line text-xl"></i>
                        </span>
                        <p class="text-white/80 leading-relaxed">
                            Increased brand trust through
                            clear and steady communication
                        </p>
                    </li>

                    <li class="flex items-start gap-4">
                        <span class="w-9 h-9 rounded-full
                                 bg-primary/10 text-primary
                                 flex items-center justify-center">
                            <i class="ri-links-line text-xl"></i>
                        </span>
                        <p class="text-white/80 leading-relaxed">
                            Strong support for SEO,
                            website traffic, and visibility
                        </p>
                    </li>

                    <li class="flex items-start gap-4">
                        <span class="w-9 h-9 rounded-full
                                 bg-primary/10 text-primary
                                 flex items-center justify-center">
                            <i class="ri-group-line text-xl"></i>
                        </span>
                        <p class="text-white/80 leading-relaxed">
                            Long-term community building
                            instead of short-term attention
                        </p>
                    </li>

                </ul>
            </div>

            <!-- Soft Glow -->
            <div class="absolute -bottom-32 right-0
                    w-[420px] h-[420px]
                    bg-primary/10 blur-3xl rounded-full"></div>

        </div>
    </section>

    <section id="smo-packages"
        class="relative bg-black py-32 border-t border-white/10 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="text-primary uppercase tracking-widest text-sm">
                    Social Media Optimization
                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl
                       text-white font-light leading-tight">
                    Our <span class="text-primary font-semibold">SMO Packages</span>
                </h2>

                <p class="mt-6 text-white/80 text-base sm:text-lg leading-relaxed">
                    Social media plans built with clarity, consistency, and purpose.
                    We focus on meaningful engagement, strong brand presence,
                    and steady growth not shortcuts.
                </p>
            </div>

            <!-- Packages Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <!-- STARTER SMO -->
                <div class="bg-white/5 border border-white/10
            rounded-3xl p-8 flex flex-col">

                    <h3 class="text-white font-semibold text-xl">
                        Starter SMO
                    </h3>
                    <p class="text-white/60 mt-2">
                        For small & local businesses
                    </p>

                    <p class="mt-6 text-4xl font-bold text-primary">
                        ₹7,999<span class="text-sm text-white/60 font-normal"> /month</span>
                    </p>

                    <ul class="mt-8 space-y-4 text-white/80 text-sm flex-1">

                        <li class="flex gap-3">
                            <i class="ri-share-line text-primary text-lg"></i>
                            3 social media platforms
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-image-line text-primary text-lg"></i>
                            12 branded static posts
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-user-settings-line text-primary text-lg"></i>
                            Profile & bio optimization
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-brush-line text-primary text-lg"></i>
                            Basic brand visuals & templates
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-chat-heart-line text-primary text-lg"></i>
                            Basic engagement guidance
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-calendar-line text-primary text-lg"></i>
                            Content posting schedule
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-bar-chart-line text-primary text-lg"></i>
                            Monthly performance report
                        </li>
                    </ul>

                    <button
                        @click="
                Livewire.dispatch('setPackage', 'SMO Starter Package');
                window.dispatchEvent(new CustomEvent('open-package-modal'));
            "
                        class="relative z-10 mt-10 inline-flex justify-center items-center gap-2
               py-3 rounded-full border border-primary
               text-primary hover:bg-primary hover:text-black transition">
                        Get Started
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!-- GROWTH SMO -->
                <div class="relative bg-primary/5 border-2 border-primary
            rounded-3xl p-8 flex flex-col overflow-visible">

                    <!-- FIX: pointer-events-none added -->
                    <span class="pointer-events-none absolute -top-4 left-1/2 -translate-x-1/2
                 bg-primary text-black px-4 py-1
                 rounded-full text-xs font-semibold">
                        MOST POPULAR
                    </span>

                    <h3 class="text-white font-semibold text-xl">
                        Growth SMO
                    </h3>
                    <p class="text-white/60 mt-2">
                        For growing brands & startups
                    </p>

                    <p class="mt-6 text-4xl font-bold text-primary">
                        ₹14,999<span class="text-sm text-white/60 font-normal"> /month</span>
                    </p>

                    <ul class="mt-8 space-y-4 text-white/80 text-sm flex-1">

                        <li class="flex gap-3">
                            <i class="ri-share-forward-line text-primary text-lg"></i>
                            4 social media platforms
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-layout-grid-line text-primary text-lg"></i>
                            20 posts (static + carousel)
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-video-line text-primary text-lg"></i>
                            Reels planning guidance
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-lightbulb-line text-primary text-lg"></i>
                            Monthly content & hashtag strategy
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-palette-line text-primary text-lg"></i>
                            Visual consistency & brand tone
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-chat-smile-2-line text-primary text-lg"></i>
                            Active engagement & replies
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-line-chart-line text-primary text-lg"></i>
                            Growth insights & analytics
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-feedback-line text-primary text-lg"></i>
                            Monthly review & improvements
                        </li>
                    </ul>

                    <button
                        @click.prevent.stop="
                Livewire.dispatch('setPackage', 'SMO Growth Package');
                window.dispatchEvent(new CustomEvent('open-package-modal'));
            "
                        class="relative z-10 mt-10 inline-flex justify-center items-center gap-2
               py-3 rounded-full bg-primary
               text-black font-semibold hover:opacity-90 transition">
                        Choose Plan
                        <i class="ri-check-line"></i>
                    </button>
                </div>

                <!-- ADVANCED SMO -->
                <div class="bg-white/5 border border-white/10
            rounded-3xl p-8 flex flex-col">

                    <h3 class="text-white font-semibold text-xl">
                        Advanced SMO
                    </h3>
                    <p class="text-white/60 mt-2">
                        For competitive & scaling businesses
                    </p>

                    <p class="mt-6 text-4xl font-bold text-primary">
                        Custom
                    </p>

                    <ul class="mt-8 space-y-4 text-white/80 text-sm flex-1">

                        <li class="flex gap-3">
                            <i class="ri-strategy-line text-primary text-lg"></i>
                            Custom SMO growth roadmap
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-video-add-line text-primary text-lg"></i>
                            Reels, campaigns & trend execution
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-book-open-line text-primary text-lg"></i>
                            Brand storytelling & messaging
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-megaphone-line text-primary text-lg"></i>
                            Campaign & launch support
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-radar-line text-primary text-lg"></i>
                            Audience & competitor analysis
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-customer-service-2-line text-primary text-lg"></i>
                            Dedicated account manager
                        </li>

                        <li class="flex gap-3">
                            <i class="ri-shield-check-line text-primary text-lg"></i>
                            Brand reputation monitoring
                        </li>
                    </ul>

                    <button
                        @click="
                Livewire.dispatch('setPackage', 'SMO Advanced Package');
                window.dispatchEvent(new CustomEvent('open-package-modal'));
            "
                        class="relative z-10 mt-10 inline-flex justify-center items-center gap-2
               py-3 rounded-full border border-primary
               text-primary hover:bg-primary hover:text-black transition">
                        Talk to Us
                        <i class="ri-chat-3-line"></i>
                    </button>
                </div>

            </div>


            <!-- Glow Effect -->
            <div class="absolute -bottom-40 left-1/2 -translate-x-1/2
                    w-[520px] h-[520px]
                    bg-primary/10 blur-3xl rounded-full"></div>

        </div>
    </section>
    <section class="px-[2%] md:px-[8%]">
        <section class="py-10 bg-black overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">

                <!-- Heading -->
                <div class="mb-14">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl
                       font-semibold tracking-wide leading-tight text-white">
                        Our
                        <span class="font-bold text-primary">Clientele</span>
                    </h2>

                    <p class="mt-6 max-w-3xl text-white/80 sm:text-lg leading-relaxed">
                        We proudly collaborate with startups, growing brands, and established
                        businesses across industries. Our long-term partnerships are built
                        on trust, consistency, and real results.
                    </p>
                </div>

                <!-- SLIDER WRAPPER -->
                <div class="space-y-10">

                    <!-- ROW 1 (LEFT) -->
                    <div class="relative overflow-hidden">
                        <div
                            x-data="{ pause: false }"
                            class="flex w-max gap-16 animate-marquee-left"
                            :class="{ 'pause-marquee': pause }"
                            @mouseenter="pause = true"
                            @mouseleave="pause = false">

                            <!-- Logos -->
                            <template x-for="i in 2">
                                <div class="flex gap-16">
                                    <img src="/clients/6.jpg" class="client-logo" alt="">
                                    <img src="/clients/7.jpg" class="client-logo" alt="">
                                    <img src="/clients/8.jpg" class="client-logo" alt="">
                                    <img src="/clients/9.jpg" class="client-logo" alt="">
                                    <img src="/clients/10.jpg" class="client-logo" alt="">
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- ROW 2 (RIGHT) -->
                    <div class="relative overflow-hidden">
                        <div
                            x-data="{ pause: false }"
                            class="flex w-max gap-16 animate-marquee-right"
                            :class="{ 'pause-marquee': pause }"
                            @mouseenter="pause = true"
                            @mouseleave="pause = false">

                            <template x-for="i in 2">
                                <div class="flex gap-16">
                                    <img src="/clients/11.jpg" class="client-logo" alt="">
                                    <img src="/clients/12.jpg" class="client-logo" alt="">
                                    <img src="/clients/13.jpg" class="client-logo" alt="">
                                    <img src="/clients/14.jpg" class="client-logo" alt="">
                                    <img src="/clients/6.jpg" class="client-logo" alt="">
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- ROW 3 (LEFT) -->
                    <div class="relative overflow-hidden">
                        <div
                            x-data="{ pause: false }"
                            class="flex w-max gap-16 animate-marquee-left"
                            :class="{ 'pause-marquee': pause }"
                            @mouseenter="pause = true"
                            @mouseleave="pause = false">

                            <template x-for="i in 2">
                                <div class="flex gap-16">
                                    <img src="/clients/7.jpg" class="client-logo" alt="">
                                    <img src="/clients/8.jpg" class="client-logo" alt="">
                                    <img src="/clients/9.jpg" class="client-logo" alt="">
                                    <img src="/clients/10.jpg" class="client-logo" alt="">
                                    <img src="/clients/11.jpg" class="client-logo" alt="">
                                </div>
                            </template>
                        </div>
                    </div>

                </div>
            </div>

            <!-- STYLES -->
            <style>
                .client-logo {
                    height: 56px;
                    width: auto;
                    opacity: 0.75;
                    filter: grayscale(100%);
                    transition: all 0.3s ease;
                }

                .client-logo:hover {
                    opacity: 1;
                    filter: grayscale(0%);
                }

                @media (min-width: 640px) {
                    .client-logo {
                        height: 90px;
                    }
                }

                @keyframes marquee-left {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-50%);
                    }
                }

                @keyframes marquee-right {
                    0% {
                        transform: translateX(-50%);
                    }

                    100% {
                        transform: translateX(0);
                    }
                }

                .animate-marquee-left {
                    animation: marquee-left 28s linear infinite;
                }

                .animate-marquee-right {
                    animation: marquee-right 32s linear infinite;
                }

                .pause-marquee {
                    animation-play-state: paused;
                }
            </style>
        </section>
    </section>

    <section class="relative bg-black py-6 border-t border-white/10 overflow-hidden">

        <!-- Glow Background -->
        <div class="absolute inset-0">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2
                    w-[500px] h-[500px]
                    bg-primary/15 blur-3xl rounded-full"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">

            <!-- Small Tag -->
            <span class="inline-block text-primary uppercase tracking-widest text-sm mb-4">
                Ready to Grow
            </span>

            <!-- Main Heading -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl
                   font-light text-white leading-tight">
                Let’s Build Your
                <span class="font-semibold text-primary">
                    Social Presence
                </span>
            </h2>

            <!-- Description -->
            <p class="mt-6 text-white/80 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto">
                If you’re looking for social media that feels human,
                consistent, and trustworthy not forced or noisy
                our team is ready to support your brand’s growth
                with clarity and care.
            </p>

            <!-- CTA -->
            <div class="mt-12 flex justify-center">
                <button @click="$dispatch('open-modal', { to: 'contact' })"
                    class="inline-flex items-center gap-3
                      px-10 py-4 rounded-full
                      bg-primary text-black
                      font-semibold text-base
                      hover:scale-105 hover:shadow-xl
                      transition duration-300">
                    Talk to Our Team
                    <i class="ri-arrow-right-line text-lg"></i>
                </button>
            </div>

            <!-- Trust Line -->
            <p class="mt-6 text-white/50 text-sm">
                No pressure. No jargon. Just clear guidance and steady growth.
            </p>

        </div>
    </section>
    <section class="bg-black py-28 border-t border-white/10">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center mb-16">
                <span class="text-primary uppercase tracking-widest text-sm">
                    FAQs
                </span>

                <h2 class="mt-3 text-3xl sm:text-4xl lg:text-5xl
                       font-light text-white">
                    Social Media Optimization
                    <span class="font-semibold text-primary">Questions</span>
                </h2>

                <p class="mt-5 text-white/80 text-base sm:text-lg max-w-2xl mx-auto">
                    Clear answers to help you understand how we build
                    social presence that feels natural, consistent, and trustworthy.
                </p>
            </div>

            <!-- FAQ LIST -->
            <div x-data="{ active: null }" class="space-y-4">

                <!-- FAQ ITEM 1 -->
                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button
                        @click="active === 1 ? active = null : active = 1"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            What is Social Media Optimization (SMO)?
                        </span>
                        <i
                            class="ri-add-line text-primary text-xl transition"
                            :class="active === 1 ? 'rotate-45' : ''"></i>
                    </button>

                    <div
                        x-show="active === 1"
                        x-collapse
                        class="px-6 pb-5 text-white/70 leading-relaxed">
                        Social Media Optimization focuses on improving your brand’s
                        visibility, consistency, and engagement on social platforms.
                        It’s not about running ads, but about building trust,
                        presence, and long-term connection with your audience.
                    </div>
                </div>

                <!-- FAQ ITEM 2 -->
                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button
                        @click="active === 2 ? active = null : active = 2"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            Which social media platforms do you manage?
                        </span>
                        <i
                            class="ri-add-line text-primary text-xl transition"
                            :class="active === 2 ? 'rotate-45' : ''"></i>
                    </button>

                    <div
                        x-show="active === 2"
                        x-collapse
                        class="px-6 pb-5 text-white/70 leading-relaxed">
                        We work with platforms like Instagram, Facebook, LinkedIn,
                        Twitter (X), and others depending on your business type
                        and audience. We only recommend platforms that truly
                        make sense for your goals.
                    </div>
                </div>

                <!-- FAQ ITEM 3 -->
                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button
                        @click="active === 3 ? active = null : active = 3"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            How is SMO different from social media ads?
                        </span>
                        <i
                            class="ri-add-line text-primary text-xl transition"
                            :class="active === 3 ? 'rotate-45' : ''"></i>
                    </button>

                    <div
                        x-show="active === 3"
                        x-collapse
                        class="px-6 pb-5 text-white/70 leading-relaxed">
                        SMO focuses on organic growth, consistency, and engagement,
                        while ads focus on paid reach. SMO builds trust over time
                        and supports long-term brand value instead of quick,
                        short-term visibility.
                    </div>
                </div>

                <!-- FAQ ITEM 4 -->
                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button
                        @click="active === 4 ? active = null : active = 4"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            How long does it take to see results from SMO?
                        </span>
                        <i
                            class="ri-add-line text-primary text-xl transition"
                            :class="active === 4 ? 'rotate-45' : ''"></i>
                    </button>

                    <div
                        x-show="active === 4"
                        x-collapse
                        class="px-6 pb-5 text-white/70 leading-relaxed">
                        SMO is a gradual process. Most businesses start seeing
                        better engagement and consistency within 1–2 months,
                        while strong brand presence builds steadily over time.
                        We focus on sustainable growth, not shortcuts.
                    </div>
                </div>

                <!-- FAQ ITEM 5 -->
                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button
                        @click="active === 5 ? active = null : active = 5"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            Will you handle content creation and posting?
                        </span>
                        <i
                            class="ri-add-line text-primary text-xl transition"
                            :class="active === 5 ? 'rotate-45' : ''"></i>
                    </button>

                    <div
                        x-show="active === 5"
                        x-collapse
                        class="px-6 pb-5 text-white/70 leading-relaxed">
                        Yes. We handle content planning, visuals, captions,
                        and posting schedules based on your package.
                        We also keep your brand voice natural and aligned
                        with your business identity.
                    </div>
                </div>

                <!-- FAQ ITEM 6 -->
                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button
                        @click="active === 6 ? active = null : active = 6"
                        class="w-full flex justify-between items-center px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            Do you provide reports and performance updates?
                        </span>
                        <i
                            class="ri-add-line text-primary text-xl transition"
                            :class="active === 6 ? 'rotate-45' : ''"></i>
                    </button>

                    <div
                        x-show="active === 6"
                        x-collapse
                        class="px-6 pb-5 text-white/70 leading-relaxed">
                        Absolutely. We share clear and simple reports that explain
                        what’s working, what needs improvement, and how your
                        social presence is growing — without complicated terms.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <livewire:model.package-modal />

</div>
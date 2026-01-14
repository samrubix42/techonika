@section('meta')
    <title>Technonika - Professional Web Development & IT Solutions</title>
    <meta name="description" content="Transform your business with Technonika professional web development, digital marketing, and IT solutions. We deliver innovative technology solutions for your success.">
    <meta name="keywords" content="web development, IT solutions, digital transformation, web design, software development, Technonika">
@endsection

<div>
    <!-- Hero Section -->
    <section class="bg-black text-white min-h-screen py-16 md:py-10 flex items-center px-2 md:px-[9%]">
        <div class="w-full">
            <div class="flex flex-col md:flex-row md:items-center gap-10 xl:gap-24 py-12 lg:py-20">

                <!-- LEFT IMAGE -->
                <div class="relative flex justify-center md:justify-start w-full md:w-7/12">
                    <img
                        src="/images/2151948231.jpg"
                        alt="Web Development"
                        class="w-full max-w-[250px] sm:max-w-[360px] lg:max-w-[460px] object-contain" />
                </div>

                <!-- RIGHT CONTENT -->
                <div class="space-y-6 sm:space-y-8 lg:space-y-4 w-full md:w-10/12 text-left font-semibold text-slate-200">

                    <!-- Heading -->
                    <h1 class="font-light tracking-wide leading-tight
           text-3xl sm:text-4xl lg:text-5xl xl:text-[64px] text-slate-200">
                        Welcome to <span class="font-semibold">Techonika</span><br>

                        <span class="block mt-3">
                            Simple.
                            <span class="font-semibold">Smart.</span>
                            Reliable
                            <span class="font-semibold">Digital Solutions</span>
                        </span>
                    </h1>


                    <!-- Description -->
                    <p class="text-neutral-400 text-base sm:text-lg text-justify leading-relaxed">
                        Your business isn’t generic your website shouldn’t be either.
                        Every brand has unique users, goals, and workflows,
                        but many digital products still rely on
                        <span class="text-white font-medium">
                            one-size-fits-all templates that limit growth.
                        </span>
                    </p>



                    <p class="text-neutral-400 text-base sm:text-lg text-justify leading-relaxed">
                        The right architecture, the right technology stack, and the right
                        user experience designed specifically for your product
                        is what drives performance, scalability, and long-term success.
                    </p>

                    <!-- CTA ROW -->
                    <div class="flex flex-col sm:flex-row sm:items-center gap-5 pt-2">

                        <!-- Primary Button -->
                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center
      bg-[#f6b615] text-black
      px-6 sm:px-8 py-4 rounded-2xl
      font-light text-sm sm:text-base
      hover:brightness-110 transition">
                            Get a free Quote <i class="ri-arrow-right-line ml-2"></i>
                        </a>

                        <!-- Secondary CTA -->
                        <a
                            href="{{ route('contact') }}"
                            class="group inline-flex items-center md:border-none border border-1 border-slate-200 px-4 py-2 rounded-2xl justify-center sm:justify-start gap-3
      text-sm tracking-wide text-white/90 mt-2 sm:mt-0">
                            <span>Have an idea or existing product? Let’s discuss</span>
                            <span class="text-lg transform transition group-hover:translate-x-1">
                                →
                            </span>
                        </a>

                    </div>

                </div>

    </section>

    <!-- Clients Section -->
    <section class="bg-black py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <h2 class="text-2xl sm:text-3xl py-6 text-slate-200 font-semibold italic text-center sm:text-left">
                Digital Experiences Built for Growing and Established Brands
            </h2>

            <!-- Logo Grid -->
            <div
                class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8
               gap-y-10 gap-x-6 items-center justify-items-center">
                <!-- Repeat your logos -->
                <img src="/clients/6.jpg" class="client-logo" alt="">
                <img src="/clients/7.jpg" class="client-logo" alt="">
                <img src="/clients/8.jpg" class="client-logo" alt="">
                <img src="/clients/9.jpg" class="client-logo" alt="">
                <img src="/clients/10.jpg" class="client-logo" alt="">
                <img src="/clients/11.jpg" class="client-logo" alt="">
                <img src="/clients/12.jpg" class="client-logo" alt="">
                <img src="/clients/13.jpg" class="client-logo" alt="">
                <img src="/clients/14.jpg" class="client-logo" alt="">
                <!-- Add remaining logos similarly -->
            </div>
        </div>

        <!-- Styles -->
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
                    height: 72px;
                }
            }

            @media (min-width: 1024px) {
                .client-logo {
                    height: 80px;
                }
            }
        </style>
    </section>
    <section class="bg-black py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- LEFT IMAGE -->
            <div class="flex justify-center lg:justify-start">
                <img src="{{ asset('images/your-image.png') }}" alt="Profile" class="max-w-full h-auto rounded-lg">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="text-white space-y-6">
                <h2 class="text-4xl sm:text-5xl font-bold">
                    WHEN PRECISION <br> MATTERS
                </h2>
                <p class="text-primary text-lg font-medium">
                    2 WAYS TO WORK TOGETHER
                </p>

                <!-- Consulting -->
                <div class="space-y-2">
                    <h3 class="text-white text-xl font-semibold">Consulting</h3>
                    <p class="text-gray-300">
                        Get clarity on how to structure and deliver conditioning for your squad, grounded in each athlete’s profile, and aligned to your sport’s demands.
                    </p>
                    <a href="#consulting" class="inline-block bg-primary text-black px-5 py-2 rounded-lg font-semibold hover:brightness-110 transition">
                        Learn more
                    </a>
                </div>

                <!-- Speaking -->
                <div class="space-y-2 mt-6">
                    <h3 class="text-white text-xl font-semibold">Speaking</h3>
                    <p class="text-gray-300">
                        Bring the profiling model and high-performance insights behind top programs to your staff or event with clear takeaways for real-world application.
                    </p>
                    <a href="#speaking" class="inline-block bg-primary text-black px-5 py-2 rounded-lg font-semibold hover:brightness-110 transition">
                        Learn more
                    </a>
                </div>
            </div>

        </div>
    </section>
    <div class="bg-black py-8 px-3 md:px-[10%] flex flex-col ">
        <h2 class="text-white text-4xl text-center md:text-left  md:text-5xl font-bold py-6 md:py-10 px-2 md:px-6">Achieve your competitive </h2>

        <section class="relative bg-black py-6 overflow-hidden bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('images/lines.png') }}'); object-fit: contain;">

            <!-- Yellow blur circles -->
            <div class="absolute top-20 right-0 md:right-20 lg:right-32 w-72 h-72 bg-primary opacity-20 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-20 left-0 md:left-20 lg:left-32 w-72 h-72 bg-primary opacity-20 rounded-full filter blur-3xl"></div>

            <!-- Content wrapper -->
            <div class="mx-auto px-2 md:px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">
                <!-- Example card -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transform transition">
                    <img src="/images/chelsea-logo.png" alt="Chelsea Logo" class="w-12 h-12 object-contain">
                    <h3 class="text-white font-semibold text-lg">Chelsea Football Club</h3>
                    <p class="text-gray-200 italic">
                        ‘Helped massively with our progression of the academy’s player profiling and physical conditioning methodology.’
                    </p>
                    <a href="#" class="text-yellow-400 font-medium hover:underline">Read More</a>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transform transition">
                    <img src="/images/chelsea-logo.png" alt="Chelsea Logo" class="w-12 h-12 object-contain">
                    <h3 class="text-white font-semibold text-lg">Chelsea Football Club</h3>
                    <p class="text-gray-200 italic">
                        ‘Helped massively with our progression of the academy’s player profiling and physical conditioning methodology.’
                    </p>
                    <a href="#" class="text-yellow-400 font-medium hover:underline">Read More</a>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transform transition">
                    <img src="/images/chelsea-logo.png" alt="Chelsea Logo" class="w-12 h-12 object-contain">
                    <h3 class="text-white font-semibold text-lg">Chelsea Football Club</h3>
                    <p class="text-gray-200 italic">
                        ‘Helped massively with our progression of the academy’s player profiling and physical conditioning methodology.’
                    </p>
                    <a href="#" class="text-yellow-400 font-medium hover:underline">Read More</a>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transform transition">
                    <img src="/images/chelsea-logo.png" alt="Chelsea Logo" class="w-12 h-12 object-contain">
                    <h3 class="text-white font-semibold text-lg">Chelsea Football Club</h3>
                    <p class="text-gray-200 italic">
                        ‘Helped massively with our progression of the academy’s player profiling and physical conditioning methodology.’
                    </p>
                    <a href="#" class="text-yellow-400 font-medium hover:underline">Read More</a>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transform transition">
                    <img src="/images/chelsea-logo.png" alt="Chelsea Logo" class="w-12 h-12 object-contain">
                    <h3 class="text-white font-semibold text-lg">Chelsea Football Club</h3>
                    <p class="text-gray-200 italic">
                        ‘Helped massively with our progression of the academy’s player profiling and physical conditioning methodology.’
                    </p>
                    <a href="#" class="text-yellow-400 font-medium hover:underline">Read More</a>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transform transition">
                    <img src="/images/chelsea-logo.png" alt="Chelsea Logo" class="w-12 h-12 object-contain">
                    <h3 class="text-white font-semibold text-lg">Chelsea Football Club</h3>
                    <p class="text-gray-200 italic">
                        ‘Helped massively with our progression of the academy’s player profiling and physical conditioning methodology.’
                    </p>
                    <a href="#" class="text-yellow-400 font-medium hover:underline">Read More</a>
                </div>
                <!-- Add more cards here -->
            </div>

            <!-- Book Your Call Button -->
            <div class="mt-12 text-center relative z-10">
                <button class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-yellow-500 transition">
                    Book Your Call
                </button>
            </div>
        </section>

    </div>
    <section class="relative bg-gradient-to-r from-black via-[#111] to-black text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-16 sm:py-20">

            <div class="flex flex-col-reverse md:flex-row items-center gap-12 md:gap-16 px-[6%]">

                <!-- LEFT CONTENT -->
                <div class="text-center md:text-left max-w-xl">
                    <h4 class="text-sm tracking-widest uppercase text-[#f6b615] mb-3">
                        About Us
                    </h4>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-6">
                        We are <span class="text-primary">TECHNONIKA</span>
                    </h2>

                    <p class="text-gray-300 leading-relaxed mb-5">
                        Since our inception, Technonika has been building powerful digital
                        solutions that help businesses scale, automate, and innovate in a
                        fast-changing technological landscape.
                    </p>

                    <p class="text-gray-400 leading-relaxed mb-8">
                        From web and mobile applications to custom software and cloud-ready
                        systems, we partner with startups and enterprises to deliver reliable,
                        future-focused products with clarity and impact.
                    </p>

                    <a href="#"
                        class="inline-flex items-center gap-2 bg-[#f6b615] text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">
                        Learn more
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center md:justify-end w-full md:w-auto">
                    <img
                        src="{{ asset('techonika-logo-dark.png') }}"
                        alt="Technonika Logo"
                        class="w-[220px] sm:w-[280px] lg:w-[360px] object-contain" />
                </div>

            </div>
        </div>
    </section>


    <section class="w-full bg-black py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">

            <!-- SECTION TITLE -->
            <h2 class="text-center text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-14">
                USED WHERE <span class="text-[#f6b615]">MARGINS MATTER</span>
            </h2>

            <!-- SLIDER -->
            <div
                x-data="{
        active: 0,
        cardWidth: 340,
        cards: [
          {
            name: 'Vern Gambetta',
            role: 'Athletic Development Coach and Founder',
            org: 'GAIN Coaching Network',
            img: 'https://randomuser.me/api/portraits/men/32.jpg',
            text: 'Gareth delivered an exceptional masterclass to the GAIN community, focusing on anaerobic speed reserve and training science.'
          },
          {
            name: 'Ruth Waghorn',
            role: 'Women’s Physical Performance Pathway Lead',
            org: 'The English Football Association',
            img: 'https://randomuser.me/api/portraits/women/44.jpg',
            text: 'Gareth has been working with the FA and England teams for over four years and will challenge the way you think.'
          },
          {
            name: 'Jason Hettler',
            role: 'Assistant Head of Strength & Conditioning',
            org: 'IMG Academy',
            img: 'https://randomuser.me/api/portraits/men/54.jpg',
            text: 'Gareth’s guidance played a key role in evolving my approach to sport conditioning.'
          },
            {
                name: 'Chelsea Football Club',
                role: 'Academy Strength & Conditioning',
                org: 'Chelsea FC',
                img: 'https://upload.wikimedia.org/wikipedia/en/c/cc/Chelsea_FC.svg',
                text: 'Helped massively with our progression of the academy’s player profiling and physical conditioning methodology.'
            },
            {
                name: 'Newcastle United FC',
                role: 'First Team Strength & Conditioning',
                org: 'Newcastle United',
                img: 'https://upload.wikimedia.org/wikipedia/en/5/56/Newcastle_United_Logo.svg',
                text: 'Provided invaluable insights that enhanced our team’s conditioning and performance strategies.'
            },
            {
                name: 'Liverpool FC',
                role: 'Youth Development Coach',
                org: 'Liverpool FC',
                img: 'https://upload.wikimedia.org/wikipedia/en/0/0c/Liverpool_FC.svg',
                text: 'Their expertise significantly contributed to the advancement of our youth training programs.'
            }
           
        ]
      }"
                class="relative">

                <!-- VIEWPORT -->
                <div class="overflow-hidden">

                    <!-- TRACK -->
                    <div
                        class="flex gap-6 transition-transform duration-500 ease-out"
                        :style="`transform: translateX(-${active * cardWidth}px)`">

                        <template x-for="(card, index) in cards" :key="index">
                            <div
                                class="min-w-[300px] sm:min-w-[320px] max-w-[320px]
                     bg-gradient-to-b from-[#1a1a1a] to-[#111]
                     rounded-2xl p-6 shadow-xl border border-white/5">

                                <!-- PROFILE -->
                                <div class="flex items-center gap-4 mb-4">
                                    <img :src="card.img"
                                        class="w-12 h-12 rounded-full object-cover border border-[#f6b615]" />
                                    <div>
                                        <h4 class="text-white font-semibold text-sm" x-text="card.name"></h4>
                                        <p class="text-gray-400 text-xs" x-text="card.role"></p>
                                        <p class="text-gray-500 text-xs" x-text="card.org"></p>
                                    </div>
                                </div>

                                <!-- TEXT -->
                                <p class="text-gray-300 text-sm leading-relaxed mb-4 line-clamp-5"
                                    x-text="card.text"></p>

                                <a href="#" class="text-[#f6b615] text-sm font-medium hover:underline">
                                    Read more
                                </a>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- PAGINATION DOTS -->
                <div class="flex justify-center gap-3 mt-10">
                    <template x-for="(dot, i) in cards" :key="i">
                        <button
                            @click="active = i"
                            class="w-2.5 h-2.5 rounded-full transition"
                            :class="active === i ? 'bg-[#f6b615]' : 'bg-gray-600'">
                        </button>
                    </template>
                </div>

            </div>
        </div>
    </section>
    <section class="min-h-screen flex items-center bg-zinc-900">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- LEFT CONTENT -->
            <div>
                <p class="text-lg text-gray-300 mb-3">
                    Want A Professional Website
                </p>

                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-extrabold leading-tight mb-6">
                    <span class="text-primary italic">THAT CONVERTS</span>
                    <span class="text-primary italic"> VISITORS INTO</span><br>
                    <span class="text-primary italic">CUSTOMERS?</span>
                </h1>

                <p class="text-gray-400 max-w-xl mb-8">
                    Partner with our expert web design services to build a responsive,
                    high-converting website. Contact us now and get a free quote
                    tailored to your business needs.
                </p>

                <!-- CTA BUTTONS -->
                <div class="flex flex-wrap items-center gap-4">
                    <a href="#"
                        class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-full font-semibold transition">

                        <i class="ri-plane-line"></i>

                        Request Proposal
                    </a>

                    <span class="text-gray-500 font-semibold">OR</span>

                    <a href="#"
                        class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-full font-semibold transition">

                        <i class="ri-phone-line"></i>


                        Contact Now
                    </a>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="flex justify-center lg:justify-end">
                <img
                    src="/images/hero-man.png"
                    alt="Professional"
                    class="max-h-[520px] object-contain">
            </div>

        </div>
    </section>


    <section class="bg-black py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <!-- SECTION TITLE -->
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                    FREQUENTLY ASKED <span class="text-[#f6b615]">QUESTIONS</span>
                </h2>
                <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
                    Everything you need to know about our web development process,
                    technology stack, and collaboration.
                </p>
            </div>

            <!-- FAQ LIST -->
            <div
                x-data="{ active: null }"
                class="space-y-4">

                <!-- ITEM -->
                <div class="border border-white/10 rounded-xl overflow-hidden">
                    <button
                        @click="active === 1 ? active = null : active = 1"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            What technologies do you use for web development?
                        </span>
                        <span
                            class="text-[#f6b615] text-xl transform transition"
                            :class="active === 1 ? 'rotate-45' : ''">
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 1"
                        x-collapse
                        class="px-6 pb-5 text-gray-400 leading-relaxed">
                        We primarily work with modern stacks such as Laravel, React, Vue,
                        Next.js, Tailwind CSS, and REST or GraphQL APIs. Our focus is on
                        scalable, maintainable, and performance-driven architectures.
                    </div>
                </div>

                <!-- ITEM -->
                <div class="border border-white/10 rounded-xl overflow-hidden">
                    <button
                        @click="active === 2 ? active = null : active = 2"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            Do you build custom websites or use templates?
                        </span>
                        <span
                            class="text-[#f6b615] text-xl transform transition"
                            :class="active === 2 ? 'rotate-45' : ''">
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 2"
                        x-collapse
                        class="px-6 pb-5 text-gray-400 leading-relaxed">
                        Every project is built custom. We don’t rely on generic templates.
                        Instead, we design and develop solutions tailored to your business
                        goals, users, and long-term scalability.
                    </div>
                </div>

                <!-- ITEM -->
                <div class="border border-white/10 rounded-xl overflow-hidden">
                    <button
                        @click="active === 3 ? active = null : active = 3"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            How long does a typical project take?
                        </span>
                        <span
                            class="text-[#f6b615] text-xl transform transition"
                            :class="active === 3 ? 'rotate-45' : ''">
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 3"
                        x-collapse
                        class="px-6 pb-5 text-gray-400 leading-relaxed">
                        Timelines vary based on complexity. A standard website usually
                        takes 3–6 weeks, while larger web applications or SaaS products
                        may take 8–16 weeks including planning, development, and testing.
                    </div>
                </div>

                <!-- ITEM -->
                <div class="border border-white/10 rounded-xl overflow-hidden">
                    <button
                        @click="active === 4 ? active = null : active = 4"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            Will my website be scalable and secure?
                        </span>
                        <span
                            class="text-[#f6b615] text-xl transform transition"
                            :class="active === 4 ? 'rotate-45' : ''">
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 4"
                        x-collapse
                        class="px-6 pb-5 text-gray-400 leading-relaxed">
                        Yes. We follow best practices for security, performance, and
                        scalability. This includes optimized database design, secure
                        authentication, clean code architecture, and cloud-ready deployment.
                    </div>
                </div>

                <!-- ITEM -->
                <div class="border border-white/10 rounded-xl overflow-hidden">
                    <button
                        @click="active === 5 ? active = null : active = 5"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                        <span class="text-white font-medium">
                            Do you provide support after launch?
                        </span>
                        <span
                            class="text-[#f6b615] text-xl transform transition"
                            :class="active === 5 ? 'rotate-45' : ''">
                            +
                        </span>
                    </button>

                    <div
                        x-show="active === 5"
                        x-collapse
                        class="px-6 pb-5 text-gray-400 leading-relaxed">
                        Absolutely. We offer ongoing maintenance, performance monitoring,
                        feature enhancements, and technical support to ensure your product
                        continues to grow with your business.
                    </div>
                </div>

            </div>
        </div>
    </section>






</div>
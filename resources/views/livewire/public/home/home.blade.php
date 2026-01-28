@section('meta')
<title>Technonika - Leading Web Development & Digital Marketing Company</title>
<meta name="description" content="Technonika is a premier digital solutions provider offering web development, digital marketing, SEO, graphic designing, and IT services to help businesses grow online.">
<meta name="keywords" content="web development company, digital marketing services, SEO services, graphic designing, web designing company, IT solutions, Technonika">
@endsection

<div>
    <section class="relative bg-black overflow-hidden">

        <!-- Decorative Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2
            w-[700px] h-[700px] rounded-full
            bg-primary/20 blur-[140px]"></div>

        <!-- Subtle Grid Texture -->
        <div class="absolute inset-0 opacity-[0.04]
            bg-[radial-gradient(#ffffff_1px,transparent_1px)]
            bg-[size:24px_24px]"></div>

        <!-- Content -->
        <div class="relative max-w-6xl mx-auto px-6
            py-24 sm:py-28 text-center text-white">

            <!-- Eyebrow -->
            <span class="inline-flex items-center gap-2
                 px-4 py-1.5 rounded-full
                 bg-white/10 border border-white/10
                 text-xs tracking-wide uppercase
                 text-white/80 mb-6">
                Digital Solutions Agency
            </span>

            <!-- Heading -->
            <h1 class="font-bold tracking-tight leading-[1.1]
               text-[clamp(34px,5vw,55px)] mb-6">
                Welcome to <span class="text-primary">Techonika</span><br>
                <span class="block mt-2">
                    Simple, Smart, and Reliable Digital Solutions
                </span>
            </h1>

            <!-- Description -->
            <p class="max-w-3xl mx-auto
              text-white/70
              text-sm sm:text-base md:text-lg
              leading-relaxed mb-14">
                Techonika is your trusted digital partner, delivering smart and reliable
                solutions designed for real business impact. We blend clean design,
                modern technology, and strategic thinking to create digital experiences
                that connect, convert, and scale.
            </p>
            <!-- Services: Mobile Cards → Desktop Pills (Aligned Everywhere) -->
            <div
                class="grid grid-cols-2 mb-10
           sm:grid-cols-3
           lg:grid-cols-4
           gap-4 lg:gap-2
           place-content-center
           px-4 sm:px-0">

                <!-- Item -->
                <a href="{{ route('webdesigning') }}"
                    class="group relative
               flex flex-col sm:flex-row
               items-center justify-center
               gap-2
               px-3 py-4 sm:px-4 sm:py-2
               min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full
               bg-white/10 backdrop-blur-xl
               border border-white/20
               text-xs sm:text-[13px] font-medium
               text-white text-center
               shadow-lg shadow-black/40
               transition-all duration-300
               hover:-translate-y-1
               hover:bg-primary
               hover:text-black
               hover:border-primary">

                    <!-- Icon Bubble -->
                    <span
                        class="flex items-center justify-center
                   w-9 h-9 sm:w-7 sm:h-7
                   rounded-full
                   bg-white/10 border border-white/20
                   transition-all duration-300
                   group-hover:bg-white/30">

                        <i class="ri-brush-line text-lg sm:text-sm
                      text-primary group-hover:text-black"></i>
                    </span>

                    <span>Website Designing</span>
                </a>

                <!-- Repeat -->
                <a href="{{ route('webdevelopment') }}" class="group relative flex flex-col sm:flex-row items-center justify-center gap-2
               px-3 py-4 sm:px-4 sm:py-2 min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full bg-white/10 backdrop-blur-xl
               border border-white/20 text-xs sm:text-[13px] font-medium
               text-white text-center shadow-lg shadow-black/40
               transition-all duration-300 hover:-translate-y-1
               hover:bg-primary hover:text-black hover:border-primary">

                    <span class="flex items-center justify-center w-9 h-9 sm:w-7 sm:h-7 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/30 transition">
                        <i class="ri-code-box-line text-lg sm:text-sm text-primary group-hover:text-black"></i>
                    </span>
                    <span>Website Development</span>
                </a>

                <a href="{{ route('digital-marketing') }}" class="group relative flex flex-col sm:flex-row items-center justify-center gap-2
               px-3 py-4 sm:px-4 sm:py-2 min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full bg-white/10 backdrop-blur-xl
               border border-white/20 text-xs sm:text-[13px] font-medium
               text-white text-center shadow-lg shadow-black/40
               transition-all duration-300 hover:-translate-y-1
               hover:bg-primary hover:text-black hover:border-primary">

                    <span class="flex items-center justify-center w-9 h-9 sm:w-7 sm:h-7 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/30 transition">
                        <i class="ri-search-eye-line text-lg sm:text-sm text-primary group-hover:text-black"></i>
                    </span>
                    <span>Search Engine Optimization</span>
                </a>

                <a href="{{ route('digital-marketing') }}" class="group relative flex flex-col sm:flex-row items-center justify-center gap-2
               px-3 py-4 sm:px-4 sm:py-2 min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full bg-white/10 backdrop-blur-xl
               border border-white/20 text-xs sm:text-[13px] font-medium
               text-white text-center shadow-lg shadow-black/40
               transition-all duration-300 hover:-translate-y-1
               hover:bg-primary hover:text-black hover:border-primary">

                    <span class="flex items-center justify-center w-9 h-9 sm:w-7 sm:h-7 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/30 transition">
                        <i class="ri-megaphone-line text-lg sm:text-sm text-primary group-hover:text-black"></i>
                    </span>
                    <span>Social Media Marketing</span>
                </a>

                <a href="{{ route('webdevelopment') }}" class="group relative flex flex-col sm:flex-row items-center justify-center gap-2
               px-3 py-4 sm:px-4 sm:py-2 min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full bg-white/10 backdrop-blur-xl
               border border-white/20 text-xs sm:text-[13px] font-medium
               text-white text-center shadow-lg shadow-black/40
               transition-all duration-300 hover:-translate-y-1
               hover:bg-primary hover:text-black hover:border-primary">

                    <span class="flex items-center justify-center w-9 h-9 sm:w-7 sm:h-7 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/30 transition">
                        <i class="ri-store-2-line text-lg sm:text-sm text-primary group-hover:text-black"></i>
                    </span>
                    <span>E-Commerce Development</span>
                </a>

                <a href="{{ route('webdevelopment') }}" class="group relative flex flex-col sm:flex-row items-center justify-center gap-2
               px-3 py-4 sm:px-4 sm:py-2 min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full bg-white/10 backdrop-blur-xl
               border border-white/20 text-xs sm:text-[13px] font-medium
               text-white text-center shadow-lg shadow-black/40
               transition-all duration-300 hover:-translate-y-1
               hover:bg-primary hover:text-black hover:border-primary">

                    <span class="flex items-center justify-center w-9 h-9 sm:w-7 sm:h-7 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/30 transition">
                        <i class="ri-layout-2-line text-lg sm:text-sm text-primary group-hover:text-black"></i>
                    </span>
                    <span>Custom Design Development</span>
                </a>

                <a href="{{ route('webdevelopment') }}" class="group relative flex flex-col sm:flex-row items-center justify-center gap-2
               px-3 py-4 sm:px-4 sm:py-2 min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full bg-white/10 backdrop-blur-xl
               border border-white/20 text-xs sm:text-[13px] font-medium
               text-white text-center shadow-lg shadow-black/40
               transition-all duration-300 hover:-translate-y-1
               hover:bg-primary hover:text-black hover:border-primary">

                    <span class="flex items-center justify-center w-9 h-9 sm:w-7 sm:h-7 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/30 transition">
                        <i class="ri-settings-3-line text-lg sm:text-sm text-primary group-hover:text-black"></i>
                    </span>
                    <span>Maintenance</span>
                </a>

                <a href="{{ route('mobileappdevelopment') }}" class="group relative flex flex-col sm:flex-row items-center justify-center gap-2
               px-3 py-4 sm:px-4 sm:py-2 min-h-[96px] sm:min-h-[42px]
               rounded-2xl sm:rounded-full bg-white/10 backdrop-blur-xl
               border border-white/20 text-xs sm:text-[13px] font-medium
               text-white text-center shadow-lg shadow-black/40
               transition-all duration-300 hover:-translate-y-1
               hover:bg-primary hover:text-black hover:border-primary">

                    <span class="flex items-center justify-center w-9 h-9 sm:w-7 sm:h-7 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/30 transition">
                        <i class="ri-smartphone-line text-lg sm:text-sm text-primary group-hover:text-black"></i>
                    </span>
                    <span>App Development</span>
                </a>

            </div>



            <!-- CTA -->
            <button @click="$dispatch('open-modal', { to: 'contact' })"

                class="inline-flex items-center gap-3
              bg-primary text-black
              px-8 py-3.5 rounded-lg
              font-semibold text-sm sm:text-base
              hover:bg-primary/90 hover:scale-105
              transition-all duration-300">
                Get in Touch
                <i class="ri-arrow-right-line"></i>
            </button>

        </div>
    </section>
    <section class="relative bg-black overflow-hidden py-16 sm:py-20 lg:py-24">

        <!-- Glow Background -->
        <div class="absolute -top-40 -left-40
        w-[600px] h-[600px]
        bg-[color:var(--color-primary)]/20
        blur-[160px] rounded-full"></div>

        <div class="relative px-5 sm:px-8 lg:px-[9%]">

            <!-- GRID -->
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT IMAGE -->
                <div class="relative order-1 lg:order-none flex justify-center">

                    <!-- Image Card -->
                    <div
                        class="relative z-10 overflow-hidden
                           w-full
                           max-w-md sm:max-w-lg lg:max-w-xl
                           aspect-[4/3]
                           rounded-[32px]
                           border border-white/10
                           bg-white/5 backdrop-blur">

                        <img
                            src="{{ asset('images/Revolutionize_Your_Workplace_Office_Digital_Signage_Solutions_for_Modern_Businesses.jpg') }}"
                            alt="Digital Solutions"
                            class="w-full h-full object-cover
                               transition-transform duration-500
                               hover:scale-105">
                    </div>

                </div>

                <!-- RIGHT CONTENT -->
                <div>

                    <h2 class="text-3xl sm:text-3xl md:text-3xl xl:text-[45px]
                   font-light tracking-wide leading-tight text-white">
                        We Build
                        <span class="font-semibold text-[color:var(--color-primary)]">
                            Digital Solutions
                        </span><br>
                        That Help You
                        <span class="font-semibold">
                            Grow
                        </span>
                    </h2>

                    <!-- Paragraphs -->
                    <div class="mt-6 sm:mt-8 space-y-3">
                        <p class="text-white/80 text-justify sm:text-lg leading-relaxed">
                            At <span class="font-medium text-white">Techonika</span>,
                            we believe that technology should feel simple, helpful,
                            and easy to understand for everyone.
                            Many people feel confused or even stressed when they hear
                            words like digital, software, or online marketing.
                        </p>

                        <p class="text-white/80 text-justify sm:text-lg leading-relaxed">
                            We see this every day, and that is exactly why we exist.
                            We work hard to remove fear, confusion, and hesitation
                            around technology so you can move forward with confidence.
                            Our goal is to make technology work for you in a clear,
                            friendly, and practical way that supports your daily
                            business needs.
                        </p>

                        <p class="text-white/80 text-justify sm:text-lg leading-relaxed">
                            We are a full-service digital and technology company,
                            which means we offer a wide range of solutions under one roof.
                            You do not need to manage different agencies for web design,
                            graphic design, web development, digital marketing,
                            mobile apps, or online branding.
                        </p>
                    </div>

                    <!-- CTA -->
                    <div class="mt-8 sm:mt-10 flex flex-wrap gap-4">
                        <button @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex items-center gap-2
                               px-7 py-3.5 rounded-full
                               bg-[color:var(--color-primary)]
                               text-black font-semibold
                               hover:opacity-90 transition">
                            <i class="ri-chat-3-line"></i>
                            Get Free Consultation
                        </button>


                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="relative bg-black py-14 sm:py-20 overflow-hidden">

        <!-- Soft Background Glow -->
        <div class="absolute -top-32 -left-32
        w-[520px] h-[520px]
        bg-primary/15 blur-[160px] rounded-full"></div>

        <div class="relative max-w-6xl mx-auto px-4">

            <!-- Heading -->
            <div class="mb-10 sm:mb-14 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-4xl font-light text-white">
                    Industries We
                    <span class="text-primary font-semibold">Serve</span>
                </h2>
                <p class="mt-3 max-w-xl mx-auto text-white/60 text-sm">
                    Industry-focused digital solutions designed to scale, convert,
                    and create lasting impact.
                </p>
            </div>

            <!-- Grid -->
            <div
                class="grid grid-cols-2
                   sm:grid-cols-3
                   lg:grid-cols-5
                   gap-px
                   bg-white/10
                   rounded-2xl overflow-hidden">

                <template x-for="item in [
                { title: 'Fashion', desc: 'Digital solutions for fashion brands.', icon: '{{ asset('images/icons/shirt.png') }}' },
                { title: 'Apparel', desc: 'Custom ecommerce and branding.', icon: '{{ asset('images/icons/dress.png') }}' },
                { title: 'Businesses', desc: 'Scalable business platforms.', icon: '{{ asset('images/icons/cooperation.png') }}' },
                { title: 'Jewellery', desc: 'Luxury digital presence.', icon: '{{ asset('images/icons/treasure.png') }}' },
                { title: 'Healthcare', desc: 'Healthcare-focused solutions.', icon: '{{ asset('images/icons/healthcare.png') }}' },
                { title: 'Food', desc: 'Online ordering & branding.', icon: '{{ asset('images/icons/fast-food.png') }}' },
                { title: 'Doctors Clinics', desc: 'Clinic appointment systems.', icon: '{{ asset('images/icons/clinic.png') }}' },
                { title: 'Real Estate', desc: 'High-converting property platforms.', icon: '{{ asset('images/icons/house.png') }}' },
                { title: 'Education', desc: 'Digital education platforms.', icon: '{{ asset('images/icons/education.png') }}' },
                { title: 'Beauty', desc: 'Beauty brand websites.', icon: '{{ asset('images/icons/skin-care.png') }}' },
                { title: 'Consumer Products', desc: 'Ecommerce-driven growth.', icon: '{{ asset('images/icons/sale.png') }}' },
                { title: 'Hospitality', desc: 'Hospitality & booking systems.', icon: '{{ asset('images/icons/medical-team.png') }}' },
                { title: 'Pest Control', desc: 'Lead-focused service websites.', icon: '{{ asset('images/icons/bug-truck.png') }}' },
                { title: 'Musical Instruments', desc: 'Music ecommerce platforms.', icon: '{{ asset('images/icons/headphones.png') }}' },
                { title: 'Sports', desc: 'Sports brands & academies.', icon: '{{ asset('images/icons/sports-ball.png') }}' }
            ]" :key="item.title">

                    <!-- Card -->
                    <div
                        x-data="{ hover: false }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        class="relative h-[170px] sm:h-[190px]
                           flex flex-col items-center justify-center
                           text-center
                           bg-white/5 backdrop-blur
                           transition-all duration-300
                           hover:bg-white/10
                           hover:shadow-xl hover:shadow-primary/10">

                        <!-- Icon Wrapper -->
                        <div
                            class="flex items-center justify-center
                               w-12 h-12 sm:w-14 sm:h-14
                               rounded-full
                               bg-white/10 border border-white/20
                               mb-3
                               transition-all duration-300"
                            :class="hover ? 'scale-110 bg-primary/20' : 'scale-100'">

                            <img
                                :src="item.icon"
                                alt=""
                                class="w-6 h-6 sm:w-7 sm:h-7 object-contain">
                        </div>

                        <!-- Title -->
                        <h4
                            class="text-white font-semibold tracking-wide
                               text-[12px] sm:text-sm
                               transition-all duration-300"
                            :class="hover
                        ? '-translate-y-1 text-primary'
                        : 'translate-y-1'">
                            <span x-text="item.title.toUpperCase()"></span>
                        </h4>

                        <!-- Description -->
                        <p
                            class="mt-2 px-4 text-[11px] sm:text-xs
                               text-white/60 leading-snug
                               transition-all duration-300"
                            :class="hover
                        ? 'opacity-100 translate-y-0'
                        : 'opacity-0 translate-y-2'">
                            <span x-text="item.desc"></span>
                        </p>

                        <!-- Subtle Hover Glow -->
                        <div
                            class="absolute inset-0 rounded-xl
                               bg-primary/5 opacity-0
                               transition duration-300"
                            :class="hover ? 'opacity-100' : 'opacity-0'">
                        </div>

                    </div>
                </template>

            </div>
        </div>
    </section>

    <section class="relative bg-black py-20 sm:py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">

            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT CONTENT -->
                <div>
                    <span
                        class="inline-block mb-4 px-4 py-1.5
                           rounded-full text-xs font-medium
                           bg-white/10 text-primary">
                        Trusted Digital Agency in Noida
                    </span>

                    <h2
                        class="text-3xl sm:text-4xl lg:text-5xl
                           font-bold leading-tight text-white">
                        Best Web Designing &<br>
                        <span class="text-primary">
                            Development Company in Noida
                        </span>
                    </h2>

                    <p
                        class="mt-6 text-white/70
                           text-sm sm:text-base leading-relaxed">
                        We are a leading web designing and web development company in Noida,
                        helping businesses build strong digital identities.
                        Our team creates visually stunning, high-performing websites
                        that are fast, secure, SEO-friendly, and designed to convert visitors
                        into customers.
                    </p>

                    <p
                        class="mt-4 text-white/70
                           text-sm sm:text-base leading-relaxed">
                        From custom website design and scalable web development
                        to UI/UX optimization and ongoing support,
                        we deliver complete digital solutions tailored to your business goals.
                    </p>

                    <!-- Highlights -->
                    <div class="mt-6 grid grid-cols-2 gap-4 max-w-md">
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            Custom Web Design
                        </div>
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            SEO-Optimized Websites
                        </div>
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            Fast & Secure Development
                        </div>
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            Long-Term Support
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-8 flex flex-wrap gap-4">
                        <button
                            @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex items-center gap-2
                               px-7 py-3.5 rounded-full
                               bg-primary text-black
                               font-semibold text-sm
                               hover:opacity-90 transition">
                            Get Free Consultation
                            <i class="ri-arrow-right-line"></i>
                        </button>

                        <a
                            href="{{route('portfolio')}}"
                            class="inline-flex items-center gap-2
                               px-7 py-3.5 rounded-full
                               border border-white/20
                               text-white text-sm font-medium
                               hover:bg-white hover:text-black transition">
                            View Our Work
                        </a>
                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative">
                    <div
                        class="relative overflow-hidden
                           rounded-2xl
                           border border-white/10
                           bg-white/5 backdrop-blur">

                        <img
                            src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                            alt="Best Web Design Company in Noida"
                            class="w-full h-full object-cover
                               scale-105 hover:scale-110
                               transition-transform duration-700">
                    </div>

                    <!-- Glow -->
                    <div
                        class="absolute -bottom-12 -right-12
                           w-48 h-48
                           bg-primary/30
                           rounded-full blur-[120px]">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="relative bg-black mb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">

            <!-- Heading -->
            <div class="text-center mb-12">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white">
                    Technologies We
                    <span class="text-primary">Work With</span>
                </h2>
            </div>

            <!-- Technologies Pills -->
            <div
                class="grid grid-cols-2 gap-3
           sm:flex sm:flex-wrap sm:justify-center sm:gap-4
           max-w-5xl mx-auto">

                <!-- Pill / Card -->
                <a href="{{ route('shopify-development') }}"
                    class="group flex flex-col sm:flex-row
               items-center justify-center sm:justify-start
               gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3
               rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md
               border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black
               hover:border-primary
               transition-all duration-300">

                    <!-- Icon -->
                    <span
                        class="flex items-center justify-center
                   w-10 h-10 sm:w-9 sm:h-9
                   rounded-full
                   bg-white/10 border border-white/20
                   group-hover:bg-white/20
                   transition-all duration-300">

                        <img src="{{ asset('images/tech/shopify.png') }}"
                            alt="Shopify"
                            class="w-6 h-6 object-contain">
                    </span>

                    <span class="text-center sm:text-left">
                        Shopify Development
                    </span>
                </a>

                <!-- React -->
                <a href="{{ route('mern-development') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/react.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>React Development</span>
                </a>

                <!-- PHP -->
                <a href="{{ route('php-development') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/php.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>PHP Development</span>
                </a>

                <!-- Magento -->
                <a href="{{ route('magento-development') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/magento.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>Magento Development</span>
                </a>

                <!-- Laravel -->
                <a href="{{ route('laravel-development') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/laravel.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>Laravel Development</span>
                </a>

                <!-- CodeIgniter -->
                <a href="{{ route('codeigniter-development') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/codeigniter.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>CodeIgniter Development</span>
                </a>

                <!-- MERN -->
                <a href="{{ route('mern-development') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/nodejs.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>MERN Development</span>
                </a>

                <!-- Mobile App -->
                <a href="{{ route('mobileappdevelopment') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/native.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>Mobile App Development</span>
                </a>

                <!-- WordPress -->
                <a href="{{ route('wordpress-development') }}" class="group flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3
               px-3 py-4 sm:px-5 sm:py-3 rounded-xl sm:rounded-full
               bg-white/10 backdrop-blur-md border border-white/20
               text-xs sm:text-sm font-medium text-white
               shadow-lg shadow-primary/10
               hover:bg-primary hover:text-black hover:border-primary transition-all">
                    <span class="flex items-center justify-center w-10 h-10 sm:w-9 sm:h-9 rounded-full
                     bg-white/10 border border-white/20 group-hover:bg-white/20 transition">
                        <img src="{{ asset('images/tech/wordpress.png') }}" class="w-6 h-6 object-contain">
                    </span>
                    <span>WordPress Development</span>
                </a>

            </div>

        </div>
    </section>



    <section class="py-10 sm:py-10 lg:py-10 bg-black">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="max-w-3xl mb-12 sm:mb-16 lg:mb-20">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl
                       font-light tracking-wide leading-tight text-white">
                    Our
                    <span class="font-semibold text-primary">
                        Mission
                    </span>
                    & Vision
                </h2>

                <p class="mt-4 sm:mt-6 text-white/80 text-sm sm:text-justify lg:text-lg">
                    What drives us every day and where we are headed.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16">

                <!-- Mission -->
                <div class="border border-white/10 rounded-2xl sm:rounded-3xl
                        p-6 sm:p-8 lg:p-10">
                    <div class="flex items-center gap-3 sm:gap-4 mb-4 sm:mb-6">
                        <i class="ri-rocket-line text-2xl sm:text-3xl text-primary"></i>
                        <h3 class="text-xl sm:text-2xl font-medium text-white">
                            Our Mission
                        </h3>
                    </div>

                    <div class="space-y-4 sm:space-y-5">
                        <p class="text-white/80 text-sm sm:text-base lg:text-lg">
                            Our mission is simple.
                            We help businesses use technology in a smart,
                            practical, and stress-free way.
                            We focus on building solutions that solve real problems
                            instead of adding unnecessary complexity,
                            so technology supports growth rather than slowing it down.
                        </p>

                        <p class="text-white/80 text-sm sm:text-base lg:text-lg">
                            Every project begins with understanding your needs,
                            challenges, and goals.
                            It ends with a solution that makes daily work
                            easier, smoother, and more efficient,
                            helping teams work better and businesses move forward
                            with confidence.
                        </p>
                    </div>

                </div>

                <!-- Vision -->
                <div class="border border-white/10 rounded-2xl sm:rounded-3xl
                        p-6 sm:p-8 lg:p-10">
                    <div class="flex items-center gap-3 sm:gap-4 mb-4 sm:mb-6">
                        <i class="ri-eye-line text-2xl sm:text-3xl text-primary"></i>
                        <h3 class="text-xl sm:text-2xl font-medium text-white">
                            Our Vision
                        </h3>
                    </div>

                    <div class="space-y-4 sm:space-y-5">
                        <p class="text-white/80 text-sm sm:text-base lg:text-lg">
                            Our vision is to become a trusted digital partner
                            for businesses across the world.
                            We want technology to feel reliable and meaningful,
                            and we want people to feel confident
                            when they hear the name
                            <span class="text-white font-medium">Techonika</span>.
                        </p>

                        <p class="text-white/80 text-sm sm:text-base lg:text-lg">
                            That confidence comes from honest work,
                            clear communication,
                            and results that truly support business growth.
                            By building strong relationships and delivering
                            consistent value, we aim to create digital solutions
                            that make a lasting and positive impact.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <section class="relative overflow-hidden py-16 sm:py-20 bg-black">


        <!-- Soft Glow -->
        <div class="absolute -top-40 left-1/4
            w-[420px] h-[420px]
            bg-primary/40 blur-[180px] rounded-full">
        </div>

        <div class="absolute -bottom-40 right-1/4
            w-[420px] h-[420px]
            bg-primary/25 blur-[180px] rounded-full">
        </div>


        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6 lg:gap-8">

                <!-- Stat Card -->
                <div class="group bg-white/5 border border-white/15 backdrop-blur
                        rounded-xl p-5 sm:p-6 text-center
                        hover:border-primary/60 transition-all">

                    <h3 class="text-3xl sm:text-4xl font-bold text-primary mb-2">
                        80+
                    </h3>
                    <p class="text-white/70 text-xs sm:text-sm leading-snug">
                        Projects Delivered
                    </p>
                </div>

                <div class="group bg-white/5 border border-white/15 backdrop-blur
                        rounded-xl p-5 sm:p-6 text-center
                        hover:border-primary/60 transition-all">

                    <h3 class="text-3xl sm:text-4xl font-bold text-primary mb-2">
                        80+
                    </h3>
                    <p class="text-white/70 text-xs sm:text-sm leading-snug">
                        Clients Served
                    </p>
                </div>

                <div class="group bg-white/5 border border-white/15 backdrop-blur
                        rounded-xl p-5 sm:p-6 text-center
                        hover:border-primary/60 transition-all">

                    <h3 class="text-3xl sm:text-4xl font-bold text-primary mb-2">
                        15+
                    </h3>
                    <p class="text-white/70 text-xs sm:text-sm leading-snug">
                        Ongoing Client Engagements
                    </p>
                </div>

                <div class="group bg-white/5 border border-white/15 backdrop-blur
                        rounded-xl p-5 sm:p-6 text-center
                        hover:border-primary/60 transition-all">

                    <h3 class="text-3xl sm:text-4xl font-bold text-primary mb-2">
                        10+
                    </h3>
                    <p class="text-white/70 text-xs sm:text-sm leading-snug">
                        Expert Professionals
                    </p>
                </div>

                <div class="group bg-white/5 border border-white/15 backdrop-blur
                        rounded-xl p-5 sm:p-6 text-center
                        hover:border-primary/60 transition-all
                        sm:col-span-3 lg:col-span-1">

                    <h3 class="text-3xl sm:text-4xl font-bold text-primary mb-2">
                        7+
                    </h3>
                    <p class="text-white/70 text-xs sm:text-sm leading-snug">
                        Years of Proven Experience
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-black py-16 sm:py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- RIGHT IMAGE -->
                <div class="relative order-first lg:order-none">
                    <div
                        class="relative overflow-hidden
                           rounded-2xl
                           border border-white/10
                           bg-white/5 backdrop-blur">

                        <img
                            src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7"
                            alt="Best SEO Company in Noida"
                            class="w-full h-full object-cover
                               transition-transform duration-700
                               hover:scale-105">
                    </div>

                    <!-- Soft Glow -->
                    <div
                        class="absolute -bottom-10 -right-10
                           w-40 h-40
                           bg-primary/30
                           rounded-full blur-[120px]">
                    </div>
                </div>

                <!-- LEFT CONTENT -->
                <div>
                    <span
                        class="inline-flex items-center mb-4
                           px-4 py-1.5 rounded-full
                           text-xs font-medium
                           bg-white/10 text-primary">
                        SEO-Driven Digital Growth
                    </span>

                    <h2
                        class="text-3xl sm:text-4xl lg:text-5xl
                           font-bold leading-tight text-white">
                        Best
                        <span class="text-primary">SEO Company in Noida</span><br>
                        Focused on Real Results
                    </h2>

                    <p
                        class="mt-6 text-white/70
                           text-sm sm:text-base leading-relaxed">
                        We are a results-oriented SEO company in Noida helping businesses
                        achieve higher Google rankings, consistent organic traffic,
                        and long-term online growth. Our SEO strategies are data-driven,
                        ethical, and aligned with Google’s latest algorithms.
                    </p>

                    <p
                        class="mt-4 text-white/70
                           text-sm sm:text-base leading-relaxed">
                        From keyword research and technical SEO to on-page optimization,
                        content strategy, and link building, we deliver complete
                        SEO solutions designed to convert visitors into customers.
                    </p>

                    <!-- Highlights -->
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-lg">
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            Google-Focused SEO Strategy
                        </div>
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            Keyword & Competitor Research
                        </div>
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            Technical & On-Page SEO
                        </div>
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <i class="ri-check-line text-primary"></i>
                            Measurable Ranking Growth
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-8 flex flex-wrap gap-4">
                        <button
                            @click="$dispatch('open-modal', { to: 'contact' })"
                            class="inline-flex items-center gap-2
                               px-7 py-3.5 rounded-full
                               bg-primary text-black
                               font-semibold text-sm
                               hover:opacity-90 transition">
                            Get Free SEO Audit
                            <i class="ri-arrow-right-line"></i>
                        </button>

                        <a
                            href="{{route('digital-marketing')}}"
                            class="inline-flex items-center gap-2
                               px-7 py-3.5 rounded-full
                               border border-white/20
                               text-white text-sm font-medium
                               hover:bg-white hover:text-black transition">
                            View SEO Services
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="relative bg-black  md:mb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">

            <!-- Heading -->
            <div class="text-center mb-10">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white">
                    SEO For
                    <span class="text-primary">Different Industries</span>
                </h2>
            </div>

            <!-- Pills -->
            <div
                class="flex flex-wrap justify-center gap-4 max-w-5xl mx-auto">

                <!-- Pill -->
                <a
                    href="{{route('search-engine-optimization')}}"
                    class="group px-6 py-3
                       rounded-full
                       bg-white/10 backdrop-blur-md
                       border border-white/20
                       text-sm font-medium text-white
                       shadow-lg shadow-primary/10
                       hover:bg-primary hover:text-black
                       hover:border-primary
                       transition-all duration-300">
                    SEO For Startups
                </a>

                <a
                    href="{{route('search-engine-optimization')}}"

                    class="group px-6 py-3 rounded-full
                       bg-white/10 backdrop-blur-md border border-white/20
                       text-sm font-medium text-white
                       shadow-lg shadow-primary/10
                       hover:bg-primary hover:text-black hover:border-primary
                       transition-all duration-300">
                    Ecommerce SEO
                </a>

                <a
                    href="{{route('search-engine-optimization')}}"

                    class="group px-6 py-3 rounded-full
                       bg-white/10 backdrop-blur-md border border-white/20
                       text-sm font-medium text-white
                       shadow-lg shadow-primary/10
                       hover:bg-primary hover:text-black hover:border-primary
                       transition-all duration-300">
                    Limousine Services SEO
                </a>

                <a
                    href="{{route('search-engine-optimization')}}"

                    class="group px-6 py-3 rounded-full
                       bg-white/10 backdrop-blur-md border border-white/20
                       text-sm font-medium text-white
                       shadow-lg shadow-primary/10
                       hover:bg-primary hover:text-black hover:border-primary
                       transition-all duration-300">
                    Healthcare SEO
                </a>
                <a
                    href="{{route('search-engine-optimization')}}"

                    class="group px-6 py-3 rounded-full
                       bg-white/10 backdrop-blur-md border border-white/20
                       text-sm font-medium text-white
                       shadow-lg shadow-primary/10
                       hover:bg-primary hover:text-black hover:border-primary
                       transition-all duration-300">
                    SEO For Doctors
                </a>

                <a href="{{route('search-engine-optimization')}}"
                    class="group px-6 py-3 rounded-full
                       bg-white/10 backdrop-blur-md border border-white/20
                       text-sm font-medium text-white
                       shadow-lg shadow-primary/10
                       hover:bg-primary hover:text-black hover:border-primary
                       transition-all duration-300">
                    NGOs / NPO Website SEO
                </a>

                <a href="{{route('search-engine-optimization')}}"
                    class="group px-6 py-3 rounded-full
                       bg-white/10 backdrop-blur-md border border-white/20
                       text-sm font-medium text-white
                       shadow-lg shadow-primary/10
                       hover:bg-primary hover:text-black hover:border-primary
                       transition-all duration-300">
                    Hospitality Website SEO
                </a>

            </div>
        </div>
    </section>


    <div class="bg-black py-12 px-3 md:px-[10%] flex flex-col">

        <!-- Heading -->
        <h2 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold
           text-center md:text-left py-6 md:py-10 px-2 md:px-6">
            What We Do
        </h2>

        <p class="text-white/80 max-w-3xl px-2 md:px-6 mb-12 text-justify md:text-lg">
            We offer a wide range of digital and technology services. Each service is designed to support your
            business goals and improve your connection with customers. Below is a detailed look at what we do
            and how each service helps you. </p>

        <!-- Background Section -->
        <section class="relative bg-black py-6 overflow-hidden bg-center bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('images/lines.png') }}');">

            <!-- Glow -->
            <div class="absolute top-20 right-0 md:right-20 w-72 h-72 bg-primary opacity-20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-0 md:left-20 w-72 h-72 bg-primary opacity-20 rounded-full blur-3xl"></div>

            <!-- Cards -->
            <div class="mx-auto px-2 md:px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">

                <!-- Web Design -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">

                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-2xl">
                        <i class="ri-layout-4-line"></i>
                    </div>

                    <h3 class="text-white font-semibold text-lg">Web Design</h3>
                    <p class="text-white/80 text-sm">
                        Your website is often the first interaction people have with your brand. Our web design services focus
                        on creating websites that are easy to navigate, simple to understand, and pleasant to use. We design
                        layouts that feel natural, guide visitors smoothly, and make information easy to find.​
                        Every page is crafted to build trust, improve clarity, and offer a comfortable browsing experience
                        across all devices.
                    </p>
                    <a href="{{ route('webdesigning') }}" class="text-primary font-medium hover:underline">Read More →</a>
                </div>

                <!-- Graphic Design -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-2xl">
                        <i class="ri-palette-line"></i>
                    </div>
                    <h3 class="text-white font-semibold text-lg">Graphic Design</h3>
                    <p class="text-white/80 text-sm">
                        Strong visuals help people understand and remember your brand. Our graphic design services create
                        clean, meaningful visuals that communicate clearly and feel consistent. From branding elements to
                        marketing graphics, we design with balance, readability, and purpose in mind.​
                        Colors, typography, and visuals are chosen carefully so your message feels clear, professional, and
                        easy to connect with. </p>
                    <a href="{{ route('graphicdesigning') }}" class="text-primary font-medium hover:underline">Read More →</a>
                </div>

                <!-- Web Development -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-2xl">
                        <i class="ri-code-box-line"></i>
                    </div>
                    <h3 class="text-white font-semibold text-lg">Web Development</h3>
                    <p class="text-white/80 text-sm">
                        A strong website needs a solid base. Our web development services focus on building websites that
                        work smoothly every day. We make sure your site loads fast, stays secure, and works well on all
                        devices.
                        We build websites that are easy to manage and ready to grow with your business. Our work stays
                        clear, stable, and reliable so you can focus on serving your customers. </p>
                    <a href="{{ route('webdevelopment') }}" class="text-primary font-medium hover:underline">Read More →</a>
                </div>

                <!-- Digital Marketing -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-2xl">
                        <i class="ri-megaphone-line"></i>
                    </div>
                    <h3 class="text-white font-semibold text-lg">Digital Marketing</h3>
                    <p class="text-white/80 text-sm">
                        Being visible online helps people find and trust your business. Our digital marketing services help
                        you reach the right audience in a clear and steady way.
                        We plan and manage marketing activities that support real growth. Every step stays focused on your
                        goals and helps you build long-term connections with people. </p>
                    <a href="{{ route('digital-marketing') }}" class="text-primary font-medium hover:underline">Read More →</a>
                </div>

                <!-- Ecommerce -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-2xl">
                        <i class="ri-shopping-cart-2-line"></i>
                    </div>
                    <h3 class="text-white font-semibold text-lg">Ecommerce Solutions</h3>
                    <p class="text-white/80 text-sm">
                        Your brand is how people recognize and remember you online. Our online branding services help
                        your business stay clear, consistent, and trustworthy across all digital platforms.
                        We support your brand message, visuals, and presence so people feel familiar and confident when
                        they see your business. </p>
                    <a href="#" class="text-primary font-medium hover:underline">Read More →</a>
                </div>

                <!-- Mobile App -->
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:scale-105 transition">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center text-2xl">
                        <i class="ri-smartphone-line"></i>
                    </div>
                    <h3 class="text-white font-semibold text-lg">Mobile App Development</h3>
                    <p class="text-white/80 text-sm">
                        Mobile apps help you stay close to your users. Our mobile apps are designed to feel simple, smooth,
                        and easy to use.
                        We build apps that work well every day and stay ready for future updates. This helps you serve users
                        better as needs change. </p>
                    <a href="{{ route('mobileappdevelopment') }}" class="text-primary font-medium hover:underline">Read More →</a>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20
            rounded-xl p-6 flex flex-col gap-4 shadow-lg
            hover:scale-105 transition">

                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary
                flex items-center justify-center text-2xl">
                        <i class="ri-line-chart-line"></i>
                    </div>

                    <h3 class="text-white font-semibold text-lg">
                        Search Engine Optimization (SEO)
                    </h3>

                    <p class="text-white/80 text-sm leading-relaxed">
                        Our SEO services are designed to help your business rank higher on Google,
                        attract quality organic traffic, and generate consistent leads.
                        We focus on keyword research, on-page optimization, technical SEO,
                        and content strategy to improve visibility and long-term search performance.
                    </p>

                    <a href="#seo-services" class="text-primary font-medium hover:underline">
                        Read More →
                    </a>
                </div>


                <div class="bg-white/10 backdrop-blur-md border border-white/20
            rounded-xl p-6 flex flex-col gap-4 shadow-lg
            hover:scale-105 transition">

                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary
                flex items-center justify-center text-2xl">
                        <i class="ri-shield-star-line"></i>
                    </div>

                    <h3 class="text-white font-semibold text-lg">Online Branding</h3>

                    <p class="text-white/80 text-sm leading-relaxed">
                        Your brand is how people recognize and remember you online.
                        Our online branding services help your business stay clear,
                        consistent, and trustworthy across all digital platforms.
                        We support your brand message, visuals, and presence so people
                        feel confident when they see your business.
                    </p>

                    <a href="{{ route('branding') }}" class="text-primary font-medium hover:underline">
                        Read More →
                    </a>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20
            rounded-xl p-6 flex flex-col gap-4 shadow-lg
            hover:scale-105 transition">

                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary
                flex items-center justify-center text-2xl">
                        <i class="ri-chat-smile-3-line"></i>
                    </div>

                    <h3 class="text-white font-semibold text-lg">Social Media Marketing</h3>

                    <p class="text-white/80 text-sm leading-relaxed">
                        Social media helps you stay connected with people and build trust
                        over time. Our social media marketing services help your brand stay
                        active, friendly, and relatable.
                        We focus on steady communication and meaningful content that builds
                        long-term relationships instead of short-term attention.
                    </p>

                    <a href="#" class="text-primary font-medium hover:underline">
                        Read More →
                    </a>
                </div>


            </div>

            <!-- CTA -->
            <div class="mt-14 text-center relative z-10">
                <button @click="$dispatch('open-modal', { to: 'contact' })" class="bg-primary text-black px-8 py-3 rounded-lg font-semibold shadow-lg hover:opacity-90 transition">
                    Book Your Call
                </button>
            </div>

        </section>
    </div>
    <section class="relative py-20 bg-black overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Heading -->
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white">
                    WHY <span class="text-primary">CHOOSE US?</span>
                </h2>
                <p class="mt-4 text-white/60 max-w-2xl mx-auto text-sm sm:text-base">
                    Smart strategies, clean execution, and measurable digital growth
                    built to scale your business.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-14 items-center">

                <!-- LEFT FEATURES -->
                <div class="space-y-8">

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary/15
                        flex items-center justify-center">
                            <i class="ri-line-chart-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg">
                                ROI-Focused Performance
                            </h4>
                            <p class="text-white/60 text-sm mt-1 leading-relaxed">
                                Data-driven strategies designed to boost traffic,
                                conversions, and measurable growth.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary/15
                        flex items-center justify-center">
                            <i class="ri-layout-2-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg">
                                Conversion-Optimized Websites
                            </h4>
                            <p class="text-white/60 text-sm mt-1 leading-relaxed">
                                High-performance, SEO-friendly websites that engage
                                users and generate quality leads.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary/15
                        flex items-center justify-center">
                            <i class="ri-shield-check-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg">
                                Proven Organic Growth
                            </h4>
                            <p class="text-white/60 text-sm mt-1 leading-relaxed">
                                Sustainable SEO strategies that build authority and
                                long-term brand visibility.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center">
                    <div class="relative">
                        <img class="object-cover rounded-full" src="{{asset('images/why.jpg')}}" alt="">
                    </div>
                </div>

                <!-- RIGHT FEATURES -->
                <div class="space-y-8">

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary/15
                        flex items-center justify-center">
                            <i class="ri-hand-heart-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg">
                                Dedicated Partnership
                            </h4>
                            <p class="text-white/60 text-sm mt-1 leading-relaxed">
                                We work as your extended team, providing personalized
                                strategies and expert support.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary/15
                        flex items-center justify-center">
                            <i class="ri-bar-chart-box-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg">
                                Transparent Reporting
                            </h4>
                            <p class="text-white/60 text-sm mt-1 leading-relaxed">
                                Clear analytics, regular insights, and full visibility
                                into campaign performance.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-full bg-primary/15
                        flex items-center justify-center">
                            <i class="ri-user-heart-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg">
                                Customer-Centric Focus
                            </h4>
                            <p class="text-white/60 text-sm mt-1 leading-relaxed">
                                Ethical practices, high-value delivery, and long-term
                                client success.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="bg-black py-20">
        <div
            x-data="{ tab: 'fullstack' }"
            class="max-w-7xl mx-auto rounded-3xl overflow-hidden grid md:grid-cols-12 bg-[#0b0b0b]">

            <!-- LEFT SIDEBAR -->
            <div class="md:col-span-4 bg-[#0f0f0f] p-8 space-y-2 border-r border-white/10">

                <!-- BUTTON -->
                <template x-for="item in [
                { key:'digital', label:'Digital Marketing', icon:'ri-megaphone-line' },
                { key:'fullstack', label:'Full Stack & Frameworks', icon:'ri-stack-line' },
                { key:'backend', label:'Backend & Frontend', icon:'ri-code-box-line' },
                { key:'ecommerce', label:'eCommerce & CMS', icon:'ri-shopping-cart-line' },
                { key:'mobile', label:'Mobile', icon:'ri-smartphone-line' },
                { key:'devops', label:'DevOps', icon:'ri-settings-3-line' },
                { key:'branding', label:'Branding', icon:'ri-brush-line' }
            ]">
                    <button
                        @click="tab=item.key"
                        :class="tab===item.key
                        ? 'bg-[#ffc700] text-black'
                        : 'text-white hover:bg-[#ffc700]/10'"
                        class="w-full flex items-center gap-4 px-6 py-4 rounded-xl transition">
                        <i :class="item.icon + ' text-xl'"></i>
                        <span class="font-medium" x-text="item.label"></span>
                    </button>
                </template>

            </div>

            <!-- RIGHT CONTENT -->
            <div class="md:col-span-8 bg-[#121212] p-10">

                <!-- DIGITAL MARKETING -->
                <div x-show="tab==='digital'" x-transition class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-10 " src="{{asset('images/icons/creative-writing.png')}}" alt="">
                        <span>Content Writing & Marketing
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-10 " src="{{asset('images/icons/performance.png')}}" alt="">
                        <span>Performance Marketing
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-10 " src="{{asset('images/icons/pay-per-click.png')}}" alt="">
                        <span>PPC
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-10 " src="{{asset('images/icons/search-engine-optimization.png')}}" alt="">
                        <span>SEO (E-commerce, Local)
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-10 " src="{{asset('images/icons/social-media.png')}}" alt="">
                        <span>Social Media Marketing
                        </span>
                    </div>

                </div>

                <!-- FULL STACK -->
                <div x-show="tab==='fullstack'" x-transition class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-zinc-600/50 rounded-3xl flex items-center gap-4  text-white px-4 py-3">
                        <img class="w-auto h-10 " src="{{asset('images/icons/Django.png')}}" alt="">
                        <span>Django</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white flex items-center gap-4 px-4 py-3">
                        <img class="w-auto h-10 " src="{{asset('images/icons/mean_logo.svg')}}" alt="">
                        <span>MEAN Stack</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white flex items-center gap-4 px-4 py-3">
                        <img class="w-auto h-10 rounded-full " src="{{asset('images/icons/mern.png')}}" alt="">
                        <span>MERN Stack</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/laravel.png')}}" alt="">
                        <span>Laravel</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/livewire.png')}}" alt="">
                        <span>Livewire</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Next.js.png')}}" alt="">
                        <span>Next.js</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/angular.png')}}" alt="">
                        <span>Angular</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/TypeScript.png')}}" alt="">
                        <span>TypeScript</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/python.png')}}" alt="">
                        <span>Python</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/langchain.png')}}" alt="">
                        <span>LangChain(AI)</span>
                    </div>
                </div>

                <!-- BACKEND & FRONTEND -->
                <div x-show="tab==='backend'" x-transition class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/nodejs.png')}}" alt="">
                        <span>Node.js</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/php.png')}}" alt="">
                        <span>PHP</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/GraphQL.png')}}" alt="">
                        <span>GraphQL</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Express.png')}}" alt="">
                        <span>Rest API</span>

                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/react.png')}}" alt="">
                        <span>React.js</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Tailwind CSS.png')}}" alt="">
                        <span>Tailwind CSS</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/html.png')}}" alt="">
                        <span>HTML/CSS</span>
                    </div>

                </div>

                <!-- ECOMMERCE -->
                <div x-show="tab==='ecommerce'" x-transition class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/shopify.png')}}" alt="">
                        <span>Shopify</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Drupal.png')}}" alt="">
                        <span>Drupal</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/woocommerce.png')}}" alt="">
                        <span>WooCommerce</span>
                    </div>

                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/wordpress.png')}}" alt="">
                        <span>WordPress</span>
                    </div>

                </div>

                <!-- MOBILE -->
                <div x-show="tab==='mobile'" x-transition class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/native.png')}}" alt="">
                        <span>React Native</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Flutter.png')}}" alt="">
                        <span>Flutter</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Android.png')}}" alt="">
                        <span>Android</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/ios.jpg')}}" alt="">
                        <span>iOS</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/kotlin.jpg')}}" alt="">
                        <span>Kotlin</span>
                    </div>
                </div>

                <!-- DEVOPS -->
                <div x-show="tab==='devops'" x-transition class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/AWS.png')}}" alt="">
                        <span>AWS</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Azure.png')}}" alt="">
                        <span>Azure</span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/Docker.png')}}" alt="">
                        <span>Docker</span>
                    </div>

                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/tech/NGINX.png')}}" alt="">
                        <span>NGNIX</span>
                    </div>

                </div>

                <!-- Branding -->
                <div x-show="tab==='branding'" x-transition class="grid sm:grid-cols-2 gap-6">
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/icons/illustrator.png')}}" alt="">
                        <span>Logo Designing
                        </span>

                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/icons/font-design.png')}}" alt="">
                        <span>Typography
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/icons/card.png')}}" alt="">
                        <span>Visiting Card Designing
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/icons/solution.png')}}" alt="">
                        <span>Company Profile Designing
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/icons/cloth.png')}}" alt="">
                        <span>Brand patterns & graphic elements
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/icons/product-design.png')}}" alt="">
                        <span>Package Designing
                        </span>
                    </div>
                    <div class="bg-zinc-600/50 rounded-3xl text-white px-4 py-3 flex items-center gap-4">
                        <img class="w-auto h-9" src="{{asset('images/icons/video.png')}}" alt="">
                        <span>2D Video Explainer
                        </span>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

    <section
        class="relative px-[2%] md:px-[9%]
           bg-gradient-to-r from-black via-[#111] to-black
           text-white overflow-hidden">

        <!-- Decorative Glow -->
        <div class="absolute -top-32 -right-32
        w-[500px] h-[500px]
        bg-primary/20 blur-[140px] rounded-full"></div>

        <div class="relative mx-auto px-4 sm:px-6 lg:px-12 py-16 sm:py-20">

            <!-- GRID -->
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div class="flex flex-col gap-5 text-justify">

                    <h2 class="text-3xl sm:text-4xl lg:text-4xl font-bold leading-tight">
                        A Digital Partner You Can
                        <span class="text-primary"> Trust & Grow With</span>
                    </h2>

                    <p class="text-gray-300 leading-relaxed">
                        Choosing the right digital partner is about more than just services.
                        It’s about finding a team that understands your vision, respects your
                        investment, and is committed to your long-term success.
                    </p>

                    <p class="text-gray-400 leading-relaxed">
                        At Techonika, we focus on building strong digital foundations that
                        help businesses grow with confidence. We take the time to understand
                        your goals, challenges, and audience before crafting solutions that
                        actually work in the real world.
                    </p>

                    <p class="text-gray-400 leading-relaxed">
                        Our approach is simple and transparent. We avoid unnecessary
                        complexity, communicate clearly at every stage, and deliver solutions
                        that are scalable, secure, and aligned with your business objectives.
                        From strategy and design to development and ongoing support,
                        we stay with you at every step.
                    </p>

                    <button @click="$dispatch('open-modal', { to: 'contact' })"
                        class="inline-flex items-center gap-2
                           bg-[#f6b615] text-black
                           px-6 py-3 rounded-lg font-semibold
                           hover:bg-yellow-400 transition w-fit">
                        Talk to Our Experts
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center">

                    <div
                        class="relative z-10 overflow-hidden
                           w-full max-w-md sm:max-w-lg lg:max-w-xl
                           aspect-[4/3]
                           rounded-[32px]
                           border border-white/10
                           bg-white/5 backdrop-blur">

                        <img
                            src="{{asset('images/vector-business-success-growth-green-arrow-chart_1005794-6310.jpg')}}"
                            alt="Business Growth & Digital Success"
                            class="w-full h-full object-cover
                               transition-transform duration-500
                               hover:scale-105">
                    </div>

                    <!-- Curve Glow -->
                    <div class="absolute -bottom-10 -right-10
                    w-[220px] h-[220px]
                    bg-primary rounded-full
                    blur-[120px] opacity-30">
                    </div>
                </div>

            </div>
        </div>
    </section>



    <div class="px-[2%] md:px-[9%] bg-black">

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


        <section class="w-full bg-black py-10 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 lg:px-4">

                <!-- SECTION TITLE -->
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-white mb-6">
                    Our Satisfied <span class="text-primary">Clients</span>
                </h2>
                <p class="text-sm mb-20 md:text-justify text-white/80 leading-relaxed">
                    We are proud to work with clients from different industries. Each project helps us learn and improve.
                    Our clients stay with us because we communicate clearly, deliver on time, and care about their success.
                </p>

                <!-- SLIDER -->
                <div
                    x-data="{
                active: 0,
                interval: null,
                cardWidth: 340,
                pause: false,
                cards: @js($testimonials->map(fn($t) => ['name' => $t->data['name'] ?? '', 'role' => $t->data['company'] ?? '', 'text' => $t->data['message'] ?? '', 'verified' => $t->data['verified'] ?? false])->values()),
                start() {
                    if (this.cards.length > 0) {
                        this.interval = setInterval(() => {
                            if (!this.pause) {
                                this.active = (this.active + 1) % this.cards.length
                            }
                        }, 4000)
                    }
                }
            }"
                    x-init="start()"
                    class="relative"
                    @mouseenter="pause = true"
                    @mouseleave="pause = false">

                    <!-- VIEWPORT -->
                    <div class="overflow-hidden">
                        @if($testimonials->count() > 0)
                        <div
                            class="flex gap-6 transition-transform duration-700 ease-out"
                            :style="`transform: translateX(-${active * cardWidth}px)`">

                            <template x-for="(card, index) in cards" :key="index">
                                <div
                                    class="min-w-[300px] sm:min-w-[320px] max-w-[320px]
                            bg-gradient-to-b from-[#1a1a1a] to-[#111]
                            rounded-2xl p-6 shadow-xl
                            border border-white/5">

                                    <!-- HEADER (NO IMAGE) -->
                                    <div class="flex items-center gap-4 mb-4">
                                        <!-- INITIAL BADGE -->
                                        <div
                                            class="w-12 h-12 flex items-center justify-center
                                    rounded-full bg-primary/20 text-primary
                                    font-semibold uppercase">
                                            <span x-text="card.name.charAt(0)"></span>
                                        </div>

                                        <div>
                                            <h4 class="text-white font-semibold text-sm"
                                                x-text="card.name"></h4>
                                            <p class="text-gray-400 text-xs"
                                                x-text="card.role"></p>
                                        </div>
                                    </div>

                                    <!-- TEXT -->
                                    <p class="text-gray-300 text-sm leading-relaxed mb-4 line-clamp-6"
                                        x-text="card.text"></p>

                                    <span class="text-primary text-xs font-medium" x-show="card.verified">
                                        Verified Client
                                    </span>
                                </div>
                            </template>
                        </div>
                        @else
                        <div class="text-center py-12">
                            <p class="text-white/60">No testimonials available at the moment.</p>
                        </div>
                        @endif
                    </div>

                    <!-- DOTS -->
                    @if($testimonials->count() > 0)
                    <div class="flex justify-center gap-3 mt-10">
                        <template x-for="(dot, i) in cards" :key="i">
                            <button
                                @click="active = i"
                                class="w-2.5 h-2.5 rounded-full transition"
                                :class="active === i ? 'bg-primary' : 'bg-gray-600'">
                            </button>
                        </template>
                    </div>
                    @endif

                </div>
            </div>
        </section>



        <section class="bg-black py-20">
            <div class="max-w-7xl mx-auto px-4 md:px-5">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    <!-- LEFT : CONTENT -->
                    <div>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl
                           font-semibold leading-tight text-white mb-6">
                            Commitment to <span class="font-bold text-primary">Quality</span>
                        </h2>

                        <p class="text-white/80 text-justify sm:text-lg leading-relaxed">
                            Quality is at the heart of our work, and we treat it as a core
                            part of everything we do. At every stage, we review our work
                            carefully and follow clear standards so every detail feels
                            complete, reliable, and well thought out.
                        </p>

                        <p class="mt-5 text-white/80 text-justify sm:text-lg leading-relaxed">
                            We take time to check our results and make sure they truly meet
                            your needs and expectations. We believe in honest feedback,
                            open communication, and steady improvement over time.
                        </p>

                        <p class="mt-5 text-white/80 text-justify sm:text-lg leading-relaxed">
                            This careful and thoughtful approach helps us learn from every
                            project and serve you better, stronger, and more confidently
                            each time we work together.
                        </p>
                    </div>

                    <!-- RIGHT : IMAGE -->
                    <div class="relative">
                        <!-- Glow -->
                        <div class="absolute -inset-4 bg-primary/20 blur-3xl rounded-full"></div>

                        <img
                            src="{{ asset('images/2150938426.jpg') }}"
                            alt="Commitment to quality"
                            class="relative rounded-3xl border border-white/10
                           shadow-2xl object-cover w-full
                           h-[300px] sm:h-[360px] lg:h-[420px]" />
                    </div>

                </div>

                <!-- Divider -->
                <div class="mt-20 h-px bg-white/10"></div>

            </div>
        </section>

        <section class="bg-black py-10">
            <div class="max-w-7xl mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                    <!-- LEFT : IMAGE -->
                    <div class="relative">
                        <div class="absolute -inset-4 bg-primary/20 blur-3xl rounded-full"></div>

                        <img
                            src="{{ asset('images/growth.svg') }}"
                            alt="Let us grow together"
                            class="relative rounded-3xl border border-white/10
                           shadow-2xl object-cover w-full h-[320px] sm:h-[380px] lg:h-[420px]" />
                    </div>

                    <!-- RIGHT : CONTENT -->
                    <div>


                        <h2 class="text-3xl md:text-4xl lg:text-5xl
                           font-semibold leading-tight text-white mb-6">
                            Let Us Grow <span class="text-primary font-bold">Together</span>
                        </h2>

                        <p class="text-white/80 text-justify sm:text-lg leading-relaxed">
                            If you are looking for a digital partner who listens carefully,
                            explains every step in simple words, and delivers work with
                            care and attention, <span class="text-white font-medium">Techonika</span>
                            is ready to support you.
                        </p>

                        <p class="mt-5 text-white/80 text-justify sm:text-lg leading-relaxed">
                            We focus on creating solutions that truly help your business
                            grow while making technology feel easy and approachable.
                        </p>

                        <p class="mt-5 text-white/80 text-justify sm:text-lg leading-relaxed">
                            Reach out to us today, and let’s build something meaningful
                            together that fits your goals and grows with your needs.
                            We look forward to being part of your journey, helping you
                            succeed, and supporting your growth every step of the way.
                        </p>

                        <!-- CTA -->
                        <div class="mt-10 flex flex-wrap gap-4">
                            <button
                                @click="$dispatch('open-modal', { to: 'contact' })"
                                class="inline-flex items-center gap-2
                              px-8 py-3.5 rounded-full
                              bg-primary text-black font-semibold
                              hover:opacity-90 transition">
                                Get in Touch
                            </button>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section class="bg-black py-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">

                <!-- SECTION TITLE -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                        FREQUENTLY ASKED <span class="text-[#f6b615]">QUESTIONS</span>
                    </h2>
                    <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
                        Answers to common questions about our services, process,
                        pricing, and how we work with clients.
                    </p>
                </div>

                <!-- FAQ LIST -->
                <div x-data="{ active: null }" class="space-y-4">

                    <!-- 1 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 1 ? active = null : active = 1"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                What services does Techonika offer as a digital solutions company?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 1 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 1" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            We offer a full range of digital services including web development,
                            web design & graphic design, mobile app development, digital marketing,
                            online branding, ecommerce solutions, social media marketing,
                            and resource management everything under one roof.
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 2 ? active = null : active = 2"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Do you handle both website and mobile app development?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 2 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 2" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Yes. We design and develop websites and mobile apps that are fast,
                            secure, and easy to use. Whether it’s a simple website or a complex
                            application, we build solutions that support your business.
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 3 ? active = null : active = 3"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Can Techonika help me generate more leads for my business?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 3 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 3" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Absolutely. Our digital marketing and social media services focus on
                            reaching the right audience and converting them into customers
                            through clear strategies and steady, long-term growth.
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 4 ? active = null : active = 4"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                How do I know Techonika is the right digital partner for my business?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 4 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 4" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            We focus on honest communication, clear explanations,
                            and solutions that match your real business needs.
                            We stay connected even after project completion
                            so you always feel supported.
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 5 ? active = null : active = 5"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                What is the average cost to build a website or app?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 5 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 5" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            The cost depends on the design, features, and complexity.
                            We discuss your goals first and provide a clear estimate
                            before starting so there are no surprises.
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 6 ? active = null : active = 6"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Do you sign a non-disclosure agreement (NDA)?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 6 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 6" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Yes. We respect your privacy and business ideas.
                            We are happy to sign an NDA to ensure your information
                            stays fully protected.
                        </div>
                    </div>

                    <!-- 7 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 7 ? active = null : active = 7"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                How long does it take to complete a website or app project?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 7 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 7" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Timelines depend on project size and requirements.
                            After understanding your goals, we share a clear schedule
                            and keep you updated throughout the project.
                        </div>
                    </div>

                    <!-- 8 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 8 ? active = null : active = 8"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Do you create websites using CMS platforms?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 8 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 8" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Yes. We build websites using CMS platforms like WordPress,
                            Shopify, and others so you can easily manage your content
                            when needed.
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 9 ? active = null : active = 9"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                Can I see my website or app while it’s being developed?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 9 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 9" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            Absolutely. We share regular updates and previews
                            so you can review progress and give feedback
                            throughout development.
                        </div>
                    </div>

                    <!-- 10 -->
                    <div class="border border-white/10 rounded-xl overflow-hidden">
                        <button @click="active === 10 ? active = null : active = 10"
                            class="w-full flex items-center justify-between px-6 py-5 text-left">
                            <span class="text-white font-medium">
                                How do domain, hosting, and payments work?
                            </span>
                            <span class="text-[#f6b615] text-xl transform transition"
                                :class="active === 10 ? 'rotate-45' : ''">+</span>
                        </button>

                        <div x-show="active === 10" x-collapse
                            class="px-6 pb-5 text-gray-400 leading-relaxed">
                            We guide you in choosing the right domain and hosting.
                            Payments are usually split into stages a deposit,
                            milestones during development, and final payment on completion.
                            Everything is explained clearly before we begin.
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>


</div>
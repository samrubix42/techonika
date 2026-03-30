<div>
    @section('meta')
    <title>PHP Development Company in India | Custom PHP Development Services</title>
    <meta name="description" content="Techonika is a PHP development company in India that builds custom web applications, portals, and eCommerce platforms. Laravel, Symfony, CodeIgniter and more. Free consultation.">
    @endsection

    <!-- Hero Section -->
    <section class="relative bg-black text-white py-20 sm:py-24 lg:py-32 overflow-hidden border-b border-white/10">
        <!-- Background Glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 
            w-[600px] sm:w-[800px] lg:w-[900px] 
            h-[600px] sm:h-[800px] lg:h-[900px]
            bg-primary/20 blur-[200px] sm:blur-[240px] lg:blur-[260px] 
            rounded-full">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div class="text-center lg:text-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-white/15 bg-white/5 backdrop-blur text-sm tracking-[0.2em] uppercase">
                        <i class="ri-code-box-line text-primary"></i>
                        <span class="text-primary font-medium">PHP Development Services</span>
                    </div>

                    <!-- Heading -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl 
                        font-semibold tracking-tight leading-tight">
                        PHP Development Company in India That Builds <br class="hidden lg:block"/>
                        <span class="text-primary block">Fast, Secure, and Scalable Web Applications</span>
                    </h1>

                    <!-- Subheading -->
                    <h2 class="mt-6 text-xl sm:text-2xl text-white/80 font-medium">
                        Trusted PHP Development Services for Startups, SMBs, and Enterprises
                    </h2>

                    <!-- Paragraph 1 -->
                    <p class="mt-8 text-white/75 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        We are Techonika, a PHP development company in India that builds web applications businesses can rely on. Our team works with PHP and its most popular frameworks to create applications that are fast, secure, and ready to scale.
                    </p>

                    <!-- Paragraph 2 -->
                    <p class="mt-4 text-white/60 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        We've delivered PHP projects for startups launching their first product, growing SMBs replacing outdated systems, and established enterprises needing custom portals and platforms. Whatever stage your business is at, our PHP development services are built around your actual goals.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="mt-8 sm:mt-10 
                        flex flex-col sm:flex-row 
                        items-center lg:items-start 
                        gap-4">
                        <button 
                            @click="$dispatch('open-modal', { to: 'contact' })"
                            class="w-full sm:w-auto
                            inline-flex items-center justify-center 
                            px-6 sm:px-8 py-3 sm:py-4 
                            rounded-xl 
                            bg-primary text-black font-medium 
                            transition-all duration-300 
                            hover:opacity-90 hover:-translate-y-1">
                            Start Your Project
                            <i class="ri-arrow-right-line ml-2"></i>
                        </button>

                        <a href="#services"
                            class="w-full sm:w-auto
                            inline-flex items-center justify-center 
                            px-6 sm:px-8 py-3 sm:py-4 
                            rounded-xl 
                            border border-white/20 text-white 
                            transition-all duration-300 
                            hover:border-primary hover:text-primary hover:-translate-y-1">
                            <i class="ri-stack-line mr-2"></i>
                            View Services
                        </a>
                    </div>
                </div>

                <!-- RIGHT VISUAL CARD -->
                <div class="relative mt-10 lg:mt-0">
                    <div class="bg-white/5 backdrop-blur-md 
                        border border-primary/20 
                        rounded-2xl sm:rounded-3xl 
                        p-6 sm:p-8 lg:p-10
                        shadow-[0_20px_60px_-20px_rgba(0,0,0,0.6)]
                        hover:border-primary transition-all duration-500">

                        <div class="space-y-6 text-left">
                            <h3 class="text-xl font-semibold text-white border-b border-white/10 pb-4 flex items-center gap-3">
                                <i class="ri-flashlight-line text-primary"></i>
                                Core Highlights
                            </h3>
                            <!-- Item 1 -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 flex items-center justify-center 
                                    rounded-lg bg-primary/10 border border-primary/20 shrink-0">
                                    <i class="ri-shield-flash-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Security First Approach</h4>
                                    <p class="text-white/60 text-sm mt-1">Built with OWASP guidelines and modern security practices.</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 flex items-center justify-center 
                                    rounded-lg bg-primary/10 border border-primary/20 shrink-0">
                                    <i class="ri-rocket-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">High Performance</h4>
                                    <p class="text-white/60 text-sm mt-1">Optimized for speed and handling high concurrent users.</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 flex items-center justify-center 
                                    rounded-lg bg-primary/10 border border-primary/20 shrink-0">
                                    <i class="ri-expand-diagonal-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Infinite Scalability</h4>
                                    <p class="text-white/60 text-sm mt-1">Ready to grow from MVP to enterprise-level scale.</p>
                                </div>
                            </div>

                            <p class="text-sm text-white/50 italic mt-4">
                                We don't work with cookie-cutter solutions. Every project starts with understanding what you need, and ends with a working product your team can manage and build on.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase font-semibold">
                    <i class="ri-stack-line"></i>
                    What We Build
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
                    Our Full Range of <span class="text-primary">PHP Development Services</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Our services cover everything from brand-new applications to rebuilding systems that no longer do the job. Here's exactly what we can build for you:
                </p>
            </div>

            <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
                <!-- Service 1 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-code-s-slash-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">Custom PHP Web Application Development</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        We build web applications from the ground up using PHP. That means a product designed around your workflows, your data, and your users. Nothing borrowed from a generic template.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-shopping-cart-2-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">PHP eCommerce Development</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        We build eCommerce platforms on PHP that handle large product catalogs, complex pricing rules, and high order volumes. These are stores built for performance, not just appearance.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-plug-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">PHP API Development and Integration</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        An API is a connection point between two software systems. It lets your application talk to payment gateways, CRMs, shipping providers, and more. We build and connect PHP APIs so your systems share data smoothly.
                    </p>
                </div>
                <!-- Service 4 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-instance-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">PHP Framework-Based Development</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        We use PHP frameworks to build faster and more reliably. A framework is a pre-built set of tools and rules that makes development cleaner and easier to maintain. We pick the right one based on your project's size and requirements.
                    </p>
                </div>
                <!-- Service 5 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-settings-5-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">PHP CMS Development and Customization</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        A CMS lets you update your website without a developer every time. We build and customize PHP-based CMS platforms so your team controls the content without touching the code. We also work on WordPress development.
                    </p>
                </div>
                <!-- Service 6 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-cloud-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">Cloud-Based PHP Application Development</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        We build PHP applications designed to run on cloud platforms like AWS and Azure. Cloud-based apps are easier to scale, more reliable during traffic spikes, and simpler to maintain over time.
                    </p>
                </div>
                <!-- Service 7 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-exchange-funds-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">PHP Portal and Marketplace Development</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        We build B2B portals, vendor marketplaces, membership platforms, and directory systems on PHP. These are multi-user applications where different people have different roles and access levels.
                    </p>
                </div>
                <!-- Service 8 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 hover:-translate-y-1 transition duration-500">
                    <i class="ri-tools-line text-primary text-2xl"></i>
                    <h3 class="mt-6 text-xl font-medium">PHP Maintenance, Support, and Code Fixes</h3>
                    <p class="mt-4 text-white/60 leading-relaxed text-sm">
                        Already have an application that needs attention? We audit existing codebases, fix bugs, apply security updates, and optimize performance. We also handle applications originally built by other teams.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frameworks Section -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Ecosystem</span>
                <h2 class="mt-6 text-3xl sm:text-4xl font-semibold">PHP Frameworks <span class="text-primary">We Work With</span></h2>
                <p class="mt-4 text-white/50 max-w-4xl mx-auto leading-relaxed">
                    The right framework makes a PHP project faster to build and easier to scale. Here are the ones we work with regularly:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Framework Laravel -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 group hover:border-primary/50 transition duration-500">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:bg-primary/20 transition">
                        <i class="ri-leaf-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Laravel</h3>
                    <p class="text-sm text-white/60 leading-relaxed">
                        Laravel is the most widely used PHP framework. It has elegant syntax, built-in tools for authentication, routing, and database management, and a massive developer community. It's our go-to choice for most custom web application projects. You can learn more about our dedicated Laravel development services if your project calls for it.
                    </p>
                </div>
                <!-- Framework CodeIgniter -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 group hover:border-primary/50 transition duration-500">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:bg-primary/20 transition">
                        <i class="ri-flashlight-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">CodeIgniter</h3>
                    <p class="text-sm text-white/60 leading-relaxed">
                        CodeIgniter is a lightweight PHP framework that works well for smaller applications or projects where a minimal footprint matters. It's fast, easy to set up, and doesn't require much configuration to get started. We offer dedicated CodeIgniter development for clients who need its specific advantages.
                    </p>
                </div>
                <!-- Framework Symfony -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 group hover:border-primary/50 transition duration-500">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:bg-primary/20 transition">
                        <i class="ri-fire-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Symfony</h3>
                    <p class="text-sm text-white/60 leading-relaxed">
                        Symfony is a component-based PHP framework used for complex, long-term enterprise applications. It's highly flexible and well-suited to large teams working on a shared codebase over many years.
                    </p>
                </div>
                <!-- Framework Yii2 -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 group hover:border-primary/50 transition duration-500">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:bg-primary/20 transition">
                        <i class="ri-rocket-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Yii2</h3>
                    <p class="text-sm text-white/60 leading-relaxed">
                        Yii2 performs well under heavy load and is a solid choice for applications that need to handle a large number of database queries quickly. It's popular for building RESTful APIs and data-heavy portals.
                    </p>
                </div>
                <!-- Framework CakePHP -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 group hover:border-primary/50 transition duration-500">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:bg-primary/20 transition">
                        <i class="ri-cake-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">CakePHP</h3>
                    <p class="text-sm text-white/60 leading-relaxed">
                        CakePHP follows a convention-over-configuration approach. That means it comes with sensible defaults so developers spend less time on setup and more time building features. It works well for projects with standard CRUD (create, read, update, delete) operations.
                    </p>
                </div>
                <!-- Framework Laminas -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 group hover:border-primary/50 transition duration-500">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:bg-primary/20 transition">
                        <i class="ri-shield-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Zend Framework</h3>
                    <p class="text-sm text-white/60 leading-relaxed">
                        Zend Framework (now Laminas) is enterprise-grade PHP infrastructure. It's built for high-security, high-performance applications in regulated industries like finance and healthcare.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why PHP in 2026 Section -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <!-- Decorative Glows -->
        <div class="absolute -left-20 top-20 w-80 h-80 bg-primary/10 blur-[120px] rounded-full"></div>
        <div class="absolute -right-20 bottom-20 w-80 h-80 bg-primary/5 blur-[120px] rounded-full"></div>

        <div class="max-w-7xl mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center mb-20">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase font-semibold mb-6">
                    <i class="ri-shield-check-line"></i>
                    Future-Proof Tech
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight mb-8">
                    Why Is PHP Still One of the Best <br/>
                    Choices for Web Development in <span class="text-primary">2026?</span>
                </h2>
                <div class="space-y-6 text-white/70 text-lg leading-relaxed px-4">
                    <p>
                        PHP powers over 77 percent of all websites on the internet, including platforms like WordPress, Facebook, and Wikipedia. It offers fast development cycles, excellent database support, low hosting costs, and a global pool of experienced developers. For most web applications, PHP delivers everything you need without overcomplicating your tech stack.
                    </p>
                    <p class="text-white/50 text-base italic border-l-2 border-primary/30 pl-6 text-left max-w-3xl mx-auto">
                        "PHP has been updated consistently for over 30 years. PHP 8.x brought significant performance improvements, better error handling, and modern language features that close the gap with newer languages. It's not the PHP of 2005. It's a mature, actively maintained platform."
                    </p>
                </div>
            </div>

            <!-- 5 Key Points Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-32">
                <!-- Point 1 -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-global-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Powers Over 77 Percent of All Websites Online</h3>
                    <p class="text-sm text-white/50 leading-relaxed">
                        PHP runs on the majority of the web. That means your developers are easy to find, your hosting options are plentiful, and the library of tools available to your project is enormous. Maturity is an advantage in a tech stack.
                    </p>
                </div>
                <!-- Point 2 -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-speed-up-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Faster Development Cycles Than Most Backend Languages</h3>
                    <p class="text-sm text-white/50 leading-relaxed">
                        PHP frameworks like Laravel and Symfony come with built-in tools for the most common development tasks. Your team builds features, not infrastructure from scratch.
                    </p>
                </div>
                <!-- Point 3 -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-group-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Strong Community, Regular Updates, and Support</h3>
                    <p class="text-sm text-white/50 leading-relaxed">
                        PHP has one of the largest developer communities in the world. Security patches come out regularly, long-term support versions are maintained for years, and documentation is thorough.
                    </p>
                </div>
                <!-- Point 4 -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-database-2-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Works With Every Major Database and Cloud</h3>
                    <p class="text-sm text-white/50 leading-relaxed">
                        PHP connects natively to MySQL, PostgreSQL, MongoDB, and SQLite. It deploys cleanly on AWS, Azure, and Google Cloud without forcing major infrastructure changes.
                    </p>
                </div>
                <!-- Point 5 -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition-all duration-300 group">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-primary/10 border border-primary/20 mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-price-tag-3-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-white mb-3">Lower Development Cost Without Sacrificing Performance</h3>
                    <p class="text-sm text-white/50 leading-relaxed">
                        PHP developers are widely available in India and globally. And with modern PHP 8.x running significantly faster, you don't give up performance to get affordability.
                    </p>
                </div>
                <!-- Point 6 (Bonus: Why Choose PHP in 2026?) -->
                <div class="p-8 rounded-2xl border border-primary/20 bg-primary/5 hover:border-primary/60 transition-all duration-300 group relative overflow-hidden">
                    <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-primary/10 blur-2xl rounded-full group-hover:bg-primary/20 transition"></div>
                    <h3 class="text-xl font-semibold text-primary mb-3">Ready for the Next Decade?</h3>
                    <p class="text-sm text-white/70 leading-relaxed mb-6">
                        If you're building a standard web application or an eCommerce platform, PHP is usually the most practical and cost-effective choice.
                    </p>
                    <button @click="$dispatch('open-modal', { to: 'contact' })" class="text-primary font-medium flex items-center gap-2 hover:gap-3 transition-all">
                        Talk to an Expert <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </div>

            <!-- Comparison Section -->
            <div id="comparison" class="mt-20">
                <div class="text-center mb-16">
                    <h2 class="text-3xl sm:text-4xl font-semibold mb-6">PHP vs Node.js vs Python</h2>
                    <p class="text-white/60 max-w-2xl mx-auto">Choosing a backend language is a real decision with long-term consequences. Here's a straight comparison to help you think it through:</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-3xl overflow-hidden backdrop-blur-md shadow-[0_20px_50px_rgba(0,0,0,0.3)]">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm border-collapse min-w-[700px]">
                            <thead class="bg-white/[0.03]">
                                <tr>
                                    <th class="px-8 py-6 text-white/50 uppercase text-[10px] tracking-widest font-bold">Factor</th>
                                    <th class="px-8 py-6 text-primary text-base font-semibold border-x border-white/5">PHP</th>
                                    <th class="px-8 py-6 text-white/90 text-base font-semibold border-r border-white/5">Node.js</th>
                                    <th class="px-8 py-6 text-white/90 text-base font-semibold">Python</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">Best For</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5">Web apps, CMS, eCommerce, portals</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Real-time apps, APIs, microservices</td>
                                    <td class="px-8 py-5 text-white/60">AI, data science, scripting, APIs</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">Learning Curve</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5">Low to medium</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Medium</td>
                                    <td class="px-8 py-5 text-white/60">Low to medium</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">Performance</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5">High (PHP 8.x)</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Very high (async)</td>
                                    <td class="px-8 py-5 text-white/60">Medium</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">Dev Availability (India)</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5 text-primary">Very high</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">High</td>
                                    <td class="px-8 py-5 text-white/60">High</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">Hosting Cost</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5">Low</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Medium</td>
                                    <td class="px-8 py-5 text-white/60">Medium</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">eCommerce Support</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5 text-primary">Excellent</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Limited</td>
                                    <td class="px-8 py-5 text-white/60">Limited</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">CMS Ecosystem</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5 text-primary">Excellent (WordPress, Drupal)</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Minimal</td>
                                    <td class="px-8 py-5 text-white/60">Minimal</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">Enterprise Use</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5">Strong</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Growing</td>
                                    <td class="px-8 py-5 text-white/60">Strong</td>
                                </tr>
                                <tr class="hover:bg-white/[0.02] transition">
                                    <td class="px-8 py-5 font-medium text-white/80">Best Frameworks</td>
                                    <td class="px-8 py-5 text-white border-x border-white/5 bg-primary/5">Laravel, Symfony, Yii2</td>
                                    <td class="px-8 py-5 text-white/60 border-r border-white/5">Express, NestJS</td>
                                    <td class="px-8 py-5 text-white/60">Django, Flask</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-12 p-8 rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm">
                    <p class="text-lg text-white/80 leading-relaxed italic">
                        "PHP wins for web applications, eCommerce, content-heavy platforms, and B2B portals. Node.js is better when you need real-time features like live chat or notifications. Python is the right choice when your application involves machine learning or heavy data processing."
                    </p>
                    <p class="mt-4 text-white/60 leading-relaxed">
                        If you're building a standard web application or an eCommerce platform, PHP is usually the most practical and cost-effective choice. If your project needs real-time features alongside a web app, we can build a PHP backend with a separate Node.js layer for those specific parts.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Industry Solutions Section -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-3xl mb-16">
                <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Specializations</span>
                <h2 class="mt-6 text-3xl sm:text-4xl font-semibold leading-tight">
                    Custom PHP Development Solutions <br/>
                    <span class="text-primary">for Every Industry</span>
                </h2>
                <p class="mt-4 text-white/60">We have hands-on experience delivering projects across industries with high security and performance requirements.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <!-- Healthcare -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-14 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-hospital-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">Healthcare & Patient Management</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">We build HIPAA-aware patient booking systems, doctor portals, and electronic health record tools. Secure data handling, audit trails, and smooth patient flows are core to every healthcare project.</p>
                </div>

                <!-- Education -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-book-open-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">Education & eLearning</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">Course management, video delivery, quiz engines, progress tracking, and certificate generation — we craft engaging, secure learning platforms tailored to students and administrators.</p>
                </div>

                <!-- Real Estate -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-14 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-home-4-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">Real Estate & Property Portals</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">Property search platforms with advanced filters, map integration, and agent dashboards. We design for fast search, large listing catalogs, and excellent UX for buyers and agents.</p>
                </div>

                <!-- Retail / eCommerce -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-store-2-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">Retail & eCommerce</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">Custom eCommerce platforms with multi-warehouse inventory, complex pricing rules, and optimized checkout flows — built to scale and to convert.</p>
                </div>

                <!-- Finance -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-bank-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">Finance & Banking</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">Loan calculators, investment dashboards, and precise financial reporting systems. We implement strict access controls, data integrity checks, and full audit trails for regulated environments.</p>
                </div>

                <!-- Logistics -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-14 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-truck-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">Logistics & Fleet Management</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">Route planning, shipment tracking, and driver management systems that integrate GPS providers and real-time feeds to keep operations moving and information accurate.</p>
                </div>

                <!-- B2B Portals -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-14 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-team-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">B2B Portals & Vendor Management</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">Multi-user portals for suppliers, purchase orders, contracts, and invoices — with role-based access, approval workflows, and reporting to streamline B2B operations.</p>
                </div>

                <!-- Membership / Subscription -->
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition group">
                    <div class="flex items-center gap-3">
                        <div class="w-16 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20">
                            <i class="ri-vip-crown-line text-primary text-xl"></i>
                        </div>
                        <h3 class="font-medium">Membership & Subscription Platforms</h3>
                    </div>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">Tiered access, recurring billing, and member management for SaaS products, communities, and content platforms — built for retention and growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="relative bg-black text-white py-24 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Pricing Transparency</span>
                <h2 class="mt-6 text-3xl sm:text-4xl font-semibold">How Much Does <span class="text-primary">PHP Development Cost in India?</span></h2>
                <div class="mt-6 text-white/60 max-w-3xl mx-auto space-y-4">
                    <p>Custom PHP development in India typically costs between ₹50,000 and ₹4,00,000 or more, depending on the complexity of the application and the framework used. A simple web application or portal starts around ₹50,000.</p>
                    <p class="text-sm"><strong>What Drives the Cost Up or Down:</strong> The number of user roles, third-party system connections, custom design requirements, and data volume are main factors. Projects with clear, detailed requirements are always less expensive than projects where scope changes frequently.</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 items-start">
                <!-- Costs Table -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden backdrop-blur-sm">
                    <div class="p-6 border-b border-white/10 bg-white/5">
                        <h3 class="text-lg font-medium">Cost Range for Custom PHP Web Applications</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm whitespace-nowrap">
                            <thead class="bg-white/5 text-white/50 uppercase text-[10px] tracking-widest font-bold">
                                <tr>
                                    <th class="px-6 py-4">Project Type</th>
                                    <th class="px-6 py-4 text-primary">Estimated Cost (INR)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr>
                                    <td class="px-6 py-4">Simple portal or internal tool</td>
                                    <td class="px-6 py-4">₹50,000 to ₹1,00,000</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">Mid-size application (1-3 integrations)</td>
                                    <td class="px-6 py-4">₹1,00,000 to ₹2,50,000</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">Complex platform (5+ integrations)</td>
                                    <td class="px-6 py-4 font-bold">₹2,50,000 to ₹4,00,000+</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Framework Starting Costs -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden backdrop-blur-sm">
                    <div class="p-6 border-b border-white/10 bg-white/5">
                        <h3 class="text-lg font-medium">Cost Range for PHP Framework-Based Projects</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm whitespace-nowrap">
                            <thead class="bg-white/5 text-white/50 uppercase text-[10px] tracking-widest font-bold">
                                <tr>
                                    <th class="px-6 py-4">Framework</th>
                                    <th class="px-6 py-4 text-primary">Typical Starting Cost (INR)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                <tr>
                                    <td class="px-6 py-4">Laravel (Mid to Large)</td>
                                    <td class="px-6 py-4">₹80,000 to ₹3,00,000</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">CodeIgniter (Small to Mid)</td>
                                    <td class="px-6 py-4">₹40,000 to ₹1,50,000</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">Symfony (Enterprise)</td>
                                    <td class="px-6 py-4 font-bold">₹1,50,000 to ₹4,00,000+</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-8 p-6 lg:p-10 rounded-2xl border border-primary/20 bg-primary/5 backdrop-blur flex flex-col lg:flex-row items-center justify-between gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Monthly Maintenance and Support Plans</h3>
                    <p class="text-white/60 max-w-xl">Starting at ₹6,000 per month. Plans cover security patches, bug fixes, uptime monitoring, and minor code updates.</p>
                </div>
                <button @click="$dispatch('open-modal', { to: 'contact' })" class="px-8 py-4 bg-primary text-black font-semibold rounded-xl hover:opacity-90">Get Maintenance Plan</button>
            </div>
        </div>
    </section>

    <!-- Security Section -->
    <section class="relative bg-black text-white py-24 border-t border-white/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="bg-white/5 p-8 rounded-2xl border border-white/10 ring-1 ring-primary/20">
                        <h2 class="text-3xl font-semibold leading-tight">
                            PHP Security: How We Keep <br/>
                            <span class="text-primary">Your Application Safe</span>
                        </h2>
                        <p class="mt-6 text-white/60 leading-relaxed">
                            A poorly secured PHP application is a real risk. We don't skip basic security steps. We build every PHP application with the OWASP Top 10 checklist in mind.
                        </p>
                        
                        <div class="mt-10 grid gap-6">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20 shrink-0">
                                    <i class="ri-shield-user-line text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">SQL Injection & XSS Protection</h4>
                                    <p class="text-sm text-white/50">Preventing malicious code and script injections via data sanitization.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20 shrink-0">
                                    <i class="ri-lock-2-line text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Data Encryption & Secure Auth</h4>
                                    <p class="text-sm text-white/50">Modern hashing and encryption for sensitive data at rest and in transit.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 border border-primary/20 shrink-0">
                                    <i class="ri-scan-line text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Regular Audits & OWASP Compliance</h4>
                                    <p class="text-sm text-white/50">Formal security audits and vulnerability scanning before every launch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2 space-y-8">
                    <div>
                        <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Maintainable Code</span>
                        <h2 class="mt-6 text-3xl font-semibold">How We Write PHP Code <span class="text-primary">You Can Actually Maintain</span></h2>
                        <p class="mt-6 text-white/60 leading-relaxed">
                            We write code with the next developer in mind. Bad PHP code is why many businesses come to us. We fix previous agencies' mistakes by following international standards.
                        </p>
                    </div>

                    <div class="grid gap-6">
                        <div class="p-6 rounded-xl border border-white/5 bg-white/5">
                            <h4 class="font-medium flex items-center gap-2 mb-2">
                                <i class="ri-check-line text-primary"></i>
                                PSR Coding Guidelines
                            </h4>
                            <p class="text-white/50 text-xs">Following PHP-FIG standards means any professional PHP developer can pick up your code instantly.</p>
                        </div>
                        <div class="p-6 rounded-xl border border-white/5 bg-white/5">
                            <h4 class="font-medium flex items-center gap-2 mb-2">
                                <i class="ri-git-repository-line text-primary"></i>
                                Version Control & Documentation
                            </h4>
                            <p class="text-white/50 text-xs">Every project uses Git for tracking and comes with full technical documentation for clarity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hiring Models Section -->
    <section class="relative bg-black text-white py-24 border-t border-white/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Hiring Models</span>
                <h2 class="mt-6 text-3xl sm:text-4xl font-semibold">Hiring Models: <span class="text-primary">Choose How You Work with Our PHP Team</span></h2>
                <p class="mt-4 text-white/60">We offer three engagement models so you can pick what fits your project and budget.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <h3 class="text-xl font-semibold mb-4 text-primary">Fixed-Price Project Delivery</h3>
                    <p class="text-white/60 text-sm mb-4">You share your requirements; we scope the project and provide a fixed price and timeline. You know the cost before work starts — ideal for well-defined projects with clear deliverables.</p>
                    <ul class="text-xs text-white/50 space-y-2">
                        <li><i class="ri-check-line text-primary mr-1"></i> Clear scope & milestones</li>
                        <li><i class="ri-check-line text-primary mr-1"></i> Budget certainty</li>
                        <li><i class="ri-check-line text-primary mr-1"></i> Best for one-off builds</li>
                    </ul>
                </div>

                <div class="p-8 rounded-2xl border border-primary/20 bg-primary/5 ring-1 ring-primary/30">
                    <h3 class="text-xl font-semibold mb-4 text-primary">Dedicated PHP Developer Hire</h3>
                    <p class="text-white/60 text-sm mb-4">Hire one or more PHP developers from our team on a monthly retainer. They work full-time on your project, communicate directly with your team, and integrate with your tools and processes — perfect for ongoing product development.</p>
                    <ul class="text-xs text-white/50 space-y-2">
                        <li><i class="ri-check-line text-primary mr-1"></i> Full-time focus on your product</li>
                        <li><i class="ri-check-line text-primary mr-1"></i> Direct collaboration with your team</li>
                        <li><i class="ri-check-line text-primary mr-1"></i> Easy scaling up or down</li>
                    </ul>
                </div>

                <div class="p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <h3 class="text-xl font-semibold mb-4 text-primary">Staff Augmentation</h3>
                    <p class="text-white/60 text-sm mb-4">Plug our PHP experts into your existing team to fill skill gaps or speed delivery. Our developers follow your processes and report to your leads, behaving like internal hires but without hiring overhead.</p>
                    <ul class="text-xs text-white/50 space-y-2">
                        <li><i class="ri-check-line text-primary mr-1"></i> Rapid onboarding into your workflow</li>
                        <li><i class="ri-check-line text-primary mr-1"></i> Flexible, short- or long-term support</li>
                        <li><i class="ri-check-line text-primary mr-1"></i> Ideal for peak demand or specialized skills</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects Section -->
    <!-- Our PHP Development Process -->
    <section class="relative bg-black text-white py-24 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-3xl mb-12">
                <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Process</span>
                <h2 class="mt-6 text-3xl sm:text-4xl font-semibold leading-tight">Our PHP Development Process: <br/><span class="text-primary">From First Brief to Final Launch</span></h2>
                <p class="mt-4 text-white/60">We follow a consistent, transparent process so you always know what's happening and who to contact.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h4 class="font-semibold text-white flex items-center gap-3">
                        <i class="ri-question-line text-primary"></i>
                        Requirement Gathering & Technical Discovery
                    </h4>
                    <p class="mt-3 text-white/60 text-sm">We ask the right questions: who uses the app, what problem it solves, and what success looks like. Answers drive every technical decision.</p>
                </div>

                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h4 class="font-semibold text-white flex items-center gap-3">
                        <i class="ri-layout-grid-line text-primary"></i>
                        Architecture Planning & Technology Selection
                    </h4>
                    <p class="mt-3 text-white/60 text-sm">We design the full application architecture before coding — framework choice, DB design, API structure, and hosting to make development faster and cheaper.</p>
                </div>

                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h4 class="font-semibold text-white flex items-center gap-3">
                        <i class="ri-pencil-ruler-2-line text-primary"></i>
                        UI/UX Design & Prototyping
                    </h4>
                    <p class="mt-3 text-white/60 text-sm">We create clickable prototypes and user flows for review so you approve the UX before any code is written.</p>
                </div>

                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h4 class="font-semibold text-white flex items-center gap-3">
                        <i class="ri-code-s-slash-line text-primary"></i>
                        PHP Development & Code Review Cycles
                    </h4>
                    <p class="mt-3 text-white/60 text-sm">We build in sprints, delivering small working pieces regularly. Every commit goes through internal review before it reaches you.</p>
                </div>

                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h4 class="font-semibold text-white flex items-center gap-3">
                        <i class="ri-shield-check-line text-primary"></i>
                        Testing: Performance, Security, Cross-Browser
                    </h4>
                    <p class="mt-3 text-white/60 text-sm">We test for speed under load, security vulnerabilities, and consistent behavior across browsers and devices — no shortcuts, even on tight timelines.</p>
                </div>

                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h4 class="font-semibold text-white flex items-center gap-3">
                        <i class="ri-rocket-line text-primary"></i>
                        Deployment, Go-Live & Post-Launch Support
                    </h4>
                    <p class="mt-3 text-white/60 text-sm">We handle deployment, monitor the launch closely for 24–48 hours, and provide ongoing monitoring, fixes, and improvements as part of our support plans.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-black text-white py-24 border-t border-white/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-16">
                <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Case Studies</span>
                <h2 class="mt-6 text-3xl sm:text-4xl font-semibold leading-tight">
                    Recent PHP <span class="text-primary">Projects We've Delivered</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group relative bg-white/5 border border-white/10 rounded-2xl p-8 hover:border-primary/40 transition overflow-hidden">
                    <div class="absolute -right-2 top-0 w-24 h-24 bg-primary/5 blur-3xl rounded-full"></div>
                    <h3 class="text-lg font-semibold text-white">Custom B2B Vendor Portal for a Manufacturing Brand</h3>
                    <p class="text-white/50 text-xs mt-1 uppercase tracking-widest">Vendor Management</p>
                    <p class="mt-4 text-sm text-white/60 leading-relaxed">We built a vendor management portal for a manufacturing company that previously ran suppliers through spreadsheets and email. The portal handles purchase orders, supplier onboarding, document sharing, and invoice tracking — cutting procurement processing time by over 60%.</p>
                </div>
                <!-- Project 2 -->
                <div class="group relative bg-white/5 border border-white/10 rounded-2xl p-8 hover:border-primary/40 transition overflow-hidden">
                    <div class="absolute -right-2 top-0 w-24 h-24 bg-primary/5 blur-3xl rounded-full"></div>
                    <h3 class="text-lg font-semibold text-white">Multi-Vendor eCommerce Platform Built on Laravel</h3>
                    <p class="text-white/50 text-xs mt-1 uppercase tracking-widest">Laravel Marketplace</p>
                    <p class="mt-4 text-sm text-white/60 leading-relaxed">We built a Laravel marketplace where multiple sellers list products, manage inventory, and receive automated payouts. The platform supports thousands of products and dozens of vendor accounts while processing orders through a single, performant storefront.</p>
                </div>
                <!-- Project 3 -->
                <div class="group relative bg-white/5 border border-white/10 rounded-2xl p-8 hover:border-primary/40 transition overflow-hidden">
                    <div class="absolute -right-2 top-0 w-24 h-24 bg-primary/5 blur-3xl rounded-full"></div>
                    <h3 class="text-lg font-semibold text-white">Patient Booking and Records System for a Healthcare Provider</h3>
                    <p class="text-white/50 text-xs mt-1 uppercase tracking-widest">Healthcare</p>
                    <p class="mt-4 text-sm text-white/60 leading-relaxed">We built a patient management system for a multi-location clinic with online booking, centralized records access for doctors, and an admin billing dashboard. Automated reminders reduced patient no-shows by 40%.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase font-semibold">
                    <i class="ri-thumb-up-line"></i>
                    The Techonika Edge
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    Why Businesses in India Choose Techonika as <br/>
                    <span class="text-primary">Their PHP Development Company</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Working with Techonika is different in practice. We combine technical expertise with transparent project management.
                </p>
            </div>

            <div class="mt-20 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Point 1 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-user-star-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Senior PHP Developers, Not Junior Generalists</h3>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">
                        Every PHP project at Techonika is led by a developer with real framework experience. You're not paying senior rates for someone learning on your project.
                    </p>
                </div>
                <!-- Point 2 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-calendar-check-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">We Deliver on Time and Tell You Early If Anything Changes</h3>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">
                        We share weekly progress updates and flag potential delays before they become real ones. You'll never get a surprise on deadline day.
                    </p>
                </div>
                <!-- Point 3 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-user-voice-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">One Point of Contact Who Owns Your Project</h3>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">
                        One person manages your project from requirements to launch. They know your codebase, your goals, and your constraints. You don't repeat yourself to a new person every time.
                    </p>
                </div>
                <!-- Point 4 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition text-left">
                    <i class="ri-customer-service-2-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">We Stay on After Launch with Real Support Plans</h3>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">
                        Our post-launch support is active, not passive. We monitor your application, apply patches as they're released, and fix issues before they affect your users.
                    </p>
                </div>
                <!-- Point 5 -->
                <div class="group p-8 rounded-2xl border border-white/10 bg-white/5 hover:border-primary/40 transition">
                    <i class="ri-verified-badge-line text-primary text-3xl"></i>
                    <h3 class="mt-5 text-xl font-medium">Our Code Passes a QA Review Before You Ever See It</h3>
                    <p class="mt-3 text-white/60 text-sm leading-relaxed">
                        Every piece of work goes through an internal review process. Security checks, performance tests, and code quality reviews happen before delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden text-left">
        <div class="absolute left-1/2 top-0 -translate-x-1/2 w-[900px] h-[320px] bg-primary/20 blur-[240px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.4em] uppercase">
                    <i class="ri-git-branch-line"></i>
                    Our Process
                </span>
                <h2 class="mt-8 text-3xl sm:text-4xl font-semibold leading-tight">
                    How to Start Your <span class="text-primary">PHP Development Project with Techonika</span>
                </h2>
                <p class="mt-6 text-white/70 text-lg leading-relaxed">
                    Here's exactly what happens from the moment you reach out to the moment your application goes live.
                </p>
            </div>

            <div class="relative mt-20 sm:mt-28">
                <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/30 to-transparent"></div>
                <div class="space-y-12 sm:space-y-20">
                    <!-- Step 1 -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-edit-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest font-bold">01</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Requirement Gathering</h3>
                            <p class="mt-4 text-white/50 text-sm leading-relaxed">
                                We start by asking the right questions. What problem are you solving? What does success look like? The answers shape every technical decision.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>
                    <!-- Step 2 -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-ruler-2-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest font-bold">02</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Architecture Planning</h3>
                            <p class="mt-4 text-white/50 text-sm leading-relaxed">
                                Choosing the right framework, database design, and hosting setup. Good architecture makes everything else faster and cheaper.
                            </p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-pantone-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest font-bold">03</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">UI/UX & Prototyping</h3>
                            <p class="mt-4 text-white/50 text-sm leading-relaxed">
                                Design screens and clickable prototypes before development. You know exactly what you're getting before code is written.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>
                    <!-- Step 4 -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-code-s-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest font-bold">04</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">PHP Development</h3>
                            <p class="mt-4 text-white/50 text-sm leading-relaxed">
                                Building logic in sprints. Small, working pieces are delivered regularly for you to review and verify.
                            </p>
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-microscope-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest font-bold">05</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Testing & QA</h3>
                            <p class="mt-4 text-white/50 text-sm leading-relaxed">
                                Performance, security, and cross-browser testing. We don't skip this step, even on tight timelines.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>
                    <!-- Step 6 -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-rocket-2-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest font-bold">06</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Deployment</h3>
                            <p class="mt-4 text-white/50 text-sm leading-relaxed">
                                Handling the transition to your production environment. We monitor things closely for the first 48 hours.
                            </p>
                        </div>
                    </div>
                    <!-- Step 7 -->
                    <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-start">
                        <div class="lg:text-right">
                            <div class="inline-flex items-center gap-3">
                                <i class="ri-heart-pulse-line text-primary text-xl"></i>
                                <span class="text-primary text-sm tracking-widest font-bold">07</span>
                            </div>
                            <h3 class="mt-4 text-2xl font-medium">Monitoring & Support</h3>
                            <p class="mt-4 text-white/50 text-sm leading-relaxed">
                                Keeping an eye on error logs and uptime. If a new feature is needed, we pick it up as part of your support plan.
                            </p>
                        </div>
                        <div class="hidden lg:block"></div>
                    </div>
                </div>
            </div>
            
            <div class="mt-20 text-center">
                <p class="text-white/70 mb-8">Book a free consultation with our PHP team today and we'll get back to you within one business day.</p>
                <button 
                    @click="$dispatch('open-modal', { to: 'contact' })"
                    class="px-10 py-4 bg-primary text-black font-semibold rounded-xl hover:bg-primary/90 transition shadow-lg shadow-primary/20">
                    Book Free Consultation
                </button>
            </div>
        </div>
    </section>

    <!-- Tech Stack section -->
    <section class="relative bg-black text-white py-24 sm:py-32 border-t border-white/10 overflow-hidden">
        <div class="absolute -top-40 right-0 w-[500px] h-[500px] bg-primary/20 blur-[220px] rounded-full"></div>
        <div class="relative max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-primary text-xs tracking-[0.4em] uppercase font-semibold">Our Stack</span>
                <h2 class="text-3xl sm:text-4xl font-semibold leading-tight mt-6">
                    Our Tech Stack for <span class="text-primary">PHP Development Projects</span>
                </h2>
                <p class="mt-4 text-white/60 max-w-2xl mx-auto">We use tested, well-supported tools at every layer of your application.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                <!-- Stack 1 -->
                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-primary font-medium mb-4 flex items-center gap-2">
                        <i class="ri-window-line"></i> Frontend
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">React.js</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Vue.js</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Tailwind</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Alpine.js</span>
                    </div>
                </div>
                <!-- Stack 2 -->
                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-primary font-medium mb-4 flex items-center gap-2">
                        <i class="ri-server-line"></i> Backend
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">PHP 8.x</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Laravel</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Symfony</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Laminas</span>
                    </div>
                </div>
                <!-- Stack 3 -->
                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-primary font-medium mb-4 flex items-center gap-2">
                        <i class="ri-database-line"></i> Databases
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">MySQL</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">PostgreSQL</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">MongoDB</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Redis</span>
                    </div>
                </div>
                <!-- Stack 4 -->
                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-primary font-medium mb-4 flex items-center gap-2">
                        <i class="ri-cloud-line"></i> DevOps
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">AWS</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Docker</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">CI/CD</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Nginx</span>
                    </div>
                </div>
                <!-- Stack 5 -->
                <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
                    <h3 class="text-primary font-medium mb-4 flex items-center gap-2">
                        <i class="ri-bug-line"></i> Testing
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">PHPUnit</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Selenium</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Postman</span>
                        <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] text-white/70">Sentry</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="relative bg-black text-white py-24 border-t border-white/10 overflow-hidden text-left">
        <div class="relative max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 text-primary text-xs tracking-[0.45em] uppercase mb-4">
                    <i class="ri-question-answer-line"></i>
                    FAQs
                </span>
                <h2 class="text-3xl sm:text-4xl font-semibold leading-tight">
                    Frequently Asked Questions<br/><span class="text-primary">About PHP Development</span>
                </h2>
            </div>

            <div class="space-y-4" x-data="{ open: 1 }">
                <!-- FAQ 1 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 1 ? open = null : open = 1" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">What is custom PHP development and when do you need it?</h3>
                        <span class="text-primary text-xl" x-text="open === 1 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 1" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        Custom PHP development means building a web application from scratch to match your exact requirements, rather than using a pre-built platform. You need it when your business has workflows, rules, or user flows that no off-the-shelf product handles well. Examples include custom portals, marketplaces, booking systems, and industry-specific tools.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 2 ? open = null : open = 2" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">Which PHP framework is best for my project?</h3>
                        <span class="text-primary text-xl" x-text="open === 2 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 2" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        It depends on the size, complexity, and long-term needs of your project. Laravel is the best choice for most custom web applications because of its large ecosystem and developer community. Symfony works better for large enterprise systems with multiple teams. CodeIgniter suits smaller, simpler applications that need a lightweight setup. We recommend the right framework after understanding your specific requirements.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 3 ? open = null : open = 3" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">How long does it take to build a PHP web application?</h3>
                        <span class="text-primary text-xl" x-text="open === 3 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 3" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        A simple PHP web application or portal typically takes 4 to 8 weeks from discovery to launch. A mid-sized application with custom features and two to three integrations usually takes 10 to 16 weeks. A complex platform with multiple user roles, advanced logic, and five or more integrations can take 20 or more weeks.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 4 ? open = null : open = 4" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">Is PHP secure enough for enterprise-level applications?</h3>
                        <span class="text-primary text-xl" x-text="open === 4 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 4" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        Yes. PHP 8.x includes modern security features, and frameworks like Laravel and Symfony have built-in protection against common attacks including SQL injection and XSS. Security in PHP is about how the application is built, not the language itself. We follow OWASP guidelines and run security audits on every project.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 5 ? open = null : open = 5" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">Can you upgrade or fix our existing PHP application?</h3>
                        <span class="text-primary text-xl" x-text="open === 5 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 5" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        Yes. We take on PHP legacy projects regularly. Our process starts with a full code audit to understand what's there, what's broken, and what needs updating. We then fix critical issues first and work through a prioritized improvement plan. We also handle PHP version upgrades.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 6 ? open = null : open = 6" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">How is PHP different from other backend languages like Python or Node.js?</h3>
                        <span class="text-primary text-xl" x-text="open === 6 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 6" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        PHP is built specifically for web development and has the most mature ecosystem. Python is better suited to data science and machine learning. Node.js works well for real-time applications like live chat. For standard web apps, portals, and eCommerce, PHP is usually the most practical and cost-effective choice.
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 7 ? open = null : open = 7" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">Do you offer dedicated PHP developer hiring?</h3>
                        <span class="text-primary text-xl" x-text="open === 7 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 7" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        Yes. You can hire a dedicated PHP developer from our team on a monthly basis. They work full-time on your project, follow your processes, and communicate directly with your team. This option works well for businesses with an ongoing product roadmap.
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 8 ? open = null : open = 8" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">What PHP versions do you support and develop on?</h3>
                        <span class="text-primary text-xl" x-text="open === 8 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 8" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        We develop on and support PHP 8.0, 8.1, 8.2, and 8.3. These are the current active release and security-supported versions. We also help clients migrate from older versions (PHP 7.x or earlier) to a current supported version. Running an outdated PHP version is a security risk.
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="bg-white/5 border border-white/15 rounded-2xl backdrop-blur-xl">
                    <button @click="open === 9 ? open = null : open = 9" class="w-full flex justify-between items-center px-6 py-5 text-left transition hover:bg-white/5">
                        <h3 class="font-medium text-lg">How do I pick the right PHP development company in India?</h3>
                        <span class="text-primary text-xl" x-text="open === 9 ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === 9" x-collapse class="px-6 pb-5 text-white/80 leading-relaxed">
                        Look for a company that shows real project examples, check which PHP frameworks they work with, and ask how they handle post-launch support. A good PHP development company in India will give you direct answers to direct questions before you sign anything.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="relative bg-black text-white py-28 border-t border-white/10 overflow-hidden text-center">
        <!-- Glow background -->
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[500px] h-[260px] bg-primary/20 blur-[160px] rounded-full"></div>

        <div class="relative max-w-4xl mx-auto px-4">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
                Ready to Build Your <span class="text-primary">PHP Project?</span>
            </h2>

            <p class="mt-5 text-white/70 text-base sm:text-lg">
                Let’s discuss your idea and turn it into a secure, scalable, and high-performance PHP application. Book your free technical consultation today.
            </p>

            <div class="mt-10 flex justify-center gap-4 flex-wrap">
                <button 
                    @click="$dispatch('open-modal', { to: 'contact' })"
                    class="px-10 py-4 rounded-xl bg-primary text-black font-semibold
                           hover:bg-primary/90 transition shadow-lg shadow-primary/20">
                    Get Free Consultation
                </button>

                <a href="{{ route('portfolio') }}"
                   class="px-10 py-4 rounded-xl border border-white/20 text-white font-medium
                          hover:bg-white/5 transition">
                    View Our Work
                </a>
            </div>
        </div>
    </section>
</div>

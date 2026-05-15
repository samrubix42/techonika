@section('meta')
<title>Our Clients | Brands We've Worked With | Technonika</title>
<meta name="description" content="Meet the brands that trust Technonika. We've partnered with businesses across various industries to deliver high-impact digital solutions and growth.">
<meta name="keywords" content="Technonika clients, partner brands, client portfolio, business partners, trusted digital agency">
@endsection

<div>
    <!-- HERO SECTION -->
    <section class="relative bg-black text-white pt-24 pb-12 overflow-hidden text-center">
        <!-- Background glow -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-6xl mx-auto px-6">
            <!-- Badge -->
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full
                 bg-white/5 border border-white/10
                 text-primary text-sm uppercase tracking-widest mb-6">
                Our Trusted Partners
            </span>

            <!-- Main Heading -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-light leading-tight mb-6">
                Brands That
                <span class="font-semibold text-primary">Trust Us</span>
            </h1>

            <!-- Subheading -->
            <p class="text-white/80 max-w-2xl mx-auto text-base sm:text-lg leading-relaxed">
                We've had the privilege of working with some incredible businesses,
                from ambitious startups to established industry leaders.
            </p>
        </div>
    </section>

    <!-- CLIENTS GRID (ONLY IMAGES) -->
    <section class="bg-black py-10 sm:py-16">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 sm:gap-10 items-center justify-items-center">
                
                @forelse($clients as $client)
                    <div class="w-full flex items-center justify-center transition-all duration-500 hover:scale-110">
                        @if($client->client_img)
                            <img src="{{ Storage::url($client->client_img) }}" 
                                 alt="Client logo" 
                                 class="max-w-full max-h-16 md:max-h-20 object-contain transition-all duration-500">
                        @else
                            <span class="text-white/20 text-xs font-medium uppercase tracking-widest">Client</span>
                        @endif
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <p class="text-white/40 text-lg font-light">Our client list is growing. Stay tuned!</p>
                    </div>
                @endforelse

            </div>

            <!-- PAGINATION -->
            @if($clients->hasPages())
                <div class="mt-20">
                    {{ $clients->links('vendor.pagination.theme') }}
                </div>
            @endif

            <!-- CLEAN CTA -->
            <div class="mt-24 text-center">
                <h3 class="text-2xl text-white font-light mb-8">Ready to start your project?</h3>
                <button @click="$dispatch('open-modal', { to: 'contact' })"
                        class="inline-flex items-center gap-3 bg-primary text-black px-10 py-4 rounded-full font-bold text-base hover:bg-primary/90 hover:scale-105 transition-all duration-300 shadow-xl shadow-primary/20">
                    Get in Touch
                    <i class="ri-arrow-right-line"></i>
                </button>
            </div>

        </div>
    </section>
</div>

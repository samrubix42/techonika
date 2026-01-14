<div class="bg-black text-white">
    <footer class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-10">
            <!-- Brand -->
            <div class="lg:w-1/3">
                <a href="/" class="flex items-center gap-3">
                    <img src="{{ asset('footerlogo.png') }}" alt="TECHNONIKA" class="w-28 h-auto object-contain" />
                </a>
                <p class="mt-4 text-gray-300 max-w-sm">
                    We build powerful digital solutions that help businesses scale, automate and innovate — with clarity and impact.
                </p>
                <div class="mt-6 flex items-center gap-3">
                    <button @click="$dispatch('open-modal', { to: 'contact' })" class="inline-flex items-center gap-2 bg-[#f6b615] text-black px-4 py-2 rounded-lg font-semibold hover:brightness-110 transition">Book a Call</button>
                    <a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-white transition">Contact</a>
                </div>
            </div>
            <!-- Links -->
            <div class="flex-1 grid grid-cols-2 sm:grid-cols-3 gap-8 lg:gap-12">
                <div>
                    <h4 class="text-sm tracking-widest uppercase text-[#f6b615] mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About us</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-white transition">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-white transition">Blog</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm tracking-widest uppercase text-[#f6b615] mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('webdevelopment') }}" class="hover:text-white transition">Web Development</a></li>
                        <li><a href="{{ route('webdesigning') }}" class="hover:text-white transition">Web Designing</a></li>
                        <li><a href="{{ route('digital-marketing') }}" class="hover:text-white transition">Digital Marketing</a></li>
                        <li><a href="{{ route('graphicdesigning') }}" class="hover:text-white transition">Graphic Design</a></li>
                        <li><a href="{{ route('mobileappdevelopment') }}" class="hover:text-white transition">Mobile App</a></li>
                        <li><a href="{{ route('branding') }}" class="hover:text-white transition">Branding</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm tracking-widest uppercase text-[#f6b615] mb-4">Packages</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('seo-package') }}" class="hover:text-white transition">SEO Package</a></li>
                        <li><a href="{{ route('smo-package') }}" class="hover:text-white transition">SMO Package</a></li>
                        <li><a href="{{ route('startup-package') }}" class="hover:text-white transition">Startup Package</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact / Social -->
            <div class="lg:w-1/4">
                <h4 class="text-sm tracking-widest uppercase text-[#f6b615] mb-4">Get in touch</h4>
                <p class="text-gray-300 text-sm">Have a project or question? We’re ready to help.</p>
                <a href="mailto:info@techonika.com" class="mt-4 inline-block text-sm text-gray-400 hover:text-white transition">info@techonika.com</a>
                <p class="mt-2 text-sm text-gray-400">Call us: <a href="tel:+918810599816" class="text-amber-300 hover:underline">+91-8810599816</a></p>

                <div class="mt-6 flex items-center gap-4">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/techonika" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/techonika" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.9.2 2.4.4.6.2 1 .4 1.4.9.4.4.7.8.9 1.4.2.5.3 1.2.4 2.4.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.2 1.9-.4 2.4-.2.6-.5 1-1 1.4-.4.4-.8.7-1.4.9-.5.2-1.2.3-2.4.4-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.9-.2-2.4-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.5-.3-1.2-.4-2.4C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.2-1.9.4-2.4.2-.6.5-1 1-1.4.4-.4.8-.7 1.4-.9.5-.2 1.2-.3 2.4-.4C8.4 2.2 8.8 2.2 12 2.2zm0 3.1c-3 0-5.5 2.5-5.5 5.5s2.46 5.5 5.5 5.5 5.5-2.46 5.5-5.5S15 5.3 12 5.3zm0 9.1A3.6 3.6 0 1 1 12 7.1a3.6 3.6 0 0 1 0 7.3zM18.4 4.6a1.3 1.3 0 1 1 0 2.6 1.3 1.3 0 0 1 0-2.6z" />
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/company/techonika/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 8h4V24h-4V8zM8.5 8h3.7v2.2h.1c.5-.9 1.7-2 3.5-2 3.7 0 4.4 2.4 4.4 5.5V24h-4V15.6c0-2.0 0-4.6-2.8-4.6-2.8 0-3.2 2.2-3.2 4.4V24h-4V8z" />
                        </svg>
                    </a>

                    <!-- Pinterest -->
                    <a href="https://in.pinterest.com/techonika/" target="_blank" rel="noopener noreferrer" aria-label="Pinterest" class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" />
                        </svg>
                    </a>

                    <!-- Twitter/X -->
                    <a href="https://x.com/techonika" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)" class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-white/10 pt-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4 text-sm text-gray-400">
            <p>© {{ date('Y') }} <span class="font-semibold text-white">TECHNONIKA</span>. All rights reserved.</p>

            <div class="flex items-center gap-4">
                <a href="{{ route('privacy-policy') }}" class="hover:text-white transition">Privacy Policy</a>
                <span class="text-white/10">•</span>
                <a href="{{ route('terms-conditions') }}" class="hover:text-white transition">Terms & Conditions</a>
                <span class="text-white/10">•</span>
                <a href="{{ route('disclaimer') }}" class="hover:text-white transition">Disclaimer</a>
                <span class="text-white/10">•</span>
                <a href="{{ route('refund-policy') }}" class="hover:text-white transition">Refund Policy</a>
            </div>
        </div>
    </footer>
</div>
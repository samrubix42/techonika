<div
    x-data="{
        contactopen: false,
        confirmationopen: false
    }"
    @open-modal.window="contactopen = true"
    @close-modal.window="contactopen = false"
    @contact-submitted.window="
        contactopen = false;
        confirmationopen = true
    "
>

    <!-- ================= CONTACT FORM MODAL ================= -->
    <div x-show="contactopen" x-cloak x-transition.opacity
         class="fixed inset-0 z-50 flex items-center justify-center px-4">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"
             @click="contactopen = false"></div>

        <!-- Modal Card -->
        <div class="relative w-full max-w-2xl
                    rounded-3xl bg-white/5 backdrop-blur-xl
                    border border-white/15
                    shadow-2xl p-8 text-white">

            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold tracking-wide">
                    Let’s Talk
                </h2>

                <div class="flex items-center gap-3">
                    <!-- Call -->
                    <a href="tel:+918810599816"
                       class="w-9 h-9 flex items-center justify-center
                              rounded-full bg-white/10 hover:bg-white/20
                              text-primary transition"
                       title="Call us">
                        <i class="ri-phone-line text-lg"></i>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/918810599816?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
                       target="_blank"
                       class="w-9 h-9 flex items-center justify-center
                              rounded-full bg-green-500/20 hover:bg-green-500/30
                              text-green-400 transition"
                       title="Chat on WhatsApp">
                        <i class="ri-whatsapp-line text-lg"></i>
                    </a>

                    <!-- Close -->
                    <button @click="contactopen=false"
                            class="text-white/50 hover:text-white text-xl transition">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>

            <!-- Form -->
            <form wire:submit.prevent="submit" class="space-y-5">

                <!-- Grid -->
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <input type="text" wire:model.defer="name" placeholder="Your Name"
                               class="w-full px-4 py-2.5 text-sm rounded-xl
                                      bg-white/5 border border-white/15
                                      placeholder-white/40 text-white
                                      focus:outline-none focus:ring-2 focus:ring-primary/40">
                        @error('name') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <input type="text" wire:model.defer="phone" placeholder="Phone Number"
                               class="w-full px-4 py-2.5 text-sm rounded-xl
                                      bg-white/5 border border-white/15
                                      placeholder-white/40 text-white
                                      focus:outline-none focus:ring-2 focus:ring-primary/40">
                        @error('phone') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <input type="email" wire:model.defer="email" placeholder="Email Address"
                               class="w-full px-4 py-2.5 text-sm rounded-xl
                                      bg-white/5 border border-white/15
                                      placeholder-white/40 text-white
                                      focus:outline-none focus:ring-2 focus:ring-primary/40">
                        @error('email') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <input type="text" wire:model.defer="subject" placeholder="Subject"
                               class="w-full px-4 py-2.5 text-sm rounded-xl
                                      bg-white/5 border border-white/15
                                      placeholder-white/40 text-white
                                      focus:outline-none focus:ring-2 focus:ring-primary/40">
                        @error('subject') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Message -->
                <div>
                    <textarea wire:model.defer="message" placeholder="Tell us about your project..."
                              class="w-full h-28 px-4 py-3 text-sm rounded-xl resize-none
                                     bg-white/5 border border-white/15
                                     placeholder-white/40 text-white
                                     focus:outline-none focus:ring-2 focus:ring-primary/40"></textarea>
                    @error('message') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
                </div>

                <!-- Turnstile -->
                <div wire:ignore class="pt-2">
                    <div class="cf-turnstile"
                         data-sitekey="{{ config('services.turnstile.site_key') }}"
                         data-callback="turnstileCallback"></div>
                </div>
                @error('turnstileToken')
                    <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                @enderror

                <!-- Submit -->
                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        wire:loading.attr="disabled"
                        class="px-7 py-2 text-sm font-semibold rounded-full
                               bg-primary text-black
                               hover:scale-105 hover:shadow-xl
                               hover:shadow-primary/30 transition
                               flex items-center gap-2">

                        <span wire:loading.remove>Send Message</span>

                        <svg wire:loading class="animate-spin h-5 w-5 text-black"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                          <circle class="opacity-25" cx="12" cy="12" r="10"
                                  stroke="currentColor" stroke-width="4"></circle>
                          <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8h4l-3 3 3 3h-4z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Quick Contact Strip -->
                <div class="pt-4 mt-6 border-t border-white/10
                            flex items-center justify-between text-sm text-white/70">
                    <span>Prefer a quick call or chat?</span>

                    <div class="flex items-center gap-3">
                        <a href="tel:+918810599816"
                           class="flex items-center gap-2 px-4 py-2
                                  rounded-full bg-white/10 hover:bg-white/20 transition">
                            <i class="ri-phone-line"></i> Call
                        </a>

                        <a href="https://wa.me/918810599816?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
                           target="_blank"
                           class="flex items-center gap-2 px-4 py-2
                                  rounded-full bg-green-500/20 hover:bg-green-500/30
                                  text-green-400 transition">
                            <i class="ri-whatsapp-line"></i> WhatsApp
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!-- ================= CONFIRMATION MODAL ================= -->
    <div x-show="confirmationopen" x-cloak x-transition.opacity
         class="fixed inset-0 z-50 flex items-center justify-center px-4">

        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"
             @click="confirmationopen=false"></div>

        <div class="relative w-full max-w-md
                    bg-white/10 backdrop-blur-xl
                    border border-white/15
                    rounded-2xl p-6 text-white shadow-lg">

            <h2 class="text-xl font-semibold mb-4 text-center">Thank you!</h2>
            <p class="text-center text-white/70 mb-6">
                Your message has been sent successfully.
            </p>

            <div class="flex justify-center">
                <button @click="confirmationopen=false"
                        class="px-6 py-2 bg-primary text-black
                               rounded-full font-semibold hover:scale-105 transition">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Cloudflare Turnstile -->
<script>
    function turnstileCallback(token) {
        @this.set('turnstileToken', token);
    }
</script>

<div
    x-data="{ open:false }"
    x-on:open-package-modal.window="open=true"
    x-on:close-package-modal.window="open=false"
    x-show="open"
    x-transition.opacity.duration.200ms
    x-cloak
    class="fixed inset-0 z-[999] flex items-center justify-center px-2 sm:px-4 pb-4"
>
    <!-- Backdrop -->
    <div
        class="absolute inset-0 bg-black/90 backdrop-blur-sm"
        @click="$wire.close()"
    ></div>

    <!-- Modal -->
    <div
        x-transition.scale.duration.200ms
        class="relative w-full sm:max-w-sm
               rounded-2xl
               bg-white/5 backdrop-blur-xl
               border border-white/10
               shadow-[0_20px_80px_rgba(0,0,0,0.7)]"
    >

        <!-- Close Button -->
        <button
            @click="$wire.close()"
            class="absolute right-3 top-3 z-10
                   flex h-8 w-8 items-center justify-center
                   rounded-full bg-white/10 text-white/70
                   hover:bg-white/20 hover:text-white transition"
        >
            ✕
        </button>

        {{-- ================= FORM ================= --}}
        @if(!$submitted)

        <!-- Header -->
        <div class="px-6 pt-6 pb-4 text-center border-b border-white/10">
            <h2 class="text-lg font-semibold text-white">
                Request Package
            </h2>
            <p class="mt-1 text-xs text-white/60">
                We’ll contact you shortly
            </p>
        </div>

        <!-- Form -->
        <form wire:submit.prevent="submit" class="px-6 py-5 space-y-3">

            <div>
                <input
                    wire:model.defer="name"
                    placeholder="Full name"
                    class="w-full rounded-lg px-3 py-2.5 bg-white/10 text-white
                           placeholder-white/40 border border-white/10
                           focus:border-primary focus:ring-1 focus:ring-primary/40
                           text-sm transition">
                @error('name') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <input
                    wire:model.defer="email"
                    type="email"
                    placeholder="Email address"
                    class="w-full rounded-lg px-3 py-2.5 bg-white/10 text-white
                           placeholder-white/40 border border-white/10
                           focus:border-primary focus:ring-1 focus:ring-primary/40
                           text-sm transition">
                @error('email') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <input
                    wire:model.defer="phone"
                    placeholder="Phone number"
                    class="w-full rounded-lg px-3 py-2.5 bg-white/10 text-white
                           placeholder-white/40 border border-white/10
                           focus:border-primary focus:ring-1 focus:ring-primary/40
                           text-sm transition">
                @error('phone') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <input
                    wire:model="package"
                    readonly
                    class="w-full rounded-lg px-3 py-2.5 bg-white/5 text-primary
                           border border-primary/40 cursor-not-allowed text-sm">
                @error('package') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <textarea
                    wire:model.defer="message"
                    rows="3"
                    placeholder="Tell us about your requirement"
                    class="w-full rounded-lg px-3 py-2.5 bg-white/10 text-white
                           placeholder-white/40 border border-white/10
                           focus:border-primary focus:ring-1 focus:ring-primary/40
                           resize-none text-sm transition"></textarea>
                @error('message') <p class="mt-1 text-xs text-red-400">{{ $message }}</p> @enderror
            </div>

            <!-- ================= TURNSTILE ================= -->
            <div wire:ignore class="pt-2">
                <div class="cf-turnstile"
                     data-sitekey="{{ config('services.turnstile.site_key') }}"
                     data-callback="packageTurnstileCallback"></div>
            </div>
            @error('turnstileToken')
                <p class="text-xs text-red-400 text-center mt-1">
                    {{ $message }}
                </p>
            @enderror

            <!-- Actions -->
            <div class="flex gap-3 pt-3">
                <button
                    type="button"
                    @click="$wire.close()"
                    class="w-1/2 rounded-lg
                           border border-white/15
                           px-4 py-2.5 text-xs text-white/70
                           hover:bg-white/10 transition"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    class="w-1/2 rounded-lg bg-white
                           px-4 py-2.5 text-xs font-semibold
                           text-black hover:bg-gray-200
                           active:scale-95 transition
                           flex items-center justify-center gap-2"
                >
                    <span wire:loading.remove>Submit</span>
                    
                    <svg wire:loading class="animate-spin h-4 w-4 text-black"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10"
                              stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8h4l-3 3 3 3h-4z"></path>
                    </svg>
                </button>
            </div>
        </form>

        {{-- ================= SUCCESS ================= --}}
        @else

        <div class="px-6 py-12 text-center">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center
                        rounded-full bg-primary/20 text-primary text-2xl">
                ✓
            </div>

            <h3 class="text-lg font-semibold text-white">
                Request Sent
            </h3>

            <p class="mt-2 text-sm text-white/60">
                Our team will contact you shortly.
            </p>

            <button
                @click="$wire.close()"
                class="mt-6 w-full rounded-lg bg-white
                       px-4 py-2.5 text-sm font-medium
                       text-black hover:bg-gray-200 transition"
            >
                Close
            </button>
        </div>

        @endif
    </div>
</div>

<script>
    function packageTurnstileCallback(token) {
        @this.set('turnstileToken', token);
    }
</script>
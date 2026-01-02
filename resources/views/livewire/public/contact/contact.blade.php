<div class="max-w-3xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>

    @if (session()->has('success'))
        <div class="mb-4 rounded-md bg-green-50 border border-green-100 p-4">
            <p class="text-green-800">{{ session('success') }}</p>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6 bg-white p-6 rounded-lg shadow-sm">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" wire:model.defer="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Your full name">
                @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" wire:model.defer="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="you@example.com">
                @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Subject</label>
            <input type="text" wire:model.defer="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Subject (optional)">
            @error('subject') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Message</label>
            <textarea wire:model.defer="message" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="How can we help?"></textarea>
            @error('message') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" wire:loading.attr="disabled" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
            </button>

            <p class="text-sm text-gray-500">We reply within 1–2 business days.</p>
        </div>
    </form>
</div>

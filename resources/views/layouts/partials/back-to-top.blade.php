{{-- resources/views/layouts/partials/back-to-top-button.blade.php --}}
<div x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 300)" class="fixed bottom-6 right-6 z-50">
    <button
        x-show="scrolled"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-2"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        aria-label="Kembali ke atas"
        x-cloak
    >
        {{-- Icon Panah Atas (SVG) --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
    </button>
</div>
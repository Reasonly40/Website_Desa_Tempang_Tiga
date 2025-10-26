{{-- resources/views/layouts/partials/navbar.blade.php --}}
<header
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = (window.scrollY > 10)" {{-- Set scrolled true jika scroll > 10px --}}
    :class="{
        'bg-white/95 backdrop-blur-sm shadow-md border-b border-gray-100': scrolled,
        'bg-white shadow-sm border-b border-gray-200': !scrolled
    }"
    class="sticky top-0 z-50 transition-all duration-300 ease-in-out" {{-- Base classes + transition --}}
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        {{-- Logo dan Nama Desa --}}
        <div class="flex items-center space-x-3 flex-shrink-0">
            <img src="{{ asset('images/logo-minahasa.png') }}" alt="Logo Desa" class="w-8 h-8">
            <div>
                <h1 class="text-base font-semibold leading-tight">Desa Tempang Tiga</h1>
                <p class="text-xs text-gray-500">Kec. Langowan Utara, Kab. Minahasa</p>
            </div>
        </div>

        {{-- Tombol Hamburger (Mobile) --}}
        <div class="md:hidden">
            <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    {{-- Icon hamburger --}}
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    {{-- Icon close --}}
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Navigasi (Desktop) --}}
        <nav class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="#profil" class="hover:text-blue-600">Profil Desa</a>
            <a href="#apbdes" class="hover:text-blue-600">APBDes</a>
            <a href="#video" class="hover:text-blue-600">Dokumentasi</a>
            <a href="#berita" class="hover:text-blue-600">Berita Desa</a>
            <a href="#kontak" class="hover:text-blue-600">Kontak</a>
        </nav>
    </div>

    {{-- Menu Navigasi (Mobile) --}}
    {{-- Tambahkan transisi show/hide --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-1"
         class="md:hidden border-t border-gray-200"
         @click.away="open = false"
         x-cloak
    >
        <nav class="px-2 pt-2 pb-4 space-y-1 sm:px-3">
            <a href="#profil" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Profil Desa</a>
            <a href="#apbdes" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">APBDes</a>
            <a href="#video" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Dokumentasi</a>
            <a href="#berita" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Berita Desa</a>
            <a href="#kontak" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Kontak</a>
        </nav>
    </div>
</header>
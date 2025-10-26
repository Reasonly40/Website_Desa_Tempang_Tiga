<header x-data="{ open: false }" class="border-b border-gray-200 bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        {{-- Logo dan Nama Desa --}}
        <div class="flex items-center space-x-3 flex-shrink-0">
            <img src="{{ asset('images/logo-minahasa.png') }}" alt="Logo Desa" class="w-8 h-8">
            <div>
                <h1 class="text-base font-semibold leading-tight">Desa Tempang Tiga</h1>
                <p class="text-xs text-gray-500">Kec. Langowan Utara, Kab. Minahasa</p>
            </div>
        </div>

        {{-- Hamburger (Mobile) --}}
        <div class="md:hidden">
            <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Navigasi (Desktop) --}}
        <nav class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="#profil" class="hover:text-blue-600">Profil Desa</a>
            <a href="#apbdes" class="hover:text-blue-600">APBDes</a>
            <a href="#video" class="hover:text-blue-600">Video Desa</a>
            <a href="#berita" class="hover:text-blue-600">Berita Desa</a>
            <a href="#kontak" class="hover:text-blue-600">Kontak</a>
        </nav>
    </div>

    {{-- Menu Navigasi (Mobile) --}}
    <div x-show="open" class="md:hidden border-t border-gray-200">
        <nav class="px-2 pt-2 pb-4 space-y-1 sm:px-3">
            <a href="#profil" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Profil Desa</a>
            <a href="#apbdes" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">APBDes</a>
            <a href="#video" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Video Desa</a>
            <a href="#berita" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Berita Desa</a>
            <a href="#kontak" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Kontak</a>
        </nav>
    </div>3
</header>
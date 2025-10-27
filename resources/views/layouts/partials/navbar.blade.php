{{-- resources/views/layouts/partials/navbar.blade.php --}}
<header
    x-data="{
        mobileOpen: false,
        desktopOpen: false, // State baru untuk dropdown desktop
        scrolled: false
    }"
    @scroll.window="scrolled = (window.scrollY > 10)"
    :class="{
        'bg-white/95 backdrop-blur-sm shadow-md border-b border-gray-100': scrolled,
        'bg-white shadow-sm border-b border-gray-200': !scrolled
    }"
    class="sticky top-0 z-50 transition-all duration-300 ease-in-out"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        {{-- Logo dan Nama Desa --}}
        <a href="{{ url('/') }}" class="flex items-center space-x-3 flex-shrink-0 group">
            <img src="{{ asset('images/logo-minahasa.png') }}" alt="Logo Desa" class="w-8 h-8 transition-transform duration-300 group-hover:scale-110">
            <div>
                <h1 class="text-base font-semibold leading-tight text-gray-800 group-hover:text-blue-600 transition-colors">Desa Tempang Tiga</h1>
                <p class="text-xs text-gray-500">Kec. Langowan Utara, Kab. Minahasa</p>
            </div>
        </a>

        {{-- Tombol Hamburger (Mobile) --}}
        <div class="md:hidden">
            <button @click="mobileOpen = !mobileOpen" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': mobileOpen, 'inline-flex': !mobileOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    <path :class="{'hidden': !mobileOpen, 'inline-flex': mobileOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Navigasi (Desktop) --}}
        <nav class="hidden md:flex items-center space-x-8 text-sm font-medium"> {{-- Tambahkan items-center --}}

            {{-- Dropdown Profil Desa --}}
            <div class="relative" @click.away="desktopOpen = false"> {{-- @click.away untuk menutup saat klik di luar --}}
                <button @click="desktopOpen = !desktopOpen" class="flex items-center space-x-1 relative text-gray-600 hover:text-blue-600 transition-colors duration-200 focus:outline-none">
                    <span>Profil Desa</span>
                    {{-- Icon Panah --}}
                    <svg class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-180': desktopOpen}" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    {{-- Garis Bawah Hover (opsional, bisa digabung dengan button) --}}
                    <span class="absolute left-0 -bottom-1 h-0.5 w-0 bg-blue-600 transition-all duration-300 group-hover:w-full" :class="{'w-full': desktopOpen}"></span>
                </button>

                {{-- Konten Dropdown --}}
                <div x-show="desktopOpen"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-2"
                     class="absolute right-0 mt-3 w-max max-w-md bg-white rounded-md shadow-lg border border-gray-200 p-6 z-40" {{-- Styling container dropdown --}}
                     x-cloak
                     style="left: 50%; transform: translateX(-50%); min-width: 400px;" {{-- Posisi tengah dan lebar minimal --}}
                >
                    <div class="grid grid-cols-2 gap-x-8 gap-y-4"> {{-- Grid 2 kolom --}}
                        {{-- Kolom Kiri --}}
                        <div>
                            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Profil Umum</h3>
                            <a href="#" @click="desktopOpen = false" class="group flex items-start space-x-3 p-2 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md bg-blue-50 text-blue-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Visi & Misi</p>
                                    <p class="text-xs text-gray-500">Tujuan pembangunan desa.</p>
                                </div>
                            </a>
                            <a href="#" @click="desktopOpen = false" class="group flex items-start space-x-3 p-2 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md bg-blue-50 text-blue-600">
                                     <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Sejarah Desa</p>
                                    <p class="text-xs text-gray-500">Asal usul dan perkembangan desa.</p>
                                </div>
                            </a>
                            <a href="#" @click="desktopOpen = false" class="group flex items-start space-x-3 p-2 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md bg-blue-50 text-blue-600">
                                     <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Wilayah & Peta</p>
                                    <p class="text-xs text-gray-500">Batas wilayah dan lokasi.</p>
                                </div>
                            </a>
                        </div>
                        {{-- Kolom Kanan --}}
                        <div>
                             <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Pemerintahan</h3>
                             <a href="#" @click="desktopOpen = false" class="group flex items-start space-x-3 p-2 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md bg-green-50 text-green-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Struktur Organisasi</p>
                                    <p class="text-xs text-gray-500">Perangkat desa yang bertugas.</p>
                                </div>
                            </a>
                             <a href="#" @click="desktopOpen = false" class="group flex items-start space-x-3 p-2 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md bg-green-50 text-green-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Lembaga Desa</p>
                                    <p class="text-xs text-gray-500">BPD, LPM, dan lainnya.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Link Navigasi Lainnya --}}
            <a href="#apbdes" class="relative text-gray-600 hover:text-blue-600 transition-colors duration-200 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">APBDes</a>
            <a href="#video" class="relative text-gray-600 hover:text-blue-600 transition-colors duration-200 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">Dokumentasi</a>
            <a href="#berita" class="relative text-gray-600 hover:text-blue-600 transition-colors duration-200 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">Berita Desa</a>
            <a href="#kontak" class="relative text-gray-600 hover:text-blue-600 transition-colors duration-200 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-blue-600 after:transition-all after:duration-300 hover:after:w-full">Kontak</a>
        </nav>
    </div>

    {{-- Navbar Mobile --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-1"
         class="md:hidden border-t border-gray-200"
         @click.away="mobileOpen = false"
         x-cloak
    >
        {{-- Add some vertical padding to the main nav container --}}
        <nav class="px-2 py-3 space-y-1 sm:px-3">

            {{-- Dropdown Profil Desa Mobile --}}
            <div x-data="{ subMenuOpen: false }">
                {{-- Button Trigger --}}
                <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:bg-blue-50 focus:text-blue-600 transition duration-150 ease-in-out">
                    <span>Profil Desa</span>
                    {{-- Animated Arrow --}}
                    <svg class="h-5 w-5 transform transition-transform duration-200 ease-in-out" :class="{'rotate-180': subMenuOpen, 'rotate-0': !subMenuOpen}" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                {{-- Submenu Container with Animation --}}
                <div x-show="subMenuOpen"
                     x-transition:enter="transition ease-out duration-100 transform"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75 transform"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     {{-- Added pl-6 for more indent, mt-1, rounded-b-md, bg-gray-50/50 for slight distinction --}}
                     class="pl-6 mt-1 space-y-1 bg-gray-50/50 rounded-b-md"
                     x-cloak>
                    <a href="#" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-100 transition duration-150 ease-in-out">Visi & Misi</a>
                    <a href="#" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-100 transition duration-150 ease-in-out">Sejarah Desa</a>
                    <a href="#" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-100 transition duration-150 ease-in-out">Wilayah & Peta</a>
                    <a href="#" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-100 transition duration-150 ease-in-out">Struktur Organisasi</a>
                    <a href="#" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-100 transition duration-150 ease-in-out">Lembaga Desa</a>
                </div>
            </div>

            {{-- Other Main Links --}}
            <a href="#apbdes" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:bg-blue-50 focus:text-blue-600 transition duration-150 ease-in-out">APBDes</a>
            <a href="#video" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:bg-blue-50 focus:text-blue-600 transition duration-150 ease-in-out">Dokumentasi</a>
            <a href="#berita" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:bg-blue-50 focus:text-blue-600 transition duration-150 ease-in-out">Berita Desa</a>
            {{-- <a href="#kontak" @click="mobileOpen = false" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:bg-blue-50 focus:text-blue-600 transition duration-150 ease-in-out">Kontak</a> --}}
        </nav>
    </div>
</header>
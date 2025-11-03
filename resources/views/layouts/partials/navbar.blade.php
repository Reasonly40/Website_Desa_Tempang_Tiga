<header
    x-data="{
        mobileOpen: false,
        desktopOpen: false,
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
        <a href="{{ url('/') }}" class="flex items-center space-x-3 flex-shrink-0 group">
            <img src="{{ asset('images/logo-minahasa.png') }}" alt="Logo Desa" class="w-8 h-8 transition-transform duration-300 group-hover:scale-110">
            <div>
                <h1 class="text-base font-semibold leading-tight text-gray-800 group-hover:text-blue-600 transition-colors">Desa Tempang Tiga</h1>
                <p class="text-xs text-gray-500">Kec. Langowan Utara, Kab. Minahasa</p>
            </div>
        </a>

        <div class="md:hidden">
            <button @click="mobileOpen = !mobileOpen" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': mobileOpen, 'inline-flex': !mobileOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    <path :class="{'hidden': !mobileOpen, 'inline-flex': mobileOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Navigasi Desktop --}}
        <nav class="hidden md:flex items-center space-x-1 text-sm font-medium"> {{-- Mengurangi space-x-8 menjadi space-x-1 untuk style baru --}}
            
            <div class="relative" @click.away="desktopOpen = false">
                @php
                    $isProfilActive = request()->routeIs('visi-misi') || request()->routeIs('sejarah') || request()->routeIs('struktur-organisasi') || request()->routeIs('peta') || request()->routeIs('demografis');
                @endphp
                <button @click="desktopOpen = !desktopOpen"
                        class="flex items-center space-x-1 px-3 py-2 rounded-md transition-colors duration-200 focus:outline-none
                                {{ $isProfilActive ? 'text-blue-800 bg-blue-100 font-bold' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                    <span>Profil Desa</span>
                    <svg class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-180': desktopOpen}" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div x-show="desktopOpen"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-2"
                     class="absolute right-0 mt-3 w-max max-w-md bg-white rounded-md shadow-lg border border-gray-200 p-6 z-40"
                     x-cloak
                     style="left: 50%; transform: translateX(-50%); min-width: 400px;"
                >
                    <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4 px-2">Profil Desa</h3>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-1">
                        <div class="space-y-1">
                            <a href="{{ route('visi-misi') }}" @click="desktopOpen = false"
                               class="group flex items-start space-x-3 p-2 rounded-md transition ease-in-out duration-150
                                      {{ request()->routeIs('visi-misi') ? 'bg-blue-100 text-blue-800 font-semibold' : 'text-gray-900 hover:bg-blue-50' }}">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md {{ request()->routeIs('visi-misi') ? 'bg-blue-50 text-blue-600' : 'bg-blue-50 text-blue-600' }}">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" /></svg>
                                </div>
                                <div>
                                    <p class="text-sm {{ request()->routeIs('visi-misi') ? 'font-semibold' : 'font-medium' }}">Visi & Misi</p>
                                    <p class="text-xs text-gray-500">Tujuan pembangunan desa.</p>
                                </div>
                            </a>
                            <a href="{{ route('sejarah') }}" @click="desktopOpen = false"
                               class="group flex items-start space-x-3 p-2 rounded-md transition ease-in-out duration-150
                                      {{ request()->routeIs('sejarah') ? 'bg-blue-100 text-blue-800 font-semibold' : 'text-gray-900 hover:bg-blue-50' }}">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md {{ request()->routeIs('sejarah') ? 'bg-blue-50 text-blue-600' : 'bg-blue-50 text-blue-600' }}">
                                     <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm {{ request()->routeIs('sejarah') ? 'font-semibold' : 'font-medium' }}">Sejarah Desa</p>
                                    <p class="text-xs text-gray-500">Asal usul dan perkembangan.</p>
                                </div>
                            </a>
                            <a href="{{ route('peta') }}" @click="desktopOpen = false" 
                               class="group flex items-start space-x-3 p-2 rounded-md transition ease-in-out duration-150
                                      {{ request()->routeIs('peta') ? 'bg-blue-100 text-blue-800 font-semibold' : 'text-gray-900 hover:bg-blue-50' }}">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md {{ request()->routeIs('peta') ? 'bg-blue-50 text-blue-600' : 'bg-blue-50 text-blue-600' }}">
                                     <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm {{ request()->routeIs('peta') ? 'font-semibold' : 'font-medium' }}">Wilayah & Peta</p>
                                    <p class="text-xs text-gray-500">Batas wilayah dan lokasi.</p>
                                </div>
                            </a>
                        </div>
                        <div class="space-y-1">
                            <a href="{{ route('struktur-organisasi') }}" @click="desktopOpen = false"
                               class="group flex items-start space-x-3 p-2 rounded-md transition ease-in-out duration-150
                                      {{ request()->routeIs('struktur-organisasi') ? 'bg-blue-100 text-blue-800 font-semibold' : 'text-gray-900 hover:bg-blue-50' }}">
                                <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md {{ request()->routeIs('struktur-organisasi') ? 'bg-blue-50 text-blue-600' : 'bg-blue-50 text-blue-600' }}">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm {{ request()->routeIs('struktur-organisasi') ? 'font-semibold' : 'font-medium' }}">Struktur Organisasi</p>
                                    <p class="text-xs text-gray-500">Perangkat desa yang bertugas.</p>
                                </div>
                            </a>
                            <a href="{{ route('demografis') }}" @click="desktopOpen = false" 
                                class="group flex items-start space-x-3 p-2 rounded-md transition ease-in-out duration-150
                                      {{ request()->routeIs('demografis') ? 'bg-blue-100 text-blue-800 font-semibold' : 'text-gray-900 hover:bg-blue-50' }}">
                                 <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-md {{ request()->routeIs('demografis') ? 'bg-blue-50 text-blue-600' : 'bg-blue-50 text-blue-600' }}">
                                     <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm {{ request()->routeIs('demografis') ? 'font-semibold' : 'font-medium' }}">Demografis Kependudukan</p>
                                    <p class="text-xs text-gray-500">Data jumlah dan struktur penduduk.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('potensi') }}"
               class="px-3 py-2 rounded-md transition-colors duration-200
                      {{ request()->routeIs('potensi') ? 'text-blue-800 bg-blue-100 font-bold' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                Potensi Desa
            </a>

            <a href="{{ route('apbdes') }}"
               class="px-3 py-2 rounded-md transition-colors duration-200
                      {{ request()->routeIs('apbdes') ? 'text-blue-800 bg-blue-100 font-bold' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                APBDes
            </a>

            <a href="{{ route('produk') }}"
               class="px-3 py-2 rounded-md transition-colors duration-200
                      {{ request()->routeIs('produk') ? 'text-blue-800 bg-blue-100 font-bold' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                Produk
            </a>

            <a href="{{ route('kegiatan') }}"
               class="px-3 py-2 rounded-md transition-colors duration-200
                      {{ request()->routeIs('kegiatan') ? 'text-blue-800 bg-blue-100 font-bold' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                Kegiatan
            </a>

            <a href="{{ route('kontak') }}"
               class="px-3 py-2 rounded-md transition-colors duration-200
                      {{ request()->routeIs('kontak') ? 'text-blue-800 bg-blue-100 font-bold' : 'text-gray-600 hover:text-blue-600 hover:bg-blue-50' }}">
                Kontak
            </a>

        </nav>
    </div>

    {{-- Navigasi Mobile --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="md:hidden absolute top-full inset-x-0 p-2 transition transform origin-top shadow-lg"
         x-cloak
    >
        <div class="rounded-lg bg-white shadow-xl ring-1 ring-black ring-opacity-5 divide-y-2 divide-gray-100">
            <nav class="px-2 py-3 space-y-1 sm:px-3">
                
                @php
                    $isProfilActive = request()->routeIs('visi-misi') || request()->routeIs('sejarah') || request()->routeIs('struktur-organisasi') || request()->routeIs('peta') || request()->routeIs('demografis');
                @endphp
                <div x-data="{ subMenuOpen: {{ $isProfilActive ? 'true' : 'false' }} }">
                    <button @click="subMenuOpen = !subMenuOpen"
                            class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base transition duration-150 ease-in-out focus:outline-none
                                   {{ $isProfilActive ? 'text-blue-800 bg-blue-100 font-bold' : 'font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:bg-blue-50 focus:text-blue-600' }}">
                        <span>Profil Desa</span>
                        <svg class="h-5 w-5 transform transition-transform duration-200 ease-in-out" :class="{'rotate-180': subMenuOpen, 'rotate-0': !subMenuOpen}" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="subMenuOpen"
                         x-transition:enter="transition ease-out duration-100 transform"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75 transform"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="mt-1 space-y-1 pl-4"
                    >
                        <a href="{{ route('visi-misi') }}" @click="mobileOpen = false"
                           class="block px-3 py-2 rounded-md text-sm transition duration-150 ease-in-out
                                  {{ request()->routeIs('visi-misi') ? 'font-bold text-blue-800 bg-blue-200' : 'font-medium text-gray-600 hover:text-blue-700 hover:bg-blue-100' }}">
                            Visi & Misi
                        </a>
                        <a href="{{ route('sejarah') }}" @click="mobileOpen = false"
                           class="block px-3 py-2 rounded-md text-sm transition duration-150 ease-in-out
                                  {{ request()->routeIs('sejarah') ? 'font-bold text-blue-800 bg-blue-200' : 'font-medium text-gray-600 hover:text-blue-700 hover:bg-blue-100' }}">
                            Sejarah Desa
                        </a>
                        <a href="{{ route('peta') }}" @click="mobileOpen = false" 
                           class="block px-3 py-2 rounded-md text-sm transition duration-150 ease-in-out
                                  {{ request()->routeIs('peta') ? 'font-bold text-blue-800 bg-blue-200' : 'font-medium text-gray-600 hover:text-blue-700 hover:bg-blue-100' }}">
                           Wilayah & Peta
                        </a>
                        <a href="{{ route('struktur-organisasi') }}" @click="mobileOpen = false"
                           class="block px-3 py-2 rounded-md text-sm transition duration-150 ease-in-out
                                  {{ request()->routeIs('struktur-organisasi') ? 'font-bold text-blue-800 bg-blue-200' : 'font-medium text-gray-600 hover:text-blue-700 hover:bg-blue-100' }}">
                            Struktur Organisasi
                        </a>
                        <a href="{{ route('demografis') }}" @click="mobileOpen = false" 
                           class="block px-3 py-2 rounded-md text-sm transition duration-150 ease-in-out
                                  {{ request()->routeIs('demografis') ? 'font-bold text-blue-800 bg-blue-200' : 'font-medium text-gray-600 hover:text-blue-700 hover:bg-blue-100' }}">
                            Demografis Kependudukan
                        </a>
                    </div>
                </div>


                <a href="{{ route('potensi') }}" @click="mobileOpen = false" 
                   class="block px-3 py-2 rounded-md text-base transition duration-150 ease-in-out
                          {{ request()->routeIs('potensi') ? 'text-blue-800 bg-blue-100 font-bold' : 'font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50' }}">
                    Potensi Desa
                </a>

                <a href="{{ route('apbdes') }}" @click="mobileOpen = false" 
                   class="block px-3 py-2 rounded-md text-base transition duration-150 ease-in-out
                          {{ request()->routeIs('apbdes') ? 'text-blue-800 bg-blue-100 font-bold' : 'font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50' }}">
                    APBDes
                </a>
                
                <a href="{{ route('produk') }}" @click="mobileOpen = false" 
                   class="block px-3 py-2 rounded-md text-base transition duration-150 ease-in-out
                          {{ request()->routeIs('produk') ? 'text-blue-800 bg-blue-100 font-bold' : 'font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50' }}">
                    Produk
                </a>
                
                <a href="{{ route('kegiatan') }}" @click="mobileOpen = false" 
                   class="block px-3 py-2 rounded-md text-base transition duration-150 ease-in-out
                          {{ request()->routeIs('kegiatan') ? 'text-blue-800 bg-blue-100 font-bold' : 'font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50' }}">
                    Kegiatan
                </a>
                
                <a href="{{ route('kontak') }}" @click="mobileOpen = false" 
                   class="block px-3 py-2 rounded-md text-base transition duration-150 ease-in-out
                          {{ request()->routeIs('kontak') ? 'text-blue-800 bg-blue-100 font-bold' : 'font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50' }}">
                    Kontak
                </a>
                
            </nav>
        </div>
    </div>
</header>
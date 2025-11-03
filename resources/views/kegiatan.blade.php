<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi Kegiatan - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Font Awesome untuk ikon play --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 md:mb-20">
                <a href="{{ route('kegiatan') }}"
                   class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Kegiatan
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Kegiatan Desa Tempang Tiga
                </h2>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Simak video potensi dan galeri foto berbagai kegiatan yang telah dilaksanakan di desa kami.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden p-4 md:p-6 border border-gray-100">
                <div class="text-center md:text-left mb-5">
                    <h3 class="text-xl sm:text-2xl font-bold text-blue-900 flex items-center justify-center md:justify-start gap-3"
                        style="font-family: 'Merriweather', serif;">
                        <i class="fa-solid fa-circle-play text-blue-600"></i>
                        <span>Video Potensi Desa</span>
                    </h3>
                    <p class="text-gray-600 text-sm md:text-base mt-2">
                        Gambaran singkat mengenai keunggulan dan kehidupan di Desa Tempang Tiga.
                    </p>
                </div>

                {{-- Video Player (Diambil dari welcome.blade.php) --}}
                <div class="w-full rounded-2xl overflow-hidden shadow-lg aspect-video">
                    <iframe class="w-full h-full"
                            src="https://www.youtube.com/embed/dQw4w9WgXcQ" {{-- GANTI URL VIDEO ANDA --}}
                            title="Video Desa Tempang Tiga"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>


        {{-- 2. BAGIAN GALERI FOTO (DI BAWAH) --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20 md:mt-24">
            
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900" style="font-family: 'Merriweather', serif;">
                    Galeri Kegiatan Desa
                </h3>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Momen-momen yang terdokumentasi dari berbagai program dan aktivitas masyarakat.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                
                {{-- 
                    PERUBAHAN DIMULAI DI SINI
                    - Menambahkan x-data="{ open: false }" pada div utama kartu
                    - Mengubah <h4> menjadi bisa diklik
                    - Menambahkan x-show dan x-transition pada <p>
                --}}

                {{-- FOTO CONTOH 1 --}}
                <div x-data="{ open: false }" class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/kegiatan-1.jpg') }}"
                         alt="Pemasangan Batas Jaga"
                         class="w-full h-auto object-cover aspect-[4/3] transform transition-transform duration-500 group-hover:scale-105">
                    
                    {{-- Gradient Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                    
                    {{-- Konten Teks (di Bawah) --}}
                    <div class="absolute bottom-0 left-0 w-full p-4 md:p-5">
                        <h4 @click="open = !open" class="text-white text-sm sm:text-base font-semibold cursor-pointer flex justify-between items-center" style="font-family: 'Merriweather', serif;">
                            <span>Pemasangan Batas Jaga</span>
                            <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </h4>
                        
                        {{-- Deskripsi yang bisa dibuka-tutup --}}
                        <p x-show="open" 
                           x-transition:enter="transition ease-out duration-300"
                           x-transition:enter-start="opacity-0 -translate-y-2"
                           x-transition:enter-end="opacity-100 translate-y-0"
                           x-transition:leave="transition ease-in duration-200"
                           x-transition:leave-start="opacity-100 translate-y-0"
                           x-transition:leave-end="opacity-0 -translate-y-2"
                           class="text-white text-xs sm:text-sm opacity-90 mt-2">
                            Pemasangan patok dan papan penanda batas untuk menegaskan garis batas desa.
                        </p>
                    </div>
                </div>
                
                {{-- FOTO CONTOH 2 --}}
                <div x-data="{ open: false }" class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/kegiatan-2.jpg') }}" 
                         alt="Sosialisasi di SMP 9 SATAP Tempang"
                         class="w-full h-auto object-cover aspect-[4/3] transform transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-4 md:p-5">
                        <h4 @click="open = !open" class="text-white text-sm sm:text-base font-semibold cursor-pointer flex justify-between items-center" style="font-family: 'Merriweather', serif;">
                            <span>Sosialisasi di SMP 9 SATAP</span>
                            <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </h4>
                        <p x-show="open" 
                           x-transition:enter="transition ease-out duration-300"
                           x-transition:enter-start="opacity-0 -translate-y-2"
                           x-transition:enter-end="opacity-100 translate-y-0"
                           x-transition:leave="transition ease-in duration-200"
                           x-transition:leave-start="opacity-100 translate-y-0"
                           x-transition:leave-end="opacity-0 -translate-y-2"
                           class="text-white text-xs sm:text-sm opacity-90 mt-2">
                            Sosialisasi program kepada siswa SMP 9 SATAP Tempang untuk meningkatkan kesadaran terhadap kebersihan lingkungan dan pemilahan sampah.
                        </p>
                    </div>
                </div>

                {{-- FOTO CONTOH 3 --}}
                <div x-data="{ open: false }" class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/kegiatan-3.jpg') }}"
                         alt="Kunjungan Dosen UNSRAT"
                         class="w-full h-auto object-cover aspect-[4/3] transform transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-4 md:p-5">
                        <h4 @click="open = !open" class="text-white text-sm sm:text-base font-semibold cursor-pointer flex justify-between items-center" style="font-family: 'Merriweather', serif;">
                            <span>Kunjungan Dosen UNSRAT</span>
                            <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </h4>
                        <p x-show="open" 
                           x-transition:enter="transition ease-out duration-300"
                           x-transition:enter-start="opacity-0 -translate-y-2"
                           x-transition:enter-end="opacity-100 translate-y-0"
                           x-transition:leave="transition ease-in duration-200"
                           x-transition:leave-start="opacity-100 translate-y-0"
                           x-transition:leave-end="opacity-0 -translate-y-2"
                           class="text-white text-xs sm:text-sm opacity-90 mt-2">
                            Kunjungan dosen Universitas Sam Ratulangi (UNSRAT) dalam rangka koordinasi dengan mahasiswa KKT 144 UNSRAT di desa Tempang Tiga.
                        </p>
                    </div>
                </div>

                {{-- FOTO CONTOH 4 --}}
                <div x-data="{ open: false }" class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/kegiatan-4.jpg') }}"
                         alt="Kerja Bakti Pengecoran Jalan"
                         class="w-full h-auto object-cover aspect-[4/3] transform transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-4 md:p-5">
                        <h4 @click="open = !open" class="text-white text-sm sm:text-base font-semibold cursor-pointer flex justify-between items-center" style="font-family: 'Merriweather', serif;">
                            <span>Kerja Bakti</span>
                            <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </h4>
                        <p x-show="open" 
                           x-transition:enter="transition ease-out duration-300"
                           x-transition:enter-start="opacity-0 -translate-y-2"
                           x-transition:enter-end="opacity-100 translate-y-0"
                           x-transition:leave="transition ease-in duration-200"
                           x-transition:leave-start="opacity-100 translate-y-0"
                           x-transition:leave-end="opacity-0 -translate-y-2"
                           class="text-white text-xs sm:text-sm opacity-90 mt-2">
                            Kerja bakti pengecoran jalan untuk memperbaiki akses serta memperkuat infrastruktur desa.
                        </p>
                    </div>
                </div>

                {{-- FOTO CONTOH 5 --}}
                <div x-data="{ open: false }" class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/kegiatan-5.jpg') }}"
                         alt="Kunjungan dari Camat Langowan Utara"
                         class="w-full h-auto object-cover aspect-[4/3] transform transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-4 md:p-5">
                        <h4 @click="open = !open" class="text-white text-sm sm:text-base font-semibold cursor-pointer flex justify-between items-center" style="font-family: 'Merriweather', serif;">
                            <span>Kunjungan Camat</span>
                            <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </h4>
                        <p x-show="open" 
                           x-transition:enter="transition ease-out duration-300"
                           x-transition:enter-start="opacity-0 -translate-y-2"
                           x-transition:enter-end="opacity-100 translate-y-0"
                           x-transition:leave="transition ease-in duration-200"
                           x-transition:leave-start="opacity-100 translate-y-0"
                           x-transition:leave-end="opacity-0 -translate-y-2"
                           class="text-white text-xs sm:text-sm opacity-90 mt-2">
                            Kunjungan kerja Camat Langowan Utara untuk meninjau kegiatan KKT 144 UNSRAT di desa Tempang Tiga.
                        </p>
                    </div>
                </div>

                {{-- FOTO CONTOH 6 --}}
                <div x-data="{ open: false }" class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/kegiatan-6.jpg') }}"
                         alt="Edukasi Anak-anak"
                         class="w-full h-auto object-cover aspect-[4/3] transform transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-4 md:p-5">
                        <h4 @click="open = !open" class="text-white text-sm sm:text-base font-semibold cursor-pointer flex justify-between items-center" style="font-family: 'Merriweather', serif;">
                            <span>Edukasi Anak-anak</span>
                            <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </h4>
                        <p x-show="open" 
                           x-transition:enter="transition ease-out duration-300"
                           x-transition:enter-start="opacity-0 -translate-y-2"
                           x-transition:enter-end="opacity-100 translate-y-0"
                           x-transition:leave="transition ease-in duration-200"
                           x-transition:leave-start="opacity-100 translate-y-0"
                           x-transition:leave-end="opacity-0 -translate-y-2"
                           class="text-white text-xs sm:text-sm opacity-90 mt-2">
                            Edukasi interaktif di Balai Desa bagi anak-anak berupa kegiatan belajar membaca dan berhitung dasar, dan permainan edukatif.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
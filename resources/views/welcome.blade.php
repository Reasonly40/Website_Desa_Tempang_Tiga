<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-white text-gray-800">

    {{-- Navbar --}}
    <header class="border-b border-gray-200 bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-minahasa.png') }}" alt="Logo Desa" class="w-8 h-8">
                <div>
                    <h1 class="text-base font-semibold">Desa Tempang Tiga</h1>
                    <p class="text-xs text-gray-500">Kec. Langowan Utara, Kab. Minahasa</p>
                </div>
            </div>

            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#profil" class="hover:text-blue-600">Profil Desa</a>
                <a href="#administrasi" class="hover:text-blue-600">Administrasi</a>
                <a href="#perencanaan" class="hover:text-blue-600">Perencanaan & Anggaran</a>
                <a href="#kegiatan" class="hover:text-blue-600">Kegiatan Desa</a>
                <a href="#kontak" class="hover:text-blue-600">Kontak</a>
            </nav>
        </div>
    </header>

    {{-- Hero Section --}}
    <section class="relative text-center bg-white">
        <div class="py-20 px-4 sm:px-8 md:px-12 lg:px-16">
            <div class="ml-0 md:ml-4 lg:ml-8">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 text-left" style="font-family: 'Merriweather', serif;">
                    Selamat Datang di Desa Tempang Tiga!
                </h2>
                <p class="text-gray-600 text-lg text-left">
                    Kenali sejarah, potensi, dan inovasi desa kami menuju kesejahteraan bersama!
                </p>
            </div>
        </div>

        {{-- Gambar Hero --}}
        <div class="relative">
            <img 
                src="{{ asset('images/hero-bg.jpg') }}" 
                alt="Desa Tempang Tiga"
                class="w-full h-[70vh] object-cover border-t border-gray-200"
            >
        </div>

        {{-- Profil singkat --}}
        <section id="profil" class="relative w-full max-w-7xl mx-auto px-6 md:px-12 lg:px-16 py-20">
            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12">
                {{-- Judul --}}
                <h2 class="text-2xl md:text-3xl font-bold mb-10 text-gray-900 text-center md:text-left"
                    style="font-family: 'Merriweather', serif;">
                    PROFIL SINGKAT DESA
                </h2>

                {{-- Dua kolom --}}
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    {{-- Kiri --}}
                    <div>
                        <p class="text-gray-700 leading-relaxed mb-6 text-left">
                            Desa Tempang Tiga adalah salah satu desa di Kecamatan Langowan Utara yang dikenal dengan semangat gotong royong dan potensi pertanian yang melimpah.
                        </p>

                        {{-- Peta --}}
                        <div class="w-full h-64 bg-gray-100 rounded-lg overflow-hidden shadow-sm">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63764.64387871344!2d124.82726499999998!3d1.0029200000000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32870c0a02bde19d%3A0x93b6e568b37db73!2sTempang%20Tiga%2C%20Langowan%20Utara%2C%20Kabupaten%20Minahasa%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1690123456789!5m2!1sid!2sid" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                    {{-- Kanan --}}
                    <div class="flex flex-col justify-between space-y-6">
                        <div class="space-y-2 text-sm md:text-base pl-2 divide-y divide-gray-300">
                            <div class="flex justify-between py-2">
                                <p class="text-gray-600">Sebelah Utara</p>
                                <p class="font-semibold text-gray-800">Desa Tolok & Desa Totolan</p>
                            </div>
                            <div class="flex justify-between py-2">
                                <p class="text-gray-600">Sebelah Timur</p>
                                <p class="font-semibold text-gray-800">Desa Panasen</p>
                            </div>
                            <div class="flex justify-between py-2">
                                <p class="text-gray-600">Sebelah Selatan</p>
                                <p class="font-semibold text-gray-800">Desa Karumenga & Desa Sumarayar</p>
                            </div>
                            <div class="flex justify-between py-2">
                                <p class="text-gray-600">Sebelah Barat</p>
                                <p class="font-semibold text-gray-800">Desa Tempang</p>
                            </div>
                        </div>

                        <p class="text-gray-700 leading-relaxed pl-2 text-left">
                            Website ini hadir sebagai sarana informasi, transparansi, dan komunikasi antara pemerintah desa dengan masyarakat.
                        </p>

                        <div class="pl-2 text-right">
                            <a href="#"
                               class="inline-flex items-center px-5 py-2 border border-gray-700 text-gray-800 rounded-full hover:bg-gray-800 hover:text-white transition">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- Statistik Desa --}}
    <section id="statistik" class="bg-gray-50 py-24 mt-20">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
            <div class="grid md:grid-cols-5 items-center gap-8">
                
                {{-- Kiri: Judul dan Tombol --}}
                <div class="md:col-span-2 space-y-4">   
                    <h2 class="text-2xl font-bold text-gray-900" style="font-family: 'Merriweather', serif;">
                        Statistik Desa
                    </h2>
                    <a href="#"
                    class="inline-flex items-center px-5 py-2 border border-gray-700 text-gray-800 rounded-full hover:bg-gray-800 hover:text-white transition">
                        Selengkapnya
                    </a>
                </div>

                {{-- Kanan: Angka Statistik --}}
                <div class="md:col-span-3 grid grid-cols-3 gap-8 justify-items-end text-right">
                    <div>
                        <p class="text-5xl font-light text-gray-900">1000+</p>
                        <p class="text-gray-600 mt-2">Jumlah Penduduk</p>
                    </div>
                    <div>
                        <p class="text-5xl font-light text-gray-900">300+</p>
                        <p class="text-gray-600 mt-2">Jumlah Keluarga</p>
                    </div>
                    <div>
                        <p class="text-5xl font-light text-gray-900">4</p>
                        <p class="text-gray-600 mt-2">Jaga</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Berita Terbaru Desa --}}
    <section id="berita" class="bg-white py-40 -mt-8">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
            <!-- Judul -->
            <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-12" style="font-family: 'Merriweather', serif;">
                Berita Terbaru Desa
            </h2>

            <!-- Grid Berita -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Kartu 1 -->
                <div class="bg-gray-50 rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://placehold.co/600x400" alt="Berita 1" class="w-full h-56 object-cover">
                    <div class="p-5">
                        <h3 class="font-semibold text-gray-900 text-lg mb-2" style="font-family: 'Merriweather', serif;">Lorem Ipsum</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <!-- Kartu 2 -->
                <div class="bg-gray-50 rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://placehold.co/600x400" alt="Berita 2" class="w-full h-56 object-cover">
                    <div class="p-5">
                        <h3 class="font-semibold text-gray-900 text-lg mb-2" style="font-family: 'Merriweather', serif;">Lorem Ipsum</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <!-- Kartu 3 -->
                <div class="bg-gray-50 rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://placehold.co/600x400" alt="Berita 3" class="w-full h-56 object-cover">
                    <div class="p-5">
                        <h3 class="font-semibold text-gray-900 text-lg mb-2" style="font-family: 'Merriweather', serif;">Lorem Ipsum</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tombol Selengkapnya -->
            <div class="flex justify-center mt-12">
                <a href="#" 
                    class="inline-flex items-center px-6 py-2 border border-gray-700 text-gray-800 rounded-full hover:bg-gray-800 hover:text-white transition">
                    Selengkapnya
                </a>
            </div>
        </div>
    </section>

    <!-- Section Video Desa -->
    <section id="video" class="bg-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-blue-900 flex items-center space-x-2"
                        style="font-family: 'Merriweather', serif;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184A2.99 2.99 0 0 0 17.528 2H6.472a2.99 2.99 0 0 0-2.087 1.184A3.017 3.017 0 0 0 4 5.472v13.056c0 .69.236 1.328.668 1.816A2.99 2.99 0 0 0 6.472 22h11.056a2.99 2.99 0 0 0 2.087-1.184A3.017 3.017 0 0 0 20 18.528V5.472a3.017 3.017 0 0 0-.385-2.288zM10 16V8l6 4-6 4z"/>
                        </svg>
                        <span>Video Desa Tempang Tiga</span>
                    </h2>
                    <p class="text-gray-700 text-sm md:text-base mt-2">
                        Simak dokumentasi dan kegiatan menarik seputar Desa Tempang Tiga.
                    </p>
                </div>
            </div>

            <!-- Video Full Width -->
            <div class="w-full rounded-2xl overflow-hidden shadow-lg">
                <iframe class="w-full h-[400px] md:h-[550px]" 
                        src="https://www.youtube.com/embed/VIDEO_ID_UTAMA" 
                        title="Video Desa Tempang Tiga" 
                        frameborder="0" 
                        allowfullscreen></iframe>
            </div>

            <!-- Caption -->
            <p class="mt-6 text-center font-semibold text-gray-900 text-lg">
                Potensi Desa Tempang Tiga
            </p>
        </div>
    </section>

    <!-- Section APBDes -->
    <section id="apbdes" class="bg-white py-40 -mt-8">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-green-800 mb-3" style="font-family: 'Merriweather', serif;">APBDes 2025</h2>
            <p class="text-gray-600 text-lg">Realisasi dan Anggaran Dana Desa Tahun 2025</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Card -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-green-100">
                <h3 class="text-2xl font-semibold text-green-800 text-center mb-2">Pelaksanaan</h3>
                <p class="text-center text-gray-500 mb-8">Realisasi | Anggaran</p>

                <!-- Item -->
                <div class="space-y-6">
                <div>
                    <p class="font-medium text-gray-800">Pendapatan</p>
                    <p class="text-sm text-gray-500">Rp 3.568.388.700,00 | Rp 3.568.388.700,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Belanja</p>
                    <p class="text-sm text-gray-500">Rp 3.568.388.700,00 | Rp 3.568.388.700,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Pembiayaan</p>
                    <p class="text-sm text-gray-500">Rp 2.761.320,00 | Rp 2.761.320,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>
                </div>
            </div>

            <!-- Pendapatan -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-green-100">
                <h3 class="text-2xl font-semibold text-green-800 text-center mb-2">Pendapatan</h3>
                <p class="text-center text-gray-500 mb-8">Realisasi | Anggaran</p>

                <div class="space-y-6">
                <div>
                    <p class="font-medium text-gray-800">Dana Desa</p>
                    <p class="text-sm text-gray-500">Rp 1.029.810.000,00 | Rp 1.029.810.000,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Bagi Hasil Pajak & Retribusi</p>
                    <p class="text-sm text-gray-500">Rp 46.292.600,00 | Rp 46.292.600,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Alokasi Dana Desa</p>
                    <p class="text-sm text-gray-500">Rp 2.492.286.100,00 | Rp 2.492.286.100,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>
                </div>
            </div>

            <!-- Pembelanjaan -->
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-green-100">
                <h3 class="text-2xl font-semibold text-green-800 text-center mb-2">Pembelanjaan</h3>
                <p class="text-center text-gray-500 mb-8">Realisasi | Anggaran</p>

                <div class="space-y-6">
                <div>
                    <p class="font-medium text-gray-800">Penyelenggaraan Pemerintahan Desa</p>
                    <p class="text-sm text-gray-500">Rp 1.516.050.228,00 | Rp 1.516.050.228,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Pelaksanaan Pembangunan Desa</p>
                    <p class="text-sm text-gray-500">Rp 689.102.662,00 | Rp 689.102.662,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Pembinaan Kemasyarakatan</p>
                    <p class="text-sm text-gray-500">Rp 424.631.110,00 | Rp 424.631.110,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Pemberdayaan Masyarakat</p>
                    <p class="text-sm text-gray-500">Rp 776.974.700,00 | Rp 776.974.700,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>

                <div>
                    <p class="font-medium text-gray-800">Penanggulangan Bencana & Mendesak</p>
                    <p class="text-sm text-gray-500">Rp 161.630.000,00 | Rp 161.630.000,00</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mt-2 overflow-hidden">
                    <div class="h-3 bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-[fill_1.5s_ease-out_forwards]" style="width:100%"></div>
                    </div>
                    <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                </div>
                </div>
            </div>
            </div>
        </div>
     </section>

     <!-- Animasi progress -->
    <style>
        @keyframes fill {
            from { width: 0; }
            to { width: 100%; }
        }
    </style>









</body>
</html>

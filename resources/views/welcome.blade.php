<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> {{-- Tambahkan AlpineJS untuk toggle menu --}}
</head>
<body class="font-sans antialiased bg-white text-gray-800">

    @include('layouts.partials.navbar')

    {{-- Hero Section --}}
    <section class="relative text-center bg-white pt-10 md:pt-20"> {{-- Kurangi padding top di mobile --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left md:ml-4 lg:ml-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 md:mb-4 text-gray-900" style="font-family: 'Merriweather', serif;">
                    Selamat Datang di Desa Tempang Tiga!
                </h2>
                <p class="text-gray-600 text-base md:text-lg">
                    Kenali sejarah, potensi, dan inovasi desa kami menuju kesejahteraan bersama!
                </p>
            </div>
        </div>

        {{-- Gambar Hero --}}
        <div class="relative mt-6 md:mt-0">
            <img
                src="{{ asset('images/hero-bg.jpg') }}"
                alt="Desa Tempang Tiga"
                class="w-full h-[40vh] sm:h-[50vh] md:h-[70vh] object-cover border-t border-gray-200 mt-6 md:mt-10"
            >
        </div>

        {{-- Profil singkat --}}
        <section id="profil" class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
            <div class="bg-white rounded-xl shadow-lg p-6 md:p-12">
                {{-- Judul --}}
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-8 md:mb-10 text-gray-900 text-center"
                    style="font-family: 'Merriweather', serif;">
                    PROFIL SINGKAT DESA
                </h2>

                {{-- Dua kolom --}}
                <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-start">
                    {{-- Kiri --}}
                    <div>
                        <p class="text-gray-700 leading-relaxed mb-6 text-left text-sm sm:text-base"> 
                            Desa Tempang Tiga adalah salah satu desa di Kecamatan Langowan Utara yang dikenal dengan semangat gotong royong dan potensi pertanian yang melimpah.
                        </p>

                        {{-- Peta --}}
                        <div class="w-full h-48 sm:h-64 bg-gray-100 rounded-lg overflow-hidden shadow-sm"> {{-- Sesuaikan tinggi peta --}}
                            <iframe
                                src="https://maps.google.com/maps?q=Desa%20Tempang%20Tiga%2C%20Langowan%20Utara&t=&z=15&ie=UTF8&iwloc=&output=embed" {{-- Ganti URL Embed Map--}}
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
                        {{-- Batas Wilayah --}}
                        <div class="space-y-2 text-xs sm:text-sm md:text-base pl-2 divide-y divide-gray-300">
                            {{-- Item Utara --}}
                            <div class="flex justify-between items-center py-2">
                                <p class="text-gray-600">Sebelah Utara</p>
                                <p class="font-semibold text-gray-800 text-right">Desa Tolok & Desa Totolan</p>
                            </div>
                            {{-- Item Timur --}}
                            <div class="flex justify-between items-center py-2">
                                <p class="text-gray-600">Sebelah Timur</p>
                                <p class="font-semibold text-gray-800 text-right">Desa Panasen</p>
                            </div>
                            {{-- Item Selatan --}}
                            <div class="flex justify-between items-center py-2">
                                <p class="text-gray-600">Sebelah Selatan</p>
                                <p class="font-semibold text-gray-800 text-right">Desa Karumenga & Desa Sumarayar</p>
                            </div>
                            {{-- Item Barat --}}
                            <div class="flex justify-between items-center py-2">
                                <p class="text-gray-600">Sebelah Barat</p>
                                <p class="font-semibold text-gray-800 text-right">Desa Tempang</p>
                            </div>
                        </div>

                        <p class="text-gray-700 leading-relaxed pl-2 text-left text-sm sm:text-base"> 
                            Website ini hadir sebagai sarana informasi, transparansi, dan komunikasi antara pemerintah desa dengan masyarakat.
                        </p>

                        <div class="pl-2 text-center md:text-right"> 
                            <a href="#"
                               class="inline-flex items-center px-5 py-2 border border-gray-700 text-gray-800 rounded-full hover:bg-gray-800 hover:text-white transition text-sm"> {{-- Sesuaikan ukuran font tombol --}}
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- Statistik Desa --}}
    <section id="statistik" class="bg-gray-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-5 items-center gap-8 md:gap-12 text-center md:text-left"> {{-- Tambah gap md --}}

                {{-- Kiri: Judul dan Tombol --}}
                <div class="md:col-span-2 space-y-4">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900" style="font-family: 'Merriweather', serif;">
                        Statistik Desa
                    </h2>
                    <a href="#"
                       class="inline-flex items-center px-5 py-2 border border-gray-700 text-gray-800 rounded-full hover:bg-gray-800 hover:text-white transition text-sm">
                        Selengkapnya
                    </a>
                </div>

                {{-- Kanan: Angka Statistik --}}
                <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8 md:justify-items-end md:text-right">
                    {{-- Statistik Penduduk --}}
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center md:text-right md:bg-transparent md:p-0 md:shadow-none"> {{-- Styling card di mobile --}}
                        <p class="text-4xl md:text-5xl font-light text-gray-900">1000+</p>
                        <p class="text-gray-600 mt-1 md:mt-2 text-sm sm:text-base">Jumlah Penduduk</p>
                    </div>
                    {{-- Statistik Keluarga --}}
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center md:text-right md:bg-transparent md:p-0 md:shadow-none">
                        <p class="text-4xl md:text-5xl font-light text-gray-900">300+</p>
                        <p class="text-gray-600 mt-1 md:mt-2 text-sm sm:text-base">Jumlah Keluarga</p>
                    </div>
                    {{-- Statistik Jaga --}}
                    <div class="bg-white p-4 rounded-lg shadow-sm text-center md:text-right md:bg-transparent md:p-0 md:shadow-none">
                        <p class="text-4xl md:text-5xl font-light text-gray-900">4</p>
                        <p class="text-gray-600 mt-1 md:mt-2 text-sm sm:text-base">Jaga</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Berita Terbaru Desa --}}
    <section id="berita" class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-center text-gray-900 mb-10 md:mb-12" style="font-family: 'Merriweather', serif;">
                Berita Terbaru Desa
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8"> {{-- Tetap 1 kolom di mobile --}}
                <div class="bg-gray-50 rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://placehold.co/600x400" alt="Berita 1" class="w-full h-48 sm:h-56 object-cover"> {{-- Sesuaikan tinggi gambar --}}
                    <div class="p-4 sm:p-5">
                        <h3 class="font-semibold text-gray-900 text-base sm:text-lg mb-2" style="font-family: 'Merriweather', serif;">Lorem Ipsum</h3> 
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed"> 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://placehold.co/600x400" alt="Berita 2" class="w-full h-48 sm:h-56 object-cover"> {{-- Sesuaikan tinggi gambar --}}
                    <div class="p-4 sm:p-5">
                        <h3 class="font-semibold text-gray-900 text-base sm:text-lg mb-2" style="font-family: 'Merriweather', serif;">Lorem Ipsum</h3> 
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed"> 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="https://placehold.co/600x400" alt="Berita 3" class="w-full h-48 sm:h-56 object-cover"> {{-- Sesuaikan tinggi gambar --}}
                    <div class="p-4 sm:p-5">
                        <h3 class="font-semibold text-gray-900 text-base sm:text-lg mb-2" style="font-family: 'Merriweather', serif;">Lorem Ipsum</h3> 
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed"> 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-10 md:mt-12"> {{-- Sesuaikan margin top --}}
                <a href="#"
                    class="inline-flex items-center px-6 py-2 border border-gray-700 text-gray-800 rounded-full hover:bg-gray-800 hover:text-white transition text-sm"> {{-- Sesuaikan ukuran font tombol --}}
                    Selengkapnya
                </a>
            </div>
        </div>
    </section>

    <section id="video" class="bg-blue-50 py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center md:text-left mb-8">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-900 flex flex-col sm:flex-row items-center justify-center md:justify-start space-y-2 sm:space-y-0 sm:space-x-2"
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

            <div class="w-full rounded-2xl overflow-hidden shadow-lg aspect-video">
                <iframe class="w-full h-full"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        title="Video Desa Tempang Tiga"
                        frameborder="0"
                        allowfullscreen></iframe>
            </div>

            <p class="mt-4 md:mt-6 text-center font-semibold text-gray-900 text-base md:text-lg">
                Potensi Desa Tempang Tiga
            </p>
        </div>
    </section>

    <section id="apbdes" class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="text-center mb-10 md:mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-2 md:mb-3" style="font-family: 'Merriweather', serif;">APBDes 2025</h2> 
                <p class="text-gray-600 text-base md:text-lg">Realisasi dan Anggaran Dana Desa Tahun 2025</p> 
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                {{-- Card Pelaksanaan --}}
                <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 md:p-8 border border-green-100"> {{-- Kurangi shadow hover, sesuaikan padding --}}
                    <h3 class="text-xl md:text-2xl font-semibold text-green-800 text-center mb-1 md:mb-2">Pelaksanaan</h3> 
                    <p class="text-center text-gray-500 text-xs md:text-sm mb-6 md:mb-8">Realisasi | Anggaran</p> 
                    <div class="space-y-4 md:space-y-6">
                        <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Pendapatan</p> 
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 3.568.388.700 | Rp 3.568.388.700</p> {{-- Truncate jika perlu --}}
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden"> {{-- Sesuaikan tinggi progress bar --}}
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                        {{-- Item Belanja --}}
                        <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Belanja</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 3.568.388.700 | Rp 3.568.388.700</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                        {{-- Item Pembiayaan --}}
                        <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Pembiayaan</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 2.761.320 | Rp 2.761.320</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                    </div>
                </div>

                {{-- Card Pendapatan --}}
                <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 md:p-8 border border-green-100">
                    <h3 class="text-xl md:text-2xl font-semibold text-green-800 text-center mb-1 md:mb-2">Pendapatan</h3>
                    <p class="text-center text-gray-500 text-xs md:text-sm mb-6 md:mb-8">Realisasi | Anggaran</p>
                    <div class="space-y-4 md:space-y-6">
                         {{-- Item Dana Desa --}}
                         <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Dana Desa</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 1.029.810.000 | Rp 1.029.810.000</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                         {{-- Item Bagi Hasil --}}
                        <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Bagi Hasil Pajak & Retribusi</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 46.292.600 | Rp 46.292.600</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                         {{-- Item Alokasi Dana Desa --}}
                         <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Alokasi Dana Desa</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 2.492.286.100 | Rp 2.492.286.100</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                    </div>
                </div>

                {{-- Card Pembelanjaan --}}
                <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 md:p-8 border border-green-100">
                    <h3 class="text-xl md:text-2xl font-semibold text-green-800 text-center mb-1 md:mb-2">Pembelanjaan</h3>
                    <p class="text-center text-gray-500 text-xs md:text-sm mb-6 md:mb-8">Realisasi | Anggaran</p>
                    <div class="space-y-4 md:space-y-6">
                        {{-- Item Penyelenggaraan Pemerintahan --}}
                        <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Penyelenggaraan Pemerintahan Desa</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 1.516.050.228 | Rp 1.516.050.228</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                         {{-- Item Pelaksanaan Pembangunan --}}
                        <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Pelaksanaan Pembangunan Desa</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 689.102.662 | Rp 689.102.662</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                         {{-- Item Pembinaan Kemasyarakatan --}}
                         <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Pembinaan Kemasyarakatan</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 424.631.110 | Rp 424.631.110</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                         {{-- Item Pemberdayaan Masyarakat --}}
                         <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Pemberdayaan Masyarakat</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 776.974.700 | Rp 776.974.700</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                         {{-- Item Penanggulangan Bencana --}}
                         <div>
                            <p class="font-medium text-gray-800 text-sm md:text-base">Penanggulangan Bencana & Mendesak</p>
                            <p class="text-xs md:text-sm text-gray-500 truncate">Rp 161.630.000 | Rp 161.630.000</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 md:h-3 mt-1 md:mt-2 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:100%"></div>
                            </div>
                            <p class="text-xs font-semibold text-green-700 text-right mt-1">100%</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <a href="#" class="inline-flex items-center px-5 py-2 border border-green-700 text-green-800 rounded-full hover:bg-green-800 hover:text-white transition text-sm">
                    Selengkapnya
                </a>
            </div>

        </div>
    </section>

    @include('layouts.partials.footer')

</body>
</html>
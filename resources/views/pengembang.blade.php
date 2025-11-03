<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Pengembang - KKT 144 UNSRAT</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Font Awesome untuk ikon placeholder profil --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    {{-- Konten Utama --}}
    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Judul Halaman --}}
            <div class="text-center mb-16 md:mb-20">
                <a href="/" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Tim Pengembang
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Tim KKT 144 UNSRAT Posko Tempang Tiga
                </h2>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Profil tim mahasiswa KKT 144 Universitas Sam Ratulangi Posko Tempang Tiga yang berkontribusi dalam pengembangan website desa ini.
                </p>
            </div>

            {{-- Bagian Dosen --}}
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-10" style="font-family: 'Merriweather', serif;">
                    Dosen Pembimbing & Pengawas
                </h3>
                {{-- Grid untuk 2 Dosen (sejajar di desktop) --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    
                    {{-- Dosen 1: Pembimbing Lapangan --}}
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                            {{-- Ganti <img> di bawah ini dengan foto --}}
                            {{-- <img src="{{ asset('images/foto-dpl.jpg') }}" class="w-full h-full rounded-full object-cover"> --}}
                            <i class="fa-solid fa-user-tie text-6xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                            Nama Dosen 1
                        </h3>
                        <p class="text-sm text-blue-600 font-semibold uppercase tracking-wider mt-1">
                            Dosen Pembimbing Lapangan
                        </p>
                    </div>

                    {{-- Dosen 2: Pengawas Lapangan --}}
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                            {{-- Ganti <img> di bawah ini dengan foto --}}
                            {{-- <img src="{{ asset('images/foto-dpp.jpg') }}" class="w-full h-full rounded-full object-cover"> --}}
                            <i class="fa-solid fa-user-tie text-6xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                            Nama Dosen 2
                        </h3>
                        <p class="text-sm text-blue-600 font-semibold uppercase tracking-wider mt-1">
                            Dosen Pengawas Lapangan
                        </p>
                    </div>
                </div>
            </div>

            {{-- Bagian Mahasiswa --}}
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-10" style="font-family: 'Merriweather', serif;">
                    KSB Posko
                </h3>
                {{-- Grid untuk 3 BPH (Kordes, Sek, Ben - sejajar di desktop) --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    {{-- Mahasiswa 1: Kordes --}}
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                            <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                            Christian Roeroe
                        </h3>
                        <p class="text-sm text-green-600 font-semibold uppercase tracking-wider mt-1">
                            Koordinator Posko
                        </p>
                    </div>

                    {{-- Mahasiswa 2: Sekretaris --}}
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                            <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                            Veronica Waeo
                        </h3>
                        <p class="text-sm text-green-600 font-semibold uppercase tracking-wider mt-1">
                            Sekretaris Posko
                        </p>
                    </div>
                    
                    {{-- Mahasiswa 3: Bendahara --}}
                    <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                            <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                            Michelin Lengkong
                        </h3>
                        <p class="text-sm text-green-600 font-semibold uppercase tracking-wider mt-1">
                            Bendahara Posko
                        </p>
                    </div>
                </div>
            </div>
            
            {{-- Bagian Bidang-Bidang --}}
            <div class="space-y-16">

                {{-- Bidang Program --}}
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 text-center mb-10" style="font-family: 'Merriweather', serif;">
                        Bidang Program
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        {{-- Koor Bidang Program --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Fajar Ramadhan</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Koordinator Bidang Program</p>
                        </div>
                        {{-- Anggota 1 --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Eicjie Pojoh</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Anggota Bidang Program</p>
                        </div>
                        {{-- Anggota 2 --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Fanri Moses</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Anggota Bidang Program</p>
                        </div>
                    </div>
                </div>

                {{-- Bidang Pelaporan --}}
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 text-center mb-10" style="font-family: 'Merriweather', serif;">
                        Bidang Pelaporan
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        {{-- Koor Bidang Pelaporan --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Regina Lombogia</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Koordinator Bidang Pelaporan</p>
                        </div>
                        {{-- Anggota 1 --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Franklin Mona</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Anggota Bidang Pelaporan</p>
                        </div>
                        {{-- Anggota 2 --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Jovanka Lantang</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Anggota Bidang Pelaporan</p>
                        </div>
                    </div>
                </div>

                {{-- Bidang Humas --}}
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 text-center mb-10" style="font-family: 'Merriweather', serif;">
                        Bidang Humas
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        {{-- Koor Bidang Humas --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Claudia Balompapueng</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Koordinator Bidang Humas</p>
                        </div>
                        {{-- Anggota 1 --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Vivin Herlianti</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Anggota Bidang Humas</p>
                        </div>
                        {{-- Anggota 2 --}}
                        <div class="bg-white rounded-2xl shadow-lg p-6 text-center transition duration-300 hover:shadow-xl hover:scale-105">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gray-100 border-4 border-gray-200 flex items-center justify-center">
                                <i class="fa-solid fa-user text-6xl text-gray-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">Alfa Bambakanan</h3>
                            <p class="text-sm text-gray-500 font-semibold uppercase tracking-wider mt-1">Anggota Bidang Humas</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
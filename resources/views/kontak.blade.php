<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Font Awesome untuk ikon kontak --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    {{-- Konten Utama --}}
    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Judul Halaman --}}
            <div class="text-center mb-16 md:mb-20">
                <a href="#" {{-- Ganti dengan route yang relevan --}}
                   class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Informasi
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Hubungi Kami
                </h2>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Kami siap melayani dan mendengar masukan Anda. Temukan kami melalui informasi di bawah ini.
                </p>
            </div>

            {{-- 
                Kartu Kontak Utama (Split Screen)
                - 'lg:grid-cols-2' akan membaginya menjadi 2 kolom di layar besar
                - 'shadow-2xl' untuk efek "mengambang" yang kuat
            --}}
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 border border-gray-100">
                
                {{-- BAGIAN KIRI: Informasi Kontak --}}
                <div class="p-8 md:p-12">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-8" style="font-family: 'Merriweather', serif;">
                        Detail Kontak & Lokasi
                    </h3>

                    <div class="space-y-8">
                        
                        {{-- 1. Alamat --}}
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-map-location-dot text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">Alamat Kantor Desa</h4>
                                {{-- GANTI ALAMAT INI --}}
                                <p class="text-gray-600 mt-1">
                                    Jalan Raya Tempang Tiga, Jaga III,<br>
                                    Kec. Langowan Utara, Kab. Minahasa,<br>
                                    Sulawesi Utara, 95694
                                </p>
                            </div>
                        </div>

                        {{-- 2. Email --}}
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">Email Resmi</h4>
                                <p class="text-gray-600 mt-1">
                                    Kontak kami kapan saja melalui email.
                                </p>
                                {{-- GANTI EMAIL INI --}}
                                <a href="mailto:info@tempangtiga.desa.id" class="text-blue-600 font-medium hover:underline">
                                    info@tempangtiga.desa.id
                                </a>
                            </div>
                        </div>

                        {{-- 3. Nomor HP/Telepon --}}
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-phone text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">Telepon / WhatsApp</h4>
                                <p class="text-gray-600 mt-1">
                                    Hubungi kami di jam kerja.
                                </p>
                                {{-- GANTI NOMOR INI --}}
                                <a href="tel:+6281234567890" class="text-blue-600 font-medium hover:underline">
                                    +62 812-3456-7890
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- BAGIAN KANAN: Peta Google Maps --}}
                {{-- 
                    'h-96' untuk tinggi di mobile (saat bertumpuk)
                    'lg:h-full' untuk tinggi penuh di desktop
                --}}
                <div class="w-full h-96 lg:h-full">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.933866170668!2d124.77884485390708!3d1.181822437651036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32876a31c5555555%3A0x6b63d504f2d7a22c!2sTempang%20Tiga%2C%20Langowan%20Utara%2C%20Kabupaten%20Minahasa%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1730330653557!5m2!1sid!2sid" {{-- GANTI DENGAN URL EMBED GOOGLE MAPS KANTOR DESA ANDA --}}
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
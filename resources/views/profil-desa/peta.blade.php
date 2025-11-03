<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Wilayah - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-10 md:mb-16">
                <a href="{{ route('demografis') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Wilayah & Peta
                </a>
                <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mt-16 md:mt-20 mb-10 md:mb-16" style="font-family: 'Merriweather', serif;">
                    Peta Wilayah Desa
                </h2>
            </div>

            <div class="space-y-12 md:space-y-16">

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <h2 class="text-xl font-semibold text-gray-800 p-6 pb-0" style="font-family: 'Merriweather', serif;">
                        Lokasi Desa
                    </h2>
                    <p class="text-sm text-gray-600 px-6 pt-2">
                        Peta interaktif ini menunjukkan lokasi geografis Desa Tempang Tiga secara detail.
                    </p>
                    <p class="text-sm text-gray-600 px-6 pt-2">
                        Anda dapat menggunakan fitur zoom (perbesar/perkecil) dan geser (pan) untuk melihat batas wilayah dan area sekitar desa dengan lebih jelas.
                    </p>
                    <div class="w-full aspect-video border-t border-gray-200 mt-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.933866170668!2d124.77884485390708!3d1.181822437651036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32876a31c5555555%3A0x6b63d504f2d7a22c!2sTempang%20Tiga%2C%20Langowan%20Utara%2C%20Kabupaten%20Minahasa%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1730330653557!5m2!1sid!2sid" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <h2 class="text-xl font-semibold text-gray-800 p-6 pb-0" style="font-family: 'Merriweather', serif;">
                        Peta Administrasi Desa
                    </h2>
                    <p class="text-sm text-gray-600 px-6 pt-2">Peta statis wilayah administrasi desa.</p>
                    
                    <div class="p-6">
                        <img src="{{ asset('images/peta-administrasi.jpg') }}" 
                             alt="Peta Administrasi Desa Tempang Tiga" 
                             class="w-full h-auto rounded-md border border-gray-200 object-contain">
                    </div>
                </div>

            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
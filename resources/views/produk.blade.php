<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Unggulan - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16 md:mb-20">
                <a href="#"
                   class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Ekonomi & UMKM
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Produk Unggulan Desa
                </h2>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Jelajahi dan temukan hasil karya dan produk terbaik dari masyarakat Desa Tempang Tiga.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col transition duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/potensi-sapi.jpeg') }}" 
                         alt="Daging Sapi Segar" 
                         class="w-full h-56 object-cover">
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3" style="font-family: 'Merriweather', serif;">
                            Daging Sapi
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                            Daging sapi segar berkualitas premium dari ternak lokal Desa Tempang Tiga. Diproses secara higienis.
                        </p>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk Daging Sapi Segar..."
                           target="_blank" 
                           class="inline-flex items-center justify-center w-full px-5 py-3 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                            Hubungi Penjual
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col transition duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/potensi-padi.jpg') }}" 
                         alt="Beras Lokal Berkualitas" 
                         class="w-full h-56 object-cover">
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3" style="font-family: 'Merriweather', serif;">
                            Beras
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                            Beras pulen hasil panen dari sawah irigasi desa. Tanpa pemutih dan pengawet, alami dan sehat.
                        </p>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk Beras Lokal..."
                           target="_blank" 
                           class="inline-flex items-center justify-center w-full px-5 py-3 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                            Hubungi Penjual
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col transition duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/potensi-ubi.jpg') }}" 
                         alt="Keripik Ubi (Singkong)" 
                         class="w-full h-56 object-cover">
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3" style="font-family: 'Merriweather', serif;">
                            Keripik Ubi
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                            Camilan renyah keripik singkong asli buatan UMKM desa. Tersedia rasa original, balado, dan keju.
                        </p>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk Keripik Ubi..."
                           target="_blank" 
                           class="inline-flex items-center justify-center w-full px-5 py-3 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                            Hubungi Penjual
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col transition duration-300 hover:shadow-xl">
                    <img src="{{ asset('images/potensi-tomat.jpeg') }}" 
                         alt="Tomat Segar Petik" 
                         class="w-full h-56 object-cover">
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3" style="font-family: 'Merriweather', serif;">
                            Tomat Segar
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                            Tomat segar hasil hortikultura desa. Dipetik langsung saat matang sempurna, cocok untuk sambal atau jus.
                        </p>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk Tomat Segar..."
                           target="_blank" 
                           class="inline-flex items-center justify-center w-full px-5 py-3 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                            Hubungi Penjual
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
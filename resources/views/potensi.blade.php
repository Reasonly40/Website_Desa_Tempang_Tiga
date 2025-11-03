<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Desa - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16 md:mb-20">
                <a href="{{ route('potensi') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Potensi Desa
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Potensi Desa Tempang Tiga
                </h2>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Desa Tempang Tiga diberkahi dengan sumber daya alam yang melimpah. Berikut adalah beberapa potensi utama yang menjadi tulang punggung perekonomian dan ketahanan pangan desa.
                </p>
            </div>

            <div class="flex flex-col gap-16 md:gap-24">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">
                    <div class="w-full">
                        <img src="{{ asset('images/potensi-sapi.jpeg') }}" 
                             alt="Peternakan Sapi di Desa Tempang Tiga" 
                             class="w-full h-auto object-cover aspect-[4/3] rounded-2xl shadow-lg border border-gray-100">
                    </div>
                    <div>
                        <span class="text-sm font-semibold text-blue-600 uppercase tracking-wider">Peternakan</span>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2" style="font-family: 'Merriweather', serif;">
                            Peternakan Sapi
                        </h3>
                        <p class="text-base text-gray-600 mt-4 leading-relaxed">
                            Sektor peternakan, khususnya sapi potong, merupakan salah satu pilar utama ekonomi desa. Didukung oleh ketersediaan lahan pakan ternak yang hijau dan melimpah, peternak lokal mampu menghasilkan sapi dengan kualitas daging premium. Program kemitraan dan penyuluhan rutin memastikan kesehatan ternak tetap terjaga.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">
                    <div class="md:order-1">
                        <span class="text-sm font-semibold text-green-600 uppercase tracking-wider">Pertanian</span>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2" style="font-family: 'Merriweather', serif;">
                            Pertanian Padi
                        </h3>
                        <p class="text-base text-gray-600 mt-4 leading-relaxed">
                            Sebagai daerah agraris, padi adalah komoditas vital bagi Desa Tempang Tiga. Lahan sawah yang terbentang luas didukung oleh sistem irigasi yang terkelola dengan baik, memungkinkan petani untuk panen beberapa kali dalam setahun. Beras dari Tempang Tiga dikenal berkualitas baik dan menjadi pemasok utama untuk kebutuhan lokal.
                        </p>
                    </div>

                    <div class="md:order-2 w-full">
                        <img src="{{ asset('images/potensi-padi.jpg') }}" 
                             alt="Sawah Padi di Desa Tempang Tiga" 
                             class="w-full h-auto object-cover aspect-[4/3] rounded-2xl shadow-lg border border-gray-100">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">
                    <div class="w-full">
                        <img src="{{ asset('images/potensi-ubi.jpg') }}" 
                             alt="Tanaman Ubi Kayu (Singkong) di Desa Tempang Tiga" 
                             class="w-full h-auto object-cover aspect-[4/3] rounded-2xl shadow-lg border border-gray-100">
                    </div>
                    
                    <div>
                        <span class="text-sm font-semibold text-yellow-700 uppercase tracking-wider">Palawija</span>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2" style="font-family: 'Merriweather', serif;">
                            Ubi Kayu (Singkong)
                        </h3>
                        <p class="text-base text-gray-600 mt-4 leading-relaxed">
                            Ubi kayu, atau singkong, tumbuh subur di lahan tegalan desa. Tanaman ini memiliki nilai ekonomi tinggi karena dapat diolah menjadi berbagai produk turunan, seperti keripik, tape, dan tepung tapioka. Ketahanannya terhadap cuaca menjadikannya tanaman andalan saat musim kemarau.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">
                    <div class="md:order-1">
                        <span class="text-sm font-semibold text-yellow-500 uppercase tracking-wider">Palawija</span>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2" style="font-family: 'Merriweather', serif;">
                            Jagung
                        </h3>
                        <p class="text-base text-gray-600 mt-4 leading-relaxed">
                            Jagung merupakan komoditas palawija penting selain ubi. Selain untuk konsumsi manusia, jagung juga menjadi komponen utama pakan ternak, mendukung sektor peternakan sapi di desa. Pola tumpang sari antara jagung dan tanaman lain sering diterapkan petani untuk memaksimalkan hasil lahan.
                        </p>
                    </div>

                    <div class="md:order-2 w-full">
                        <img src="{{ asset('images/potensi-jagung.jpg') }}" 
                             alt="Kebun Jagung di Desa Tempang Tiga" 
                             class="w-full h-auto object-cover aspect-[4/3] rounded-2xl shadow-lg border border-gray-100">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-center">
                    <div class="w-full">
                        <img src="{{ asset('images/potensi-tomat.jpeg') }}" 
                             alt="Tanaman Tomat (Hortikultura) di Desa Tempang Tiga" 
                             class="w-full h-auto object-cover aspect-[4/3] rounded-2xl shadow-lg border border-gray-100">
                    </div>
                    
                    <div>
                        <span class="text-sm font-semibold text-red-600 uppercase tracking-wider">Hortikultura</span>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2" style="font-family: 'Merriweather', serif;">
                            Tomat & Sayuran
                        </h3>
                        <p class="text-base text-gray-600 mt-4 leading-relaxed">
                            Di sektor hortikultura, tomat menjadi salah satu unggulan. Iklim yang mendukung memungkinkan petani menanam tomat berkualitas dengan hasil yang baik. Selain tomat, desa ini juga menghasilkan berbagai sayur-mayur lain yang dipasok ke pasar-pasar terdekat, mendukung ketahanan pangan regional.
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
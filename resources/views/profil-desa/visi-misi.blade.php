<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class = "text-center">
                <a href="{{ route('visi-misi') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Visi & Misi Desa Tempang Tiga
                </a>
            </div>

            <div class="mt-16 mb-12 md:mb-16 max-w-4xl mx-auto text-center">
                <h1 class="text-xl font-semibold text-gray-700 mb-3" style="font-family: 'Merriweather', serif;">
                    Visi
                </h1>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
                    MEWUJUDKAN DESA TEMPANG III YANG RELIGIUS, MANDIRI, SEHAT, BERSIH, ADIL, SEJAHTERA, AMAN, DAN SEMANGAT GOTONG ROYONG
                </p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-700 mb-8 md:mb-10 text-center" style="font-family: 'Merriweather', serif;">
                    Misi
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">

                    <div>
                        <span class="block h-1 w-16 bg-green-500 mb-3"></span>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Melanjutkan dan meningkatkan kegiatan keagaaman.                        
                        </p>
                    </div>

                    <div>
                        <span class="block h-1 w-16 bg-green-500 mb-3"></span>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Peningkatan dan pengembangan sumber daya aparatur desa dalam pelayanan yang prima dan adil kepada masyarakat.</p>
                    </div>

                    <div>
                        <span class="block h-1 w-16 bg-green-500 mb-3"></span>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Menyelenggarakan pemerintahan yang akuntabel, bersih, transparan, bebas korupsi, bertanggungjawab dilandaskan pada peraturan perundang-undangan.</p>
                    </div>

                    <div>
                        <span class="block h-1 w-16 bg-green-500 mb-3"></span>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Peningkatan pemberdayaan masyarakat dalam pengelolaan sumber daya alam.
                        </p>
                    </div>

                    <div>
                        <span class="block h-1 w-16 bg-green-500 mb-3"></span>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Meningkatkan sarana dan prasarana infrastruktur desa meliputi pertanian/perkebunan, akses transportasi, pendidikan, kesehatan, 
                            olahraga, kebudayaan desa, yang berkesinambungan dengan mengedepankan partisipasi dan gotong royong dalam musyawarah mufakat. 
                        </p>
                    </div>

                     <div>
                        <span class="block h-1 w-16 bg-green-500 mb-3"></span>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Menciptakan sinergitas, hubungan yang harmonis antar masyarakat, pemerintah dan lembaga desa.
                        </p>
                    </div>

                     <div>
                        <span class="block h-1 w-16 bg-green-500 mb-3"></span>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Mewujudkan pembangunan desa TEMPANG III yang terarah dan terukur.
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
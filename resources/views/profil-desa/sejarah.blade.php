<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Desa - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 md:mb-12">
                <a href="{{ route('sejarah') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Sejarah Desa
                </a>

                <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mt-16 md:mt-20 mb-10 md:mb-16" style="font-family: 'Merriweather', serif;">
                    Sejarah Desa Tempang Tiga
                </h2>
                <p class="text-base text-gray-600 mt-4 max-w-2xl mx-auto">
                    Desa Tempang Tiga adalah desa hasil pemekaran pada tanggal <strong>01 Oktober 2007</strong>. Desa Tempang Induk yang dimekarkan menjadi 3 (tiga) desa yaitu Desa Tempang, Desa Tempang Dua dan Desa Tempang Tiga.
                </p>
            </div>

            <hr class="border-gray-300 mb-12 md:mb-16">

            <div>
                <article class="prose prose-lg max-w-none text-gray-700 leading-relaxed text-justify">
                    <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center" style="font-family: 'Merriweather', serif;">Asal-usul / Legenda Desa</h4>
                    
                    <figure class="my-8 overflow-hidden rounded-lg">
                        <img src="{{ asset('images/tugu-tempangtiga.jpg') }}"
                             alt="Tugu Desa Tempang Tiga"
                             class="shadow-md w-full object-cover aspect-[2.4/1] object-bottom transform scale-110"
                             style="object-position: center 95%;">
                    </figure>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4">
                        <div>
                            <p>
                                Desa Tempang III adalah desa pemekaran dari desa induk yakni Tempang dan sekarang termasuk salah satu desa yang ada di kecamatan Langowan Utara.
                            </p>
                            <p>
                                Dahulunya Desa ini adalah tempat orang-orang bertani (<em>Mapanguma</em>) dan sekaligus menangkap burung dan kelelawar yang mendiami lereng gunung Wowo dan Tumangkokow dengan menggunakan jaring atau pukat yang mereka sebut dengan <strong>"TETEMPANGAN"</strong>.
                            </p>
                            <p>
                                Umumnya yang datang bertani berasal dari desa Waleure, Sumarayar, Walantakan dan Paslaten.
                            </p>
                            <p>
                                Dengan rutinitas mereka yang setiap siang hari bertani dan malamnya menangkap burung sehingga mereka jarang kembali ke Desa asal dan akhirnya mereka mulai menetap sementara.
                            </p>
                            <p>
                                Karena mulai merasa cocok dengan keadaan lingkungan sekitar sehingga kira-kira pada sekitar tahun 1921, orang-orang tersebut mengadakan pertemuan dengan maksud untuk membentuk kampung sendiri. Dalam pertemuan tersebut disepakati pembentukan Kampung/Desa tetapi belum bisa menyepakati nama kampung yang akan digunakan karena di bagian Selatan menginginkan nama desa adalah <strong>KASAMAAN</strong> yang berarti <em>PERKEBUNAN YANG BAIK (SUBUR)</em>. Sedangkan di bagian Utara mengajukan nama desa adalah <strong>KINAMANG</strong> yang berarti <em>KARUNIA ATAU MUJUR</em>.
                            </p>
                            <p>
                                Karena tidak ada kata sepakat, maka tua-tua kampung atau sebutan TONAAS mengusulkan nama sesuai dengan profesi mereka yaitu menangkap burung dengan jaring atau pukat yang disebut dengan <strong>"TETEMPANGAN"</strong>. Usul dari Tonaas tersebut langsung direspon dengan baik karena ada sebagian warga kesulitan dalam pengucapan Tetempangan, maka di sepakati menggunakan kata dasar yaitu <strong>'TEMPANG'</strong>.
                            </p>
                        </div>
                        
                        <div>
                            <p>
                                Dalam pertumbuhan dan perkembangan desa dari tahun ke tahun semakin pesat baik, dari segi luas pemukiman maupun jumlah penduduk semakin meluas dan bertumbuh baik kualitas maupun kuantitas masyarakat. Menyadari hal ini maka lambat laun muncul ide dari tokoh-tokoh masyarakat untuk pemekaran desa sejak awal telah diwacanakan sejak tahun 2000-an.
                            </p>
                            <p>
                                Dari wacana tersebut kemudian menjadi kenyataan, ketika pada tanggal 16 Juli 2007 keluar SK Bupati Minahasa yang bernomor 306 tahun 2007 yang isinya adalah memekarkan desa Tempang menjadi tiga Desa, yaitu Desa Tempang, Desa Tempang Dua dan Desa Tempang III. Hal itu erat kaitannya dengan pemekaran Kecamatan Langowan Utara.
                            </p>
                            <p>
                                Pada awalnya baik Tempang Dua maupun Tempang III masih berupa Desa persiapan dan dipimpin oleh seorang Penjabat Hukum Tua. Hal itu berlangsung kurang lebih 3 tahun. Dan selanjutnya seiring dengan perkembangan melalui proses penilaian dari daerah, maka sesuai SK Bupati bernomor [ ], pada tanggal 16 Juli 2010 meresmikan desa Persiapan Desa Tempang III menjadi Desa Definitif bersamaan juga dengan beberapa desa yang ada di Minahasa, termasuk juga Desa Tempang Dua.
                            </p>
                            <p>
                                Dari situlah bermula tanggal sejarah desa Tempang III untuk selanjutnya berkembang dan terus berkembang dalam menata segala aspek kehidupan masyarakat menuju kesejahteraan lahir dan batin.
                            </p>
                        </div>
                    </div>

                </article>
            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
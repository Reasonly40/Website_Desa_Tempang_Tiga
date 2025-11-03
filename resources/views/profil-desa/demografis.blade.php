<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demografis Penduduk - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-10 md:mb-16">
                <a href="{{ route('demografis') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Demografis Kependudukan 
                </a>
                <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mt-16 md:mt-20 mb-10 md:mb-16" style="font-family: 'Merriweather', serif;">
                    Demografis Kependudukan Desa Tempang Tiga
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 md:gap-12 items-start">
                
                <div class="lg:col-span-3 bg-white p-6 md:p-8 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6" style="font-family: 'Merriweather', serif;">
                        Data Penduduk Desa Tempang Tiga
                    </h2>
                    
                    @php
                        // Data dari gambar
                        $penduduk_total = 1060;
                        $kk_total = 366;

                        // Laki-laki
                        $laki_0_15 = 57;
                        $laki_16_55 = 272;
                        $laki_diatas_55 = 125;
                        $laki_total = $laki_0_15 + $laki_16_55 + $laki_diatas_55; // 454

                        // Perempuan (dari gambar lain)
                        $perempuan_0_15 = 59;
                        $perempuan_16_55 = 251;
                        $perempuan_diatas_55 = 120;
                        $perempuan_total = $perempuan_0_15 + $perempuan_16_55 + $perempuan_diatas_55; // 430
                        
                        // Data Kesejahteraan
                        $kk_sejahtera = 85;
                        $kk_kaya = 102;
                        $kk_sedang = 29;
                        $kk_miskin = 34;

                        // Data Pendidikan
                        $pend_tidak_sd = 95;
                        $pend_sd = 226;
                        $pend_sltp = 189;
                        $pend_slta = 181;
                        $pend_diploma = 79;
                        $pend_total_pendidikan = $pend_tidak_sd + $pend_sd + $pend_sltp + $pend_slta + $pend_diploma; // 770

                        // Data Pekerjaan
                        $pek_buruh_tani = 28;
                        $pek_petani = 245;
                        $pek_peternak = 11;
                        $pek_pedagang = 12;
                        $pek_tukang_kayu = 4;
                        $pek_tukang_batu = 2;
                        $pek_penjahit = 4;
                        $pek_pns = 58;
                        $pek_peralatan = 18; // Kurang jelas, asumsi "Peralatan"
                        $pek_tni_polri = 1;
                        $pek_perangkat_desa = 24;
                        $pek_pengrajin = 1;
                        $pek_industri_kecil = 1;
                        $pek_buruh_industri = 1;
                        $pek_lain_lain = 40;
                        $pek_total = $pek_buruh_tani + $pek_petani + $pek_peternak + $pek_pedagang + $pek_tukang_kayu + $pek_tukang_batu + $pek_penjahit + $pek_pns + $pek_peralatan + $pek_tni_polri + $pek_perangkat_desa + $pek_pengrajin + $pek_industri_kecil + $pek_buruh_industri + $pek_lain_lain; // 450

                        // Data Agama
                        $agama_islam = 0; // Tidak ada di tabel
                        $agama_kristen = 0; // Tidak ada di tabel
                        $agama_protestan = 671;
                        $agama_katolik = 0; // Tidak ada di tabel
                        $agama_hindu = 0; // Tidak ada di tabel
                        $agama_budha = 0; // Tidak ada di tabel
                        $agama_total = $agama_protestan; // Total dari tabel

                    @endphp

                    {{-- Tabel Kependudukan --}}
                    <table class="w-full text-left text-sm text-gray-600 mb-6">
                        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                            <tr>
                                <th class="p-3">Uraian</th>
                                <th class="p-3 text-right">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">1. Kependudukan</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Jumlah Penduduk (Jiwa)</td><td class="p-3 text-right">{{ $penduduk_total }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. Jumlah KK</td><td class="p-3 text-right">{{ $kk_total }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Jumlah laki-laki</td><td class="p-3 text-right">{{ $laki_total }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">a. 0 - 15 tahun</td><td class="p-3 text-right">{{ $laki_0_15 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">b. 16 - 55 tahun</td><td class="p-3 text-right">{{ $laki_16_55 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">c. Diatas 55 tahun</td><td class="p-3 text-right">{{ $laki_diatas_55 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. Jumlah perempuan</td><td class="p-3 text-right">{{ $perempuan_total }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">a. 0 - 15 tahun</td><td class="p-3 text-right">{{ $perempuan_0_15 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">b. 16 - 55 tahun</td><td class="p-3 text-right">{{ $perempuan_16_55 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">c. Diatas 55 tahun</td><td class="p-3 text-right">{{ $perempuan_diatas_55 }}</td></tr>
                        
                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">2. Kesejahteraan Sosial</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Jumlah KK Sejahtera</td><td class="p-3 text-right">{{ $kk_sejahtera }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. Jumlah KK Kaya</td><td class="p-3 text-right">{{ $kk_kaya }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Jumlah KK Sedang</td><td class="p-3 text-right">{{ $kk_sedang }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. Jumlah KK Miskin</td><td class="p-3 text-right">{{ $kk_miskin }}</td></tr>

                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">3. Tingkat Pendidikan</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Tidak tamat SD</td><td class="p-3 text-right">{{ $pend_tidak_sd }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. SD</td><td class="p-3 text-right">{{ $pend_sd }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. SLTP</td><td class="p-3 text-right">{{ $pend_sltp }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. SLTA</td><td class="p-3 text-right">{{ $pend_slta }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">E. Diploma/Sarjana</td><td class="p-3 text-right">{{ $pend_diploma }}</td></tr>

                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">4. Mata Pencaharian</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Buruh Tani</td><td class="p-3 text-right">{{ $pek_buruh_tani }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. Petani</td><td class="p-3 text-right">{{ $pek_petani }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Peternak</td><td class="p-3 text-right">{{ $pek_peternak }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. Pedagang</td><td class="p-3 text-right">{{ $pek_pedagang }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">E. Tukang Kayu</td><td class="p-3 text-right">{{ $pek_tukang_kayu }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">F. Tukang Batu</td><td class="p-3 text-right">{{ $pek_tukang_batu }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">G. Penjahit</td><td class="p-3 text-right">{{ $pek_penjahit }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">H. PNS</td><td class="p-3 text-right">{{ $pek_pns }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">I. Peralatan</td><td class="p-3 text-right">{{ $pek_peralatan }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">J. TNI/Polri</td><td class="p-3 text-right">{{ $pek_tni_polri }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">K. Perangkat Desa</td><td class="p-3 text-right">{{ $pek_perangkat_desa }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">L. Pengrajin</td><td class="p-3 text-right">{{ $pek_pengrajin }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">M. Industri Kecil</td><td class="p-3 text-right">{{ $pek_industri_kecil }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">N. Buruh Industri</td><td class="p-3 text-right">{{ $pek_buruh_industri }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">O. Lain-lain</td><td class="p-3 text-right">{{ $pek_lain_lain }}</td></tr>

                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">5. Agama</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Protestan</td><td class="p-3 text-right">{{ $agama_protestan }}</td></tr>
                            {{-- Tambahkan agama lain jika ada datanya --}}
                        </tbody>
                    </table>
                </div>

                {{-- Kolom Kanan: Pie Charts --}}
                <div class="lg:col-span-2 space-y-8">
                    {{-- Chart 1: Pendidikan --}}
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 text-center">Tingkat Pendidikan</h3>
                        <canvas id="chartPendidikan"></canvas>
                    </div>

                    {{-- Chart 2: Pekerjaan --}}
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 text-center">Mata Pencaharian</h3>
                        <canvas id="chartPekerjaan"></canvas>
                    </div>

                    {{-- Chart 3: Agama --}}
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 text-center">Agama</h3>
                        <canvas id="chartAgama"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

    {{-- **SCRIPT UNTUK PIE CHART** --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            // --- Chart Pendidikan ---
            const ctxPendidikan = document.getElementById('chartPendidikan').getContext('2d');
            new Chart(ctxPendidikan, {
                type: 'pie',
                data: {
                    labels: ['Tidak Tamat SD', 'SD', 'SLTP', 'SLTA', 'Diploma/Sarjana'],
                    datasets: [{
                        label: 'Tingkat Pendidikan',
                        data: [
                            {{ $pend_tidak_sd }},
                            {{ $pend_sd }},
                            {{ $pend_sltp }},
                            {{ $pend_slta }},
                            {{ $pend_diploma }}
                        ],
                        backgroundColor: [
                            '#FF6384', // Merah
                            '#36A2EB', // Biru
                            '#FFCE56', // Kuning
                            '#4BC0C0', // Teal
                            '#9966FF'  // Ungu
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });

            // --- Chart Pekerjaan ---
            // Karena terlalu banyak kategori, kita kelompokkan "Lain-lain"
            const pek_utama = {{ $pek_petani }} + {{ $pek_buruh_tani }};
            const pek_pns_tni_perangkat = {{ $pek_pns }} + {{ $pek_tni_polri }} + {{ $pek_perangkat_desa }};
            const pek_wiraswasta = {{ $pek_pedagang }} + {{ $pek_tukang_kayu }} + {{ $pek_tukang_batu }} + {{ $pek_penjahit }} + {{ $pek_pengrajin }} + {{ $pek_industri_kecil }} + {{ $pek_buruh_industri }};
            const pek_lainnya = {{ $pek_peternak }} + {{ $pek_peralatan }} + {{ $pek_lain_lain }};

            const ctxPekerjaan = document.getElementById('chartPekerjaan').getContext('2d');
            new Chart(ctxPekerjaan, {
                type: 'pie',
                data: {
                    labels: ['Petani/Buruh Tani', 'Aparatur (PNS/TNI/Perangkat)', 'Wiraswasta/Tukang', 'Lainnya'],
                    datasets: [{
                        label: 'Mata Pencaharian',
                        data: [pek_utama, pek_pns_tni_perangkat, pek_wiraswasta, pek_lainnya],
                        backgroundColor: [
                            '#2E8B57', // Hijau (Petani)
                            '#4682B4', // Biru (Aparatur)
                            '#DAA520', // Emas (Wiraswasta)
                            '#D2B48C'  // Tan (Lainnya)
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });

             // --- Chart Agama ---
             const ctxAgama = document.getElementById('chartAgama').getContext('2d');
            new Chart(ctxAgama, {
                type: 'pie',
                data: {
                    labels: ['Protestan'], // Hanya data Protestan yang ada
                    datasets: [{
                        label: 'Agama',
                        data: [{{ $agama_protestan }}], // Hanya 1 data
                        backgroundColor: [
                            '#8A2BE2' // Biru Violet
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });

        });
    </script>

</body>
</html>
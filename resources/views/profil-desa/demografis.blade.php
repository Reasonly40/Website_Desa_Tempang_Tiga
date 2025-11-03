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
                        $laki_total = ($data->laki_0_15 ?? 0) + ($data->laki_16_55 ?? 0) + ($data->laki_diatas_55 ?? 0);
                        $perempuan_total = ($data->perempuan_0_15 ?? 0) + ($data->perempuan_16_55 ?? 0) + ($data->perempuan_diatas_55 ?? 0);
                    @endphp

                    {{-- Tabel Kependudukan (Dinamis) --}}
                    <table class="w-full text-left text-sm text-gray-600 mb-6">
                        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                            <tr>
                                <th class="p-3">Uraian</th>
                                <th class="p-3 text-right">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">1. Kependudukan</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Jumlah Penduduk (Jiwa)</td><td class="p-3 text-right">{{ $data->penduduk_total ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. Jumlah KK</td><td class="p-3 text-right">{{ $data->kk_total ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Jumlah laki-laki</td><td class="p-3 text-right">{{ $laki_total }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">a. 0 - 15 tahun</td><td class="p-3 text-right">{{ $data->laki_0_15 ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">b. 16 - 55 tahun</td><td class="p-3 text-right">{{ $data->laki_16_55 ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">c. Diatas 55 tahun</td><td class="p-3 text-right">{{ $data->laki_diatas_55 ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. Jumlah perempuan</td><td class="p-3 text-right">{{ $perempuan_total }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">a. 0 - 15 tahun</td><td class="p-3 text-right">{{ $data->perempuan_0_15 ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">b. 16 - 55 tahun</td><td class="p-3 text-right">{{ $data->perempuan_16_55 ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-10">c. Diatas 55 tahun</td><td class="p-3 text-right">{{ $data->perempuan_diatas_55 ?? 0 }}</td></tr>
                        
                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">2. Kesejahteraan Sosial</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Jumlah KK Prasejahtera</td><td class="p-3 text-right">{{ $data->kk_prasejahtera ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. Jumlah KK Sejahtera</td><td class="p-3 text-right">{{ $data->kk_sejahtera ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Jumlah KK Kaya</td><td class="p-3 text-right">{{ $data->kk_kaya ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. Jumlah KK Sedang</td><td class="p-3 text-right">{{ $data->kk_sedang ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">E. Jumlah KK Miskin</td><td class="p-3 text-right">{{ $data->kk_miskin ?? 0 }}</td></tr>

                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">3. Tingkat Pendidikan</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Tidak tamat SD</td><td class="p-3 text-right">{{ $data->pend_tidak_sd ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. SD</td><td class="p-3 text-right">{{ $data->pend_sd ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. SLTP</td><td class="p-3 text-right">{{ $data->pend_sltp ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. SLTA</td><td class="p-3 text-right">{{ $data->pend_slta ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">E. Diploma/Sarjana</td><td class="p-3 text-right">{{ $data->pend_diploma ?? 0 }}</td></tr>

                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">4. Mata Pencaharian</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Buruh Tani</td><td class="p-3 text-right">{{ $data->pek_buruh_tani ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. Petani</td><td class="p-3 text-right">{{ $data->pek_petani ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Peternak</td><td class="p-3 text-right">{{ $data->pek_peternak ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. Pedagang</td><td class="p-3 text-right">{{ $data->pek_pedagang ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">E. Tukang Kayu</td><td class="p-3 text-right">{{ $data->pek_tukang_kayu ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">F. Tukang Batu</td><td class="p-3 text-right">{{ $data->pek_tukang_batu ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">G. Penjahit</td><td class="p-3 text-right">{{ $data->pek_penjahit ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">H. PNS</td><td class="p-3 text-right">{{ $data->pek_pns ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">I. Pensiunan</td><td class="p-3 text-right">{{ $data->pek_pensiunan ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">J. TNI/Polri</td><td class="p-3 text-right">{{ $data->pek_tni_polri ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">K. Perangkat Desa</td><td class="p-3 text-right">{{ $data->pek_perangkat_desa ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">L. Pengrajin</td><td class="p-3 text-right">{{ $data->pek_pengrajin ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">M. Industri Kecil</td><td class="p-3 text-right">{{ $data->pek_industri_kecil ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">N. Buruh Industri</td><td class="p-3 text-right">{{ $data->pek_buruh_industri ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">O. Lain-lain</td><td class="p-3 text-right">{{ $data->pek_lain_lain ?? 0 }}</td></tr>

                            <tr class="border-b"><td class="p-3 font-semibold text-gray-800" colspan="2">5. Agama</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">A. Islam</td><td class="p-3 text-right">{{ $data->agama_islam ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">B. Protestan</td><td class="p-3 text-right">{{ $data->agama_protestan ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">C. Katolik</td><td class="p-3 text-right">{{ $data->agama_katolik ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">D. Hindu</td><td class="p-3 text-right">{{ $data->agama_hindu ?? 0 }}</td></tr>
                            <tr class="border-b"><td class="p-3 pl-6">E. Budha</td><td class="p-3 text-right">{{ $data->agama_budha ?? 0 }}</td></tr>
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

    {{-- **SCRIPT UNTUK PIE CHART (DINAMIS & DIURUTKAN)** --}}
    
    @php
        // Logika PHP untuk memproses data SEBELUM dikirim ke Chart.js
        $chart_colors = json_encode(['#36A2EB', '#FF6384', '#FFCE56', '#4BC0C0', '#9966FF']);

        // 1. Data Pendidikan (Diurutkan berdasarkan 5 teratas)
        $pendidikan_data = [
            'Tidak Tamat SD' => $data->pend_tidak_sd ?? 0,
            'SD' => $data->pend_sd ?? 0,
            'SLTP' => $data->pend_sltp ?? 0,
            'SLTA' => $data->pend_slta ?? 0,
            'Diploma/Sarjana' => $data->pend_diploma ?? 0,
        ];
        arsort($pendidikan_data); // Urutkan dari terbesar ke terkecil
        $pendidikan_labels = json_encode(array_keys($pendidikan_data));
        $pendidikan_values = json_encode(array_values($pendidikan_data));

        // 2. Data Pekerjaan (Diambil 5 teratas dari 15 kategori)
        $pekerjaan_data = [
            'Petani' => $data->pek_petani ?? 0,
            'PNS' => $data->pek_pns ?? 0,
            'Lain-lain' => $data->pek_lain_lain ?? 0,
            'Buruh Tani' => $data->pek_buruh_tani ?? 0,
            'Perangkat Desa' => $data->pek_perangkat_desa ?? 0,
            'Pensiunan' => $data->pek_pensiunan ?? 0,
            'Pedagang' => $data->pek_pedagang ?? 0,
            'Peternak' => $data->pek_peternak ?? 0,
            'Tukang Kayu' => $data->pek_tukang_kayu ?? 0,
            'Penjahit' => $data->pek_penjahit ?? 0,
            'Tukang Batu' => $data->pek_tukang_batu ?? 0,
            'TNI/Polri' => $data->pek_tni_polri ?? 0,
            'Pengrajin' => $data->pek_pengrajin ?? 0,
            'Industri Kecil' => $data->pek_industri_kecil ?? 0,
            'Buruh Industri' => $data->pek_buruh_industri ?? 0,
        ];
        arsort($pekerjaan_data); // Urutkan dari terbesar ke terkecil
        $pekerjaan_data_top5 = array_slice($pekerjaan_data, 0, 5, true); // Ambil 5 teratas
        $pekerjaan_labels = json_encode(array_keys($pekerjaan_data_top5));
        $pekerjaan_values = json_encode(array_values($pekerjaan_data_top5));

        // 3. Data Agama (Diurutkan berdasarkan 5 teratas)
        $agama_data = [
            'Protestan' => $data->agama_protestan ?? 0,
            'Islam' => $data->agama_islam ?? 0,
            'Katolik' => $data->agama_katolik ?? 0,
            'Hindu' => $data->agama_hindu ?? 0,
            'Budha' => $data->agama_budha ?? 0,
        ];
        arsort($agama_data); // Urutkan dari terbesar ke terkecil
        $agama_labels = json_encode(array_keys($agama_data));
        $agama_values = json_encode(array_values($agama_data));
    @endphp

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            // --- Chart Pendidikan ---
            const ctxPendidikan = document.getElementById('chartPendidikan').getContext('2d');
            new Chart(ctxPendidikan, {
                type: 'pie',
                data: {
                    labels: {!! $pendidikan_labels !!}, // Data label yang sudah diurutkan
                    datasets: [{
                        label: 'Tingkat Pendidikan',
                        data: {!! $pendidikan_values !!}, // Data value yang sudah diurutkan
                        backgroundColor: {!! $chart_colors !!},
                        hoverOffset: 4
                    }]
                },
                options: { responsive: true, plugins: { legend: { position: 'top' } } }
            });

            // --- Chart Pekerjaan ---
            const ctxPekerjaan = document.getElementById('chartPekerjaan').getContext('2d');
            new Chart(ctxPekerjaan, {
                type: 'pie',
                data: {
                    labels: {!! $pekerjaan_labels !!}, // Label 5 teratas
                    datasets: [{
                        label: 'Mata Pencaharian',
                        data: {!! $pekerjaan_values !!}, // Value 5 teratas
                        backgroundColor: {!! $chart_colors !!},
                        hoverOffset: 4
                    }]
                },
                options: { responsive: true, plugins: { legend: { position: 'top' } } }
            });

             // --- Chart Agama ---
             const ctxAgama = document.getElementById('chartAgama').getContext('2d');
             new Chart(ctxAgama, {
                type: 'pie',
                data: {
                    labels: {!! $agama_labels !!}, // Data label yang sudah diurutkan
                    datasets: [{
                        label: 'Agama',
                        data: {!! $agama_values !!}, // Data value yang sudah diurutkan
                        backgroundColor: {!! $chart_colors !!},
                        hoverOffset: 4
                    }]
                },
                options: { responsive: true, plugins: { legend: { position: 'top' } } }
            });

        });
    </script>

</body>
</html>
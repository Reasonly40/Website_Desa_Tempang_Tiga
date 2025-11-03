<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparansi APBDes - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    {{-- Helper Function untuk format Rupiah --}}
    @php
        function formatRupiah($number) {
            return 'Rp ' . number_format($number, 0, ',', '.');
        }
    @endphp

    <main class="py-16 md:py-24 flex-grow">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 md:mb-20">
                <a href="{{ route('apbdes') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    APBDes
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Transparansi APBDes Desa Tempang Tiga
                </h2>
                @if ($anggaran)
                    <p class="mt-4 text-xl text-gray-600">
                        Tahun Anggaran: {{ $anggaran->tahun }} (Semester {{ $anggaran->semester }})
                    </p>
                @endif
            </div>

            @if ($anggaran)
                @php
                    // Hitung Total Pendapatan
                    $total_pendapatan_anggaran = $anggaran->pendapatan_asli_desa_anggaran + $anggaran->pendapatan_transfer_anggaran + $anggaran->pendapatan_lain_lain_anggaran;
                    $total_pendapatan_realisasi = $anggaran->pendapatan_asli_desa_realisasi + $anggaran->pendapatan_transfer_realisasi + $anggaran->pendapatan_lain_lain_realisasi;
                    
                    // Hitung Total Belanja
                    $total_belanja_anggaran = $anggaran->belanja_pegawai_anggaran + $anggaran->belanja_barang_jasa_anggaran + $anggaran->belanja_modal_anggaran + $anggaran->belanja_tidak_terduga_anggaran;
                    $total_belanja_realisasi = $anggaran->belanja_pegawai_realisasi + $anggaran->belanja_barang_jasa_realisasi + $anggaran->belanja_modal_realisasi + $anggaran->belanja_tidak_terduga_realisasi;
                
                    // Hitung Pembiayaan Netto
                    $netto_pembiayaan_anggaran = $anggaran->penerimaan_pembiayaan_anggaran - $anggaran->pengeluaran_pembiayaan_anggaran;
                    $netto_pembiayaan_realisasi = $anggaran->penerimaan_pembiayaan_realisasi - $anggaran->pengeluaran_pembiayaan_realisasi;
                @endphp

                {{-- Wrapper Tiga Kontainer --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
                    
                    {{-- Kontainer 1: Pendapatan --}}
                    <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-green-500">
                        <h3 class="text-xl font-bold text-gray-800 mb-4" style="font-family: 'Merriweather', serif;">
                            Pendapatan
                        </h3>
                        <table class="w-full text-sm">
                            <thead class="text-left text-xs text-gray-500 uppercase">
                                <tr>
                                    <th class="py-2 font-medium">Uraian</th>
                                    <th class="py-2 font-medium text-right">Anggaran</th>
                                    <th class="py-2 font-medium text-right">Realisasi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Pendapatan Asli Desa</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pendapatan_asli_desa_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pendapatan_asli_desa_realisasi) }}</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Pendapatan Transfer</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pendapatan_transfer_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pendapatan_transfer_realisasi) }}</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Pendapatan Lain-lain</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pendapatan_lain_lain_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pendapatan_lain_lain_realisasi) }}</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-gray-50 font-bold text-gray-800">
                                <tr>
                                    <td class="py-3 px-2">Jumlah Pendapatan</td>
                                    <td class="py-3 px-2 text-right">{{ formatRupiah($total_pendapatan_anggaran) }}</td>
                                    <td class="py-3 px-2 text-right">{{ formatRupiah($total_pendapatan_realisasi) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    {{-- Kontainer 2: Pembelanjaan --}}
                    <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-red-500">
                        <h3 class="text-xl font-bold text-gray-800 mb-4" style="font-family: 'Merriweather', serif;">
                            Pembelanjaan
                        </h3>
                        <table class="w-full text-sm">
                            <thead class="text-left text-xs text-gray-500 uppercase">
                                <tr>
                                    <th class="py-2 font-medium">Uraian</th>
                                    <th class="py-2 font-medium text-right">Anggaran</th>
                                    <th class="py-2 font-medium text-right">Realisasi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Belanja Pegawai</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_pegawai_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_pegawai_realisasi) }}</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Belanja Barang & Jasa</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_barang_jasa_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_barang_jasa_realisasi) }}</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Belanja Modal</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_modal_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_modal_realisasi) }}</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Belanja Tidak Terduga</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_tidak_terduga_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->belanja_tidak_terduga_realisasi) }}</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-gray-50 font-bold text-gray-800">
                                <tr>
                                    <td class="py-3 px-2">Jumlah Belanja</td>
                                    <td class="py-3 px-2 text-right">{{ formatRupiah($total_belanja_anggaran) }}</td>
                                    <td class="py-3 px-2 text-right">{{ formatRupiah($total_belanja_realisasi) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    {{-- Kontainer 3: Pembiayaan --}}
                    <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-500">
                        <h3 class="text-xl font-bold text-gray-800 mb-4" style="font-family: 'Merriweather', serif;">
                            Pembiayaan
                        </h3>
                        <table class="w-full text-sm">
                            <thead class="text-left text-xs text-gray-500 uppercase">
                                <tr>
                                    <th class="py-2 font-medium">Uraian</th>
                                    <th class="py-2 font-medium text-right">Anggaran</th>
                                    <th class="py-2 font-medium text-right">Realisasi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Penerimaan Pembiayaan</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->penerimaan_pembiayaan_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->penerimaan_pembiayaan_realisasi) }}</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3">Pengeluaran Pembiayaan</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pengeluaran_pembiayaan_anggaran) }}</td>
                                    <td class="py-3 text-right">{{ formatRupiah($anggaran->pengeluaran_pembiayaan_realisasi) }}</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-gray-50 font-bold text-gray-800">
                                <tr>
                                    <td class="py-3 px-2">Pembiayaan Netto</td>
                                    <td class="py-3 px-2 text-right">{{ formatRupiah($netto_pembiayaan_anggaran) }}</td>
                                    <td class="py-3 px-2 text-right">{{ formatRupiah($netto_pembiayaan_realisasi) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            @else
                {{-- Tampilan jika belum ada data anggaran --}}
                <div class="text-center py-12 bg-white rounded-lg shadow-md">
                    <i class="fa-solid fa-folder-open text-5xl text-gray-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-800">Data APBDes Belum Tersedia</h3>
                    <p class="text-gray-500 mt-2">Admin belum menginput data APBDes untuk tahun ini.</p>
                </div>
            @endif

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
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

    <main class="py-16 md:py-24 flex-grow">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 md:mb-20">
                <a href="{{ route('apbdes') }}"
                   class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    APBDes
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Transparansi APBDes
                </h2>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">
                    Komitmen kami untuk transparansi melalui ringkasan Anggaran Pendapatan dan Belanja Desa (APBDes) Tempang Tiga untuk tahun berjalan.
                </p>
            </div>
        </div>

        <div class="bg-white"> 
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 py-16 md:py-24">
                <div class="text-center mb-10 md:mb-12">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-2 md:mb-3" style="font-family: 'Merriweather', serif;">APBDes 2025</h2> 
                    <p class="text-gray-600 text-base md:text-lg">Realisasi dan Anggaran Dana Desa Tahun 2025</p> 
                </div>

                {{-- PERUBAHAN BESAR ADA DI DALAM KARTU-KARTU DI BAWAH INI --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                    
                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 md:p-8 border border-green-100">
                        <h3 class="text-xl md:text-2xl font-semibold text-green-800 text-center mb-1 md:mb-2">Pelaksanaan</h3> 
                        <p class="text-center text-gray-500 text-xs md:text-sm mb-6 md:mb-8">Realisasi per Tahap | Anggaran Total</p> 
                        <div class="space-y-6">
                            
                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Pendapatan</p> 
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 3.568.388.700</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 3.568.388.700</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Belanja</p> 
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 3.568.388.700</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 3.568.388.700</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Pembiayaan</p> 
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 2.761.320</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 2.761.320</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 md:p-8 border border-green-100">
                        <h3 class="text-xl md:text-2xl font-semibold text-green-800 text-center mb-1 md:mb-2">Pendapatan</h3>
                        <p class="text-center text-gray-500 text-xs md:text-sm mb-6 md:mb-8">Realisasi per Tahap | Anggaran Total</p>
                        <div class="space-y-6">
                             
                             <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Dana Desa</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 1.029.810.000</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 1.029.810.000</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Bagi Hasil Pajak & Retribusi</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 46.292.600</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 46.292.600</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>

                             <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Alokasi Dana Desa</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 2.492.286.100</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 2.492.286.100</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 md:p-8 border border-green-100">
                        <h3 class="text-xl md:text-2xl font-semibold text-green-800 text-center mb-1 md:mb-2">Pembelanjaan</h3>
                        <p class="text-center text-gray-500 text-xs md:text-sm mb-6 md:mb-8">Realisasi per Tahap | Anggaran Total</p>
                        <div class="space-y-6">
                            
                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Penyelenggaraan Pemerintahan Desa</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 1.516.050.228</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 1.516.050.228</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Pelaksanaan Pembangunan Desa</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 689.102.662</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 689.102.662</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Pembinaan Kemasyarakatan</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 424.631.110</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 424.631.110</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Pemberdayaan Masyarakat</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 776.974.700</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 776.974.700</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <p class="font-medium text-gray-800 text-sm md:text-base">Penanggulangan Bencana & Mendesak</p>
                                <p class="text-xs md:text-sm text-gray-500">Anggaran: Rp 161.630.000</p>
                                
                                <div class="mt-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-blue-700">Tahap 1 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-blue-700">100%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 161.630.000</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div class="mt-3">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-green-700">Tahap 2 (Realisasi)</span>
                                        <span class="text-xs font-semibold text-green-700">0%</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-gray-500 truncate">Rp 0</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mt-1 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full" style="width:0%"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16 md:mt-24">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900" style="font-family: 'Merriweather', serif;">
                    Rincian Lebih Lanjut
                </h3>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Akses infografis, laporan, dan dokumen resmi terkait APBDes untuk transparansi penuh.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-6 md:p-8">
                <h4 class="text-xl font-semibold text-gray-800 mb-4" style="font-family: 'Merriweather', serif;">
                    Infografis APBDes 2025
                </h4>
                <p class="text-gray-600 mb-6">
                    Visualisasi data anggaran untuk pemahaman yang lebih mudah. (Ganti gambar di bawah ini dengan infografis Anda).
                </p>
                <div class="w-full border border-gray-200 rounded-lg bg-gray-100 flex items-center justify-center min-h-[400px]">
                    <img src="{{ asset('images/infografis-apbdes-placeholder.jpg') }}" alt="Infografis APBDes 2025" class="w-full h-auto object-contain">
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-6 md:p-8 mt-12">
                   <h4 class="text-xl font-semibold text-gray-800 mb-4" style="font-family: 'Merriweather', serif;">
                    Dokumen Terkait
                </h4>
                <p class="text-gray-600 mb-6">
                    Unduh dokumen resmi APBDes untuk rincian lengkap.
                </p>
                
                {{-- Ini adalah kode dari respons sebelumnya, untuk menangani dokumen kosong --}}
                <ul class="divide-y divide-gray-200">
                    @forelse ($dokumen ?? [] as $doc)
                        <li class="py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between">
                            <div class="flex items-center gap-3 mb-2 sm:mb-0">
                                <svg class="w-6 h-6 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span class="text-gray-700 font-medium">{{ $doc->nama_file }}</span>
                            </div>
                            <a href="{{ $doc->url_download }}"
                               class="inline-block text-sm font-medium text-blue-600 hover:text-blue-800 transition px-4 py-2 border border-blue-600 rounded-full hover:bg-blue-50 ml-0 sm:ml-4"
                               target="_blank" rel="noopener noreferrer">
                                Unduh
                            </a>
                        </li>
                    @empty
                        <li class="py-6 text-center">
                            <p class="text-gray-500 font-medium">
                                Belum ada dokumen yang tersedia saat ini.
                            </p>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>

    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
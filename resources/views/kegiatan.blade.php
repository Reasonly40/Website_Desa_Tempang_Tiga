<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi Kegiatan - Desa Tempang Tiga</title>
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
                <a href="{{ route('kegiatan') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Dokumentasi Kegiatan
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Galeri Kegiatan Desa
                </h2>
                <p class="mt-2 text-gray-600">Dokumentasi kegiatan desa terbaru yang telah dilaksanakan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                @forelse ($kegiatan as $item)
                    {{-- Setiap item dibungkus dengan Alpine.js untuk toggle deskripsi --}}
                    <div class="rounded-lg shadow-xl overflow-hidden relative bg-white" x-data="{ open: false }">
                        
                        {{-- Gambar --}}
                        <div class="aspect-video bg-gray-200">
                            <img src="{{ Storage::url($item->gambar) }}" 
                                 alt="{{ $item->judul }}" 
                                 class="w-full h-full object-cover">
                        </div>

                        {{-- Overlay Deskripsi/Info --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-4 md:p-5">
                            
                            {{-- Info Meta (Tanggal & Lokasi) --}}
                            <div class="text-xs text-white opacity-80 mb-2 space-x-3">
                                <span><i class="fa-solid fa-calendar-alt mr-1"></i> {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</span>
                                @if ($item->lokasi)
                                    <span><i class="fa-solid fa-map-marker-alt mr-1"></i> {{ $item->lokasi }}</span>
                                @endif
                            </div>

                            {{-- Judul dan Toggle --}}
                            <h4 @click="open = !open" 
                                class="text-white text-sm sm:text-base font-semibold cursor-pointer flex justify-between items-center" 
                                style="font-family: 'Merriweather', serif;">
                                <span>{{ $item->judul }}</span>
                                {{-- Ikon Chevron --}}
                                <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                            </h4>

                            {{-- Deskripsi (Muncul/Sembunyi) --}}
                            <p x-show="open" 
                               x-transition:enter="transition ease-out duration-300"
                               x-transition:enter-start="opacity-0 -translate-y-2"
                               x-transition:enter-end="opacity-100 translate-y-0"
                               x-transition:leave="transition ease-in duration-200"
                               x-transition:leave-start="opacity-100 translate-y-0"
                               x-transition:leave-end="opacity-0 -translate-y-2"
                               class="text-white text-xs sm:text-sm opacity-90 mt-2">
                                {!! $item->deskripsi !!}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-12 bg-white rounded-lg shadow-md">
                        <i class="fa-solid fa-camera-slash text-5xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">Belum Ada Dokumentasi</h3>
                        <p class="text-gray-500 mt-2">Admin belum menambahkan dokumentasi kegiatan terbaru.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - Desa Tempang Tiga</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 scroll-smooth flex flex-col min-h-screen">

    @include('layouts.partials.navbar')

    <main class="py-16 md:py-24 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <a href="{{ route('struktur-organisasi') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                Struktur Organisasi
            </a>

            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mt-16 md:mt-20 mb-10 md:mb-16" style="font-family: 'Merriweather', serif;">
                SOTK Desa Tempang Tiga
            </h2>

            {{-- Grid Struktur Organisasi (DINAMIS) --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">

                @php $placeholder = asset('images/profil-icon.png'); @endphp

                @forelse ($sotk as $aparat)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                            {{-- Jika ada foto, tampilkan dari storage. Jika tidak, pakai placeholder --}}
                            <img src="{{ $aparat->foto ? Storage::url($aparat->foto) : $placeholder }}" 
                                 alt="{{ $aparat->nama }}" 
                                 class="object-cover w-full h-full" 
                                 onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-base font-semibold text-gray-900 mb-1">{{ $aparat->nama ?? 'Nama Belum Diisi' }}</h3>
                            <p class="text-xs text-blue-600 font-medium">{{ $aparat->jabatan }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-2 md:col-span-4 py-12 text-gray-500">
                        Data aparatur SOTK belum ditambahkan oleh admin.
                    </div>
                @endforelse

            </div>

            {{-- BPD (DINAMIS) --}}
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mt-16 md:mt-20 mb-10 md:mb-16" style="font-family: 'Merriweather', serif;">
               Lembaga Badan Permusyawaratan Desa (BPD)
            </h2>

            <div class="text-center">
                {{-- Dibuat 'inline-grid' agar bisa 'center' --}}
                <div class="inline-grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                    
                    @forelse ($bpd as $aparat)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                            <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                                <img src="{{ $aparat->foto ? Storage::url($aparat->foto) : $placeholder }}" 
                                     alt="{{ $aparat->nama }}" 
                                     class="object-cover w-full h-full" 
                                     onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base font-semibold text-gray-900 mb-1">{{ $aparat->nama ?? 'Nama Belum Diisi' }}</h3>
                                {{-- Menghapus "BPD" dari string jabatan agar lebih rapi --}}
                                <p class="text-xs text-purple-600 font-medium">{{ \Illuminate\Support\Str::of($aparat->jabatan)->replaceFirst('BPD', '')->trim() }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-2 md:col-span-4 py-12 text-gray-500">
                            Data anggota BPD belum ditambahkan oleh admin.
                        </div>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
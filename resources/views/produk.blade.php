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
                <a href="{{ route('produk') }}" class="text-xs font-semibold text-blue-600 uppercase tracking-wider hover:underline">
                    Produk Unggulan
                </a>
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mt-4" style="font-family: 'Merriweather', serif;">
                    Produk Unggulan Desa Tempang Tiga
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                
                @forelse ($produk as $item)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-shadow duration-300 hover:shadow-lg">
                        {{-- Gambar Produk --}}
                        <div class="aspect-video bg-gray-100">
                            <img src="{{ Storage::url($item->image) }}" 
                                 alt="{{ $item->nama_produk }}" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        {{-- Nama, Harga & Deskripsi --}}
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-semibold text-gray-900" style="font-family: 'Merriweather', serif;">
                                {{ $item->nama_produk }}
                            </h3>
                            
                            {{-- TAMPILKAN HARGA --}}
                            <p class="text-lg font-bold text-blue-600 mt-2 mb-3">
                                Rp {{ number_format($item->harga, 0, ',', '.') }}
                            </p>
                            
                            {{-- Deskripsi --}}
                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                {{ $item->deskripsi }}
                            </p>
                        </div>
                        
                        {{-- Tombol Kontak (WA) --}}
                        <div class="px-6 pb-6 pt-2">
                            @if ($item->seller_contact)
                                <a href="https://wa.me/{{ $item->seller_contact }}?text=Halo, saya tertarik dengan produk '{{ $item->nama_produk }}'..."
                                   target="_blank" 
                                   class="inline-flex items-center justify-center w-full px-5 py-3 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-green-600 hover:bg-green-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <i class="fa-brands fa-whatsapp text-lg mr-2"></i>
                                    Hubungi Penjual
                                </a>
                            @else
                                <span class="inline-flex items-center justify-center w-full px-5 py-3 border border-gray-300 text-sm font-medium rounded-lg text-gray-500 bg-gray-100">
                                    Kontak tidak tersedia
                                </span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="sm:col-span-2 lg:col-span-3 text-center py-12 bg-white rounded-lg shadow-md">
                        <i class="fa-solid fa-store-slash text-5xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">Belum Ada Produk</h3>
                        <p class="text-gray-500 mt-2">Admin belum menambahkan produk unggulan desa.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top')

</body>
</html>
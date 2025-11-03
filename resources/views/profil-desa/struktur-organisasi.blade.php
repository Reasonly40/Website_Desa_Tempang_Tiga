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

            {{-- Grid Struktur Organisasi --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">

                {{-- Card Kepala Desa --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Desli Maki, SE" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Desli Maki, SE</h3>
                        <p class="text-xs text-blue-600 font-medium">Kepala Desa</p>
                    </div>
                </div>

                {{-- Card Sekretaris Desa --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Demsie Fadlen Lumenta" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Demsie Fadlen Lumenta</h3>
                        <p class="text-xs text-blue-600 font-medium">Sekretaris Desa</p>
                    </div>
                </div>

                {{-- Card Kasi Pemerintahan --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Juwindi Welang" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Juwindi Welang</h3>
                        <p class="text-xs text-blue-600 font-medium">Kasi Pemerintahan</p>
                    </div>
                </div>

                {{-- Card Kasi Kesra --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Juwindo Tasik" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Juwindo Tasik</h3>
                        <p class="text-xs text-blue-600 font-medium">Kasi Kesra</p>
                    </div>
                </div>

                 {{-- Card Kasi Pelayanan --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Herry Pajow" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Herry Pajow</h3>
                        <p class="text-xs text-blue-600 font-medium">Kasi Pelayanan</p>
                    </div>
                </div>

                {{-- Card Kaur Perencanaan --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Ivon Muksin" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Ivon Muksin</h3>
                        <p class="text-xs text-blue-600 font-medium">Kaur Perencanaan</p>
                    </div>
                </div>

                 {{-- Card Kaur Keuangan --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Kair Keuangan" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Kaur Keuangan</h3> {{-- Nama kurang jelas di gambar --}}
                        <p class="text-xs text-blue-600 font-medium">Kaur Keuangan</p>
                    </div>
                </div>

                {{-- Card Kepala Jaga I --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Joneke Maki" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Jones J. Maki</h3>
                        <p class="text-xs text-blue-600 font-medium">Kepala Jaga I</p>
                    </div>
                </div>

                {{-- Card Meweteng (Jaga I) --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Sifrina Palit" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Sifrina Palit</h3>
                        <p class="text-xs text-blue-600 font-medium">Meweteng Jaga I</p> {{-- Asumsi Jaga I --}}
                    </div>
                </div>

                {{-- Card Kepala Jaga II --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Agemi Pajow" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Agreivi Pai</h3>
                        <p class="text-xs text-blue-600 font-medium">Kepala Jaga II</p>
                    </div>
                </div>

                {{-- Card Meweteng (Jaga II) --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Ivanna Rondonuwu" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Livane Rondonuwu</h3>
                        <p class="text-xs text-blue-600 font-medium">Meweteng Jaga II</p> {{-- Asumsi Jaga II --}}
                    </div>
                </div>

                 {{-- Card Kepala Jaga III --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Avionli Mandolang" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Avionli Mandolang</h3>
                        <p class="text-xs text-blue-600 font-medium">Kepala Jaga III</p>
                    </div>
                </div>

                {{-- Card Meweteng (Jaga III) --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Arfini Pai" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Ardini Pai</h3>
                        <p class="text-xs text-blue-600 font-medium">Meweteng Jaga III</p> {{-- Asumsi Jaga III --}}
                    </div>
                </div>

                 {{-- Card Kepala Jaga IV --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Ferdi Liuwuh" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Avero Liuwuh</h3>
                        <p class="text-xs text-blue-600 font-medium">Kepala Jaga IV</p>
                    </div>
                </div>

                {{-- Card Meweteng (Jaga IV) --}}
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                        @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                        <img src="{{ $fotoUrl }}" alt="Vike Maki" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-base font-semibold text-gray-900 mb-1">Vike Maki</h3>
                        <p class="text-xs text-blue-600 font-medium">Meweteng Jaga IV</p> {{-- Asumsi Jaga IV --}}
                    </div>
                </div>

            </div>

            {{-- BPD --}}
            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mt-16 md:mt-20 mb-10 md:mb-16" style="font-family: 'Merriweather', serif;">
               Lembaga Badan Permusyawaratan Desa (BPD)
            </h2>

            <div class="text-center">
                <div class="inline-grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">

                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                            @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                            <img src="{{ $fotoUrl }}" alt="Servi R. Pai, S.Pd" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-base font-semibold text-gray-900 mb-1">Servi R. Pai, S.Pd</h3>
                            <p class="text-xs text-purple-600 font-medium">Ketua</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                            @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                            <img src="{{ $fotoUrl }}" alt="Robbi Irot, MM" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-base font-semibold text-gray-900 mb-1">Robbi Irot, MM</h3>
                            <p class="text-xs text-purple-600 font-medium">Wakil Ketua</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                            @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                            <img src="{{ $fotoUrl }}" alt="Vike Tunas, S.Th" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-base font-semibold text-gray-900 mb-1">Vike Tunas, S.Th</h3>
                            <p class="text-xs text-purple-600 font-medium">Sekretaris</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                            @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                            <img src="{{ $fotoUrl }}" alt="Meifie Liuw, S.Pd" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-base font-semibold text-gray-900 mb-1">Meifie Liuw, S.Pd</h3>
                            <p class="text-xs text-purple-600 font-medium">Anggota</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-shadow duration-300 hover:shadow-lg">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100">
                            @php $foto = null; $placeholder = asset('images/profil-icon.png'); $fotoUrl = $foto ? asset('storage/' . $foto) : $placeholder; @endphp
                            <img src="{{ $fotoUrl }}" alt="Djenly Pajow" class="object-cover w-full h-full" onerror="this.onerror=null; this.src='{{ $placeholder }}'; this.classList.add('opacity-50');">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-base font-semibold text-gray-900 mb-1">Djenly Pajow</h3>
                            <p class="text-xs text-purple-600 font-medium">Anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </main>

    @include('layouts.partials.footer')
    @include('layouts.partials.back-to-top') {{-- Pastikan nama file include sudah benar --}}

</body>
</html>
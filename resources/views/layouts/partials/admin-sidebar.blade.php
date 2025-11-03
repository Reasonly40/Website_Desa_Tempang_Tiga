{{-- File ini berisi HANYA konten sidebar --}}

{{-- Header Sidebar (Logo & Nama) --}}
<div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
    <div class="flex-shrink-0 flex items-center px-4">
        <img class="h-8 w-auto" src="{{ asset('images/logo-minahasa.png') }}" alt="Logo">
        <span class="ml-3 text-white font-semibold">Admin Desa</span>
    </div>
    
    {{-- Navigasi Menu --}}
    <nav class="mt-5 flex-1 px-2 space-y-1">

        <a href="{{ route('admin.dashboard') }}" 
           class="{{ request()->routeIs('admin.dashboard') ? 'bg-gray-900 text-white font-semibold' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
                  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <i class="fa-solid fa-tachometer-alt mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" style="text-align: center; line-height: 1.5rem;"></i>
            Dashboard
        </a>

        <a href="{{ route('admin.aparatur.index') }}"
           class="{{ request()->routeIs('admin.aparatur.*') ? 'bg-gray-900 text-white font-semibold' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
                  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <i class="fa-solid fa-users mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" style="text-align: center; line-height: 1.5rem;"></i>
            Struktur Organisasi
        </a>

        <a href="{{ route('admin.demografi.edit') }}"
           class="{{ request()->routeIs('admin.demografi.*') ? 'bg-gray-900 text-white font-semibold' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
                  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <i class="fa-solid fa-chart-bar mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" style="text-align: center; line-height: 1.5rem;"></i>
            Demografis
        </a>

        <a href="{{ route('admin.anggaran.index') }}"
           class="{{ request()->routeIs('admin.anggaran.*') ? 'bg-gray-900 text-white font-semibold' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
                  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <i class="fa-solid fa-file-invoice-dollar mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" style="text-align: center; line-height: 1.5rem;"></i>
            APBDes
        </a>

        <a href="{{ route('admin.produk.index') }}"
           class="{{ request()->routeIs('admin.produk.*') ? 'bg-gray-900 text-white font-semibold' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
                  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <i class="fa-solid fa-shopping-basket mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" style="text-align: center; line-height: 1.5rem;"></i>
            Produk
        </a>

        <a href="{{ route('admin.kegiatan.index') }}"
           class="{{ request()->routeIs('admin.kegiatan.*') ? 'bg-gray-900 text-white font-semibold' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
                  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <i class="fa-solid fa-calendar-check mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" style="text-align: center; line-height: 1.5rem;"></i>
            Kegiatan
        </a>

        <a href="{{ route('admin.kontak.edit') }}"
           class="{{ request()->routeIs('admin.kontak.*') ? 'bg-gray-900 text-white font-semibold' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
                  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <i class="fa-solid fa-phone mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" style="text-align: center; line-height: 1.5rem;"></i>
            Kontak
        </a>
    </nav>
</div>

{{-- Profil User (Bagian Bawah Sidebar) --}}
<div class="flex-shrink-0 flex bg-gray-900 p-4">
    <a href="{{ route('profile.edit') }}" class="flex-shrink-0 w-full group block">
        <div class="flex items-center">
            <div>
                <img class="inline-block h-9 w-9 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=FFFFFF&background=1F2937" alt="">
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-white">{{ Auth::user()->name }}</p>
                <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">Lihat profil</p>
            </div>
        </div>
    </a>
</div>
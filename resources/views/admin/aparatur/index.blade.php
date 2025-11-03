@extends('layouts.admin')

@section('title', 'Struktur Organisasi')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800">
            Struktur Organisasi
        </h2>
        {{-- Tombol "Tambah Aparatur" DIHAPUS --}}
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- 1. TABEL SOTK --}}
    <h3 class="text-2xl font-semibold text-gray-700 mb-4 mt-6">
        SOTK Desa
    </h3>
    {{-- UBAH: overflow-hidden menjadi overflow-x-auto --}}
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        {{-- UBAH: min-w-full menjadi w-full --}}
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    {{-- UBAH: Tambahkan padding responsif px-2 md:px-6 --}}
                    <th scope="col" class="px-2 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                    <th scope="col" class="px-2 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th scope="col" class="px-2 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                    <th scope="col" class="relative px-2 md:px-6 py-3"><span class="sr-only">Aksi</span></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($sotk as $item)
                    <tr>
                        {{-- UBAH: Padding, ukuran gambar & ikon responsif --}}
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap">
                            @if ($item->foto)
                                <img src="{{ Storage::url($item->foto) }}" alt="{{ $item->nama }}" class="w-10 h-10 md:w-12 md:h-12 rounded-full object-cover">
                            @else
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                    <i class="fa-solid fa-user text-xl md:text-2xl text-gray-400"></i>
                                </div>
                            @endif
                        </td>
                        {{-- UBAH: Padding dan ukuran teks responsif --}}
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap text-xs md:text-sm font-medium text-gray-900">{{ $item->nama }}</td>
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap text-xs md:text-sm text-gray-500">{{ $item->jabatan }}</td>
                        {{-- UBAH: Padding dan ukuran tombol responsif --}}
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap text-right text-xs md:text-sm font-medium">
                            <a href="{{ route('admin.aparatur.edit', $item) }}" class="inline-flex items-center px-2 py-1 md:px-3 md:py-1.5 border border-gray-300 rounded-md shadow-sm text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                                Ubah
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 whitespace-nowrap text-sm text-gray-500 text-center">
                            Data SOTK sedang diproses oleh sistem. Silakan refresh halaman.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- 2. TABEL BPD --}}
    <h3 class="text-2xl font-semibold text-gray-700 mb-4 mt-10">
        Lembaga BPD
    </h3>
    {{-- UBAH: overflow-hidden menjadi overflow-x-auto --}}
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        {{-- UBAH: min-w-full menjadi w-full --}}
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    {{-- UBAH: Tambahkan padding responsif px-2 md:px-6 --}}
                    <th scope="col" class="px-2 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                    <th scope="col" class="px-2 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th scope="col" class="px-2 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                    <th scope="col" class="relative px-2 md:px-6 py-3"><span class="sr-only">Aksi</span></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($bpd as $item)
                    <tr>
                        {{-- UBAH: Padding, ukuran gambar & ikon responsif --}}
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap">
                            @if ($item->foto)
                                <img src="{{ Storage::url($item->foto) }}" alt="{{ $item->nama }}" class="w-10 h-10 md:w-12 md:h-12 rounded-full object-cover">
                            @else
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gray-100 flex items-center justify-center">
                                    <i class="fa-solid fa-user text-xl md:text-2xl text-gray-400"></i>
                                </div>
                            @endif
                        </td>
                        {{-- UBAH: Padding dan ukuran teks responsif --}}
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap text-xs md:text-sm font-medium text-gray-900">{{ $item->nama }}</td>
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap text-xs md:text-sm text-gray-500">{{ $item->jabatan }}</td>
                        {{-- UBAH: Padding dan ukuran tombol responsif --}}
                        <td class="px-2 md:px-6 py-2 md:py-4 whitespace-nowrap text-right text-xs md:text-sm font-medium">
                            <a href="{{ route('admin.aparatur.edit', $item) }}" class="inline-flex items-center px-2 py-1 md:px-3 md:py-1.5 border border-gray-300 rounded-md shadow-sm text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                                Ubah
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 whitespace-nowrap text-sm text-gray-500 text-center">
                            Data BPD sedang diproses oleh sistem. Silakan refresh halaman.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
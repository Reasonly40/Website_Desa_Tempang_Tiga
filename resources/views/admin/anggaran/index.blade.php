@extends('layouts.admin')
@section('title', 'Daftar Realisasi Anggaran')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800">
            Realisasi Anggaran
        </h2>
        <a href="{{ route('admin.anggaran.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 transition ease-in-out duration-150">
            <i class="fa-solid fa-plus mr-2"></i>
            Input Realisasi Baru
        </a>
    </div>
    
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Container Tabel dengan Tailwind --}}
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Pendapatan (Realisasi)</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Belanja (Realisasi)</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pembiayaan (Realisasi)</th>
                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @php
                    // Helper untuk format mata uang
                    function formatRupiah($angka) {
                        return 'Rp ' . number_format($angka, 0, ',', '.');
                    }
                @endphp

                @forelse ($anggaran as $item)
                    @php
                        // Hitung total di sini agar rapi
                        $totalPendapatan = $item->dana_desa + $item->bagi_hasil + $item->alokasi_dana_desa;
                        $totalBelanja = $item->penyelenggaraan_pemerintahan + 
                                        $item->pelaksanaan_pembangunan + 
                                        $item->pembinaan_kemasyarakatan + 
                                        $item->pemberdayaan_masyarakat + 
                                        $item->penanggulangan_bencana;
                    @endphp
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900">{{ $item->tahun }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ formatRupiah($totalPendapatan) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ formatRupiah($totalBelanja) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ formatRupiah($item->pembiayaan) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.anggaran.edit', $item) }}" class="inline-flex items-center px-3 py-1.5 border border-gray-300 rounded-md shadow-sm text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.anggaran.destroy', $item) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Yakin hapus data realisasi tahun {{ $item->tahun }}?')">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-red-600 hover:bg-red-700 transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 whitespace-nowrap text-sm text-gray-500 text-center">
                            Belum ada data realisasi anggaran.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        {{-- Paginasi (Tailwind akan otomatis men-style ini) --}}
        @if ($anggaran->hasPages())
            <div class="p-6 border-t border-gray-200">
                {{ $anggaran->links() }}
            </div>
        @endif
    </div>
@endsection
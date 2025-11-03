@extends('layouts.admin')
@section('title', 'Input Realisasi Anggaran')
@section('content')
    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Input Realisasi Anggaran Baru
    </h2>

    {{-- Form Card (Tailwind) --}}
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.anggaran.store') }}" method="POST">
            @csrf
            
            {{-- Grup Tahun --}}
            <div>
                <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun Realisasi</label>
                <input type="number" id="tahun" name="tahun" value="{{ old('tahun', date('Y')) }}" placeholder="Contoh: 2025" required
                       class="mt-1 block w-full md:w-1/3 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                @error('tahun') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
            </div>
            
            <hr class="my-6 border-t border-gray-200">

            {{-- Grid Pendapatan & Belanja --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-6">
                
                {{-- Kolom Pendapatan --}}
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Input Data Pendapatan (Realisasi)
                    </h3>
                    
                    <div>
                        <label for="dana_desa" class="block text-sm font-medium text-gray-700">Dana Desa</label>
                        <input type="number" id="dana_desa" name="dana_desa" value="{{ old('dana_desa', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('dana_desa') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label for="bagi_hasil" class="block text-sm font-medium text-gray-700">Bagi Hasil Pajak & Retribusi</label>
                        <input type="number" id="bagi_hasil" name="bagi_hasil" value="{{ old('bagi_hasil', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('bagi_hasil') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label for="alokasi_dana_desa" class="block text-sm font-medium text-gray-700">Alokasi Dana Desa</label>
                        <input type="number" id="alokasi_dana_desa" name="alokasi_dana_desa" value="{{ old('alokasi_dana_desa', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('alokasi_dana_desa') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>

                {{-- Kolom Pembelanjaan --}}
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Input Data Pembelanjaan (Realisasi)
                    </h3>
                    
                    <div>
                        <label for="penyelenggaraan_pemerintahan" class="block text-sm font-medium text-gray-700">Penyelenggaraan Pemerintahan Desa</label>
                        <input type="number" id="penyelenggaraan_pemerintahan" name="penyelenggaraan_pemerintahan" value="{{ old('penyelenggaraan_pemerintahan', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('penyelenggaraan_pemerintahan') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="pelaksanaan_pembangunan" class="block text-sm font-medium text-gray-700">Pelaksanaan Pembangunan Desa</label>
                        <input type="number" id="pelaksanaan_pembangunan" name="pelaksanaan_pembangunan" value="{{ old('pelaksanaan_pembangunan', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('pelaksanaan_pembangunan') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="pembinaan_kemasyarakatan" class="block text-sm font-medium text-gray-700">Pembinaan Kemasyarakatan</label>
                        <input type="number" id="pembinaan_kemasyarakatan" name="pembinaan_kemasyarakatan" value="{{ old('pembinaan_kemasyarakatan', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('pembinaan_kemasyarakatan') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="pemberdayaan_masyarakat" class="block text-sm font-medium text-gray-700">Pemberdayaan Masyarakat</label>
                        <input type="number" id="pemberdayaan_masyarakat" name="pemberdayaan_masyarakat" value="{{ old('pemberdayaan_masyarakat', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('pemberdayaan_masyarakat') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="penanggulangan_bencana" class="block text-sm font-medium text-gray-700">Penanggulangan Bencana & Mendesak</label>
                        <input type="number" id="penanggulangan_bencana" name="penanggulangan_bencana" value="{{ old('penanggulangan_bencana', 0) }}" required
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('penanggulangan_bencana') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            
            <hr class="my-6 border-t border-gray-200">
            
            {{-- Grup Pembiayaan --}}
            <div>
                <h3 class="text-lg font-semibold text-gray-800">
                    Input Data Pembiayaan (Realisasi)
                </h3>
                
                <div class="form-group mt-4 md:w-1/3">
                    <label for="pembiayaan" class="block text-sm font-medium text-gray-700">Pembiayaan</label>
                    <input type="number" id="pembiayaan" name="pembiayaan" value="{{ old('pembiayaan', 0) }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('pembiayaan') <div class="text-xs text-red-600">{{ $message }}</div> @enderror
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.anggaran.index') }}" class="mr-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 active:bg-blue-900 transition">
                    Simpan Realisasi
                </button>
            </div>
        </form>
    </div>
@endsection
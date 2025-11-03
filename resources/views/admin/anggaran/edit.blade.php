@extends('layouts.admin')
@section('title', 'Edit APBDes Tahun ' . $anggaran->tahun)
@section('content')
    
    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Edit APBDes Tahun: {{ $anggaran->tahun }} / Semester: {{ $anggaran->semester }}
    </h2>

    @php
        function renderInput($label, $name, $anggaranData, $realisasiData) {
            echo '<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">';
            echo '    <label for="' . $name . '_anggaran" class="block text-sm font-medium text-gray-700">' . $label . '</label>';
            echo '    <div class="grid grid-cols-2 gap-2">';
            echo '        <input type="number" id="' . $name . '_anggaran" name="' . $name . '_anggaran" value="' . old($name . '_anggaran', $anggaranData) . '" class="block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" placeholder="Anggaran" required>';
            echo '        <input type="number" id="' . $name . '_realisasi" name="' . $name . '_realisasi" value="' . old($name . '_realisasi', $realisasiData) . '" class="block w-full rounded-md border-gray-300 shadow-sm sm:text-sm" placeholder="Realisasi" required>';
            echo '    </div>';
            echo '</div>';
        }
    @endphp

    <form action="{{ route('admin.anggaran.update', $anggaran) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="bg-white p-6 md:p-8 rounded-lg shadow-md space-y-6">

            {{-- Tahun & Semester --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun APBDes</label>
                    <input type="number" id="tahun" name="tahun" value="{{ old('tahun', $anggaran->tahun) }}" placeholder="Contoh: 2025" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('tahun') border-red-500 @enderror sm:text-sm">
                    @error('tahun') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                    <select id="semester" name="semester" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('semester') border-red-500 @enderror sm:text-sm">
                        <option value="1" {{ old('semester', $anggaran->semester) == 1 ? 'selected' : '' }}>Semester 1</option>
                        <option value="2" {{ old('semester', $anggaran->semester) == 2 ? 'selected' : '' }}>Semester 2</option>
                    </select>
                    @error('semester') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <hr class="my-6">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                {{-- 1. PENDAPATAN --}}
                <div class="space-y-4 p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Pendapatan</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div></div>
                        <div class="grid grid-cols-2 gap-2">
                            <label class="block text-xs font-medium text-gray-500 text-center">Anggaran (Rp)</label>
                            <label class="block text-xs font-medium text-gray-500 text-center">Realisasi (Rp)</label>
                        </div>
                    </div>
                    @php
                        renderInput('Pendapatan Asli Desa', 'pendapatan_asli_desa', $anggaran->pendapatan_asli_desa_anggaran, $anggaran->pendapatan_asli_desa_realisasi);
                        renderInput('Pendapatan Transfer', 'pendapatan_transfer', $anggaran->pendapatan_transfer_anggaran, $anggaran->pendapatan_transfer_realisasi);
                        renderInput('Pendapatan Lain-lain', 'pendapatan_lain_lain', $anggaran->pendapatan_lain_lain_anggaran, $anggaran->pendapatan_lain_lain_realisasi);
                    @endphp
                </div>
                
                {{-- 2. PEMBELANJAAN --}}
                <div class="space-y-4 p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Pembelanjaan</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div></div>
                        <div class="grid grid-cols-2 gap-2">
                            <label class="block text-xs font-medium text-gray-500 text-center">Anggaran (Rp)</label>
                            <label class="block text-xs font-medium text-gray-500 text-center">Realisasi (Rp)</label>
                        </div>
                    </div>
                    @php
                        renderInput('Belanja Pegawai', 'belanja_pegawai', $anggaran->belanja_pegawai_anggaran, $anggaran->belanja_pegawai_realisasi);
                        renderInput('Belanja Barang & Jasa', 'belanja_barang_jasa', $anggaran->belanja_barang_jasa_anggaran, $anggaran->belanja_barang_jasa_realisasi);
                        renderInput('Belanja Modal', 'belanja_modal', $anggaran->belanja_modal_anggaran, $anggaran->belanja_modal_realisasi);
                        renderInput('Belanja Tidak Terduga', 'belanja_tidak_terduga', $anggaran->belanja_tidak_terduga_anggaran, $anggaran->belanja_tidak_terduga_realisasi);
                    @endphp
                </div>

                {{-- 3. PEMBIAYAAN --}}
                <div class="space-y-4 p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Pembiayaan</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div></div>
                        <div class="grid grid-cols-2 gap-2">
                            <label class="block text-xs font-medium text-gray-500 text-center">Anggaran (Rp)</label>
                            <label class="block text-xs font-medium text-gray-500 text-center">Realisasi (Rp)</label>
                        </div>
                    </div>
                    @php
                        renderInput('Penerimaan Pembiayaan', 'penerimaan_pembiayaan', $anggaran->penerimaan_pembiayaan_anggaran, $anggaran->penerimaan_pembiayaan_realisasi);
                        renderInput('Pengeluaran Pembiayaan', 'pengeluaran_pembiayaan', $anggaran->pengeluaran_pembiayaan_anggaran, $anggaran->pengeluaran_pembiayaan_realisasi);
                    @endphp
                </div>
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.anggaran.index') }}" class="mr-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 active:bg-blue-900 transition">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </form>
@endsection
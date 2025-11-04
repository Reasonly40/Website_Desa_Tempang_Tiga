@extends('layouts.admin')

@section('title', 'Edit Kegiatan')

{{-- HAPUS BLOK @push('scripts') UNTUK TINYMCE --}}

@section('content')
    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Edit Dokumentasi Kegiatan
    </h2>

    {{-- Form Card (Tailwind) --}}
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul Kegiatan</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul', $kegiatan->judul) }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('judul') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Pelaksanaan</label>
                    <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $kegiatan->tanggal) }}" required
                           class="mt-1 block w-full md:w-1/3 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('tanggal') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    {{-- UBAH: Textarea biasa --}}
                    <textarea id="deskripsi" name="deskripsi" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
                    @error('deskripsi') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi Kegiatan (Opsional)</label>
                    <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi', $kegiatan->lokasi) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Contoh: Balai Desa">
                    @error('lokasi') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="penanggung_jawab" class="block text-sm font-medium text-gray-700">Penanggung Jawab (Opsional)</label>
                    <input type="text" id="penanggung_jawab" name="penanggung_jawab" value="{{ old('penanggung_jawab', $kegiatan->penanggung_jawab) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Contoh: Kasi Pemerintahan">
                    @error('penanggung_jawab') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar (Opsional)</label>
                    <input type="file" id="gambar" name="gambar"
                           class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="mt-1 text-xs text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</p>
                    @error('gambar') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    
                    @if ($kegiatan->gambar)
                        <div class="mt-4 flex items-center gap-3">
                            {{-- PERBAIKAN: Menggunakan Storage::url() --}}
                            <img src="{{ Storage::url($kegiatan->gambar) }}" alt="{{ $kegiatan->judul }}" class="w-24 h-24 rounded-lg object-cover">
                            <p class="text-sm text-gray-500">Foto saat ini.</p>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.kegiatan.index') }}" class="mr-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 active:bg-blue-900 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
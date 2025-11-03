@extends('layouts.admin')

@section('title', 'Edit Aparatur')

@section('content')
    <h2 class="text-3xl font-bold text-gray-800 mb-6" style="font-family: 'Merriweather', serif;">
        Edit Aparatur Desa
    </h2>

    {{-- Form Card (Tailwind) --}}
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
        <form method="POST" action="{{ route('admin.aparatur.update', $aparatur) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 gap-6">
                {{-- Nama --}}
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="nama" type="text" name="nama" value="{{ old('nama', $aparatur->nama) }}" required autofocus
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('nama') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                {{-- Jabatan --}}
                <div>
                    <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                    <input id="jabatan" type="text" name="jabatan" value="{{ old('jabatan', $aparatur->jabatan) }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('jabatan') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
                
                {{-- Urutan --}}
                <div>
                    <label for="urutan" class="block text-sm font-medium text-gray-700">Nomor Urut</label>
                    <input id="urutan" type="number" name="urutan" value="{{ old('urutan', $aparatur->urutan) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <p class="mt-1 text-xs text-gray-500">Untuk sorting (1 = paling atas).</p>
                    @error('urutan') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                {{-- Foto --}}
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700">Upload Foto Baru (Opsional)</label>
                    <input id="foto" type="file" name="foto"
                           class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('foto') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    
                    @if ($aparatur->foto)
                        <div class="mt-4 flex items-center gap-3">
                            <img src="{{ Storage::url($aparatur->foto) }}" alt="{{ $aparatur->nama }}" class="w-16 h-16 rounded-full object-cover">
                            <p class="text-sm text-gray-500">Foto saat ini. Upload baru untuk mengganti.</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.aparatur.index') }}" class="mr-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 active:bg-blue-900 transition">
                    Perbarui
                </button>
            </div>
        </form>
    </div>
@endsection
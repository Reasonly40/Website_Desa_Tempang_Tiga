@extends('layouts.admin')

@section('title', 'Edit Aparatur')

@section('content')
    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Edit Aparatur Desa
    </h2>

    {{-- Form Card (Tailwind) --}}
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
        <form method="POST" action="{{ route('admin.aparatur.update', $aparatur) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            {{-- Kita bungkus grid dengan x-data untuk mengelola state Hapus Foto --}}
            <div class="grid grid-cols-1 gap-6" x-data="{ showModal: false, hapusFoto: false }">
                
                {{-- Jabatan (Read Only) --}}
                <div>
                    <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                    <input id="jabatan" type="text" name="jabatan" value="{{ $aparatur->jabatan }}" readonly
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm sm:text-sm bg-gray-100 cursor-not-allowed">
                    <p class="mt-1 text-xs text-gray-500">Jabatan tidak dapat diubah.</p>
                </div>

                {{-- Nama --}}
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="nama" type="text" name="nama" value="{{ old('nama', $aparatur->nama) }}" required autofocus
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('nama') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
                
                {{-- Foto --}}
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700">Upload Foto Baru (Opsional)</label>
                    {{-- File input akan disable jika foto ditandai hapus --}}
                    <input id="foto" type="file" name="foto"
                           class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                           :disabled="hapusFoto">
                    @error('foto') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                    
                    {{-- Hidden input untuk mengirim flag 'hapus_foto' --}}
                    <input type="hidden" name="hapus_foto" :value="hapusFoto ? '1' : '0'">

                    @if ($aparatur->foto)
                        {{-- Tampilkan foto dan tombol hapus HANYA jika 'hapusFoto' false --}}
                        <div x-show="!hapusFoto">
                            <div class="mt-4 flex items-center gap-3">
                                <img src="{{ Storage::url($aparatur->foto) }}" alt="{{ $aparatur->nama }}" class="w-16 h-16 rounded-full object-cover">
                                <p class="text-sm text-gray-500">Foto saat ini.</p>
                            </div>

                            {{-- Tombol Hapus Foto (bukan checkbox) --}}
                            <button type="button" @click.prevent="showModal = true"
                                    class="mt-2 inline-flex items-center px-3 py-1.5 border border-red-300 rounded-md shadow-sm text-xs font-medium text-red-700 bg-white hover:bg-red-50 transition">
                                <i class="fa-solid fa-trash-can mr-2"></i>
                                Hapus Foto
                            </button>
                        </div>

                        {{-- Tampilkan pesan ini JIKA 'hapusFoto' true --}}
                        <div x-show="hapusFoto" style="display: none;" class="mt-4 p-3 bg-red-50 text-red-700 rounded-md">
                            <i class="fa-solid fa-check-circle mr-2"></i>
                            Foto telah ditandai untuk dihapus. Klik "Perbarui" untuk menyimpan.
                        </div>

                        {{-- Modal/Popup Konfirmasi --}}
                        <div x-show="showModal" style="display: none;" 
                             class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50"
                             x-transition:enter="ease-out duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="ease-in duration-200"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0">
                            
                            <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-sm" 
                                 @click.away="showModal = false"
                                 x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave="ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                
                                <h3 class="text-lg font-medium text-gray-900">Hapus Foto</h3>
                                <p class="mt-2 text-sm text-gray-600">Apakah Anda yakin ingin menghapus foto ini? Foto akan dikosongkan setelah Anda menekan "Perbarui".</p>
                                <div class="mt-6 flex justify-end space-x-3">
                                    <button type="button" @click="showModal = false"
                                            class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        Batal
                                    </button>
                                    <button type="button" @click="hapusFoto = true; showModal = false"
                                            class="px-4 py-2 bg-red-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-red-700">
                                        Yakin, Hapus
                                    </button>
                                </div>
                            </div>
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
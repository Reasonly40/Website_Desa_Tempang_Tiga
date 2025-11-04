@extends('layouts.admin')
@section('title', 'Tambah Produk Baru')

@section('content')
    <h2 class="text-3xl font-bold text-gray-800 mb-6">
        Tambah Produk UMKM Desa
    </h2>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('nama_produk') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                    <input type="number" id="harga" name="harga" value="{{ old('harga', 0) }}" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Contoh: 15000">
                    @error('harga') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                {{-- TAMBAHKAN INPUT KONTAK SELLER --}}
                <div>
                    <label for="seller_contact" class="block text-sm font-medium text-gray-700">Nomor WA Penjual (Opsional)</label>
                    <input type="text" id="seller_contact" name="seller_contact" value="{{ old('seller_contact') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Contoh: 628123456789 (awali dengan 62)">
                    <p class="mt-1 text-xs text-gray-500">Awali dengan 62 (contoh: 62812...).</p>
                    @error('seller_contact') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Singkat</label>
                    <textarea id="deskripsi" name="deskripsi" rows="3" maxlength="100" required
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                              placeholder="Deskripsi singkat produk, maks 100 karakter.">{{ old('deskripsi') }}</textarea>
                    <p class="mt-1 text-xs text-gray-500">Maksimal 100 karakter.</p>
                    @error('deskripsi') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Upload Gambar Produk</label>
                    <input type="file" id="image" name="image" required
                           class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('image') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
            
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.produk.index') }}" class="mr-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 active:bg-blue-900 transition">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
@endsection
@extends('layouts.admin')

@section('title', 'Daftar Kegiatan')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800">
            Dokumentasi Kegiatan
        </h2>
        <a href="{{ route('admin.kegiatan.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 transition ease-in-out duration-150">
            <i class="fa-solid fa-plus mr-2"></i>
            Tambah Kegiatan Baru
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- 
      Bungkus tabel dan modal dengan x-data
      untuk mengelola state modal
    --}}
    <div x-data="{ showModal: false, deleteAction: '', deleteMessage: '' }">
        {{-- Container Tabel dengan Tailwind --}}
        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul Kegiatan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($kegiatan as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" class="w-20 h-20 rounded-md object-cover">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->judul }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('admin.kegiatan.edit', $item->id) }}" class="inline-flex items-center px-3 py-1.5 border border-gray-300 rounded-md shadow-sm text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                                    Edit
                                </a>
                                
                                {{-- Tombol Hapus Baru: Memicu Modal --}}
                                <button type="button"
                                        @click.prevent="
                                            showModal = true; 
                                            deleteAction = '{{ route('admin.kegiatan.destroy', $item->id) }}';
                                            deleteMessage = 'Yakin hapus kegiatan \'{{ $item->judul }}\'?';
                                        "
                                        class="inline-flex items-center px-3 py-1.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-red-600 hover:bg-red-700 transition ml-2">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 whitespace-nowrap text-sm text-gray-500 text-center">
                                Belum ada data kegiatan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
            @if ($kegiatan->hasPages())
                <div class="p-6 border-t border-gray-200">
                    {{ $kegiatan->links() }}
                </div>
            @endif
        </div>

        {{-- ===== MODAL/POPUP KONFIRMASI HAPUS ===== --}}
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
                
                <h3 class="text-lg font-medium text-gray-900">Konfirmasi Hapus</h3>
                <p class="mt-2 text-sm text-gray-600" x-text="deleteMessage">Apakah Anda yakin?</p>
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" @click="showModal = false"
                            class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Batal
                    </button>
                    {{-- Form ini akan mengirimkan request HAPUS --}}
                    <form :action="deleteAction" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-4 py-2 bg-red-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-red-700">
                            Yakin, Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@extends('layouts.admin')
@section('title', 'Daftar APBDes')
@section('content')
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center items-start gap-4 mb-6">
        <h2 class="text-3xl font-bold text-gray-800">
            Daftar APBDes
        </h2>
        <a href="{{ route('admin.anggaran.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 transition ease-in-out duration-150">
            <i class="fa-solid fa-plus mr-2"></i>
            Input APBDes Baru
        </a>
    </div>
    
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Helper Function untuk format Rupiah dan render baris --}}
    @php
        function formatRupiah($number) {
            return 'Rp ' . number_format($number, 0, ',', '.');
        }

        function renderRow($label, $anggaran, $realisasi) {
            echo '<div class="grid grid-cols-3 gap-2 py-2 border-b">';
            echo '    <span class="text-sm text-gray-700 col-span-1">' . $label . '</span>';
            echo '    <span class="text-sm text-gray-900 text-right col-span-1">' . formatRupiah($anggaran) . '</span>';
            echo '    <span class="text-sm text-gray-900 text-right col-span-1">' . formatRupiah($realisasi) . '</span>';
            echo '</div>';
        }
    @endphp

    {{-- 
      Daftar Kartu APBDes per Tahun 
      Dibungkus dengan x-data untuk mengelola state modal
    --}}
    <div class="space-y-6" x-data="{ showModal: false, deleteAction: '', deleteMessage: '' }">
        @forelse ($anggaran as $item)
            @php
                // Hitung Semua Total
                $totalPendapatanAnggaran = $item->pendapatan_asli_desa_anggaran + $item->pendapatan_transfer_anggaran + $item->pendapatan_lain_lain_anggaran;
                $totalPendapatanRealisasi = $item->pendapatan_asli_desa_realisasi + $item->pendapatan_transfer_realisasi + $item->pendapatan_lain_lain_realisasi;
                
                $totalBelanjaAnggaran = $item->belanja_pegawai_anggaran + $item->belanja_barang_jasa_anggaran + $item->belanja_modal_anggaran + $item->belanja_tidak_terduga_anggaran;
                $totalBelanjaRealisasi = $item->belanja_pegawai_realisasi + $item->belanja_barang_jasa_realisasi + $item->belanja_modal_realisasi + $item->belanja_tidak_terduga_realisasi;
            @endphp

            <div class="bg-white shadow-md rounded-lg p-4 md:p-6">
                
                {{-- Header Kartu: Tahun, Semester, dan Tombol Aksi --}}
                <div class="flex flex-col sm:flex-row justify-between sm:items-center border-b pb-3 mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 sm:mb-0">
                        Tahun: {{ $item->tahun }} / Semester: {{ $item->semester }}
                    </h3>
                    <div class="flex-shrink-0">
                        <a href="{{ route('admin.anggaran.edit', $item) }}" class="inline-flex items-center px-3 py-1.5 border border-gray-300 rounded-md shadow-sm text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 transition">
                            Edit
                        </a>

                        {{-- Tombol Hapus Baru: Menggunakan Alpine.js --}}
                        <button type="button" 
                                @click.prevent="
                                    showModal = true; 
                                    deleteAction = '{{ route('admin.anggaran.destroy', $item) }}';
                                    deleteMessage = 'Yakin hapus data APBDes tahun {{ $item->tahun }} / Semester {{ $item->semester }}?';
                                "
                                class="inline-flex items-center px-3 py-1.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-red-600 hover:bg-red-700 transition ml-2">
                            Hapus
                        </button>

                        {{-- Form Hapus Lama (Disembunyikan, akan dipicu oleh modal) --}}
                        <form id="delete-form-{{ $item->id }}" action="{{ route('admin.anggaran.destroy', $item) }}" method="POST" class="hidden">
                            @csrf 
                            @method('DELETE')
                        </form>
                    </div>
                </div>

                {{-- Grid 3 Kolom untuk Data --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                    
                    {{-- 1. PENDAPATAN --}}
                    <div class="space-y-2">
                        <h4 class="text-lg font-semibold text-gray-800 border-b pb-2">Pendapatan</h4>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="text-xs font-medium text-gray-500 col-span-1">Uraian</span>
                            <span class="text-xs font-medium text-gray-500 text-right col-span-1">Anggaran</span>
                            <span class="text-xs font-medium text-gray-500 text-right col-span-1">Realisasi</span>
                        </div>
                        @php
                            renderRow('Pendapatan Asli Desa', $item->pendapatan_asli_desa_anggaran, $item->pendapatan_asli_desa_realisasi);
                            renderRow('Pendapatan Transfer', $item->pendapatan_transfer_anggaran, $item->pendapatan_transfer_realisasi);
                            renderRow('Pendapatan Lain-lain', $item->pendapatan_lain_lain_anggaran, $item->pendapatan_lain_lain_realisasi);
                        @endphp
                        <div class="grid grid-cols-3 gap-2 font-bold text-gray-900 border-t-2 pt-2 mt-2">
                            <span class="text-sm col-span-1">Jumlah Pendapatan</span>
                            <span class="text-sm text-right col-span-1">{{ formatRupiah($totalPendapatanAnggaran) }}</span>
                            <span class="text-sm text-right col-span-1">{{ formatRupiah($totalPendapatanRealisasi) }}</span>
                        </div>
                    </div>
                    
                    {{-- 2. PEMBELANJAAN --}}
                    <div class="space-y-2">
                        <h4 class="text-lg font-semibold text-gray-800 border-b pb-2">Pembelanjaan</h4>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="text-xs font-medium text-gray-500 col-span-1">Uraian</span>
                            <span class="text-xs font-medium text-gray-500 text-right col-span-1">Anggaran</span>
                            <span class="text-xs font-medium text-gray-500 text-right col-span-1">Realisasi</span>
                        </div>
                        @php
                            renderRow('Belanja Pegawai', $item->belanja_pegawai_anggaran, $item->belanja_pegawai_realisasi);
                            renderRow('Belanja Barang & Jasa', $item->belanja_barang_jasa_anggaran, $item->belanja_barang_jasa_realisasi);
                            renderRow('Belanja Modal', $item->belanja_modal_anggaran, $item->belanja_modal_realisasi);
                            renderRow('Belanja Tidak Terduga', $item->belanja_tidak_terduga_anggaran, $item->belanja_tidak_terduga_realisasi);
                        @endphp
                        <div class="grid grid-cols-3 gap-2 font-bold text-gray-900 border-t-2 pt-2 mt-2">
                            <span class="text-sm col-span-1">Jumlah Pembelanjaan</span>
                            <span class="text-sm text-right col-span-1">{{ formatRupiah($totalBelanjaAnggaran) }}</span>
                            <span class="text-sm text-right col-span-1">{{ formatRupiah($totalBelanjaRealisasi) }}</span>
                        </div>
                    </div>

                    {{-- 3. PEMBIAYAAN --}}
                    <div class="space-y-2">
                        <h4 class="text-lg font-semibold text-gray-800 border-b pb-2">Pembiayaan</h4>
                        <div class="grid grid-cols-3 gap-2">
                            <span class="text-xs font-medium text-gray-500 col-span-1">Uraian</span>
                            <span class="text-xs font-medium text-gray-500 text-right col-span-1">Anggaran</span>
                            <span class="text-xs font-medium text-gray-500 text-right col-span-1">Realisasi</span>
                        </div>
                        @php
                            renderRow('Penerimaan Pembiayaan', $item->penerimaan_pembiayaan_anggaran, $item->penerimaan_pembiayaan_realisasi);
                            renderRow('Pengeluaran Pembiayaan', $item->pengeluaran_pembiayaan_anggaran, $item->pengeluaran_pembiayaan_realisasi);
                            
                            $nettoAnggaran = $item->penerimaan_pembiayaan_anggaran - $item->pengeluaran_pembiayaan_anggaran;
                            $nettoRealisasi = $item->penerimaan_pembiayaan_realisasi - $item->pengeluaran_pembiayaan_realisasi;
                        @endphp
                        <div class="grid grid-cols-3 gap-2 font-bold text-gray-900 border-t-2 pt-2 mt-2">
                            <span class="text-sm col-span-1">Pembiayaan Netto</span>
                            <span class="text-sm text-right col-span-1">{{ formatRupiah($nettoAnggaran) }}</span>
                            <span class="text-sm text-right col-span-1">{{ formatRupiah($nettoRealisasi) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="bg-white shadow-md rounded-lg p-6">
                <p class="text-center text-gray-500">
                    Belum ada data APBDes.
                </p>
            </div>
        @endforelse

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
                    {{-- 
                      Tombol ini akan mencari form dengan 'deleteAction' sebagai action-nya 
                      dan men-submit form tersebut.
                    --}}
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
        {{-- ====================================== --}}

    </div>
    
    @if ($anggaran->hasPages())
        <div class="mt-6 p-4 bg-white shadow-md rounded-lg border-t border-gray-200">
            {{ $anggaran->links() }}
        </div>
    @endif
@endsection
@extends('layouts.admin')
@section('title', 'Daftar Realisasi Anggaran')
@section('content')
    <h2>Daftar Realisasi Anggaran</h2>
    <a href="{{ route('admin.anggaran.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Input Realisasi Baru</a>
    <hr style="margin-bottom: 20px;">
    
    {{-- Menampilkan pesan sukses --}}
    @if(session('success'))
        <div class="alert-success" style="background-color: #d4edda; color: #155724; padding: 12px 15px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif

    <table class="data-table">
        <thead>
            <tr>
                <th>Tahun</th>
                <th>Total Pendapatan (Realisasi)</th>
                <th>Total Belanja (Realisasi)</th>
                <th>Pembiayaan (Realisasi)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
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
                    <td><strong>{{ $item->tahun }}</strong></td>
                    <td>{{ formatRupiah($totalPendapatan) }}</td>
                    <td>{{ formatRupiah($totalBelanja) }}</td>
                    <td>{{ formatRupiah($item->pembiayaan) }}</td>
                    <td>
                        <a href="{{ route('admin.anggaran.edit', $item) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('admin.anggaran.destroy', $item) }}" method="POST" style="display: inline-block;">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin hapus data realisasi tahun {{ $item->tahun }}?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" style="text-align: center;">Belum ada data realisasi anggaran.</td></tr>
            @endforelse
        </tbody>
    </table>
    
    {{-- Menampilkan paginasi --}}
    @if ($anggaran->hasPages())
        <div style="margin-top: 20px;">
            {{ $anggaran->links() }}
        </div>
    @endif
@endsection


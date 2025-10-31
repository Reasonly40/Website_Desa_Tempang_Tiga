@extends('layouts.admin')
@section('title', 'Daftar Realisasi Anggaran')
@section('content')
    <h2>Daftar Realisasi Anggaran</h2>
    <a href="{{ route('admin.anggaran.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Buat Realisasi Baru</a>
    <hr style="margin-bottom: 20px;">
    
    <table class="data-table">
        <thead>
            <tr>
                <th>Tahun</th>
                <th>Total Pendapatan</th>
                <th>Total Belanja</th>
                <th>Pembiayaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggaran as $item)
                @php
                    $total_pendapatan = $item->dana_desa + $item->bagi_hasil + $item->alokasi_dana_desa;
                    $total_belanja = $item->penyelenggaraan_pemerintahan + $item->pelaksanaan_pembangunan + $item->pembinaan_kemasyarakatan + $item->pemberdayaan_masyarakat + $item->penanggulangan_bencana;
                @endphp
                <tr>
                    <td><strong>{{ $item->tahun }}</strong></td>
                    <td>Rp {{ number_format($total_pendapatan, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($total_belanja, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($item->pembiayaan, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('admin.anggaran.edit', $item) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('admin.anggaran.destroy', $item) }}" method="POST" style="display: inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin hapus data realisasi tahun {{ $item->tahun }}?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" style="text-align: center;">Belum ada data realisasi anggaran.</td></tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 20px;">{{ $anggaran->links() }}</div>
@endsection

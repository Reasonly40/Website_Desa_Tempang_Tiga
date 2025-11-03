@extends('layouts.admin')

@section('title', 'Daftar Kegiatan')

@section('content')
    <h2>Daftar Dokumentasi Kegiatan</h2>
    <a href="{{ route('admin.kegiatan.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Tambah Kegiatan Baru</a>
    <hr style="margin-bottom: 20px;">

    {{-- Menampilkan pesan sukses setelah operasi CRUD --}}
    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="data-table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul Kegiatan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kegiatan as $item)
                <tr>
                    <td>
                        {{-- PERBAIKAN: Ganti 'image' menjadi 'gambar' dan 'title' menjadi 'judul' --}}
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" width="100">
                    </td>
                    {{-- PERBAIKAN: Ganti 'title' menjadi 'judul' --}}
                    <td>{{ $item->judul }}</td>
                    {{-- PERBAIKAN: Ganti 'activity_date' menjadi 'tanggal' --}}
                    <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</td>
                    <td>
                        {{-- Link Edit sudah benar --}}
                        <a href="{{ route('admin.kegiatan.edit', $item->id) }}" class="btn-edit">Edit</a>
                        
                        {{-- Tombol Hapus sudah benar --}}
                        <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Belum ada data kegiatan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Link Paginasi --}}
    <div style="margin-top: 20px;">
        {{ $kegiatan->links() }}
    </div>

@endsection

@push('styles')
<style>
    .data-table { width: 100%; border-collapse: collapse; }
    .data-table th, .data-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
    .data-table th { background-color: #f4f4f4; }
    .data-table tr:nth-child(even) { background-color: #f9f9f9; }
    .data-table img { border-radius: 5px; }
    
    .btn-submit { background-color: #006400; color: #fff; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; font-size: 14px; }
    .btn-edit { background-color: #ffc107; color: #333; padding: 8px 12px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; font-size: 14px; }
    .btn-delete { background-color: #dc3545; color: #fff; padding: 8px 12px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; }
    
    .alert-success { background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;}
</style>
@endpush
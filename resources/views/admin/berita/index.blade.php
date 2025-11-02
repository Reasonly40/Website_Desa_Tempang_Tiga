@extends('layouts.admin')

@section('title', 'Daftar Berita')

@section('content')
    <h2>Daftar Berita</h2>
    <a href="{{ route('admin.berita.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Tulis Berita Baru</a>
    <hr style="margin-bottom: 20px;">

    {{-- Menampilkan pesan sukses setelah operasi CRUD --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="data-table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tgl Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop data berita --}}
            @forelse ($berita as $item)
                <tr>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" width="100" style="border-radius: 5px;">
                        @else
                            <span style="font-size: 12px; color: #888;">Tanpa Gambar</span>
                        @endif
                    </td>
                    <td>{{ $item->title }}</td>
                    {{-- Menampilkan nama penulis (membutuhkan relasi 'user' di model Berita) --}}
                    {{-- 'user' mungkin null jika user_id tidak diatur saat 'store' --}}
                    <td>{{ $item->user->name ?? 'N/A' }}</td>
                    <td>{{ $item->created_at->format('d F Y') }}</td>
                    <td>
                        {{-- Tombol Edit (Sudah benar) --}}
                        <a href="{{ route('admin.berita.edit', $item->id) }}" class="btn-edit">Edit</a>
                        
                        {{-- Tombol Hapus (Sudah benar) --}}
                        <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada data berita.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Link Paginasi --}}
    <div style="margin-top: 20px;">
        {{ $berita->links() }}
    </div>

@endsection

@push('styles')
{{-- Menambahkan CSS konsisten dari file edit --}}
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
    .error-message { color: red; font-size: 0.9em; margin-top: 5px; }
</style>
@endpush

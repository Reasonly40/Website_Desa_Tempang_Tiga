@extends('layouts.admin')
@section('title', 'Daftar Dokumen Perencanaan')
@section('content')
    <h2>Daftar Dokumen Perencanaan</h2>
    <a href="{{ route('admin.perencanaan.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Unggah Dokumen Baru</a>
    <hr style="margin-bottom: 20px;">
    @if (session('success')) <div class="alert-success">{{ session('success') }}</div> @endif

    <table class="data-table">
        <thead>
            <tr>
                <th>Judul Dokumen</th>
                <th>Kategori</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($perencanaan as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category }}</td>
                    <td><a href="{{ asset('storage/' . $item->file_path) }}" target="_blank">Lihat File</a></td>
                    <td>
                        <a href="{{ route('admin.perencanaan.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('admin.perencanaan.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin hapus dokumen ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" style="text-align: center;">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>
    <div style="margin-top: 20px;">{{ $perencanaan->links() }}</div>
@endsection
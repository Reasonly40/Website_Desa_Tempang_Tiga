@extends('layouts.admin')
@section('title', 'Daftar Berita Desa')
@section('content')
    <h2>Daftar Berita Desa</h2>
    <a href="{{ route('admin.berita.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Tulis Berita Baru</a>
    <hr style="margin-bottom: 20px;">
    @if (session('success')) <div class="alert-success">{{ session('success') }}</div> @endif

    <table class="data-table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul Berita</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($berita as $item)
                <tr>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" width="100">
                        @else
                            <small>Tanpa Gambar</small>
                        @endif
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d F Y H:i') : '-' }}</td>
                    <td>
                        <a href="{{ route('admin.berita.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin hapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" style="text-align: center;">Belum ada berita.</td></tr>
            @endforelse
        </tbody>
    </table>
    <div style="margin-top: 20px;">{{ $berita->links() }}</div>
@endsection
@extends('layouts.admin')

@section('title', 'Daftar Produk Unggulan')

@section('content')
    <h2>Daftar Produk Unggulan</h2>
    <a href="{{ route('admin.produk.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Tambah Produk Baru</a>
    <hr style="margin-bottom: 20px;">

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="data-table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kontak Penjual</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produk as $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" width="100">
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->seller_contact ?? '-' }}</td>
                    <td>
                        <a href="{{ route('admin.produk.edit', $item->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $produk->links() }}
    </div>
@endsection
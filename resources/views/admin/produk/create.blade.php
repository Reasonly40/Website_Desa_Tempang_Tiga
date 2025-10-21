@extends('layouts.admin')

@section('title', 'Tambah Produk Baru')

@section('content')
    <h2>Tambah Produk Unggulan Baru</h2>
    <hr style="margin-bottom: 20px;">

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="seller_contact">Kontak Penjual (Cth: 0812xxxx)</label>
            <input type="text" id="seller_contact" name="seller_contact" value="{{ old('seller_contact') }}">
            @error('seller_contact') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
            @error('description') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Upload Gambar Produk</label>
            <input type="file" id="image" name="image" required>
            @error('image') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit">Simpan Produk</button>
    </form>
@endsection
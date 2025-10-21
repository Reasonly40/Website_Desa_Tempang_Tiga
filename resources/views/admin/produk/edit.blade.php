@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
    <h2>Edit Produk Unggulan</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" id="name" name="name" value="{{ old('name', $produk->name) }}" required>
            @error('name') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="seller_contact">Kontak Penjual (Cth: 0812xxxx)</label>
            <input type="text" id="seller_contact" name="seller_contact" value="{{ old('seller_contact', $produk->seller_contact) }}">
            @error('seller_contact') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" rows="5" required>{{ old('description', $produk->description) }}</textarea>
            @error('description') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Upload Gambar (Opsional)</label>
            <br>
            <img src="{{ asset('storage/' . $produk->image) }}" alt="Gambar Lama" width="150" style="margin-bottom: 10px; border-radius: 5px;">
            <input type="file" id="image" name="image">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
            @error('image') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Simpan Perubahan</button>
    </form>
@endsection
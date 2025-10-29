@extends('layouts.admin')
@section('title', 'Edit Berita')
@section('content')
    <h2>Edit Berita</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Judul Berita</label>
            <input type="text" id="title" name="title" value="{{ old('title', $berita->title) }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="content">Isi Berita</label>
            <textarea id="content" name="content" rows="15" class="wysiwyg-editor">{{ old('content', $berita->content) }}</textarea>
            @error('content') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Upload Gambar Utama Baru (Opsional)</label>
            @if($berita->image)
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Lama" width="150" style="margin-bottom: 10px; border-radius: 5px;">
            @endif
            <input type="file" id="image" name="image">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
            @error('image') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Simpan Perubahan</button>
    </form>
@endsection
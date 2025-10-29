@extends('layouts.admin')
@section('title', 'Tulis Berita Baru')
@section('content')
    <h2>Tulis Berita Baru</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Berita</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="content">Isi Berita</label>
            <textarea id="content" name="content" rows="15" class="wysiwyg-editor">{{ old('content') }}</textarea>
            @error('content') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Upload Gambar Utama (Opsional)</label>
            <input type="file" id="image" name="image">
            @error('image') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit">Simpan & Publikasikan</button>
    </form>
@endsection
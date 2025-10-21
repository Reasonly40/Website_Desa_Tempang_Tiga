@extends('layouts.admin')
@section('title', 'Edit Dokumen Perencanaan')
@section('content')
    <h2>Edit Dokumen Perencanaan</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.perencanaan.update', $perencanaan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul Dokumen</label>
            <input type="text" id="title" name="title" value="{{ old('title', $perencanaan->title) }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="category">Kategori (Cth: RPJMDes, RKPDes)</label>
            <input type="text" id="category" name="category" value="{{ old('category', $perencanaan->category) }}" required>
            @error('category') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="file">Upload File Baru (Opsional)</label>
            <p>File saat ini: <a href="{{ asset('storage/' . $perencanaan->file_path) }}" target="_blank">Lihat File</a></p>
            <input type="file" id="file" name="file">
            <small>Kosongkan jika tidak ingin mengganti file.</small>
            @error('file') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Simpan Perubahan</button>
    </form>
@endsection
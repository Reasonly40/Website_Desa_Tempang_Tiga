@extends('layouts.admin')
@section('title', 'Unggah Dokumen Perencanaan')
@section('content')
    <h2>Unggah Dokumen Perencanaan Baru</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.perencanaan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Dokumen (Cth: RPJMDes 2025-2030)</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="category">Kategori (Cth: RPJMDes, RKPDes)</label>
            <input type="text" id="category" name="category" value="{{ old('category') }}" required>
            @error('category') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="file">Upload File (PDF, Excel, Word)</label>
            <input type="file" id="file" name="file" required>
            @error('file') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn-submit">Simpan Dokumen</button>
    </form>
@endsection
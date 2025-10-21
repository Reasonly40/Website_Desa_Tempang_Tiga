@extends('layouts.admin')
@section('title', 'Edit Dokumen Anggaran')
@section('content')
    <h2>Edit Dokumen Anggaran</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.anggaran.update', $anggaran->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul Dokumen</label>
            <input type="text" id="title" name="title" value="{{ old('title', $anggaran->title) }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="year">Tahun</label>
            <input type="number" id="year" name="year" value="{{ old('year', $anggaran->year) }}" required>
            @error('year') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="description">Deskripsi (Opsional)</label>
            <textarea id="description" name="description" rows="3">{{ old('description', $anggaran->description) }}</textarea>
            @error('description') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="file">Upload File Baru (Opsional)</label>
            <p>File saat ini: <a href="{{ asset('storage/' . $anggaran->file_path) }}" target="_blank">Lihat File</a></p>
            <input type="file" id="file" name="file">
            <small>Kosongkan jika tidak ingin mengganti file.</small>
            @error('file') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Simpan Perubahan</button>
    </form>
@endsection
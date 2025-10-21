@extends('layouts.admin')
@section('title', 'Unggah Dokumen Anggaran')
@section('content')
    <h2>Unggah Dokumen Anggaran Baru</h2>
    <hr style="margin-bottom: 20px;">

    <form action="{{ route('admin.anggaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Dokumen (Cth: APBDes 2025)</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="year">Tahun</label>
            <input type="number" id="year" name="year" value="{{ old('year', date('Y')) }}" required>
            @error('year') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="description">Deskripsi (Opsional)</label>
            <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="file">Upload File (PDF, Excel, Word)</label>
            <input type="file" id="file" name="file" required>
            @error('file') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn-submit">Simpan Dokumen</button>
    </form>
@endsection
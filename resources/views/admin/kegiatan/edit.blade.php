@extends('layouts.admin')

@section('title', 'Edit Kegiatan')

@section('content')
    <h2>Edit Dokumentasi Kegiatan</h2>
    <hr style="margin-bottom: 20px;">

    {{-- Action dan Method sudah benar --}}
    <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            {{-- PERBAIKAN: Sesuaikan dengan kolom 'judul' --}}
            <label for="judul">Judul Kegiatan</label>
            <input type="text" id="judul" name="judul" value="{{ old('judul', $kegiatan->judul) }}" required>
            @error('judul') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            {{-- PERBAIKAN: Sesuaikan dengan kolom 'tanggal' --}}
            <label for="tanggal">Tanggal Pelaksanaan</label>
            <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal', $kegiatan->tanggal) }}" required>
            @error('tanggal') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            {{-- PERBAIKAN: Sesuaikan dengan kolom 'deskripsi' --}}
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
            @error('deskripsi') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            {{-- PERBAIKAN: Sesuaikan dengan kolom 'gambar' --}}
            <label for="gambar">Upload Gambar (Opsional)</label>
            <br>
            {{-- Tampilkan gambar lama dari kolom 'gambar' --}}
            <img src="{{ asset('storage/' . $kegiatan->gambar) }}" alt="Gambar Lama" width="150" style="margin-bottom: 10px; border-radius: 5px;">
            <input type="file" id="gambar" name="gambar">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
            @error('gambar') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Simpan Perubahan</button>
    </form>
@endsection

@push('styles')
{{-- CSS Anda sudah benar --}}
<style>
    .form-group { margin-bottom: 15px; }
    .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
    .form-group input, .form-group textarea { width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; font-family: inherit; font-size: 1rem;}
    .form-group input[type="file"] { padding: 3px; }
    .btn-submit { background-color: #006400; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
    .error-message { color: red; font-size: 0.9em; margin-top: 5px; }
</style>
@endpush
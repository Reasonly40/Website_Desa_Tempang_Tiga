@extends('layouts.admin')
@section('title', 'Tambah Kegiatan Baru')

@section('content')
    <h2>Tambah Dokumentasi Kegiatan Baru</h2>
    <hr style="margin-bottom: 20px;">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
    <label for="judul">Judul Kegiatan</label>
    {{-- Ubah 'name' menjadi 'judul' --}}
    <input type="text" id="judul" name="judul" value="{{ old('judul') }}" required>
    @error('judul') <div class="error-message">{{ $message }}</div> @enderror
</div>

        <div class="form-group">
            <label for="tanggal">Tanggal Pelaksanaan</label>
            {{-- Ubah 'name' menjadi 'tanggal' --}}
            <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
            @error('tanggal') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            {{-- Ubah 'name' menjadi 'deskripsi' --}}
            <textarea id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="gambar">Upload Gambar</label>
            {{-- Ubah 'name' menjadi 'gambar' --}}
            <input type="file" id="gambar" name="gambar" required>
            @error('gambar') <div class="error-message">{{ $message }}</div> @enderror
        </div>
    
        <button type="submit" class="btn-submit">Simpan Kegiatan</button>
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
    .alert-success { background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;}
    .error-message { color: red; font-size: 0.9em; margin-top: 5px; }
</style>
@endpush
@extends('layouts.admin')

@section('title', 'Tambah Kegiatan Baru')

@section('content')
    <h2>Tambah Dokumentasi Kegiatan Baru</h2>
    <hr style="margin-bottom: 20px;">

    {{-- Menampilkan pesan sukses setelah submit --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulir --}}
    <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Kegiatan</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="activity_date">Tanggal Pelaksanaan</label>
            <input type="date" id="activity_date" name="activity_date" value="{{ old('activity_date') }}" required>
            @error('activity_date') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
            @error('description') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Upload Gambar</label>
            <input type="file" id="image" name="image" required>
            @error('image') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit">Simpan Kegiatan</button>
    </form>
@endsection

@push('styles')
{{-- CSS tambahan khusus untuk halaman ini bisa diletakkan di sini --}}
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
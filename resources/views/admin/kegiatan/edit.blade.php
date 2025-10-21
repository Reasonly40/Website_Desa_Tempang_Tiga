@extends('layouts.admin')

@section('title', 'Edit Kegiatan')

@section('content')
    <h2>Edit Dokumentasi Kegiatan</h2>
    <hr style="margin-bottom: 20px;">

    {{-- 
      PERUBAHAN 1:
      Arahkan 'action' ke route 'update' dan kirim ID kegiatannya.
    --}}
    <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- PERUBAHAN 2: Wajib ada untuk memberi tahu Laravel ini adalah proses UPDATE --}}

        <div class="form-group">
            <label for="title">Judul Kegiatan</label>
            {{-- PERUBAHAN 3: Isi 'value' dengan data lama --}}
            <input type="text" id="title" name="title" value="{{ old('title', $kegiatan->title) }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="activity_date">Tanggal Pelaksanaan</label>
             {{-- PERUBAHAN 4: Isi 'value' dengan data lama --}}
            <input type="date" id="activity_date" name="activity_date" value="{{ old('activity_date', $kegiatan->activity_date) }}" required>
            @error('activity_date') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
             {{-- PERUBAHAN 5: Isi textarea dengan data lama --}}
            <textarea id="description" name="description" rows="5" required>{{ old('description', $kegiatan->description) }}</textarea>
            @error('description') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Upload Gambar (Opsional)</label>
            <br>
            <img src="{{ asset('storage/' . $kegiatan->image) }}" alt="Gambar Lama" width="150" style="margin-bottom: 10px; border-radius: 5px;">
            <input type="file" id="image" name="image">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
            @error('image') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Simpan Perubahan</button>
    </form>
@endsection

@push('styles')
{{-- (Tidak ada perubahan pada CSS, jadi kita biarkan saja) --}}
<style>
    .form-group { margin-bottom: 15px; }
    .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
    .form-group input, .form-group textarea { width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; font-family: inherit; font-size: 1rem;}
    .form-group input[type="file"] { padding: 3px; }
    .btn-submit { background-color: #006400; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
    .error-message { color: red; font-size: 0.9em; margin-top: 5px; }
</style>
@endpush
@extends('layouts.admin')

@section('title', 'Edit Info Kontak')

@section('content')
    <h2>Edit Informasi Kontak Desa</h2>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.kontak.update') }}" class="form-card">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="alamat">Alamat Kantor Desa</label>
            <input id="alamat" type="text" name="alamat" value="{{ old('alamat', $kontak->alamat ?? '') }}" required autofocus>
            @error('alamat') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email Resmi</label>
            <input id="email" type="email" name="email" value="{{ old('email', $kontak->email ?? '') }}" required>
            @error('email') <span class="error-text">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-group">
            <label for="telepon">Telepon / WhatsApp</label>
            <input id="telepon" type="text" name="telepon" value="{{ old('telepon', $kontak->telepon ?? '') }}" required>
            @error('telepon') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="link_gmaps">Link Embed Google Maps (Opsional)</label>
            <textarea id="link_gmaps" name="link_gmaps" rows="4">{{ old('link_gmaps', $kontak->link_gmaps ?? '') }}</textarea>
            <p style="font-size: 12px; color: #666; margin-top: 5px;">Dapatkan dari Google Maps > Share > Embed a map. Salin hanya URL di dalam `src="..."`.</p>
            @error('link_gmaps') <span class="error-text">{{ $message }}</span> @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>
        </div>
    </form>
@endsection
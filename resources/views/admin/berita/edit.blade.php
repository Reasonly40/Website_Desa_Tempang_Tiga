@extends('layouts.admin')
@section('title', 'Edit Berita')
@section('content')
    <h2>Edit Berita</h2>
    <hr style="margin-bottom: 20px;">

    {{-- 
      PERBAIKAN 1: Tambahkan enctype="multipart/form-data" di sini 
    --}}
    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="title">Judul Berita</label>
            <input type="text" id="title" name="title" value="{{ old('title', $berita->title) }}" required>
            @error('title') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="content">Isi Berita</label>
            <textarea id="content" name="content" rows="15" class="wysiwyg-editor">{{ old('content', $berita->content) }}</textarea>
            @error('content') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="image">Upload Gambar Utama Baru (Opsional)</label>
            @if($berita->image)
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Lama" width="150" style="margin-bottom: 10px; border-radius: 5px;">
            @endif
            <input type="file" id="image" name="image">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
            @error('image') <div class="error-message">{{ $message }}</div> @enderror
        </div>
        
        <button type="submit" class="btn-submit" style="background-color: #ffc107; color: #333;">Simpan Perubahan</button>
    </form>
@endsection

{{-- 
  PERBAIKAN 2: Tambahkan skrip TinyMCE di sini
  (Sama seperti di file create.blade.php)
--}}
@push('scripts')
<script src="https://cdn.tiny.cloud/1/KEY_ANDA_DISINI/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#content',  // Menargetkan <textarea> dengan id="content"
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
@endpush
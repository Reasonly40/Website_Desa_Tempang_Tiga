@extends('layouts.admin')
@section('title', 'Daftar Berita Desa')
@section('content')
    <h2>Daftar Berita Desa</h2>
    <a href="{{ route('admin.berita.create') }}" class="btn-submit" style="margin-bottom: 20px; display: inline-block;">+ Tulis Berita Baru</a>
    <hr style="margin-bottom: 20px;">

    {{-- 
      PERBAIKAN 1: Pesan Sukses (Flash Message) dengan styling yang lebih baik 
    --}}
    @if(session('success'))
        <div class="alert-success" style="background-color: #d4edda; color: #155724; padding: 12px 15px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 12px 15px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #f5c6cb;">
            {{ session('error') }}
        </div>
    @endif
    {{-- Akhir Perbaikan 1 --}}


    <table class="data-table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul Berita</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($berita as $item)
                <tr>
                    <td>
                        @if($item->image)
                            {{-- 
                              PERBAIKAN 2: Tambahkan style agar gambar lebih rapi 
                            --}}
                            <img src="{{ asset('storage/' . $item->image) }}" 
                                 alt="{{ $item->title }}" 
                                 style="width: 100px; height: 75px; object-fit: cover; border-radius: 5px;">
                        @else
                            <small>Tanpa Gambar</small>
                        @endif
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>
                        {{-- Penggunaan Carbon di sini sudah sangat bagus --}}
                        {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d F Y H:i') : '-' }}
                    </td>
                    <td>
                        {{-- 
                          PERBAIKAN 3: Gunakan Route Model Binding ($item) 
                        --}}
                        <a href="{{ route('admin.berita.edit', $item) }}" class="btn-edit">Edit</a>
                        
                        {{-- 
                          PERBAIKAN 4: Gunakan Route Model Binding ($item) 
                          Kode confirm() Anda sudah benar, jadi kita pertahankan.
                        --}}
                        <form action="{{ route('admin.berita.destroy', $item) }}" method="POST" style="display: inline-block;">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn-delete" 
                                    onclick="return confirm('Yakin hapus berita ini: \'{{ $item->title }}\'?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center; padding: 20px;">Belum ada berita.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination link Anda sudah benar --}}
    <div style="margin-top: 20px;">
        {{ $berita->links() }}
    </div>
@endsection

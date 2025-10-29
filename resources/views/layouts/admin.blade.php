<aside class="sidebar">
    <h3>Menu Admin</h3>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <hr>
        
        {{-- Tambahkan Menu Berita --}}
        <a href="{{ route('admin.berita.index') }}">Daftar Berita</a>
        <a href="{{ route('admin.berita.create') }}">Tulis Berita Baru</a>
        <hr>
        
        <a href="{{ route('admin.kegiatan.index') }}">Kegiatan</a>
        {{-- <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a> --}} {{-- Komentari atau hapus jika sudah ada di atas --}}
        {{-- <hr> --}}
        
        <a href="{{ route('admin.produk.index') }}">Produk</a>
        {{-- <a href="{{ route('admin.produk.create') }}">Tambah Produk</a> --}}
        {{-- <hr> --}}
        
        <a href="{{ route('admin.anggaran.index') }}">Anggaran</a>
        {{-- <a href="{{ route('admin.anggaran.create') }}">Tambah Anggaran</a> --}}
        {{-- <hr> --}}
        
        <a href="{{ route('admin.perencanaan.index') }}">Perencanaan</a>
        {{-- <a href="{{ route('admin.perencanaan.create') }}">Tambah Perencanaan</a> --}}
        <hr>

        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); this.closest('form').submit();"
               style="color: #ffc107;">
                Logout
            </a>
        </form>
    </nav>
</aside>
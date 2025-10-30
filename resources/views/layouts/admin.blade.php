<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard Admin</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body class="admin-body">
    
    <aside class="sidebar">
        <h3>Menu Admin</h3>
        <nav>
            {{-- Link Dasbor Utama --}}
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <hr>

            {{-- Link CRUD Berita --}}
            <a href="{{ route('admin.berita.index') }}">Berita</a>

            {{-- Link CRUD Kegiatan --}}
            <a href="{{ route('admin.kegiatan.index') }}">Kegiatan</a>

            {{-- Link CRUD Produk --}}
            <a href="{{ route('admin.produk.index') }}">Produk</a>
            
            {{-- Link CRUD Anggaran --}}
            <a href="{{ route('admin.anggaran.index') }}">Anggaran</a>
            
            {{-- Link CRUD Perencanaan --}}
            <a href="{{ route('admin.perencanaan.index') }}">Perencanaan</a>
            
            {{-- Link CRUD Aparatur (jika sudah dibuat) --}}
            {{-- <a href="{{ route('admin.aparatur.index') }}">Aparatur Desa</a> --}}

            <hr>

            {{-- Tombol Logout --}}
            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                @csrf
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); this.closest('form').submit();"
                   style="color: #ffc107;"> {{-- Warna kuning agar menonjol --}}
                    Logout
                </a>
            </form>
        </nav>
    </aside>

    <main class="main-content">
        <div class="content-box">
            @yield('content')
        </div>
    </main>

    <script>
      tinymce.init({
        selector: 'textarea.wysiwyg-editor', // Target textarea dengan class ini
        plugins: 'code table lists link image',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image'
      });
    </script>
</body>
</html>
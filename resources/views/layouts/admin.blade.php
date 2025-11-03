<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard Admin</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    {{-- 
      PERBAIKAN: 
      1. Hapus <script src="...tinymce..."> dari sini.
         Script akan di-load oleh halaman anak (create/edit) melalui @push.
         
      2. Tambahkan style untuk sidebar link yang 'active' dan 'flash message'.
         Anda bisa pindahkan ini ke style.css Anda jika mau.
    --}}
    <style>
        /* Style untuk link sidebar yang aktif */
        .sidebar nav a.active {
            background-color: #4b543b;
            color: #ffffff;
            font-weight: bold;
        }
        /* Style untuk flash message */
        .alert-success {
            background-color: #d4edda; color: #155724; padding: 12px 15px; 
            border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da; color: #721c24; padding: 12px 15px; 
            border-radius: 5px; margin-bottom: 15px; border: 1px solid #f5c6cb;
        }
    </style>

</head>
<body class="admin-body">
    
    <aside class="sidebar">
        <h3>Menu Admin</h3>
        <nav>
            {{-- PERBAIKAN: Tambahkan pengecekan routeIs() untuk class 'active' --}}
            <a href="{{ route('admin.dashboard') }}" 
               class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
               Dashboard
            </a>
            <hr>

            <a href="{{ route('admin.berita.index') }}" 
               class="{{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
               Berita
            </a>
            
            <a href="{{ route('admin.kegiatan.index') }}"
               class="{{ request()->routeIs('admin.kegiatan.*') ? 'active' : '' }}">
               Kegiatan
            </a>
            
            <a href="{{ route('admin.produk.index') }}"
               class="{{ request()->routeIs('admin.produk.*') ? 'active' : '' }}">
               Produk
            </a>
            
            <a href="{{ route('admin.anggaran.index') }}"
               class="{{ request()->routeIs('admin.anggaran.*') ? 'active' : '' }}">
               Anggaran
            </a>
            
            <a href="{{ route('admin.perencanaan.index') }}"
               class="{{ request()->routeIs('admin.perencanaan.*') ? 'active' : '' }}">
               Perencanaan
            </a>

            <hr>

            {{-- Tombol Logout (Kode Anda sudah benar) --}}
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

    <main class="main-content">
        <div class="content-box">
            
            {{-- 
              PERBAIKAN: Tambahkan penampil Flash Message (Pesan Sukses/Error) di sini 
            --}}
            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    {{-- 
      PERBAIKAN: 
      1. Hapus <script>tinymce.init(...)</script> dari sini.
         Ini sudah ditangani oleh @push di halaman create/edit.
         
      2. TAMBAHKAN @stack('scripts') di sini.
         Ini adalah bagian paling PENTING. Ini akan "menarik" semua
         skrip yang Anda push dari halaman anak (seperti skrip TinyMCE).
    --}}
    @stack('scripts')

</body>
</html>
```eof
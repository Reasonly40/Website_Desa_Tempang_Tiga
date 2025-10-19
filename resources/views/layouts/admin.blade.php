<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { display: flex; background-color: #f8f9fa; }
        .sidebar { width: 250px; background-color: #343a40; color: white; min-height: 100vh; padding: 20px; }
        .sidebar h3 { text-align: center; margin-bottom: 30px; color: #fff; }
        .sidebar a { display: block; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; margin-bottom: 5px; }
        .sidebar a:hover { background-color: #495057; }
        .main-content { flex-grow: 1; padding: 40px; }
        .content-box { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    
    <aside class="sidebar">
        <h3>Menu Admin</h3>
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a>
            <a href="#">Tambah Produk</a>
            <a href="#">Kelola Anggaran</a>
            <a href="#">Kelola Perencanaan</a>
        </nav>
    </aside>

    <main class="main-content">
        <div class="content-box">
            @yield('content')
        </div>
    </main>

</body>
</html>
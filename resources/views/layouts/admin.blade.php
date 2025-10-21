<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard Admin</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body class="admin-body">
    
    <aside class="sidebar">
        <h3>Menu Admin</h3>
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.kegiatan.index') }}">Kegiatan</a>
            <a href="{{ route('admin.produk.index') }}">Produk</a>
            <a href="{{ route('admin.anggaran.index') }}">Anggaran</a>
            <a href="{{ route('admin.perencanaan.index') }}">Perencanaan</a>
        </nav>
    </aside>

    <main class="main-content">
        <div class="content-box">
            @yield('content')
        </div>
    </main>

</body>
</html>
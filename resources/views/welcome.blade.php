<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Desa Tempang Tiga</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">Desa Tempang Tiga</div>
            <nav>
                <ul>
                    <li><a href="#profil">Profil Desa</a></li>
                    <li><a href="#transparansi">Transparansi</a></li>
                    <li><a href="#kegiatan">Kegiatan</a></li>
                    <li><a href="#produk">Produk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="beranda" class="hero">
            <div class="container">
                <h1>Membangun Desa, Menyejahterakan Warga</h1>
                <p>Situs Resmi Pemerintah Desa Tempang Tiga</p>
            </div>
        </section>

        <section id="profil">
            <div class="container">
                <h2>Profil Desa</h2>
                <div class="grid-container">
                    <div class="card">
                        <div class="card-content">
                            <h3>Sejarah & Potensi</h3>
                            <p>Jelaskan sejarah singkat desa di sini. Paparkan juga berbagai potensi unggulan yang dimiliki, mulai dari pertanian, perkebunan, hingga potensi pariwisata alam dan budaya.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>Administrasi & Demografi</h3>
                            <p>Informasi mengenai struktur pemerintahan desa, data kependudukan (jumlah jiwa, mata pencaharian), serta layanan administrasi bagi warga dapat ditampilkan di sini.</p>
                        </div>
                    </div>
                    <div class="card">
                         <img src="{{ asset('images/peta-desa.jpg') }}" alt="Peta Desa">
                        <div class="card-content">
                            <h3>Peta Desa</h3>
                            <p>Peta wilayah administrasi desa yang menunjukkan batas-batas wilayah dan lokasi fasilitas umum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="transparansi">
            <div class="container">
                <h2>Transparansi Desa</h2>
                <div class="grid-container">
                    <div class="transparansi-item">
                        <h3>Anggaran Desa</h3>
                        <p>Akses laporan Anggaran Pendapatan dan Belanja Desa (APBDes) terbaru secara terbuka untuk publik.</p>
                        {{-- Tombol akan mengarah ke file terbaru, jika ada --}}
                        @if ($anggaranTerbaru)
                            <a href="{{ asset('storage/' . $anggaranTerbaru->file_path) }}" class="btn" target="_blank">Lihat Laporan Anggaran</a>
                        @else
                            <p>Belum ada dokumen yang diunggah.</p>
                        @endif
                    </div>
                    <div class="transparansi-item">
                        <h3>Perencanaan Pembangunan</h3>
                        <p>Lihat dokumen Rencana Pembangunan Jangka Menengah Desa (RPJMDes) terbaru.</p>
                         {{-- Tombol akan mengarah ke file terbaru, jika ada --}}
                        @if ($perencanaanTerbaru)
                             <a href="{{ asset('storage/' . $perencanaanTerbaru->file_path) }}" class="btn" target="_blank">Lihat Dokumen Perencanaan</a>
                        @else
                             <p>Belum ada dokumen yang diunggah.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        
        <section id="kegiatan">
            <div class="container">
                <h2>Dokumentasi Kegiatan Desa</h2>
                <div class="grid-container">

                    @forelse ($kegiatan as $item)
                        <div class="card">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                            @else
                                <img src="https://via.placeholder.com/400x300.png?text=Tidak+Ada+Gambar" alt="{{ $item->title }}">
                            @endif
                            <div class="card-content">
                                <h3>{{ $item->title }}</h3>
                                <p>{{ Str::limit($item->description, 100) }}</p>
                            </div>
                        </div>
                    @empty
                        <p style="text-align: center; grid-column: 1 / -1;">Belum ada data kegiatan untuk ditampilkan.</p>
                    @endforelse

                </div>
            </div>
        </section>

        <section id="produk">
            <div class="container">
                <h2>Produk Unggulan Desa</h2>
                <div class="grid-container">
                    
                    @forelse ($produk as $item)
                        <div class="card">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                            @else
                                <img src="https://via.placeholder.com/400x300.png?text=Tidak+Ada+Gambar" alt="{{ $item->name }}">
                            @endif
                            <div class="card-content">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ Str::limit($item->description, 100) }}</p>
                            </div>
                        </div>
                    @empty
                        <p style="text-align: center; grid-column: 1 / -1;">Belum ada data produk unggulan untuk ditampilkan.</p>
                    @endforelse

                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Pemerintah Desa Tempang Tiga. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>
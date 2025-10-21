<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Desa Tempang Tiga</title>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
         integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
         crossorigin=""/>

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
                <h1>Membangun Desa, Sejahterakan Warga</h1>
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
                            <p>Jelaskan sejarah singkat desa di sini...</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3>Administrasi & Demografi</h3>
                            <p>Informasi mengenai struktur pemerintahan desa...</p>
                        </div>
                    </div>

                    <div class="card">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31911.936754818566!2d124.82436833285101!3d1.1660521963973975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328747379b334dd7%3A0x2554057277419f28!2sTempang%20Tiga%2C%20Langowan%20Utara%2C%20Minahasa%20Regency%2C%20North%20Sulawesi!5e0!3m2!1sen!2sid!4v1761014174827!5m2!1sen!2sid" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

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
                        <p>Akses laporan Anggaran Pendapatan dan Belanja Desa (APBDes) terbaru...</p>
                        @if ($anggaranTerbaru)
                            <a href="{{ asset('storage/' . $anggaranTerbaru->file_path) }}" class="btn" target="_blank">Lihat Laporan Anggaran</a>
                        @else
                            <p>Belum ada dokumen yang diunggah.</p>
                        @endif
                    </div>
                    <div class="transparansi-item">
                        <h3>Perencanaan Pembangunan</h3>
                        <p>Lihat dokumen Rencana Pembangunan Jangka Menengah Desa (RPJMDes) terbaru.</p>
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

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
         integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
         crossorigin=""></script>

    <script>
        // =======================================================
        // GANTI KOORDINAT INI DENGAN KOORDINAT DESA ANDA
        // Anda bisa dapatkan dari Google Maps (klik kanan -> salin)
        // =======================================================
        var Lattitude = 1.1855; // Ganti ini (Contoh: Desa Tempang Tiga)
        var Longitude = 124.7839; // Ganti ini (Contoh: Desa Tempang Tiga)
        var zoomLevel = 15; // Ganti level zoom (13-18 biasanya bagus)

        // Inisialisasi peta
        var map = L.map('map').setView([Lattitude, Longitude], zoomLevel);

        // Menambahkan Tile Layer (dasar peta) dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // (Opsional) Menambahkan penanda (marker) di lokasi desa
        var marker = L.marker([Lattitude, Longitude]).addTo(map);

        // (Opsional) Menambahkan popup pada marker
        marker.bindPopup("<b>Desa Tempang Tiga</b>").openPopup();
    </script>

</body>
</html>
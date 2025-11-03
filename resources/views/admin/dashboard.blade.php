@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <h2>Dashboard Admin</h2>
    <p>Selamat datang di panel admin Website Desa Tempang Tiga.</p>
    <hr style="margin-bottom: 20px;">

    <h4>Ringkasan Konten</h4>
    <div class="dashboard-grid">

        {{-- Card Statistik Kegiatan --}}
        <div class="stat-card">
            {{-- Menampilkan jumlah kegiatan, pastikan variabel $jumlahKegiatan dikirim dari DashboardController --}}
            <h3>{{ $jumlahKegiatan ?? 0 }}</h3>
            <p>Total Kegiatan</p>
            {{-- Tautan ke halaman daftar kegiatan --}}
            <a href="{{ route('admin.kegiatan.index') }}">Lihat Detail &rarr;</a>
        </div>

        {{-- Card Statistik Produk --}}
        <div class="stat-card">
            {{-- Menampilkan jumlah produk, pastikan variabel $jumlahProduk dikirim dari DashboardController --}}
            <h3>{{ $jumlahProduk ?? 0 }}</h3>
            <p>Total Produk</p>
            {{-- Tautan ke halaman daftar produk --}}
            <a href="{{ route('admin.produk.index') }}">Lihat Detail &rarr;</a>
        </div>

        {{-- Card Statistik Anggaran --}}
        <div class="stat-card">
            {{-- Menampilkan jumlah dokumen anggaran, pastikan variabel $jumlahAnggaran dikirim dari DashboardController --}}
            <h3>{{ $jumlahAnggaran ?? 0 }}</h3>
            <p>Dokumen Anggaran</p>
            {{-- Tautan ke halaman daftar anggaran --}}
            <a href="{{ route('admin.anggaran.index') }}">Lihat Detail &rarr;</a>
        </div>

        {{-- Card Statistik Perencanaan --}}
        <div class="stat-card">
            {{-- Menampilkan jumlah dokumen perencanaan, pastikan variabel $jumlahPerencanaan dikirim dari DashboardController --}}
            <h3>{{ $jumlahPerencanaan ?? 0 }}</h3>
            <p>Dokumen Perencanaan</p>
            {{-- Tautan ke halaman daftar perencanaan --}}
            <a href="{{ route('admin.perencanaan.index') }}">Lihat Detail &rarr;</a>
        </div>

        {{-- Tambahkan card lain di sini jika ada fitur baru --}}

    </div>
@endsection

{{-- Anda bisa menambahkan style khusus untuk halaman dashboard di sini jika perlu --}}
{{-- @push('styles')
<style>
    /* CSS tambahan untuk dashboard */
</style>
@endpush --}}

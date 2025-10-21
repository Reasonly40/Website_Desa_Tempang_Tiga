@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <h2>Dashboard Admin</h2>
    <p>Selamat datang di panel admin Website Desa Tempang Tiga.</p>
    <hr style="margin-bottom: 20px;">

    <h4>Ringkasan Konten</h4>
    <div class="dashboard-grid">

        <div class="stat-card">
            <h3>{{ $jumlahKegiatan }}</h3>
            <p>Total Kegiatan</p>
            <a href="{{ route('admin.kegiatan.index') }}">Lihat Detail &rarr;</a>
        </div>

        <div class="stat-card">
            <h3>{{ $jumlahProduk }}</h3>
            <p>Total Produk</p>
            {{-- DISESUAIKAN --}}
            <a href="{{ route('admin.produk.index') }}">Lihat Detail &rarr;</a>
        </div>

        <div class="stat-card">
            <h3>{{ $jumlahAnggaran }}</h3>
            <p>Dokumen Anggaran</p>
            {{-- DISESUAIKAN --}}
            <a href="{{ route('admin.anggaran.index') }}">Lihat Detail &rarr;</a>
        </div>

        <div class="stat-card">
            <h3>{{ $jumlahPerencanaan }}</h3>
            <p>Dokumen Perencanaan</p>
            {{-- DISESUAIKAN --}}
            <a href="{{ route('admin.perencanaan.index') }}">Lihat Detail &rarr;</a>
        </div>

    </div>
@endsection
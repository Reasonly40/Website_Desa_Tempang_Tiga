@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <h2 class="w-full text-3xl font-bold text-gray-800 text-left">
        Dashboard Admin
    </h2>
    
    <p class="mt-2 text-lg text-gray-600">
        Selamat datang di panel admin Website Desa Tempang Tiga.
    </p>

    <hr class="my-6 border-t border-gray-200">

    <h4 class="text-base font-semibold text-gray-500 uppercase tracking-wider mb-4">
        Ringkasan Konten
    </h4>

    <div class="dashboard-grid">

        <div class="stat-card">
            <h3>{{ $jumlahKegiatan ?? 0 }}</h3>
            <p>Total Kegiatan</p>
            <a href="{{ route('admin.kegiatan.index') }}">Lihat Detail &rarr;</a>
        </div>

        <div class="stat-card">
            <h3>{{ $jumlahProduk ?? 0 }}</h3>
            <p>Total Produk</p>
            <a href="{{ route('admin.produk.index') }}">Lihat Detail &rarr;</a>
        </div>

    </div>
@endsection
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perencanaan extends Model
{
    use HasFactory;

    /**
     * PERBAIKAN: Menghapus properti $table.
     *
     * Kode SQL Anda menggunakan nama tabel 'perencanaans' (plural).
     * Secara default, Laravel (Eloquent) akan otomatis mencari nama tabel plural
     * untuk model 'Perencanaan', yaitu 'perencanaans'.
     *
     * Kita hapus baris 'protected $table = 'perencanaan';' agar kembali ke default.
     */
    // protected $table = 'perencanaan'; // Dihapus untuk menggunakan default 'perencanaans'

    /**
     * The attributes that are mass assignable.
     *
     * PERBAIKAN: Menyesuaikan $fillable dengan kolom tabel SQL baru Anda.
     */
    protected $fillable = [
        'title',
        'category',
        'file_path',
    ];
}


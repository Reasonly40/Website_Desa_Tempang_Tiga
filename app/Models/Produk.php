<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan.
     */
    protected $table = 'produk';

    /**
     * Kolom yang boleh diisi secara massal.
     * (PERBAIKAN: disesuaikan dengan form)
     */
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'seller_contact',
        'image',
    ];
}
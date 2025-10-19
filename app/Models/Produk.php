<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model // <-- Pastikan namanya "Produk"
{
    use HasFactory;

    // Jangan lupa tambahkan ini karena Anda tidak pakai 's' di nama tabel
    protected $table = 'produk'; 

    /**
     * Kolom yang boleh diisi secara massal.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'description',
        'image',
        'seller_contact',
    ];
}
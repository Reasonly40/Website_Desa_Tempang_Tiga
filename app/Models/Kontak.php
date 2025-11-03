<?php
// Lokasi: app/Models/Kontak.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    // Tentukan nama tabel agar tidak menjadi 'kontaks'
    protected $table = 'kontak';

    // Izinkan semua field diisi
    protected $guarded = [];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perencanaan extends Model // <-- Pastikan namanya "Perencanaan"
{
    use HasFactory;

    // WAJIB ADA karena nama tabel Anda tunggal
    protected $table = 'perencanaan';
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    /**
     * Kolom yang boleh diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'judul',        // Ganti dari 'title'
        'deskripsi',    // Ganti dari 'description'
        'tanggal',      // Ganti dari 'activity_date'
        'gambar',       // Ganti dari 'image'
        'lokasi',
        'penanggung_jawab',
    ];
}
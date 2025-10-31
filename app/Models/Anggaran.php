<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tahun',
        'dana_desa',
        'bagi_hasil',
        'alokasi_dana_desa',
        'penyelenggaraan_pemerintahan',
        'pelaksanaan_pembangunan',
        'pembinaan_kemasyarakatan',
        'pemberdayaan_masyarakat',
        'penanggulangan_bencana',
        'pembiayaan',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    use HasFactory;

    protected $table = 'anggaran';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tahun',
        'semester',
        // Pendapatan
        'pendapatan_asli_desa_anggaran',
        'pendapatan_asli_desa_realisasi',
        'pendapatan_transfer_anggaran',
        'pendapatan_transfer_realisasi',
        'pendapatan_lain_lain_anggaran',
        'pendapatan_lain_lain_realisasi',
        // Belanja
        'belanja_pegawai_anggaran',
        'belanja_pegawai_realisasi',
        'belanja_barang_jasa_anggaran',
        'belanja_barang_jasa_realisasi',
        'belanja_modal_anggaran',
        'belanja_modal_realisasi',
        'belanja_tidak_terduga_anggaran',
        'belanja_tidak_terduga_realisasi',
        // Pembiayaan
        'penerimaan_pembiayaan_anggaran',
        'penerimaan_pembiayaan_realisasi',
        'pengeluaran_pembiayaan_anggaran',
        'pengeluaran_pembiayaan_realisasi',
    ];
}
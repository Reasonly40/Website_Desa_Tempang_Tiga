<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggaran', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->tinyInteger('semester')->default(1);

            // 1. PENDAPATAN
            $table->bigInteger('pendapatan_asli_desa_anggaran')->default(0);
            $table->bigInteger('pendapatan_asli_desa_realisasi')->default(0);
            
            $table->bigInteger('pendapatan_transfer_anggaran')->default(0);
            $table->bigInteger('pendapatan_transfer_realisasi')->default(0);
            
            $table->bigInteger('pendapatan_lain_lain_anggaran')->default(0);
            $table->bigInteger('pendapatan_lain_lain_realisasi')->default(0);

            // 2. PEMBELANJAAN
            $table->bigInteger('belanja_pegawai_anggaran')->default(0);
            $table->bigInteger('belanja_pegawai_realisasi')->default(0);
            
            $table->bigInteger('belanja_barang_jasa_anggaran')->default(0);
            $table->bigInteger('belanja_barang_jasa_realisasi')->default(0);
            
            $table->bigInteger('belanja_modal_anggaran')->default(0);
            $table->bigInteger('belanja_modal_realisasi')->default(0);
            
            $table->bigInteger('belanja_tidak_terduga_anggaran')->default(0);
            $table->bigInteger('belanja_tidak_terduga_realisasi')->default(0);

            // 3. PEMBIAYAAN
            $table->bigInteger('penerimaan_pembiayaan_anggaran')->default(0);
            $table->bigInteger('penerimaan_pembiayaan_realisasi')->default(0);
            
            $table->bigInteger('pengeluaran_pembiayaan_anggaran')->default(0);
            $table->bigInteger('pengeluaran_pembiayaan_realisasi')->default(0);

            $table->timestamps();

            $table->unique(['tahun', 'semester']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggaran');
    }
};
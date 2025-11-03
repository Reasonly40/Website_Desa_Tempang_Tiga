<?php
// database/migrations/2025_11_03_133948_create_demografi_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Pastikan nama class-nya adalah nama file migrasi Anda
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Ini adalah kode yang seharusnya ada di sini
        Schema::create('data_demografis', function (Blueprint $table) {
            $table->id();

            // 1. Kependudukan
            $table->integer('penduduk_total')->default(0);
            $table->integer('kk_total')->default(0);
            $table->integer('laki_0_15')->default(0);
            $table->integer('laki_16_55')->default(0);
            $table->integer('laki_diatas_55')->default(0);
            $table->integer('perempuan_0_15')->default(0);
            $table->integer('perempuan_16_55')->default(0);
            $table->integer('perempuan_diatas_55')->default(0);

            // 2. Kesejahteraan
            $table->integer('kk_prasejahtera')->default(0);
            $table->integer('kk_sejahtera')->default(0);
            $table->integer('kk_kaya')->default(0);
            $table->integer('kk_sedang')->default(0);
            $table->integer('kk_miskin')->default(0);

            // 3. Pendidikan
            $table->integer('pend_tidak_sd')->default(0);
            $table->integer('pend_sd')->default(0);
            $table->integer('pend_sltp')->default(0);
            $table->integer('pend_slta')->default(0);
            $table->integer('pend_diploma')->default(0);

            // 4. Pekerjaan
            $table->integer('pek_buruh_tani')->default(0);
            $table->integer('pek_petani')->default(0);
            $table->integer('pek_peternak')->default(0);
            $table->integer('pek_pedagang')->default(0);
            $table->integer('pek_tukang_kayu')->default(0);
            $table->integer('pek_tukang_batu')->default(0);
            $table->integer('pek_penjahit')->default(0);
            $table->integer('pek_pns')->default(0);
            $table->integer('pek_pensiunan')->default(0);
            $table->integer('pek_tni_polri')->default(0);
            $table->integer('pek_perangkat_desa')->default(0);
            $table->integer('pek_pengrajin')->default(0);
            $table->integer('pek_industri_kecil')->default(0);
            $table->integer('pek_buruh_industri')->default(0);
            $table->integer('pek_lain_lain')->default(0);

            // 5. Agama
            $table->integer('agama_islam')->default(0);
            $table->integer('agama_protestan')->default(0);
            $table->integer('agama_katolik')->default(0);
            $table->integer('agama_hindu')->default(0);
            $table->integer('agama_budha')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_demografis');
    }
};
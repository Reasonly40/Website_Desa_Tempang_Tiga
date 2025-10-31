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
            $table->year('tahun')->unique(); // Tahun Realisasi (misal: 2025)

            // Detail Pendapatan (Realisasi)
            $table->decimal('dana_desa', 15, 2)->default(0);
            $table->decimal('bagi_hasil', 15, 2)->default(0);
            $table->decimal('alokasi_dana_desa', 15, 2)->default(0);

            // Detail Pembelanjaan (Realisasi)
            $table->decimal('penyelenggaraan_pemerintahan', 15, 2)->default(0);
            $table->decimal('pelaksanaan_pembangunan', 15, 2)->default(0);
            $table->decimal('pembinaan_kemasyarakatan', 15, 2)->default(0);
            $table->decimal('pemberdayaan_masyarakat', 15, 2)->default(0);
            $table->decimal('penanggulangan_bencana', 15, 2)->default(0);

            // Pembiayaan (Realisasi)
            $table->decimal('pembiayaan', 15, 2)->default(0);

            $table->timestamps();
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
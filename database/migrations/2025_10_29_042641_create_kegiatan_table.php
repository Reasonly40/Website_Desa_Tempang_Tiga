<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi: membuat tabel 'kegiatan'
     */
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // judul kegiatan
            $table->text('deskripsi'); // deskripsi kegiatan
            $table->string('lokasi')->nullable(); // lokasi kegiatan (opsional)
            $table->date('tanggal')->nullable(); // tanggal kegiatan
            $table->string('penanggung_jawab')->nullable(); // nama penanggung jawab
            $table->string('gambar')->nullable(); // path atau URL gambar kegiatan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Undo migrasi: hapus tabel 'kegiatan'
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model 
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan oleh model ini.
     */
    protected $table = 'anggaran'; 

    /**
     * Atribut yang boleh diisi secara massal (mass assignable).
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'year',
        'file_path',
        'description',
    ];
}
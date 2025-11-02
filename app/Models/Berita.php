<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    /**
     * Kolom yang boleh diisi.
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'user_id',
    ];

    /**
     * Relasi ke User (Penulis)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
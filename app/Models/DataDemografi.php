<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDemografi extends Model
{
    use HasFactory;

    protected $table = 'data_demografis';
    
    // Izinkan semua field diisi
    protected $guarded = [];
}
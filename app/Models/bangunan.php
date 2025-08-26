<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    use HasFactory;

    protected $table = 'bangunans';
    protected $fillable = [
        'nama_bangunan',
        'kode_bangunan',
        'tanah_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'Barangs';
    protected $fillable = [
        'nama_barang',
        'kode_inventaris',
        'kategori_id',
        'ruangan_id',
        'tahun_pengadaan',
        'sumber_dana',
        'kondisi'
    ];
}

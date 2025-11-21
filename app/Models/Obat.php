<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obats';

    protected $fillable = [
        'nama_obat',
        'kategori',
        'stok',
        'harga',
        'keterangan'
    ];

    // ==============================
    //             RELASI
    // ==============================

    // Obat bisa muncul di banyak resep (Many-to-Many)
    public function reseps()
    {
        return $this->belongsToMany(Resep::class)->withPivot('jumlah');
    }
}

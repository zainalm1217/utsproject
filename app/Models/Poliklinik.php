<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    use HasFactory;

    protected $table = 'polikliniks';

    protected $fillable = [
        'rumah_sakit_id',
        'nama_poliklinik',
        'deskripsi',
    ];

    // ===========================
    //         RELASI
    // ===========================

    // Poliklinik milik 1 Rumah Sakit
    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class);
    }

    // Poliklinik punya banyak Dokter
    public function dokters()
    {
        return $this->hasMany(Dokter::class);
    }

    // Poliklinik punya banyak Kunjungan
    public function kunjungans()
    {
        return $this->hasMany(Kunjungan::class);
    }
}

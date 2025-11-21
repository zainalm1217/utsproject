<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';

    protected $fillable = [
        'nama',
        'spesialis',
        'no_str',
        'no_hp',
    ];

    // ==============================
    //             RELASI
    // ==============================

    // Dokter punya banyak jadwal praktek
    public function jadwalPrakteks()
    {
        return $this->hasMany(JadwalPraktek::class);
    }

    // Dokter punya banyak kunjungan
    public function kunjungans()
    {
        return $this->hasMany(Kunjungan::class);
    }

    // Dokter punya banyak resep
    public function reseps()
    {
        return $this->hasMany(Resep::class);
    }
    public function poliklinik()
{
    return $this->belongsTo(Poliklinik::class);
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    protected $fillable = [
        'nama',
        'no_ktp',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'golongan_darah',
    ];

    // ==============================
    //             RELASI
    // ==============================

    // Pasien punya banyak kunjungan
    public function kunjungans()
    {
        return $this->hasMany(Kunjungan::class);
    }

    // Pasien punya banyak resep
    public function reseps()
    {
        return $this->hasMany(Resep::class);
    }
}

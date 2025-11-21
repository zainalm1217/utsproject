<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungans';

    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'tanggal_kunjungan',
        'keluhan',
        'diagnosa'
    ];

    // ==============================
    //            RELASI
    // ==============================

    // Satu kunjungan dimiliki oleh satu pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    // Satu kunjungan ditangani oleh satu dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    // Satu kunjungan punya banyak resep
    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}

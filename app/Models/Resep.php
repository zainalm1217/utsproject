<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'reseps';

    protected $fillable = [
        'kunjungan_id',
        'obat_id',
        'jumlah',
        'aturan_pakai'
    ];

    // ==============================
    //            RELASI
    // ==============================

    // Resep dimiliki oleh 1 kunjungan
    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class);
    }

    // Resep menggunakan 1 obat
    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    protected $table = 'rumah_sakits';

    protected $fillable = [
        'nama_rumah_sakit',
        'alamat',
        'telepon'
    ];

    // ===========================
    //        RELASI ELOQUENT
    // ===========================

    // 1. Rumah Sakit punya banyak Poliklinik
    public function polikliniks()
    {
        return $this->hasMany(Poliklinik::class);
    }

    // 2. Rumah Sakit punya banyak Dokter
    public function dokters()
    {
        return $this->hasMany(Dokter::class);
    }

    // 3. Rumah Sakit punya banyak Pasien
    public function pasiens()
    {
        return $this->hasMany(Pasien::class);
    }
}

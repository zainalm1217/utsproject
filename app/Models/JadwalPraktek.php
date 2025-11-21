<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPraktek extends Model
{
    use HasFactory;

    protected $table = 'jadwal_prakteks';

    protected $fillable = [
        'dokter_id',
        'hari',
        'jam_mulai',
        'jam_selesai'
    ];

    // ==============================
    //            RELASI
    // ==============================

    // Setiap jadwal dimiliki oleh satu dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepObat extends Model
{
    use HasFactory;

    protected $table = "resep_obat";

    protected $fillable = [
        'resep_id',
        'obat_id',
        'jumlah',
        'aturan_pakai',
    ];

    public function resep()
{
    return $this->belongsTo(\App\Models\Resep::class);
}

public function obat()
{
    return $this->belongsTo(\App\Models\Obat::class);
}

}

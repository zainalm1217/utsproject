<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $fillable = ['kunjungan_id'];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class);
    }

   public function detail()
{
    return $this->hasMany(\App\Models\ResepObat::class);
}

    
    
}

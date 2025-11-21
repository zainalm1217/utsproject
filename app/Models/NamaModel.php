<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $fillable = ['nama', 'alamat', 'telepon'];

    public function polikliniks()
    {
        return $this->hasMany(Poliklinik::class);
    }
}

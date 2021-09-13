<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanAwal extends Model
{
    public function pemeriksaan_lanjut()
    {
        return $this->hasMany(pemeriksaan_lanjut::class);
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}

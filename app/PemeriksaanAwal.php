<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanAwal extends Model
{
    public function pemeriksaanlanjut()
    {
        return $this->belongsTo(pemeriksaan_lanjut::class);
    }
    
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}

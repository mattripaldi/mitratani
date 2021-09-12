<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanAwal extends Model
{
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}

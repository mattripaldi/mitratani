<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemeriksaanAwal extends Model
{
    public function setCatatanAttribute($value) {
        if($value === null) {
            $this->attributes['catatan'] = 'Tanam Benih Sesuai Rencana';
        }

        $this->attributes['catatan'] = $value;
    }

    public function pemeriksaan_lanjut()
    {
        return $this->hasMany(pemeriksaan_lanjut::class);
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}

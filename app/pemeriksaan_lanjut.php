<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemeriksaan_lanjut extends Model
{
    public function pemeriksaanawal()
    {
        return $this->belongsTo(PemeriksaanAwal::class,"pemeriksaan_awal_id");
    }
}

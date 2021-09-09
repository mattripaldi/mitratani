<?php

namespace App;

use Doctrine\DBAL\Schema\Table;
use Illuminate\Database\Eloquent\Model;

class JadwalMonitoring extends Model
{
    protected $table = 'jadwal_monitorings';
    protected $fillable =['id', 'nomor_induk_pesanan', 'fase_pendahuluan', 'fase_berbunga', 'fase_vegetatif', 'fase_masak', 'pesanan_id'];

    //
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
    
}

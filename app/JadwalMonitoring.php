<?php

namespace App;

use Doctrine\DBAL\Schema\Table;
use Illuminate\Database\Eloquent\Model;

class JadwalMonitoring extends Model
{
    /**
     * Get the pesanan that owns the JadwalMonitoring
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }
}

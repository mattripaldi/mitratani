<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VarietasPadi extends Model
{
    protected $table = 'jadwal_monitoring';
    protected $fillable =['fase_pendahuluan', 'fase_vegetatif', 'fase_berbunga', 'fase_masak'];

    /**
     * Get all of the stok_padi for the VarietasPadi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lahan_pelanggan()
    {
        return $this->hasMany(LahanPelanggan::class, 'id_varietas_padi', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LahanPelanggan extends Model
{
    /**
     * Get all of the pesanan for the LahanPelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'lahan_pelanggan_id', 'id');
    }
}

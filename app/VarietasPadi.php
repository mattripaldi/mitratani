<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VarietasPadi extends Model
{
    /**
     * Get all of the stok_padi for the VarietasPadi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stok_padi()
    {
        return $this->hasMany(StokPadi::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StokPadi extends Model
{
    /**
     * Get all of the stok_padi for the StokPadi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }

    /**
     * Get the varietas_padi that owns the StokPadi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function varietas_padi()
    {
        return $this->belongsTo(VarietasPadi::class, 'id_varietas_padi');
    }
}

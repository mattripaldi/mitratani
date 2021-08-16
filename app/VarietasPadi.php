<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VarietasPadi extends Model
{
    protected $table = 'varietas_padis';
    protected $fillable =['id_varietas', 'nama_varietas', 'deskripsi_varietas', 'foto_varietas'];

    /**
     * Get all of the stok_padi for the VarietasPadi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stok_padi()
    {
        return $this->hasMany(StokPadi::class, 'id_varietas_padi', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StokPadi extends Model
{
    protected $table = 'stok_padis';
    protected $fillable =['id','id_varietas_padi','supplier_benih','kelas_benih','tanggal_kadaluarsa','tanggal_beli_benih',
    'harga_beli_sak','harga_jual_sak','harga_jual_kg','jumlah_stok', 'label'];
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
    public function varietaspadi()
    {
        return $this->belongsTo(VarietasPadi::class);
    }
}

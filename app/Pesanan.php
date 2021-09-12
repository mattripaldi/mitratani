<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    /**
     * Get the user associated with the Pesanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lahan_pelanggan()
    {
        return $this->belongsTo(LahanPelanggan::class);
    }

    /**
     * Get the stok_padi that owns the Pesanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stok_padi()
    {
        return $this->belongsTo(StokPadi::class);
    }

    /**
     * Get the jadwal_monitoring associated with the Pesanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jadwal_monitoring()
    {
        return $this->hasOne(JadwalMonitoring::class, 'pesanan_id', 'id');
    }

    /**
     * Get the jadwal_monitoring associated with the Pesanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pemeriksaan_awal()
    {
        return $this->hasOne(PemeriksaanAwal::class, 'pesanan_id', 'id');
    }
}

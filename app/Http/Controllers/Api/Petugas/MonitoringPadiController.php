<?php

namespace App\Http\Controllers\Api\Petugas;

use App\Http\Controllers\Controller;
use App\PemeriksaanAwal;
use Illuminate\Http\Request;

class MonitoringPadiController extends Controller
{
    public function monitoringAwal(Request $request)
    {
        $dataMonitoring = new PemeriksaanAwal;
        $dataMonitoring->users_id = auth()->user()->id;
        $dataMonitoring->lahan_pelanggan_id = $request->lahan_pelanggan_id;
        $dataMonitoring->letak_areal = $request->letak_areal;
        $dataMonitoring->luas_areal = $request->luas_areal;
        $dataMonitoring->isolasi = $request->isolasi;
        $dataMonitoring->sejarah_lapang = $request->sejarah_lapang;
        $dataMonitoring->asal_jumlah_benih = $request->asal_jumlah_benih;
        $dataMonitoring->catatan = $request->catatan;
        $dataMonitoring->kesimpulan = $request->kesimpulan;
        $dataMonitoring->save();

        dd($request->kebenaran_letak_areal);
    }
}

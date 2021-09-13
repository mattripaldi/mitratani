<?php

namespace App\Http\Controllers\Api\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PemeriksaanAwal;

class RiwayatMonitoringController extends Controller
{
    public function getPemeriksaanAwal($pesanan_id)
    {
        $pemeriksaanAwal = PemeriksaanAwal::where('pesanan_id', '=', $pesanan_id)
            ->with('pemeriksaan_lanjut')
            ->first();

        return response()->json($pemeriksaanAwal, 200);
        // return response()->json([
        //     'success' => 1,
        //     'message' => 'Data Stok Benih Padi Varietas ',
        //     'pemeriksaan' => $pemeriksaanAwal

        // ]);
    }
}

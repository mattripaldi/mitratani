<?php

namespace App\Http\Controllers\Api\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\StokPadi;
use App\VarietasPadi;

class StokPadiController extends Controller
{
    public function index($id)
    {
        $stokPadi = StokPadi::where('id_varietas_padi', '=', $id)->get();
        $jumlahStokPadi = $stokPadi->sum('jumlah_stok');
        $hargaMax = $stokPadi->max('harga_jual_kg');
        $hargaMin = $stokPadi->min('harga_jual_kg');
        $varietas = VarietasPadi::find($id);

        if ($hargaMin == $hargaMax) {
            $harga = 'Rp.'.$hargaMin.'/Kg';
        } else {
            $harga = 'Rp.'.$hargaMin.' - Rp. '.$hargaMax.' /Kg';
        }

        return response()->json([
            'success' => 1,
            'message' => 'Data Stok Benih Padi Varietas '.$varietas->nama_varietas,
            'foto_varietas' => $varietas->foto_varietas,
            'harga' => $harga,
            'total_stok' => $jumlahStokPadi.' Kg',
            'stok_padi' => $stokPadi
        ]);
    }

}

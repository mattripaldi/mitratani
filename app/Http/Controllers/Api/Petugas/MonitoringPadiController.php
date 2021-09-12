<?php

namespace App\Http\Controllers\Api\Petugas;

use App\Http\Controllers\Controller;
use App\LahanPelanggan;
use App\pemeriksaan_lanjut;
use App\PemeriksaanAwal;
use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MonitoringPadiController extends Controller
{
    public function monitoringAwal(Request $request)
    {
        $dataMonitoring = new PemeriksaanAwal;
        $dataMonitoring->users_id = auth()->user()->id;
        $dataMonitoring->pesanan_id = $request->pesanan_id;
        $dataMonitoring->letak_areal = $request->letak_areal;
        $dataMonitoring->luas_areal = $request->luas_areal;
        $dataMonitoring->isolasi = $request->isolasi;
        $dataMonitoring->sejarah_lapang = $request->sejarah_lapang;
        $dataMonitoring->asal_jumlah_benih = $request->asal_jumlah_benih;
        $dataMonitoring->catatan = $request->catatan;
        $dataMonitoring->kesimpulan = $request->kesimpulan;
        $dataMonitoring->save();
        $dataMonitoring->pesanan;


        // $pesanan = Pesanan::where('lahan_pelanggan_id', $request->lahan_pelanggan_id);
        // $pesanan->status_pesanan = "Fase Pendahuluan";
        // $pesanan->save();

        DB::table('pesanans')
            ->where('id', $request->pesanan_id)
            ->update(['status_pesanan' => "Fase Pendahuluan"]);

        return response()->json([
            'success'       => 1,
            'message'       => 'Laporan Monitoring Telah dikirim :)',
            'data_monitoring'       => $dataMonitoring
        ]);
    }

    public function monitoringLanjut(Request $request)
    {

        $validateData   = Validator::make($request->all(), [
            'isolasi_timur'          => 'required',
            'isolasi_barat'      => 'required',
            'isolasi_selatan'      => 'required',
            'isolasi_utara'      => 'required',
            'barier'      => 'required',
            'sifat_penanaman'      => 'required',
            'jumlah_contoh_pemeriksaan'      => 'required',
            'image' => 'required'
        ]);



        if ($validateData->fails()) {
            $val = $validateData->errors()->first();
            return $this->error($val);
        }

        $fileName = "";
        if ($request->image->getClientOriginalName()) {
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $newName = date('mYd') . '_' . $request->jenis_pemeriksaan . '_' . $file;
            $fileName = str_replace(' ', '_', $newName);
            // $request->image->storeAs('public/monitoring' . $fileName);
            // $request->image->storeAs('public/monitoring/'.$fileName);
            Storage::putFileAs(
                'public/monitorings',
                $request->image,
                $fileName
            );
        }

        $data = new pemeriksaan_lanjut;
        $data->pemeriksaan_awal_id = $request->pemeriksaan_awal_id;
        $data->jenis_pemeriksaan = $request->jenis_pemeriksaan;
        $data->isolasi_timur = $request->isolasi_timur;
        $data->isolasi_barat = $request->isolasi_barat;
        $data->isolasi_selatan = $request->isolasi_selatan;
        $data->isolasi_utara = $request->isolasi_utara;
        $data->barier = $request->barier;
        $data->waktu = $request->waktu;
        $data->sifat_penanaman = $request->sifat_penanaman;
        $data->serangan_hama = $request->serangan_hama;
        $data->perkiraan_tanggal_panen = $request->perkiraan_tanggal_panen;
        $data->perkiraan_produksi = $request->perkiraan_produksi;
        $data->jumlah_contoh_pemeriksaan = $request->jumlah_contoh_pemeriksaan;
        $data->inbrida_cvl1 = $request->inbrida_cvl1;
        $data->inbrida_cvl2 = $request->inbrida_cvl2;
        $data->inbrida_cvl3 = $request->inbrida_cvl3;
        $data->inbrida_cvl4 = $request->inbrida_cvl4;
        $data->status_pemeriksaan = $request->status_pemeriksaan;
        $data->foto_monitoring = $fileName;
        $data->save();

        DB::table('pesanans')
            ->where('id', $request->pesanan_id)
            ->update(['status_pesanan' => "Fase " . $request->jenis_pemeriksaan]);

        return response()->json([
            'success'       => 1,
            'message'       => 'Laporan Monitoring Telah dikirim :)',
            'data_monitoring'       => $data
        ]);
    }

    public function error($pesan)
    {
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}

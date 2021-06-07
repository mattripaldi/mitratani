<?php

namespace App\Http\Controllers\Api\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LahanPelanggan;
use App\Pelanggan;
use Validator;

class LahanPelangganController extends Controller
{
    public function tambah_lahan(Request $request)
    {
        $validateData   = Validator::make($request->all(), [
            'nama_lahan'      => 'required',
            'alamat'     => 'required',
            'luas_lahan'  => 'required',
            'sejarah_lahan'  => 'required'
        ]);

        if ($validateData->fails()) {
            $val = $validateData->errors()->all();
            return $this->error($val);
        }

        $pelanggan = auth()->user()->id;

        $data_lahan = new LahanPelanggan;
        $data_lahan->nama_lahan     = $request->nama_lahan;
        $data_lahan->alamat         = $request->alamat;
        $data_lahan->luas_lahan     = $request->luas_lahan;
        $data_lahan->sejarah_lahan  = $request->sejarah_lahan;
        $data_lahan->id_pelanggan   = $pelanggan;
        $data_lahan->save();

        return response()->json([
            'success'       => 1,
            'message'       => $data_lahan->name.' berhasil disimpan :)',
            'data_lahan'     => $data_lahan
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

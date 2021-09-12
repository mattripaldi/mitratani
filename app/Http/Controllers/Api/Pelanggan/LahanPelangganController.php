<?php

namespace App\Http\Controllers\Api\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LahanPelanggan;
use App\Pelanggan;
use Illuminate\Support\Facades\Validator;

class LahanPelangganController extends Controller
{
    public function tambahLahan(Request $request)
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

        $data_lahan = new LahanPelanggan;
        $data_lahan->nama_lahan     = $request->nama_lahan;
        $data_lahan->alamat         = $request->alamat;
        $data_lahan->luas_lahan     = $request->luas_lahan;
        $data_lahan->sejarah_lahan  = $request->sejarah_lahan;
        $data_lahan->sejarah_lahan  = 'aktif';
        $data_lahan->pelanggan_id   = auth()->user()->id;;
        $data_lahan->save();

        return response()->json([
            'success'       => 1,
            'message'       => $data_lahan->name . ' berhasil disimpan :)',
            'data_lahan'     => $data_lahan
        ]);
    }

    public function getLahan()
    {
        $dataLahan = DB::table('lahan_pelanggans')
            ->where('pelanggan_id', '=', auth()->user()->id)
            ->where('status_lahan', '!=', 'deleted')
            ->get();

        // $users = DB::table('users')
        // ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        // ->get();

        return response()->json([
            'success' => 1,
            'message' => 'get lahan berhasil',
            'data_lahan' => $dataLahan
        ]);
    }

    public function deleteLahan(Request $request)
    {
        $dataLahan = LahanPelanggan::find($request->id);
        $dataLahan->status_lahan     = 'deleted';
        $dataLahan->save();

        return response()->json([
            'success' => 1,
            'message' => 'data berhasil dihapus',
            'data_lahan' => $dataLahan
        ]);
    }

    public function updateLahan(Request $request, $id)
    {
        $dataLahan = LahanPelanggan::find($id);
        $dataLahan->nama_lahan     = $request->nama_lahan;
        $dataLahan->alamat         = $request->alamat;
        $dataLahan->luas_lahan     = $request->luas_lahan;
        $dataLahan->sejarah_lahan  = $request->sejarah_lahan;
        $dataLahan->save();

        return response()->json([
            'success' => 1,
            'message' => 'data berhasil diperbarui',
            'data_lahan' => $dataLahan
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

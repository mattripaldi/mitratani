<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemeriksaanAwal;
use App\pemeriksaan_lanjut;
class HasilmonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $hasils = PemeriksaanAwal::join('lahan_pelanggans',"lahan_pelanggans.id",
        'pemeriksaan_awals.lahan_pelanggan_id')
        ->select('pemeriksaan_awals.*','lahan_pelanggans.nama_lahan','lahan_pelanggans.alamat')
        ->get();
        return view('hasilmonitoring',compact('hasils'));
    }

    public function detailfasependahuluan($id)
    {
        $hasil = PemeriksaanAwal::where('pemeriksaan_awals.id','=',$id)
        ->join('lahan_pelanggans',"lahan_pelanggans.id",
        'pemeriksaan_awals.lahan_pelanggan_id')
        ->select('pemeriksaan_awals.*','lahan_pelanggans.nama_lahan','lahan_pelanggans.alamat')
        ->first();
        return view('detailfasependahuluan',compact('hasil'));
    }


    public function detailfasevegetatif($id)
    {
        $hasil = pemeriksaan_lanjut::where('pemeriksaan_awal_id','=',$id)->first();
        return view('detailfasevegetatif',compact('hasil'));
    }

    public function detailfaseberbunga()
    {
        // $data = User::where('id',$id)->first();
        return view('detailfaseberbunga');
    }

    public function detailfasemasak()
    {
        // $data = User::where('id',$id)->first();
        return view('detailfasemasak');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

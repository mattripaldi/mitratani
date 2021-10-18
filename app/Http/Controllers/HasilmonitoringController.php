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
        $hasils = PemeriksaanAwal::join('pesanans',"pesanans.id",
        'pemeriksaan_awals.pesanan_id')
        ->with('pesanan.lahan_pelanggan')
        ->select('pemeriksaan_awals.*')
        ->get();
        return view('hasilmonitoring',compact('hasils'));
    }

    public function detailfasependahuluan($id)
    {
        $hasil = PemeriksaanAwal::where('pemeriksaan_awals.id','=',$id)
        ->join('pesanans',"pesanans.id",
        'pemeriksaan_awals.pesanan_id')
        ->select('pemeriksaan_awals.*')
        ->with('pesanan.lahan_pelanggan')
        ->first();
        return view('detailfasependahuluan',compact('hasil'));
    }


    public function detailfasevegetatif($id)
    {
        $hasil = pemeriksaan_lanjut::where('pemeriksaan_awal_id','=',$id)
        ->where('jenis_pemeriksaan','=','Vegetatif')
        ->with('pemeriksaanawal.pesanan.lahan_pelanggan')->first();

        return view('detailfasevegetatif',compact('hasil'));
    }

    public function detailfaseberbunga($id)
    {
        $hasil = pemeriksaan_lanjut::where('pemeriksaan_awal_id','=',$id)
        ->where('jenis_pemeriksaan','=','Berbunga')
        ->with('pemeriksaanawal.pesanan.lahan_pelanggan')->first();

        return view('detailfaseberbunga',compact('hasil'));
    }

    public function detailfasemasak($id)
    {
        $hasil = pemeriksaan_lanjut::where('pemeriksaan_awal_id','=',$id)
        ->where('jenis_pemeriksaan','=','Masak')
        ->with('pemeriksaanawal.pesanan.lahan_pelanggan')->first();
        return view('detailfasemasak',compact('hasil'));
    }

    public function updatestatus($id, Request $request)
    {

        pemeriksaan_lanjut::where('id','=',$id)
                    ->update(["status_pemeriksaan"=>$request->status_pemeriksaan]);

        return redirect()->back();
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

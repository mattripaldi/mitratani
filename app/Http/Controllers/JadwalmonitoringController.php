<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalMonitoring;
use App\LahanPelanggan;
use App\Pesanan;

class JadwalmonitoringController extends Controller
{
    public function getpesanan(Request $request)
    {
        return Pesanan::where('lahan_pelanggan_id',"=",$request->nama)->get();
    }
    public function index()
    {
        $jadwal = JadwalMonitoring::join("pesanans","pesanans.id","jadwal_monitorings.pesanan_id")
        ->join("lahan_pelanggans","lahan_pelanggans.id","pesanans.lahan_pelanggan_id")
        ->select("jadwal_monitorings.*","lahan_pelanggans.nama_lahan","lahan_pelanggans.alamat")
        ->get();

        return view('jadwalmonitoring', compact('jadwal'));
    }



  

    public function tambah()
    {
        $lahans = LahanPelanggan::Join('pesanans','pesanans.lahan_pelanggan_id','lahan_pelanggans.id')
        ->where('pesanans.status_pesanan',"=","Lunas")
        ->select("lahan_pelanggans.id","lahan_pelanggans.nama_lahan")->get();
        return view('tambahjadwal', compact('lahans'));
    }



    public function store(Request $request)
    {
        $pesanan = Pesanan::find($request->pesanan_id);
        JadwalMonitoring::create([
            'nomor_induk_pesanan' => $pesanan->nomor_induk,
            'pesanan_id' => $request->pesanan_id,
            'fase_pendahuluan' => $request->fase_pendahuluan,
            'fase_vegetatif' => $request->fase_vegetatif,
            'fase_berbunga' => $request->fase_berbunga,
            'fase_masak' => $request->fase_masak,
            
        ]);
        return redirect('/admin/jadwalmonitoring');
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
        $jadwal = JadwalMonitoring::where("jadwal_monitorings.id","=",$id)
        ->join("pesanans","pesanans.id","jadwal_monitorings.pesanan_id")
        ->join("lahan_pelanggans","lahan_pelanggans.id","pesanans.lahan_pelanggan_id")
        ->select("jadwal_monitorings.*","lahan_pelanggans.nama_lahan","lahan_pelanggans.alamat")
        ->first();
        return view('editjadwal',compact('jadwal'));
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
        JadwalMonitoring::where("id","=",$id)->update([
            'fase_pendahuluan' => $request->fase_pendahuluan,
            'fase_vegetatif' => $request->fase_vegetatif,
            'fase_berbunga' => $request->fase_berbunga,
            'fase_masak' => $request->fase_masak,
        ]);
        return redirect('/admin/jadwalmonitoring');
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

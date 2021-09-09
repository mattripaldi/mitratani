<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalMonitoring;

class JadwalmonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = JadwalMonitoring::all();
        return view('jadwalmonitoring', compact('jadwal'));
    }

  

    public function tambah()
    {
        return view('tambahjadwal');
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
        JadwalMonitoring::create([
            'nomor_induk_pesanan' => "0",
            'pesanan_id' => 1,
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

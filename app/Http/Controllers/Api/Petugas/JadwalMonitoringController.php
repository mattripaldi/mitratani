<?php

namespace App\Http\Controllers\Api\Petugas;

use App\Http\Controllers\Controller;
use App\JadwalMonitoring;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalMonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getJadwalFaseAwal()
    {
        $now = Carbon::now();

        $jadwal = JadwalMonitoring::select('id', 'nomor_induk_pesanan', 'fase_pendahuluan', 'pesanan_id')
            ->whereYear('fase_pendahuluan', '=', $now->year)
            ->whereMonth('fase_pendahuluan', '=', $now->month)
            ->orderBy('fase_pendahuluan', 'ASC')
            ->with('pesanan.lahan_pelanggan.pelanggan')
            ->get();

        return response()->json([
            "success"           => 1,
            "message"           => "Daftar Jadwal",
            "jadwal_monitoring" => $jadwal
        ]);
    }

    public function getJadwalFaseVegetatif()
    {
        $now = Carbon::now();

        $jadwal = JadwalMonitoring::select('id', 'nomor_induk_pesanan', 'fase_vegetatif', 'pesanan_id')
            ->whereYear('fase_vegetatif', '=', $now->year)
            ->whereMonth('fase_vegetatif', '=', $now->month)
            ->orderBy('fase_vegetatif', 'ASC')
            ->with('pesanan.lahan_pelanggan.pelanggan')
            ->get();

        return response()->json([
            "success"           => 1,
            "message"           => "Daftar Jadwal",
            "jadwal_monitoring" => $jadwal
        ]);
    }

    public function getJadwalFaseBerbunga()
    {
        $now = Carbon::now();
        $jadwal = JadwalMonitoring::select('id', 'nomor_induk_pesanan', 'fase_berbunga', 'pesanan_id')
            ->whereYear('fase_berbunga', '=', $now->year)
            ->whereMonth('fase_berbunga', '=', $now->month)
            ->orderBy('fase_berbunga', 'ASC')
            ->with('pesanan.lahan_pelanggan.pelanggan')
            ->get();

        return response()->json([
            "success"           => 1,
            "message"           => "Daftar Jadwal",
            "fase"              => "Fase Berbunga",
            "jadwal_monitoring" => $jadwal
        ]);
    }

    public function getJadwalFaseMasak()
    {
        $now = Carbon::now();

        $jadwal = JadwalMonitoring::select('id', 'nomor_induk_pesanan', 'fase_masak', 'pesanan_id')
            ->whereYear('fase_masak', '=', $now->year)
            ->whereMonth('fase_masak', '=', $now->month)
            ->orderBy('fase_berbunga', 'ASC')
            ->with('pesanan.lahan_pelanggan.pelanggan')
            ->get();

        return response()->json([
            "success"           => 1,
            "message"           => "Daftar Jadwal",
            "fase"              => "Fase Masak",
            "jadwal_monitoring" => $jadwal
        ]);
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

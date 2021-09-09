<?php

namespace App\Http\Controllers\Api\Petugas;

use App\Http\Controllers\Controller;
use App\JadwalMonitoring;
use App\Pesanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getMonitoringAwalToday()
    {
        $today = Carbon::now();
        $jadwal = Pesanan::select('pesanans.*')
            ->join('jadwal_monitorings', 'jadwal_monitorings.pesanan_id', '=', 'pesanans.id')
            ->whereDate('jadwal_monitorings.fase_pendahuluan', '=', $today)
            ->where('pesanans.status_pesanan', '=', 'Lunas')
            ->with('lahan_pelanggan.pelanggan')
            ->get();

        // $jadwal = JadwalMonitoring::whereDate('fase_pendahuluan', '=', $today)->get();

        return response()->json([
            "success"           => 1,
            "message"           => "success get monitoring awal today",
            "monitoring"        => $jadwal
        ]);
    }

    public function getMonitoringVegetatifToday()
    {
        $today = Carbon::now();
        $jadwal = Pesanan::select('pesanans.*')
            ->join('jadwal_monitorings', 'jadwal_monitorings.pesanan_id', '=', 'pesanans.id')
            ->whereDate('jadwal_monitorings.fase_vegetatif', '=', $today)
            ->where('pesanans.status_pesanan', '=', 'Fase Pendahuluan')
            ->with('lahan_pelanggan.pelanggan')
            ->get();

        // $jadwal = JadwalMonitoring::whereDate('fase_pendahuluan', '=', $today)->get();

        return response()->json([
            "success"           => 1,
            "message"           => "success get monitoring vegetatif today",
            "monitoring"        => $jadwal
        ]);
    }

    public function getMonitoringBerbungaToday()
    {
        $today = Carbon::now();
        $jadwal = Pesanan::select('pesanans.*')
            ->join('jadwal_monitorings', 'jadwal_monitorings.pesanan_id', '=', 'pesanans.id')
            ->whereDate('jadwal_monitorings.fase_berbunga', '=', $today)
            ->where('pesanans.status_pesanan', '=', 'Fase Vegetatif')
            ->with('lahan_pelanggan.pelanggan')
            ->get();

        // $jadwal = JadwalMonitoring::whereDate('fase_pendahuluan', '=', $today)->get();

        return response()->json([
            "success"           => 1,
            "message"           => "success get monitoring berbunga today",
            "monitoring"        => $jadwal
        ]);
    }

    public function getMonitoringMasakToday()
    {
        $today = Carbon::now();
        $jadwal = Pesanan::select('pesanans.*')
            ->join('jadwal_monitorings', 'jadwal_monitorings.pesanan_id', '=', 'pesanans.id')
            ->whereDate('jadwal_monitorings.fase_masak', '=', $today)
            ->where('pesanans.status_pesanan', '=', 'Fase Berbunga')
            ->with('lahan_pelanggan.pelanggan')
            ->get();

        // $jadwal = JadwalMonitoring::whereDate('fase_pendahuluan', '=', $today)->get();

        return response()->json([
            "success"           => 1,
            "message"           => "success get monitoring berbunga today",
            "monitoring"        => $jadwal
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

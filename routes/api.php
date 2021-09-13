<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login-pegawai', 'Api\Auth\UserController@login_pegawai');
Route::post('register-pelanggan', 'Api\Auth\UserController@register_pelanggan');
Route::post('login-pelanggan', 'Api\Auth\UserController@login_pelanggan');


Route::group(['prefix' => 'pelanggan'], function () {
    Route::group(['middleware' => 'auth:pelanggan'], function () {

        // Route lahan pelanggan
        Route::post('tambah-lahan', 'Api\Pelanggan\LahanPelangganController@tambahLahan');
        Route::get('data-lahan', 'Api\
        Pelanggan\LahanPelangganController@getLahan');
        Route::post('delete-lahan', 'Api\Pelanggan\LahanpelangganController@deleteLahan');
        Route::put('update-lahan/{id}', 'Api\Pelanggan\LahanPelangganController@updateLahan');

        // Routes varietas padi
        Route::get('varietas', 'Api\Pelanggan\VarietasPadiController@index');
        Route::get('varietas/{id}', 'Api\Pelanggan\StokPadiController@index');

        // Routes Pesanan
        Route::post('pesan-benih', 'Api\Pelanggan\PesananController@store');
        Route::get('detail-pesanan/{id}', 'Api\Pelanggan\PesananController@Show');
        Route::get('pesanans', 'Api\Pelanggan\PesananController@index');
    });
});

Route::prefix('petugas')->group(function () {
    Route::group(['middleware' => 'auth:api'], function () {
        // Routes Jadwal
        Route::get('jadwal-monitoring-fase-awal', 'Api\Petugas\JadwalMonitoringController@getJadwalFaseAwal');
        Route::get('jadwal-monitoring-fase-vegetatif', 'Api\Petugas\JadwalMonitoringController@getJadwalFaseVegetatif');
        Route::get('jadwal-monitoring-fase-berbunga', 'Api\Petugas\JadwalMonitoringController@getJadwalFaseBerbunga');
        Route::get('jadwal-monitoring-fase-masak', 'Api\Petugas\JadwalMonitoringController@getJadwalFaseMasak');
        Route::get('jadwal-monitoring-fase', 'Api\Petugas\JadwalMonitoringController@getAllJadwal');

        // monitoring
        Route::get('get-monitoring-awal-today', 'Api\Petugas\JadwalMonitoringController@getMonitoringAwalToday');
        Route::get('get-monitoring-vegetatif-today', 'Api\Petugas\JadwalMonitoringController@getMonitoringVegetatifToday');
        Route::get('get-monitoring-berbunga-today', 'Api\Petugas\JadwalMonitoringController@getMonitoringBerbungaToday');


        Route::post('monitoring-awal', 'Api\Petugas\MonitoringPadiController@monitoringAwal');
    });
});

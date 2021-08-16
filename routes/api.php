<?php

use Illuminate\Http\Request;
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
Route::post('register-pelanggan', 'Api\Auth\UserController@register_pelanggan');


Route::group(['prefix' => 'pelanggan'], function () {
    Route::group(['middleware' => 'auth:pelanggan'], function () {

        // Route lahan pelanggan
        Route::post('tambah-lahan', 'Api\Pelanggan\LahanPelangganController@tambahLahan');
        Route::get('data-lahan', 'Api\Pelanggan\LahanPelangganController@getLahan');
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

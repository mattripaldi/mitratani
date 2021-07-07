<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register'=> false]);


Route::group(['middleware'=>['auth']],function () {
    Route::prefix('admin')->group(function(){
    Route::get('/home','DftpenggunaController@index');
    Route::get('/dftpelanggan','DftpelangganController@index');
    
    Route::get('/dftbenihpadi','DftbenihpadiController@index');
    Route::get('/pesananbenih','PesananbenihController@index');
    Route::get('/jadwalmonitoring','JadwalmonitoringController@index');
    Route::get('/hasilmonitoring','HasilmonitoringController@index');
    Route::get('/tambahjadwal','JadwalmonitoringController@tambah');
    Route::get('/tambahbenih','DftbenihpadiController@formbenih');

    Route::get('/tambahpengguna','DftpenggunaController@formpengguna');
    Route::POST('/tambahpengguna/store','DftpenggunaController@store')->name('pengguna.store');
    Route::GET('/editpengguna/{id}','DftpenggunaController@edit')->name('editpengguna');
    Route::PUT('/editpengguna/{id}','DftpenggunaController@update');

});
});




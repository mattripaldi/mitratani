<?php

use App\Exports\pendahuluanExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=> false]);

Route::group(['middleware'=>['auth']],function () {
    Route::prefix('admin')->group(function(){
        // Cetak
        Route::get('cetak/pendahuluan/{id}','cetakExcelController@pendahuluan');
        Route::get('cetak/vegetatif/{id}','cetakExcelController@vegetatif');
        Route::get('cetak/masak/{id}','cetakExcelController@masak');
        Route::get('cetak/berbunga/{id}','cetakExcelController@berbunga');
        Route::post('updatestatusfase/{id}','HasilmonitoringController@updatestatus');

        // pengguna
        Route::get('/home','DftpenggunaController@index');
        Route::get('/tambahpengguna','DftpenggunaController@formpengguna');
        Route::get('/detailpengguna/{id}','DftpenggunaController@detailpengguna');
        Route::POST('/tambahpengguna/store','DftpenggunaController@store')->name('pengguna.store');
        Route::GET('/editpengguna/{id}','DftpenggunaController@edit')->name('editpengguna');
        Route::PUT('/editpengguna/{id}','DftpenggunaController@update');
        Route::get('/home/cari','DftpenggunaController@cari');

        // varietas
        Route::get('/dftvarietaspadi','DftvarietasController@index');
        Route::get('/tambahvarietas','DftvarietasController@formvarietas');
        Route::POST('/tambahvarietas/store','DftvarietasController@store')->name('varietas.store');
        Route::GET('/editvarietas/{id}','DftvarietasController@edit')->name('varietaspadi');
        Route::POST('/editvarietas/{id}','DftvarietasController@update');
        Route::get('/varietas/cari','DftvarietasController@cari');

        // stokbenihpadi
        Route::get('/dftbenihpadi','DftbenihpadiController@index');
        Route::get('/tambahbenih','DftbenihpadiController@formbenih');
        Route::POST('/tambahbenih/store','DftbenihpadiController@store')->name('stokbenih.store');
        Route::GET('/editbenih/{id}','DftbenihpadiController@edit')->name('stokbenih');
        Route::POST('/editbenih/{id}','DftbenihpadiController@update');
        Route::get('/stok/cari','DftbenihpadiController@cari');

        // pelanggan
        Route::get('/dftpelanggan','DftpelangganController@index');
        Route::get('/pelanggan/cari','DftpelangganController@cari');

        // pesanan
        Route::get('/pesananbenih','PesananbenihController@index');
        Route::GET('/editpesanan/{id}','PesananbenihController@noinduk')->name('editpesanan');
        Route::POST('/updatepesanan/{id}','PesananbenihController@update')->name('updatepesanan');

        // jadwal
        Route::get('/jadwalmonitoring','JadwalmonitoringController@index');
        Route::get('/jadwalmonitoring/{id}','JadwalmonitoringController@edit');
        Route::post('/jadwalmonitoring/{id}','JadwalmonitoringController@update');
        Route::get('/tambahjadwal','JadwalmonitoringController@tambah');
        Route::post('/getpesanan','JadwalmonitoringController@getpesanan');
        Route::POST('/tambahjadwal/store','JadwalmonitoringController@store')->name('jadwalmonitoring.store');

        // hasilmonitoring
        Route::get('/hasilmonitoring','HasilmonitoringController@index');
        Route::get('/detailfasependahuluan/{id}','HasilmonitoringController@detailfasependahuluan');
        Route::get('/detailfasevegetatif/{id}','HasilmonitoringController@detailfasevegetatif');
        Route::get('/detailfaseberbunga/{id}','HasilmonitoringController@detailfaseberbunga');
        Route::get('/detailfasemasak/{id}','HasilmonitoringController@detailfasemasak');
    });
});

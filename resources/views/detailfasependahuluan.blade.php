@extends('layouts.appnavbar')

@section('tittle','Tambah Pengguna')
@section('content')
<div class="container mb-2 mt-0">
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DETAIL HASIL MONITORING FASE PENDAHULUAN</strong>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="foto text-center mt-3">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Letak Areal</th>
                                    <th scope="col">Luas Areal</th>
                                    <th scope="col">Isolasi</th>
                                    <th scope="col">Sejarah Lahan</th>
                                    <th scope="col">Asal Jumlah Benih</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Kesimpulan</th>
                                    <th scope="col">Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$hasil->pesanan->lahan_pelanggan->nama_lahan}}</td>
                                    <td>{{$hasil->pesanan->lahan_pelanggan->alamat}}</td>
                                    <td>{{$hasil->letak_areal}}</td>
                                    <td>{{$hasil->luas_areal}}</td>
                                    <td>{{$hasil->isolasi}}</td>
                                    <td>{{$hasil->sejarah_lapang}}</td>
                                    <td>{{$hasil->asal_jumlah_benih}}</td>
                                    <td>{{$hasil->catatan}}</td>
                                    <td>{{$hasil->kesimpulan}}</td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-md"><i class="fas fa-print"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

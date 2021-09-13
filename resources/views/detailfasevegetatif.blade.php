@extends('layouts.appnavbar')

@section('tittle','Tambah Pengguna')
@section('content')
<div class="container mb-2 mt-0">
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DETAIL HASIL MONITORING FASE VEGETATIF</strong>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="foto text-center mt-3">
                        <table class="table table-bordered">
                            <!-- <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Pemeriksaan Awal</th>
                                    <th scope="col">Isolasi</th>
                                    <th scope="col">Barier</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Sifat Penanaman</th>
                                    <th scope="col">Serangan Hama</th>
                                    <th scope="col">Perkiraan Tgl Panen</th>
                                    <th scope="col">Perkiraan Produksi</th>
                                    <th scope="col">Jumlah Contoh Pemeriksaan</th>
                                    <th scope="col">Inbrida</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Foto</th>
                                </tr>
                            </thead> -->
                            <tbody>
                                <tr>
                                <td>
                                    {{$hasil->pemeriksaan_awal}}</td>
                                <td>
                                        <div>Timur : {{$hasil->isolasi_timur}} Barat : {{$hasil->isolasi_barat}}</div>
                                        <div>Selatan : {{$hasil->isolasi_selatan}} Utara : {{$hasil->isolasi_utara}}</div>
                                    </td>
                                    <td>{{$hasil->barier}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>{{$hasil->waktu}}</td>
                                    <td>{{$hasil->sifat_penanaman}}</td>
                                    <td>{{$hasil->serangan_hama}}</td>
                                </tr>
                                <tr>
                                <td>{{$hasil->perkiraan_tanggal_panen}}</td>
                                    <td>{{$hasil->perkiraan_produksi}}</td>
                                    <td>{{$hasil->jumlah_contoh_pemeriksaan}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>cvl1 : {{$hasil->inbrida_cvl1}} cvl2 : {{$hasil->inbrida_cvl1}}</div>
                                        <div>cvl3 : {{$hasil->inbrida_cvl3}} cvl4 : {{$hasil->inbrida_cvl4}}</div>
                                    </td>
                                    <td>{{$hasil->status_pemeriksaan}}</td>
                                    <td>{{$hasil->foto_monitoring}}</td>

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

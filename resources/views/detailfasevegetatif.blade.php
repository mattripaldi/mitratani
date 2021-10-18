@extends('layouts.appnavbar')

@section('tittle','Tambah Pengguna')
@section('content')

@if($hasil)
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{url('admin/updatestatusfase/'.$hasil->id)}}" id="updatestatus" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <label for="" class="form-label">Status</label>
                    <select name="status_pemeriksaan" id="" class="form-control">
                        <option value="lulus">Lulus</option>
                        <option value="tidak lulus">Tidak Lulus</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('updatestatus').submit()">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endif

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
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Alamat Lahan</th>
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
                                </tr>
                            </thead>

                            <tbody>
                                @if($hasil)
                                <tr>
                                    <td>{{$hasil->pemeriksaanawal->pesanan->lahan_pelanggan->nama_lahan}}</td>
                                    <td>{{$hasil->pemeriksaanawal->pesanan->lahan_pelanggan->alamat}}</td>
                                    <td>{{$hasil->isolasi_timur}}</td>
                                    <td>{{$hasil->barier}}</td>
                                    <td>{{$hasil->waktu == null ? "-" : $hasil->waktu}}</td>
                                    <td>{{$hasil->sifat_penanaman}}</td>
                                    <td>{{$hasil->serangan_hama}}</td>
                                    <td>{{$hasil->perkiraan_tanggal_panen == null ? "-" : $hasil->perkiraan_tanggal_panen}}</td>
                                    <td>{{$hasil->perkiraan_produksi == null ? "-" : $hasil->perkiraan_produksi}}</td>
                                    <td>{{$hasil->jumlah_contoh_pemeriksaan}}</td>
                                    <td>{{$hasil->inbrida_cvl1 == null ? "-" : $hasil->inbrida_cvl1}}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <span class="badge badge-warning">
                                            {{$hasil->status_pemeriksaan == null ? "Belum Divalidasi" : $hasil->status_pemeriksaan}}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="12">
                                        <img src="{{asset('storage/monitorings/'.$hasil->foto_monitoring)}}" alt="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="13">
                                        @if(Auth::user()->role == "pimpinan")
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Validasi
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                                @if(Auth::user()->role == "admin")
                                <tr>
                                    <td colspan="13">
                                        <a href="{{url('/admin/cetak/vegetatif/'.$hasil->pemeriksaan_awal_id)}}" class="btn btn-success btn-sm float-right"> <i class="fas fa-print"></i> Cetak</a>
                                    </td>
                                </tr>
                                @endif @else
                                <tr>
                                    <td colspan="12">No Data</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

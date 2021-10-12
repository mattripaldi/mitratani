@extends('layouts.appnavbar')

@section('tittle','Daftar Pesanan Benih Padi')
@section('content')

<div class="container mb-2 mt-5">
    <div class="col-md-12 ">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DATA PESANAN BENIH PADI UD MITRA TANI</strong>
            </div>

            <div class="col-md-auto mt-3 ml-2">
                <form action="{{ Request::fullUrl() }}" method="GET">
                    <input type="text" name="cari" placeholder="Cari">
                    <input type="submit" value="Cari">
                </form>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">No</th>
                            <!-- <th scope="col">Nama</th> -->
                            <th scope="col">Nomor Induk</th>
                            <th scope="col">Lokasi Lahan</th>
                            <th scope="col">Tanggal Sebar</th>
                            <th scope="col">Tanggal Tanam</th>
                            <th scope="col">Total Benih</th>
                            <th scope="col">Total Harga Benih</th>
                            <th scope="col">Total Harga Jasa</th>
                            <th scope="col">Total Biaya</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($pesanan as $pesanan)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$pesanan->nomor_induk}}</td>
                                <td>{{$pesanan->lahan_pelanggan->nama_lahan}}</td>
                                <td>{{$pesanan->tgl_sebar}}</td>
                                <td>{{$pesanan->tgl_tanam}}</td>
                                <td>{{$pesanan->total_benih}}</td>
                                <td>{{$pesanan->total_harga_benih}}</td>
                                <td>{{$pesanan->total_harga_jasa}}</td>
                                <td>{{$pesanan->total_biaya}}</td>
                                <td><a href="{{ url('admin/editpesanan/'. $pesanan->id) }}" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i></a></td>
                                <td>{{$pesanan->status_pesanan}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

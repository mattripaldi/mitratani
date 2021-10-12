@extends('layouts.appnavbar')

@section('tittle','Daftar Benih Padi')
@section('content')

<div class="container mb-2 mt-5">
    <div class="col-md-12 ">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DATA BENIH PADI UD MITRA TANI</strong>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col mb-3 mr-0">
                            <a href="/admin/tambahbenih" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Tambah Data Benih Padi</a>
                    </div>
                    <div class="mb-3 col-md-auto">
                        <form action="/admin/stok/cari" method="GET">
                            <input type="text" name="cari" placeholder="Cari">
                            <input type="submit" value="Cari">
                        </form>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead class="thead-dark text-center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Varietas</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Kelas Benih</th>
                        <th scope="col">Label</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Tanggal Beli</th>
                        <th scope="col">Tanggal Kadaluwarsa</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual Benih</th>
                        <th scope="col">Harga Jual/kg</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($stok as $stok)
                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$stok->nama_varietas}}</td>
                        <td>{{$stok->supplier_benih}}</td>
                        <td>{{$stok->kelas_benih}}</td>
                        <td>{{$stok->label}}</td>
                        <td>{{$stok->jumlah_stok}}</td>
                        <td>{{$stok->tanggal_beli_benih}}</td>
                        <td>{{$stok->tanggal_kadaluarsa}}</td>
                        <td>{{$stok->harga_beli_sak}}</td>
                        <td>{{$stok->harga_jual_sak}}</td>
                        <td>{{$stok->harga_jual_kg}}</td>
                        <td><a href="{{ url('admin/editbenih/'. $stok->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

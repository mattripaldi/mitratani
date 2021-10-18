@extends('layouts.appnavbar')

@section('tittle','Daftar Pelanggan')
@section('content')
<div class="container mb-2 mt-5">
    <div class="col-md-12 ">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DATA PELANGGAN UD MITRA TANI</strong>
            </div>

            <div class="card-body">
                <div class="mb-3 col-md-auto">
                    <form action="/admin/pelanggan/cari" method="GET">
                        <input type="text" name="cari" placeholder="Cari">
                        <input type="submit" value="Cari">
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Username</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($pelanggan as $pelanggan)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$pelanggan->nama_lengkap}}</td>
                                <td>{{$pelanggan->nik}}</td>
                                <td>{{$pelanggan->name}}</td>
                                <td>{{$pelanggan->alamat}}</td>
                                <td>{{$pelanggan->telepon}}</td>
                                <td>{{$pelanggan->jenis_kelamin}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

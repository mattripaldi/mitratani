@extends('layouts.appnavbar')

@section('tittle','Tambah Pengguna')
@section('content')
<div class="container mb-2 mt-0">
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DETAIL DATA PEGAWAI UD MITRA TANI</strong>
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="foto text-center mt-3">
                        <img src="{{ asset('images/'.$data->foto) }}"  class="card-img-top rounded " style="width: 200px;">
                    </div>

                    <table class="table table-bordered mt-3" >
                        <tbody>
                            <tr>
                                <td><strong> Nama Lengkap </strong></td>
                                <td>{{$data->nama_lengkap}}</td>
                            </tr>
                            <tr>
                                <td><strong> Nik </strong></td>
                                <td>{{$data->nik}}</td>
                            </tr>
                            <tr>
                                <td><strong> Username </strong></td>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <td><strong> Telepon</strong></td>
                                <td>{{$data->telepon}}</td>
                            </tr>
                            <tr>
                                <td><strong> Alamat </strong></td>
                                <td>{{$data->alamat}}</td>
                            </tr>
                            <tr>
                                <td><strong> Jenis Kelamin </strong></td>
                                <td>{{$data->jenis_kelamin}}</td>
                            </tr>
                            <tr>
                                <td><strong> Role </strong></td>
                                <td>{{$data->role}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

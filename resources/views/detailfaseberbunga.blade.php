@extends('layouts.appnavbar')

@section('tittle','Tambah Pengguna')
@section('content')
<div class="container mb-2 mt-0">
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DETAIL HASIL MONITORING FASE BERBUNGA</strong>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="foto text-center mt-3">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Hasil Monitoring</th>
                                    <th scope="col">Status Monitoring</th>
                                    <th scope="col">Foto Monitoring</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <td>
                                        <a href="#" class="btn btn-success btn-md"><i class="fas fa-print"></i></a>
                                        <a href="{{ url('admin/detailfasependahuluan') }}" class="btn btn-warning btn-sm">Detail</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-md">Belum Dicek</a>
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/lala.jpeg') }}" width="120" alt="">
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

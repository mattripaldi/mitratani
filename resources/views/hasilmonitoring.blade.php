@extends('layouts.appnavbar')

@section('tittle','Daftar Hasil Monitoring')
@section('content')
<div class="container mb-2 mt-5">
    <div class="col-md-12 ">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DATA HASIL MONITORING FASE PERTUMBUHAN PADI</strong>
            </div>
            <div class="card-body">
                <div class="mb-3 col-md-auto mt-1">
                    <form action="/pegawai/cari" method="GET">
                        <input type="text" name="cari" placeholder="Cari">
                        <input type="submit" value="Cari">
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lokasi Lahan</th>
                            <th scope="col">Hasil Fase Pendahuluan</th>
                            <th scope="col">Hasil Fase Vegetatif</th>
                            <th scope="col">Hasil Fase Berbunga</th>
                            <th scope="col">Hasil Fase Masak</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($hasils as $hasil)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$hasil->pesanan->lahan_pelanggan->nama_lahan}}</td>
                            <td>{{$hasil->pesanan->lahan_pelanggan->alamat}}</td>
                            <td>
                            <a href="{{ url('admin/detailfasependahuluan/'.$hasil->id) }}" class="btn btn-warning btn-sm">Detail</a>
                            </td>
                            <td> <a href="{{ url('admin/detailfasevegetatif/'.$hasil->id) }}" class="btn btn-warning btn-sm">Detail</a>
                            <td> <a href="{{ url('admin/detailfaseberbunga/'.$hasil->id) }}" class="btn btn-warning btn-sm">Detail</a>
                            <td> <a href="{{ url('admin/detailfasemasak/'.$hasil->id) }}" class="btn btn-warning btn-sm">Detail</a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

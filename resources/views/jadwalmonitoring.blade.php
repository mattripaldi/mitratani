@extends('layouts.appnavbar')

@section('tittle','Daftar Jadwal Monitoring')
@section('content')

<div class="container mb-2 mt-5">
    <div class="col-md-12 ">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>DATA JADWAL MONITORING FASE PERTUMBUHAN PADI</strong>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col mb-3 mr-0">
                            <a href="/admin/tambahjadwal" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Tambah Jadwal</a>
                    </div>

                    <div class="mb-3 col-md-auto mt-1">
                        <form action="{{ Request::fullUrl() }}" method="GET">
                            <input type="text" name="cari" placeholder="Cari">
                            <input type="submit" value="Cari">
                        </form>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lokasi Lahan</th>
                            <th scope="col">Tahap Pendahuluan</th>
                            <th scope="col">Tahap Vegetatif</th>
                            <th scope="col">Tahap Berbunga</th>
                            <th scope="col">Tahap Masak</th>
                            @if(Auth::user()->role == 'admin')
                            <th scope="col">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($jadwal as $jadwal)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$jadwal->nama_lahan}}</td>
                                <td>{{$jadwal->alamat}}</td>
                                <td>{{$jadwal->fase_pendahuluan}}</td>
                                <td>{{$jadwal->fase_vegetatif}}</td>
                                <td>{{$jadwal->fase_berbunga}}</td>
                                <td>{{$jadwal->fase_masak}}</td>
                                @if(Auth::user()->role == 'admin')
                                <td><a href="{{url('admin/jadwalmonitoring/'.$jadwal->id)}}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

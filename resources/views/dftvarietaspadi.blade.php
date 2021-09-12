@extends('layouts.appnavbar')

@section('tittle','Daftar Benih Padi')
@section('content')
<div class="container mb-2 mt-5">
<div class="col-md-12 ">
<div class="card mb-2">
  <div class="card-header text-center">
   <strong>DATA VARIETAS PADI UD MITRA TANI</strong> 
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col mb-3 mr-0">
        <a href="/admin/tambahvarietas" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Tambah Data Varietas Padi</a>
  </div>
  <div class="mb-3 col-md-auto">
  <form action="/admin/varietas/cari" method="GET">
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
      <th scope="col">Deskripsi Varietas</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody class="text-center">
  @foreach($varietas as $varietas)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$varietas->nama_varietas}}</td>
      <td>{{$varietas->deskripsi_varietas}}</td>
      <td>
        <img src="{{asset('images/'.$varietas->foto_varietas)}}" width="300">
      </td>
      <td><a href="{{ url('admin/editvarietas/'. $varietas->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a></td>
    </tr>
  @endforeach
  </tbody>
</table>
  </div>
</div>
</div>
</div>

@endsection

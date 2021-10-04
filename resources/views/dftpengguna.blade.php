@extends('layouts.appnavbar')

@section('tittle','Daftar Pengguna')
@section('content')
<div class="container mb-2 mt-5">
<div class="col-md-12 ">
<div class="card mb-2">
  <div class="card-header text-center">
   <strong>DATA PEGAWAI UD MITRA TANI</strong> 
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col mb-3 mr-0">
        <a href="/admin/tambahpengguna" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Tambah Pegawai</a>
  </div>
  <div class="row">
  <!-- <div class="col mb-2">
        <a href="/tambahpengguna" class="btn btn-success btn-sm"> <i class="fas fa-print"></i> Cetak</a>
  </div> -->
  <div class="mb-3 col-md-auto mr-3">
  <form action="/admin/home/cari" method="get">
		<input type="text" name="cari" placeholder="Cari">
		<button type="submit" value="Cari">Cari</button>
	</form>
  </div>
  </div>
  </div>
    <table class="table table-bordered">
  <thead class="thead-dark text-center">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Nik</th>
      <th scope="col">Username</th>
      <!-- <th scope="col">Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th> -->
      <th scope="col">Role</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-center">
    @foreach($user as $user)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$user->nama_lengkap}}</td>
      <td>{{$user->nik}}</td>
      <td>{{$user->name}}</td>
      <!-- <td>{{$user->telepon}}</td>
      <td>{{$user->alamat}}</td>
      <td>{{$user->jenis_kelamin}}</td> -->
      <td>{{$user->role}}</td>
      <td>
        <a href="{{ url('admin/editpengguna/'. $user->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
        <a href="{{ url('admin/detailpengguna/'. $user->id) }}" class="btn btn-warning btn-sm">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
</div>
</div>

@endsection

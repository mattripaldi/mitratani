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
        <a href="/tambahpengguna" class="btn btn-success btn-sm"> <i class="fas fa-plus"></i> Tambah Pegawai</a>
  </div>
  <div class="row">
  <div class="col mb-2">
        <a href="/tambahpengguna" class="btn btn-success btn-sm"> <i class="fas fa-print"></i> Cetak</a>
  </div>
  <div class="mb-3 col-md-auto mr-3">
  <form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari">
		<input type="submit" value="Cari">
	</form>
  </div>
  </div>
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
      <th scope="col">Role</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">1</th>
      <td>Lala</td>
      <td>361855401026</td>
      <td>lailaliany123</td>
      <td>0822222222</td>
      <td>cluring</td>
      <td>perempuan</td>
      <td>admin</td>
      <td><button type="button" class="btn btn-warning btn-sm">Edit</button>
      <button type="button" class="btn btn-warning btn-sm">Detail</button></td>

    </tr>
  </tbody>
</table>
  </div>
</div>
</div>
</div>

@endsection

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
      <th scope="col">Nik</th>
      <th scope="col">Username</th>
      <th scope="col">Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">1</th>
      <td>Liany</td>
      <td>361855401026</td>
      <td>liany123</td>
      <td>0822222222</td>
      <td>cluring</td>
      <td>perempuan</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</div>
</div>

@endsection

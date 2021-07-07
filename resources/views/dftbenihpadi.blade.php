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
  <form action="/pegawai/cari" method="GET">
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
      <th scope="col">Asal Benih</th>
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
    <tr>
      <th scope="row">1</th>
      <td>Inbrida</td>
      <td>PT Pertani</td>
      <td>Banyuwangi</td>
      <td>20</td>
      <td>10/03/2021</td>
      <td>15/09/2021</td>
      <td>Rp 125.000</td>
      <td>Rp 150.000</td>
      <td>Rp 25.000</td>
      <td><button type="button" class="btn btn-warning btn-sm">Edit</button></td>

    </tr>
  </tbody>
</table>
  </div>
</div>
</div>
</div>

@endsection

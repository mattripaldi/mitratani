@extends('layouts.appnavbar')

@section('tittle','Daftar Pesanan Benih Padi')
@section('content')
<div class="container mb-2 mt-5">
<div class="col-md-12 ">
<div class="card mb-2">
  <div class="card-header text-center">
   <strong>DATA PESANAN BENIH PADI UD MITRA TANI</strong> 
  </div>
  <div class="col-md-auto mt-3 ml-2">
    <form action="/pegawai/cari" method="GET">
      <input type="text" name="cari" placeholder="Cari">
      <input type="submit" value="Cari">
    </form>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
  <thead class="thead-dark text-center">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Pemesanan</th>
      <th scope="col">Nama</th>
      <th scope="col">Varietas</th>
      <th scope="col">Lokasi Lahan</th>
      <th scope="col">Rencana Awal</th>
      <th scope="col">Total Benih</th>
      <th scope="col">Total Harga Benih</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">1</th>
      <td>10/03/2021</td>
      <td>Lala</td>
      <td>Inpari 32</td>
      <td>Cluring</td>
      <td>15/04/2021</td>
      <td>3kg</td>
      <td>Rp 60.000</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</div>
</div>

@endsection

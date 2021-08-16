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
    <tr>
      <th scope="row">1</th>
      <td>Lala</td>
      <td>Cluring</td>
      <td>
        <button type="button" class="btn btn-warning btn-sm"><i class='fas fa-file-alt'></i></button>
        <!-- @if(Auth::user()->role == 'admin')
        <button type="button" class="btn btn-success btn-sm"><i class='fas fa-print'></i></button>
        @endif -->
      </td>
      <td><button type="button" class="btn btn-warning btn-sm"><i class='fas fa-file-alt'></i></button>
      <!-- @if(Auth::user()->role == 'admin')
      <button type="button" class="btn btn-success btn-sm"><i class='fas fa-print'></i></button></td>
      @endif -->
      <td><button type="button" class="btn btn-warning btn-sm"><i class='fas fa-file-alt'></i></button>
      <!-- @if(Auth::user()->role == 'admin')
      <button type="button" class="btn btn-success btn-sm"><i class='fas fa-print'></i></button></td>
      @endif -->
      <td><button type="button" class="btn btn-warning btn-sm"><i class='fas fa-file-alt'></i></button>
      <!-- @if(Auth::user()->role == 'admin')
      <button type="button" class="btn btn-success btn-sm"><i class='fas fa-print'></i></button></td>
      @endif -->
      <!-- <td><i class="fas fa-check-square" style='font-size:24px;color:green'></i></td> -->
    </tr>
  </tbody>
</table>
  </div>
</div>
</div>
</div>

@endsection

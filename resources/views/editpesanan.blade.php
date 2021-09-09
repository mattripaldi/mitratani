@extends('layouts.appnavbar')

@section('tittle','Form Data Benih Padi')
@section('content')
<div class="container mb-2 mt-0">
<div class="col-md-12">
<div class="card mb-2">
  <div class="card-header text-center">
   <strong>TAMBAH NOMOR INDUK</strong> 
  </div>
  <div class="card-body">
  <form method="POST" action="{{ route('updatepesanan',['id'=>$detail->id]) }}">
  @csrf
      <label for="formGroupExampleInput">Nama Varietas</label>
        <select class="form-control" name="status_pesanan" >
          <option value ="Menunggu Pembayaran" >Menunggu Pembayaran</option>
          <option value ="Lunas" >Lunas</option>
        </select>
    <div class="form-group">
        <label for="formGroupExampleInput">Nomor Induk </label>
        <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" value="{{$detail->nomor_induk}}">
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary ml-10 mt-3">Simpan</button>
        </div>
    </div>
</form>
  </div>
</div>
</div>
</div>

@endsection

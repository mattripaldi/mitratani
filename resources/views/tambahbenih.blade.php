@extends('layouts.appnavbar')

@section('tittle','Form Data Benih Padi')
@section('content')
<div class="container mb-2 mt-0">
<div class="col-md-12">
<div class="card mb-2">
  <div class="card-header text-center">
   <strong>DATA BENIH PADI UD MITRA TANI</strong> 
  </div>
  <div class="card-body">
  <form>
    <div class="form-group">
        <label for="formGroupExampleInput">Nama Varietas</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Supplier</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Asal Benih</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Stok</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Beli</label>
        <input type="date" class="form-control" id="date" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Kadaluwarsa</label>
        <input type="date" class="form-control" id="date" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Harga Benih</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Harga Jual</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Harga Jual/Kg</label>
        <input type="text" class="form-control" id="text" >
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

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
  <form method="POST" action="{{route('stokbenih.store')}}">
  @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Nama Varietas</label>
        <select class="form-control" name="nama_varietas">
        @foreach($varietas as $varietas)
            <option value ="{{ $varietas->id}}">{{$varietas->nama_varietas}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Supplier</label>
        <input type="text" class="form-control" id="supplier_benih" name="supplier_benih" value="{{ old('supplier_benih') }}" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Kelas Benih</label>
        <input type="text" class="form-control" id="tkelas_benih" name="kelas_benih" value="{{ old('kelas_benih') }}" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Label Benih</label>
        <input type="text" class="form-control" id="label" name="label" value="{{ old('label') }}" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Stok</label>
        <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" value="{{ old('jumlah_stok') }}" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Beli</label>
        <input type="date" class="form-control" id="tanggal_beli_benih" name="tanggal_beli_benih">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Kadaluwarsa</label>
        <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Harga Benih</label>
        <input type="text" class="form-control" id="harga_beli_sak" name="harga_beli_sak">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Harga Jual</label>
        <input type="text" class="form-control" id="harga_jual_sak" name="harga_jual_sak">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Harga Jual/Kg</label>
        <input type="text" class="form-control" id="harga_jual_kg" name="harga_jual_kg">
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

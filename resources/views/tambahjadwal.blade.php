@extends('layouts.appnavbar')

@section('tittle','Form Jadwal Monitoring')
@section('content')
<div class="container mb-2 mt-0">
<div class="col-md-12">
<div class="card mb-2">
  <div class="card-header text-center">
   <strong>DATA JADWAL MONITORING FASE PERTUMBUHAN BENIH PADI</strong> 
  </div>
  <div class="card-body">
  <form>
    <div class="form-group">
        <label for="formGroupExampleInput">Nama</label>
        <select id="inputState" class="form-control" name="fase_pendahuluan">
        <option selected>Nama Pelanggan</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Lokasi Lahan</label>
        <select id="inputState" class="form-control" placeholder="Lokasi Lahan" name="fase_pendahuluan">
        <option selected>Lokasi Lahan</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Pendahuluan</label>
        <input type="date" class="form-control" id="date" name="fase_pendahuluan">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Vegetatif</label>
        <input type="date" class="form-control" id="date" name="fase_vegetatif" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Berbunga</label>
        <input type="date" class="form-control" id="date" name="fase_berbunga" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Masak</label>
        <input type="date" class="form-control" id="date" name="fase_masak">
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

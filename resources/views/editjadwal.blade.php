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
  <form method="POST" action="{{url('admin/jadwalmonitoring/'.$jadwal->id)}}">
  @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Nama</label>
        <select disabled id="namalahan" class="form-control">
        <option>{{$jadwal->nama_lahan}}</option>
      </select>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Pendahuluan</label>
        <input type="date" value="{{$jadwal->fase_pendahuluan}}" class="form-control" id="date" name="fase_pendahuluan">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Vegetatif</label>
        <input type="date" class="form-control" value="{{$jadwal->fase_vegetatif}}" id="date" name="fase_vegetatif" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Berbunga</label>
        <input type="date" class="form-control" value="{{$jadwal->fase_berbunga}}" id="date" name="fase_berbunga" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Masak</label>
        <input type="date" class="form-control" value="{{$jadwal->fase_masak}}" id="date" name="fase_masak">
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary ml-10 mt-3">Update</button>
        </div>
  </div>
</form>
  </div>
</div>
</div>
</div>



@endsection

@section('js')

@endsection

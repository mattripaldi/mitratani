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
  <form method="POST" action="{{route('jadwalmonitoring.store')}}">
  @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Nama</label>
        <select id="namalahan" class="form-control">
        @foreach($lahans as $lahan)
        <option value="{{$lahan->id}}">{{$lahan->nama_lahan}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Nomor Pesanan</label>
        <select id="nomorpesanan" class="form-control" name="pesanan_id">
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Fase Pendahuluan</label>
        <input type="date" class="form-control" id="date" name="fase_pendahuluan" value="{{ old('fase_pendahuluan') }}" required >
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

@section('js')
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="{{asset('js/axios.js')}}"></script>
<script>
$("#namalahan").on('change',()=>{
  getpesanan()
})

$(document).ready(()=>{
  getpesanan()
})

async function getpesanan() {
  var nama = $("#namalahan").val()
  await axios.post('{{url("admin/getpesanan")}}',{nama:nama})
  .then((res)=>{
    $("#nomorpesanan").empty()
    res.data.forEach((data) => {
      $("#nomorpesanan").append(`
      <option value="`+data.id+`">`+data.nomor_induk+`</option>
      `)
    });
  })
}

</script>
@endsection

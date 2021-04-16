@extends('layouts.appnavbar')

@section('tittle','Tambah Pengguna')
@section('content')
<div class="container mb-2 mt-0">
<div class="col-md-12">
<div class="card mb-2">
  <div class="card-header text-center">
   <strong>DATA PEGAWAI UD MITRA TANI</strong> 
  </div>
  <div class="card-body">
  <form>
    <div class="form-group">
        <label for="formGroupExampleInput">Nama</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Nik</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Username</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Alamat</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Telepon</label>
        <input type="text" class="form-control" id="text" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Jenis Kelamin</label>
        <select id="inputState" class="form-control">
        <option selected>Jenis Kelamin</option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Role</label>
        <select id="inputState" class="form-control">
        <option selected>Role</option>
        <option>Admin</option>
        <option>Pimpinan</option>
      </select>
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

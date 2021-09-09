@extends('layouts.appnavbar')

@section('tittle','Edit Pengguna')
@section('content')
<div class="container mb-2 mt-0">
<div class="col-md-12">
<div class="card mb-2">
  <div class="card-header text-center">
    <strong>EDIT DATA PEGAWAI UD MITRA TANI</strong> 
  </div>
  <div class="card-body">
  <form method="POST" action="{{ route('editpengguna',['id'=>$detail->id]) }}"  enctype="multipart/form-data">
  @csrf
							<input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="formGroupExampleInput">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $detail->nama_lengkap }}" required >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Nik</label>
        <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $detail->nik }}" required autocomplete="nik">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Username</label>
        <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="name" value="{{ $detail->name }}" required autocomplete="name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $detail->alamat }}" required >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Telepon</label>
        <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $detail->telepon }}" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Jenis Kelamin</label>
        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required>
        <option selected>Jenis Kelamin</option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Role</label>
        <select id="role" class="form-control" name="role" value="{{ old('role') }}" required>
        <option selected>Role</option>
        <option>Admin</option>
        <option>Pimpinan</option>
      </select>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Foto</label>
        <input type="file" class="form-control-file" id="foto" name="foto" >
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

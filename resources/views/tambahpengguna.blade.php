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
                <form method="POST" action="{{ route('pengguna.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}"  />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nik</label>
                        <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}"  autocomplete="nik" />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Username</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}"  />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Telepon</label>
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon') }}"  />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" >
                            <option selected disabled hidden>Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Role</label>
                        <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" >
                            <option selected disabled hidden>Role</option>
                            <option value="admin">Admin</option>
                            <option value="pimpinan">Pimpinan</option>
                            <option value="petugas lapang">Petugas Lapang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" />
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

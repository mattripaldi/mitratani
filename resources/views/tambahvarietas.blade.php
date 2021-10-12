@extends('layouts.appnavbar')
@section('tittle','Form Data Benih Padi')
@section('content')

    <div class="container mb-2 mt-0">
        <div class="col-md-12">
            <div class="card mb-2">
                <div class="card-header text-center">
                    <strong>DATA VARIETAS PADI UD MITRA TANI</strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('varietas.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Varietas</label>
                            <input type="text" class="form-control" id="nama_varietas" name="nama_varietas" value="{{ old('nama_varietas') }}" required />
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Deskripsi Varietas</label>
                            <input type="text" class="form-control" id="deskripsi_varietas" name="deskripsi_varietas" />
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Foto</label>
                            <input type="file" class="form-control-file" name="foto_varietas" id="foto_varietas" />
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

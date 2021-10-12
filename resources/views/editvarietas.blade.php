@extends('layouts.appnavbar')
@section('tittle','Form Data Benih Padi')
@section('content')

<div class="container mb-2 mt-0">
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header text-center">
                <strong>EDIT DATA VARIETAS PADI UD MITRA TANI</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('varietaspadi',['id'=>$detail->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Varietas</label>
                        <input type="text" class="form-control @error('nama_varietas') is-invalid @enderror" id="nama_varietas" name="nama_varietas" value="{{ $detail->nama_varietas }}" required />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Deskripsi Varietas</label>
                        <input type="text" class="form-control @error('deskripsi_varietas') is-invalid @enderror" id="deskripsi_varietas" name="deskripsi_varietas" value="{{ $detail->deskripsi_varietas }}" required />
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Foto</label>
                        <input type="file" class="form-control @error('foto_varietas') is-invalid @enderror" name="foto_varietas" id="foto_varietas" />
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

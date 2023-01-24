@extends('master')

@section('konten')
<div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <h2>Show Siswa</h2>
            
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Back</a>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS:</strong>
                    {{ $sisw->NIS }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Siswa:</strong>
                    {{ $sisw->NamaSiswa }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    {{ $sisw->Alamat }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
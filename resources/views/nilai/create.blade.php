@extends('master')

@section('judul', 'Tambah Data')

@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('nilai.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                                <div class="form-group">
                                    <label class="font-weight-bold" for="nis">Nis</label>
                                    <select name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror">
                                        @foreach($nama as $na)
                                        <option name="nis" >{{$na->NIS}}</option>
                                        @endforeach
                                    </select>

                                    <!-- <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" placeholder="Masukan Nis"> -->
                                
                                    <!-- error message untuk title -->
                                    @error('nis')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label class="font-weight-bold" for="nama">Nama</label>
                                    <select name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror">
                                        @foreach($nama as $na)
                                        <option name="nama">{{$na->NamaSiswa}}</option>
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama"> -->
                                
                                    <!-- error message untuk title -->
                                    @error('nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Nilai IPA</label>
                                    <input type="text" class="form-control @error('ipa') is-invalid @enderror" name="ipa" value="{{ old('ipa') }}" placeholder="">
                                
                                    <!-- error message untuk title -->
                                    @error('ipa')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Nilai IPS</label>
                                    <input type="text" class="form-control @error('ips') is-invalid @enderror" name="ips" value="{{ old('ips') }}" placeholder="">
                                
                                    <!-- error message untuk title -->
                                    @error('ips')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label class="font-weight-bold">Nilai MTK</label>
                                    <input type="text" class="form-control @error('mtk') is-invalid @enderror" name="mtk" value="{{ old('mtk') }}" placeholder="">
                                
                                    <!-- error message untuk title -->
                                    @error('mtk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 my-4 text-center">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
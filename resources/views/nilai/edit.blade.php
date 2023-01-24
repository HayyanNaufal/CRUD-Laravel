@extends('master')

@section('judul', 'Edit Nilai')

@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('nilai.update', $nilai->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nis</label>

                                
                                <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $nilai->nis }}" placeholder="masukan nis" disabled>
                                
                                @error('nis')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $nilai->nama }}" placeholder="Masukkan Nama" disabled>
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nilai IPA</label>
                                <input type="text" class="form-control @error('ipa') is-invalid @enderror" name="ipa" value="{{ $nilai->ipa }}" placeholder="">
                            
                                <!-- error message untuk title -->
                                @error('ipa')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nilai IPS</label>
                                <input type="text" class="form-control @error('ips') is-invalid @enderror" name="ips" value="{{ $nilai->ips }}" placeholder="">
                            
                                <!-- error message untuk title -->
                                @error('ips')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">Nilai MTK</label>
                                <input type="text" class="form-control @error('mtk') is-invalid @enderror" name="mtk" value="{{ $nilai->mtk }}" placeholder="">
                            
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
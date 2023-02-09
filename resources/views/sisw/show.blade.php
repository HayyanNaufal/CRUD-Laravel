@extends('master')

@section('konten')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <h2>Siswa</h2>      
                    
            <div class="float-right">                
                <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
    
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <h2>Data Siswa</h2>
            <div class="form-group">
                <strong>NIS:</strong>
                {{ $sisw->NIS }}
            </div>
            <div class="form-group">
                <strong>Nama Siswa:</strong>
                {{ $sisw->NamaSiswa }}
            </div>
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $sisw->Alamat }}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <h2>Nilai Siswa</h2>

                <div class="float-right">
                    <a href="javascript:void(0)" class="btn btn-success" id="tambah-nilai">TAMBAH</a>
                </div>
            <table class="m-3 table table-bordered table-striped ">
                <thead>
                    <tr>
                    <th scope="col">NIS</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NILAI IPA</th>
                    <th scope="col">NILAI IPS</th>
                    <th scope="col">NILAI MTK</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nilais as $nilai)
                    <tr>
                        <td>{{ $nilai->nis }}</td>
                        <td>{{ $nilai->nama }}</td>
                        <td>{{ $nilai->ipa }}</td>
                        <td>{{ $nilai->ips }}</td>
                        <td>{!! $nilai->mtk !!}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="edit-nilai" data-id="{{ $nilai->id }}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="hapus-nilai" data-id="{{ $nilai->id }}" class="btn btn-danger btn-sm">HAPUS</a>  
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Post belum Tersedia.
                        </div>
                    @endforelse
                </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection
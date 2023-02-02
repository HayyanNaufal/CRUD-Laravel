@extends('master')

@section('judul', 'Table Murid')

@section('konten')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <h2 class="text-center">Tabel Siswa</h2>
                <div class="">
                    <a class="btn btn-success" href="{{ route('sisw.create') }}"> Input Siswa</a>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th>NIS</th>
                        <th width="260px"class="text-center">Nama Siswa</th>
                        <th width="260px"class="text-center">Alamat</th>
                        <th width="260px"class="text-center">Action</th>
                    </tr>
                    @foreach ($sisw as $siswa)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td>{{ $siswa->NIS }}</td>
                        <td><a href="{{ route('sisw.destroy',$siswa->id) }}"> {{ $siswa->NamaSiswa }} </a></td>
                        <td>{{ $siswa->Alamat }}</td>
                        <td class="text-center">
                            <form action="{{ route('sisw.destroy',$siswa->id) }}" method="POST">
                                <a class="btn btn-warning btn-sm" href="{{ route('sisw.edit',$siswa->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
@endsection
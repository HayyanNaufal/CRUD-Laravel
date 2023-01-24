@extends('master')

@section('judul', 'Daftar Nilai')

@section('konten')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <h1 class="">Daftar Nilai</h1>
                        </div>
                        <a href="{{ route('nilai.create') }}" class="btn btn-md btn-success mb-3">TAMBAH NILAI</a>
                        <table class="table table-bordered">
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
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('nilai.destroy', $nilai->id) }}" method="POST">
                                            <a href="{{ route('nilai.edit', $nilai->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $nilais->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
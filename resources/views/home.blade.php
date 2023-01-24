@extends('master')

@section('judul', 'Dashboard')

@section('konten')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
            @if (session('status'))
                <div class="">
                    {{ session('status') }}
                </div>
            @endif
            <div class="alert alert-success" role="alert">
                <p>{{ __('Anda Berhasil Login!') }}</p>
            </div>  
    </div>
</div>
@endsection

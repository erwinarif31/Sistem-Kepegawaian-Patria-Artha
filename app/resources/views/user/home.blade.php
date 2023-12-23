@extends('adminlte::page')

@section('title', 'Beranda')

@section('content_header')
    <h6>Beranda</h6>
@stop

@section('content')
    <div class="card">
        <div class="d-flex">
            <img src="https://source.unsplash.com/random/150x150?sig=1" class="rounded-circle p-3 img-fluid"/>
            <div class="flex-row mt-auto mb-auto">
                <h4 class="text-bold">Selamat Datang</h4>
                <h4 class="text-bold">Suhendra S</h4>
                <div class="d-flex">
                    <p>Universitas Patria Artha</p>
                    <p class="pl-2 pr-2">-</p>
                    <p>Universitas Patria Artha</p>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
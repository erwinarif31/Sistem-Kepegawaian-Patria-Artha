@extends('adminlte::page')

@section('title', 'Profile | Data Pribadi')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.jabatan-fungsional') }}" class="btn p-0">
            <h6>Profil</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.jabatan-fungsional') }}" class="btn p-0">
            <h6>Jabatan Fungsional</h6>
        </a>
    </div>
@stop

@section('content')
@stop

@section('css')
@stop

@section('js')
@stop
@extends('adminlte::page')

@section('title', 'Profile | Data Pribadi')

@section('content_header')
<div class="d-flex">
    <a href="{{ route('user.home') }}" class="btn p-0">
        <h6>Beranda</h6>
    </a>

    <h6 class="pl-2 pr-2">/</h6>

    <a href="{{ route('user.data-pribadi') }}" class="btn p-0">
        <h6>Profil</h6>
    </a>

    <h6 class="pl-2 pr-2">/</h6>

    <a href="{{ route('user.data-pribadi') }}" class="btn p-0">
        <h6>Data Pribadi</h6>
    </a>

    <h6 class="pl-2 pr-2">/</h6>

    <a href="{{ route('user.bidang-keilmuan') }}" class="btn p-0">
        <h6>Bidang Keilmuan</h6>
    </a>
</div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Bidang Keilmuan Saya</h5>
            <a href="{{ route('user.data-pribadi') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini tidak memerlukan validasi dan dapat langsung disimpan ke sistem</p>

        <div class="table-responsive">
            <table class="table border-left border-right border-bottom" style="font-size: 14px">
                <tr>
                    <th class="w-75">Pilih Kelompok Bidang</th>
                    <th class="text-center">Aksi</th>
                </tr>
                <tr>
                    <td class="w-75">   
                        <select class="form-select form-select-sm w-100" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary pt-1 pb-1" style="fill: white; font-size: 12px">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
                            Simpan
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
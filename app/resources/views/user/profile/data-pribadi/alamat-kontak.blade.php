@extends('adminlte::page')

@section('title', 'Profile | Data Pribadi')

@section('content_header')
<div class="d-flex">
    <a href="{{ route('user.home') }}" class="btn p-0">
        <h6>Beranda</h6>
    </a>

    <h6 class="pl-2 pr-2">/</h6>

    <a href="" class="btn p-0">
        <h6>Profil</h6>
    </a>

    <h6 class="pl-2 pr-2">/</h6>

    <a href="{{ route('user.data-pribadi') }}" class="btn p-0">
        <h6>Data Pribadi</h6>
    </a>

    <h6 class="pl-2 pr-2">/</h6>

    <a href="" class="btn p-0">
        <h6>Alamat dan Kontak</h6>
    </a>
</div>
@stop

@section('content')
    <div class="card p-3">
        <h5 class="text-bold">Form Ajuan Perubahan Data Alamat dan Kontak</h5>

        <table class="table mt-1" style="font-size: 14px">
            <tr  class="border-left border-right">
                <th></th>
                <th class="text-center">Data Alamat dan Kontak Lama</th>
                <th class="text-center">Data Alamat dan Kontak Baru</th>
            </tr>
            <tr  class="border-left border-right">
                <th>Email</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>Alamat</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>RT</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>RW</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>Dusun</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>Desa/Kelurahan</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>Kota/Kabupaten/Kecamatan</th>
                <td>Null</td>
                <td>
                    <select class="form-select w-100 h-100" aria-label="Small select example">
                        <option selected>Pilih...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>Kode Pos</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right">
                <th>No. Telepon Rumah</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr  class="border-left border-right border-bottom">
                <th>No. HP</th>
                <td>Null</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop   

@section('js')
    <script> console.log('Hi!'); </script>
@stop
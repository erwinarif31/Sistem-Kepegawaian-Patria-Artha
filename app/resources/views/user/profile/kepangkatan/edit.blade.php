@extends('adminlte::page')

@section('title', 'Profile | Kepangkatan')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.kepangkatan') }}" class="btn p-0">
            <h6>Profil</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.kepangkatan') }}" class="btn p-0">
            <h6>Kepangkatan</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="" class="btn p-0">
            <h6>Edit</h6>
        </a>
    </div>
@stop

@section('content')
<div class="card p-3">
    <div class="d-flex justify-content-between">
        <h5 class="text-bold">Form Perubahan Golongan/Pangkat</h5>
        <a href="{{ route('user.kepangkatan') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            Kembali
        </a>
    </div>
    <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

    <div class="table-responsive">
        <table class="table mt-2 border" style="font-size: 14px">
            <tr>
                <th class="w-25"></th>
                <th class="text-center">Data Saat Ini</th>
                <th class="text-center">Data Baru</th>
            </tr>
            <tr>
                <th class="w-25">Golongan/Pangkat</th>
                <td>III/c (Penata)</td>
                <td class="text-center">Tidak dapat diubah</td>
            </tr>
            <tr>
                <th class="w-25">Nomor SK</th>
                <td>12449/LL9/KP.08.00/2023</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Tanggal SK</th>
                <td>6 Desember 2023</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Terhitung Mulai Tanggal</th>
                <td>1 Januari 2024</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Masa Kerja Golongan (Tahun)</th>
                <td>6</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Masa Kerja Golongan (Bulan)</th>
                <td>0</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
        </table>
    </div>

    <p class="bg-secondary p-1 pl-2 font-weight-bold m-0" style="font-size: 14px">Dokumen</p>
    <div class="table-responsive">
        <table class="table table-bordered" style="font-size: 14px">
            <tr class="text-center">
                <th>Nomor</th>
                <th>Nama File</th>
                <th>Jenis Dokumen</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>SK III-C 2023.pdf</td>
                <td>SK Pangkat/Inpassing</td>
                <td>
                    <a href="" class="" style="fill: cornflowerblue; color: cornflowerblue; font-size: 14px">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                        Lihat Dokumen
                    </a>
                </td>
            </tr>
        </table>
    </div>

    <div class="row">
        <div class="col-lg-4 font-weight-bold" style="font-size: 12px">
            <p class="mb-0">Dokumen Bukti</p>
            <p class="mb-0" style="font-style: italic">Mohon melampirkan file gambar asli yang jelas dan tidak blur</p>
            <br>
            <p class="mb-0" style="font-style: italic">Jika ada dokumen baru yang dilampirkan maka akan menggantikan dokumen lama yang tersimpan</p>
        </div>

        <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
            <p class="bg-secondary p-1 pl-2 font-weight-bold">SK Pangkat/Inpassing</p>
            <div class="pl-2 pr-2">
                <p class="m-0 font-weight-bold">
                    Dokumen dilampirkan
                    <svg style="fill: red; padding-bottom: 2px" xmlns="http://www.w3.org/2000/svg" height="8" width="8" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z"/></svg>
                </p>
                <p class="font-italic m-0 pb-1" style="font-size: 12px">(Mohon hanya melampirkan file dengan format pdf, jpg, jpeg, atau png dengan ukuran maksimal 5MB)</p>
                <input type="file" class="w-100" placeholder="Pilih file">
            </div>
        </div>
    </div>

    <div class="" id="parent">
    </div>

    <div class="row mt-2">
        <div class="col-lg-4" style="font-size: 12px">
        </div>
        <div class="col d-flex justify-content-between" style="font-size: 14px">
            <button id="tambah" class="btn p-0 font-weight-bold" style="color: cornflowerblue; font-size: 14px">
                Tambah dokumen lain
            </button>
            <button class="btn btn-primary" style="fill: white; font-size: 12px">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
                Simpan
            </button>
        </div>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
<script>
    let tr = `<div class="row mt-2">
        <div class="col-lg-4" style="font-size: 12px">
        </div>

        <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
            <p class="bg-secondary p-1 pl-2 font-weight-bold">Dokumen Tambahan</p>
            <div class="pl-2 pr-2">
                <p class="m-0 font-weight-bold">
                    Dokumen Dilampirkan
                    <svg style="fill: red; padding-bottom: 2px" xmlns="http://www.w3.org/2000/svg" height="8" width="8" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z"/></svg>
                </p>
                <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 5MB)</p>
                <input type="file" class="w-100" placeholder="Pilih file">
            </div>
        </div>
    </div>`;

    $('#tambah').click(() =>{
        $('#parent').append(tr);
    })
</script>
@stop
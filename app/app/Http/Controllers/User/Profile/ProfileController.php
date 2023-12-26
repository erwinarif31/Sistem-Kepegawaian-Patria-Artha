<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile.data-pribadi');
    }

    public function biodata(){
        return view('user.profile.data-pribadi.biodata');
    }

    public function alamatKontak(){
        return view('user.profile.data-pribadi.alamat-kontak');
    }

    public function keluarga(){
        return view('user.profile.data-pribadi.keluarga');
    }

    public function kependudukan(){
        return view('user.profile.data-pribadi.kependudukan');
    }

    public function bidangKeilmuan(){
        return view('user.profile.data-pribadi.bidang-keilmuan');
    }

}

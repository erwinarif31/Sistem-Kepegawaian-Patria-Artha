<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile.data-pribadi');
    }

    public function bidangKeilmuan(){
        return view('user.profile.data-pribadi.bidang-keilmuan');
    }
}

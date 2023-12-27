<?php

namespace App\Http\Controllers\User\Profile\JabatanFungsional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JabatanFungsionalController extends Controller
{
    public function index(){
        return view('user.profile.jabatan-fungsional');
    }
}

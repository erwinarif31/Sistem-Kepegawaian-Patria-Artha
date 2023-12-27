<?php

namespace App\Http\Controllers\User\Profile\DataPribadi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        return view('user.profile.data-pribadi.biodata');
    }
}

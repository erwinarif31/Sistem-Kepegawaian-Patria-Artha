<?php

namespace App\Http\Controllers\User\Profile\DataPribadi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeilmuanController extends Controller
{
    public function index(){
        return view('user.profile.data-pribadi.bidang-keilmuan');
    }

}

<?php

namespace App\Http\Controllers\User\Profile\Inpassing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InpassingController extends Controller
{
    public function index(){
        return view('user.profile.inpassing');
    }
}

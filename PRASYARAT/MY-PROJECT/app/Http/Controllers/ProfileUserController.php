<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function profileuser(){
        return view('ProfileUser');
    }
}

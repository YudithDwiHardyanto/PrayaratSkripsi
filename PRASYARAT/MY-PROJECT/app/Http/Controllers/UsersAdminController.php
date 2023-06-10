<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    public function usersadmin(){
        $data = Users::paginate(10);
        return view('UsersAdmin', ['data'=>$data]);
    }
}

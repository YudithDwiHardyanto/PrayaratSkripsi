<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class AdminManageUsersController extends Controller
{
    public function adminmanageusers(){
        $data = Users::paginate(10);
        return view('AdminManageUsers', ['data'=>$data]);
    }
    public function Delete($id){
        $data = Users::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!.');
    }
}

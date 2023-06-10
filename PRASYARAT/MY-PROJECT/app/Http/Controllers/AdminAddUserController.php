<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminAddUserController extends Controller
{
    public function adminadduser(){
        return view('AdminAddUser');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|min:4|max:255',
            'notelp' => 'required|min:11|max:255',
            'pekerjaan' => 'required|in:Karyawan,Mahasiswa,Wirausaha,Guru,Dokter',
            'level' => 'required|in:Admin,User',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255',
        ]);
       $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
    
        return redirect('/AdminManageUsers')->with('success', 'Data berhasil ditambahkan!');
        }
}

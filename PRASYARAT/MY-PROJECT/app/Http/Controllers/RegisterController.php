<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('Register');
    }
    public function store(Request $request){
    $validateData = $request->validate([
        'name' => 'required|min:4|max:255',
        'notelp' => 'required|min:11|max:255',
        'pekerjaan' => 'required|in:Karyawan,Mahasiswa,Wirausaha,Guru,Dokter',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|max:255',
    ]);

    $validateData['password'] = bcrypt($validateData['password']);
    $validateData['level'] = 'User';

    User::create($validateData);

    return redirect('/Login')->with('success', 'Registrasi berhasil!');
    }
    
}

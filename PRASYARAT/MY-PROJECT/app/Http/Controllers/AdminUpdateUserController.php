<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class AdminUpdateUserController extends Controller
{
    public function adminupdateuser($id)
    {
        $data = Users::find($id);
        return view('AdminUpdateUser', compact('data'));
    }

    public function adminupdatedata(Request $request, $id)
    {
        $data = Users::find($id);
        $data->update($request->all());

        return redirect()->route('AdminManageUsers')->with('success', 'Data berhasil diperbarui.');
    }
}

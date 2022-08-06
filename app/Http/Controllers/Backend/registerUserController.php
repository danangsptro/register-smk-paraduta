<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerUserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('backend.register.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat = $request->alamat;
        $data->user_role = $request->user_role;
        $data->no_telepon = $request->no_telepon;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = Hash::make('qwerty');
        $data->save();

        if ($data) {
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        }
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\jenisBiaya;
use Illuminate\Http\Request;

class jenisBiayaController extends Controller
{
    public function jenisBiaya()
    {
        $data = jenisBiaya::all();
        return view('backend.jenis-biaya.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new jenisBiaya();
        $data->jenis_biaya = $request->jenis_biaya;
        $data->save();
        if ($data) {
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        }
    }
}

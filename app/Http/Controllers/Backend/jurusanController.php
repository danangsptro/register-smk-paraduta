<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\Jurusan;
use Illuminate\Http\Request;

class jurusanController extends Controller
{
    public function index()
    {
        $data = Jurusan::all();
        return view('backend.jurusan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Jurusan();
        $data->kode_jurusan = $request->kode_jurusan;
        $data->nama_jurusan = $request->nama_jurusan;
        $data->save();
        if ($data) {
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        }
    }
}

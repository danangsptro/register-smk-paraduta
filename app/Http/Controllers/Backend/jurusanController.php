<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jurusanController extends Controller
{
    public function index()
    {
        $data = Jurusan::all();
        if (Auth::user()->user_role != 'siswa') {
            return view('backend.jurusan.index', compact('data'));
        } else {
            toastr()->error('Access denied');
            return redirect()->back();
        }
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

    public function delete($id)
    {
        $data = Jurusan::find($id);
        $data->delete();
        if ($data) {
            toastr()->success('Data has been delete successfully!');
            return redirect()->back();
        }
    }
}

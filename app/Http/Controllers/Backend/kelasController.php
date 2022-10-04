<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\Jurusan;
use App\Http\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index()
    {
        $data = kelas::all();
        $jurusan = Jurusan::all();
        return view('backend.kelas.index', compact('data', 'jurusan'));
    }

    public function store(Request $request)
    {
        $data = new kelas();
        $data->jurusan_id = $request->jurusan_id;
        $data->nama_kelas = $request->nama_kelas;
        $data->jumlah_siswa = $request->jumlah_siswa;
        $data->save();

        if ($data) {
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $data = kelas::find($id);
        $data->jurusan_id = $request->jurusan_id;
        $data->nama_kelas = $request->nama_kelas;
        $data->jumlah_siswa = $request->jumlah_siswa;
        $data->save();

        if ($data) {
            toastr()->success('Data has been updated successfully!');
            return redirect()->back();
        }

    }

    public function delete ($id)
    {
        $data = kelas::find($id);
        $data->delete();
        if ($data) {
            toastr()->success('Data has been delete successfully!');
            return redirect()->back();
        }
    }
}

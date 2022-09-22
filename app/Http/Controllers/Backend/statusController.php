<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class statusController extends Controller
{
    public function index()
    {
        $data = status::all();
        if (Auth::user()->user_role === 'admin' || Auth::user()->user_role === 'panitia') {
            return view('backend.status.index', compact('data'));
        }else{
            toastr()->error('Access denied');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $data = new status();
        $data->nama_status = $request->nama_status;
        $data->save();
        if ($data) {
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        }
    }
}

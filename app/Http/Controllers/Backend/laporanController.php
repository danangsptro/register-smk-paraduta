<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function laporan ()
    {
        $laporan = formPendaftaran::whereStatusId(7)->get();
        return view('backend.laporan.index',compact('laporan'));
    }
}

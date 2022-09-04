<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use App\Http\Models\Jurusan;
use App\Http\Models\kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        $kelas = kelas::all();
        $jurusan = Jurusan::all();
        $jumlahPendaftaran = formPendaftaran::all();
        return view('backend.home.index', compact('jurusan', 'auth', 'jumlahPendaftaran', 'kelas'));
    }
}

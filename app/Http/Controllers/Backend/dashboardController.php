<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\Jurusan;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('backend.home.index', compact('jurusan'));
    }
}

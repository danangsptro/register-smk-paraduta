<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Models\Jurusan;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('frontend.landing', compact('jurusan'));
    }

    public function formlir()
    {
        return view('frontend.formulir');
    }
}

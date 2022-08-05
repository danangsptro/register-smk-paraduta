<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerUserController extends Controller
{
    public function index()
    {
        return view('backend.register.index');
    }

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout()
    {
        if (Auth::user()->user_role === 'siswa') {
            Auth::logout();
            return redirect('/landing-page');
        }else{
            Auth::logout();
            return redirect('/login');
        }
    }
}

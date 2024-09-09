<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function perform() 
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login.show');
    }
}

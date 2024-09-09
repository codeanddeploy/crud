<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show() 
    {
        return view('register.show');
    }

    public function perform(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        $data = $request->only(
            'name',
            'email',
            'username',
            'password',
        );

        $user = User::create($data);

        Auth::login($user); 

        return redirect()->intended('/users');
    }
}

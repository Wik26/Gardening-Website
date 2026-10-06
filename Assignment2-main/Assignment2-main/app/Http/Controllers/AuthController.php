<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        // $validated = $request->validate([
        // 'email' => 'required',
        // 'password' => 'required'
        // ]);

        $userDetails=[
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($userDetails)){
            $request->session()->regenerate();
            return redirect('/plants');
        }
        
        session()->flash('invalid', 'Invalid Email or Password. Please Try Again.');
        return back(); 
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

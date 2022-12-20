<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function masuk(){
        $title = "Login";
        return view('admin.page.login', compact('title'));
    }
    public function autentikasi(Request $request){
        $credentials = $request->validate([
            'email'     => ['required','email'],
            'password'  => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'login salah!');

        return redirect('/masuk');
    }
    public function keluar(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

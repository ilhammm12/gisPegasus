<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
        $title = "Login";
        return view('admin.page.login', compact('title'));
    }

    public function masuk(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return 'berhasil';
            // $request->session()->regenerate();
            // return redirect()->intended('/');
        } else{
            return 'gagal';
        }

        // return back()->withErrors([
        //     'password' => 'Wrong username or password',
        // ]);
    }
}

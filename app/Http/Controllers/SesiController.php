<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    public function login()
    {
        return view('auth.adminlogin');
    }
    public function login_request(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard');
            }
            if (Auth::user()->role == 'pemilik') {
                return redirect('/pemilik');
            }
        } else {
            return to_route('login')->withErrors('Username atau password anda salah');
        }

        // if (Auth::attempt($login)) {
        //     return to_route('data-kos.index');
        // } else {
        //     return to_route('pencari.login')->withErrors('Username atau password anda salah');
        // }
    }
}

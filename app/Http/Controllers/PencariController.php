<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PencariController extends Controller
{
    public function formlogin()
    {
        return view('pencarikos.auth.login');
    }
    public function formregistration()
    {
        return view('pencarikos.auth.registration');
    }
    public function login(Request $request)
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
            return 'berhasil login';
        } else {
            return to_route('pencari.login')->withErrors('Username atau password anda salah');
        }
    }
}

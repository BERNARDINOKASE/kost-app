<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class SesiController extends Controller
{
    public function login()
    {
        return view('auth.applogin');
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
            if (Auth::user()->role == 'pencari') {
                return to_route('app.index');
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

    public function register()
    {
        return view('auth.appregister');
    }

    public function register_request(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'pencari',
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        return to_route('data-user.index')->with('success', 'Akun Berhasil Dibuat');

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}

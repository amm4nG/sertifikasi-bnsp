<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // fungsi untuk menampilkan form login
    public function index()
    {
        return view('auth.login');
    }

    // validasi user
    public function validasi(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'message' => 'Email atau password Anda salah',
        ]);
    }

    // fungsi untuk logout atau keluar
    public function logout(Request $request)
    {
        // memanggil fungsi logout dari class Auth
        Auth::logout();
        // method ini juga akan memanggil 2 fungsi dibawah
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // dan mengembalikan kehalaman login
        return redirect()->route('login');
    }
}

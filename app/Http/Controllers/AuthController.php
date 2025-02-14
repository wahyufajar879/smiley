<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); // Ganti 'dashboard' dengan route yang sesuai
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.', // Pesan error yang lebih jelas
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required', // Ganti 'name' dengan 'fullname'
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed', // Pastikan panjang minimum password 8 karakter
        ]);

        $user = User::create([
            'name' => $request->name, // Ganti 'name' dengan 'fullname'
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); // Otomatis login setelah registrasi
        return redirect()->intended('dashboard'); // Ganti 'dashboard' dengan route yang sesuai
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect ke halaman utama
    }
}
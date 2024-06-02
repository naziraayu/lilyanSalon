<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    public function index(){
        return view('owner.login');
    }
    public function login(Request $request)
    {
        // // Validasi input
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ], [
        //     'email.required' => 'Email harus diisi.',
        //     'email.email' => 'Format email tidak valid.',
        //     'password.required' => 'Password harus diisi.',
        // ]);
    
        // Coba mencari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();
    
        // Periksa apakah pengguna ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan informasi pengguna dalam sesi
            session(['user' => $user]);
    
            // Redirect ke dashboard dengan pesan sukses
            return redirect()->route('menu.index')->with('success', 'Berhasil login!');
        } else {
            // Jika gagal, kembali ke halaman login dengan pesan error
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput($request->only('email'));
        }
    }
    
        // public function login(Request $request)
        // {
        //     // Validasi input
        //     $credentials = $request->validate([
        //         'email' => 'required|email',
        //         'password' => 'required',
        //     ]);
    
        //     // Coba melakukan login
        //     if (Auth::attempt($credentials)) {
        //         // Jika berhasil, redirect ke dashboard
        //         return redirect()->route('menu.index')->with('success', 'Berhasil Login!');
        //     } else {
        //         // Jika gagal, kembali ke halaman login dengan pesan error
        //         return back()->withErrors([
        //             'email' => 'Email atau password salah.',
        //         ]);
        //     }
        // }
        public function logout(Request $request) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
            // Set session success message
            return redirect('/')->with('success', 'Berhasil logout');
        }
}

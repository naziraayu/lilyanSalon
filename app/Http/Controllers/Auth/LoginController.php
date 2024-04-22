<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard'); // Ganti 'admin.dashboard' dengan nama rute halaman admin Anda
        }

        // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->route('login')->with(['error' => 'Email atau password salah.']);
    }
    // public function login(Request $request) {
    //     $this->validate($request, [
    //         'username' => 'required|string',
    //         'password' => 'required|string|min:6',
    //     ]);

    //     $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'password';

    //     $login = [
    //         $loginType => $request->username,
    //         'password' => $request->password,
    //     ];

    //     if (auth()->attempt($login)) {
    //         return redirect()->route('template');
    //     }
    //     return redirect()->route('login')->with(['error' => 'Email/Password salah.']);
    // }

    // public function authenticate(Request $request): RedirectResponse
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
 
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
 
    //         return redirect()->intended('template');
    //     }
 
    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('user.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('user')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'redirect_url' => route('user.home') // **TAMBAHKAN INI**
                ]);
            }
            return redirect()->intended(route('user.home'));
        }

        if ($request->expectsJson()) {
            return response()->json([
                'errors' => [
                    'email' => ['Email atau password salah'],
                ],
            ], 422);
        }

        return back()
            ->withErrors(['email' => 'Email atau password salah'])
            ->onlyInput('email');
    }
    public function register(Request $request)
    {
        // Validasi input dengan pesan error yang jelas
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
                'confirmed' // ini akan otomatis check dengan password_confirmation
            ],
            'password_confirmation' => 'required'
        ]);

        try {
            // Buat user baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            // Auto login setelah register
            Auth::guard('user')->login($user);
            
            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pendaftaran berhasil',
                    'user' => $user
                ]);
            }

            return redirect()->intended(route('user.home'))
                ->with('success', 'Pendaftaran berhasil! Selamat datang.');
                
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat pendaftaran',
                    'errors' => ['general' => ['Terjadi kesalahan server']]
                ], 500);
            }

            return back()
                ->withErrors(['general' => 'Terjadi kesalahan saat pendaftaran'])
                ->withInput();
        }
    }


    // Logout
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.home');
    }
}

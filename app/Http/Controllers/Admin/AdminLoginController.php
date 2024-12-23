<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Admin.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Cek login dengan kolom username
        if (Auth::guard('admin')->attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout berhasil');
    }
}

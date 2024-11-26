<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function RegistrationUser()
    {
        return view('Auth.register');
    }

    public function register(Request $request)
    {
        // Menggunakan validate() dari Request object
        $request->validate([
            'username' => 'required|string|max:255|unique:user',
            'nama_user' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:8|confirmed',
            'tanggal_lahir' => 'required|date',
        ]);

        $user = User::create([
            'username' => $request->username,
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);
        //dd($user);
         return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // Pastikan ini ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request) // Pastikan metode ini ada
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Buat token 5 digit
            $token = rand(10000, 99999);

            // Simpan token ke database
            $user->token = $token;
            $user->save();

            // Kirim email token
            Mail::to($user->email)->send(new \App\Mail\SendTokenMail($token));

            // Redirect ke halaman input token
            return redirect()->route('token.input')->with('email', $request->email);
        }

        return redirect()->back()->with('error', 'Email atau password salah.');
    }
    
    public function showTokenForm()
    {
        return view('auth.input-token');
    }

    public function verifyToken(Request $request)
{
    // Validasi input email dan token
    $request->validate([
        'email' => 'required|email',
        'token' => 'required|numeric',
    ]);

    // Cari user berdasarkan email dan token
    $user = User::where('email', $request->email)->where('token', $request->token)->first();

    if ($user) {
        // Login pengguna jika token sesuai
        Auth::login($user);

        

        // Redirect ke dashboard
        return redirect()->route('dashboard');
    }

    // Jika token salah, redirect kembali ke form input token dengan pesan error
    return redirect()->back()->withInput()->with('error', 'Kode token salah.');
}
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = session('id_user');

        $users = User::find($user);
        return view('edit_profile', compact('user', 'users'));
    }

    public function update(Request $request)
    {
        // Ambil ID pengguna dari session
        $userId = session('id_user');
    
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255|unique:user,username,' . $userId,
            'nama_user' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Ambil data pengguna berdasarkan ID dari session
        $user = \App\Models\User::find($userId);
    
        // Periksa apakah data pengguna ditemukan
        if (!$user) {
            return redirect()->route('profile.edit')->withErrors(['error' => 'User not found.']);
        }
    
        // Update data pengguna
        $user->username = $request->username;
        $user->nama_user = $request->nama_user;
    
        // Cek apakah ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto && file_exists(public_path($user->foto))) {
                unlink(public_path($user->foto));
            }
    
            // Simpan file baru
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads/profile_pictures'), $fileName);
            $user->foto = 'uploads/profile_pictures/' . $fileName;
        }
    
        // Simpan perubahan
        $user->save();
    
        // Redirect ke halaman edit profil dengan pesan sukses
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}

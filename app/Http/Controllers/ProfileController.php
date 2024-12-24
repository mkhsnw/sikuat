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
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255|unique:user,username,' . session('id_user'),
            'nama_user' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = session('id_user');
        $user->username = $request->username;
        $user->nama_user = $request->nama_user;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads/profile_pictures'), $fileName);
            $user->foto = 'uploads/profile_pictures/' . $fileName;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}
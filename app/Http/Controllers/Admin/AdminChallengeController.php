<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AdminChallenge;

class AdminChallengeController extends Controller
{
    // Menampilkan semua data Challenge
    public function index()
    {
        $challenges = AdminChallenge::all();

        return view('admin.admin_challenge', compact('challenges')); // Passing data ke view
    }


    // Menampilkan form tambah Challenge
    public function create()
    {
        return view('admin.challenge.create');
    }

    // Menyimpan data baru Challenge
    public function store(Request $request)
{
    // Validasi Input
    $request->validate([
        'nama_challenge' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'poin' => 'required|integer',
    ]);

    // Simpan Data
    try {
        AdminChallenge::create([
            'nama_challenge' => $request->nama_challenge,
            'deskripsi' => $request->deskripsi,
            'poin' => $request->poin,
        ]);

        return redirect()->route('admin.challenge.index')->with('success', 'Challenge berhasil ditambahkan!');
    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
    }
}

public function update(Request $request, $id)
{
    // Validasi Input
    $request->validate([
        'nama_challenge' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'poin' => 'required|integer',
    ]);

    // Update Data
    try {
        $challenge = AdminChallenge::findOrFail($id);
        $challenge->update([
            'nama_challenge' => $request->nama_challenge,
            'deskripsi' => $request->deskripsi,
            'poin' => $request->poin,
        ]);

        return redirect()->route('admin.challenge.index')->with('success', 'Challenge berhasil diperbarui!');
    } catch (\Exception $e) {
        return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
    }
}


    // Menghapus Challenge
    public function destroy($id)
    {
        $challenge = AdminChallenge::findOrFail($id);
        $challenge->delete();
        return redirect()->route('admin.challenge.index')->with('success', 'Challenge berhasil dihapus!');
    }
}

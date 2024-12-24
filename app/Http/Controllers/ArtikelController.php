<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with('kategori_artikel', 'user')->latest()->get();
        return view('article', compact('artikel'));
    }

    public function showdetail(Artikel $artikel)
    {
        
        $user = session('id_user');
        $users = User::find($user);
        // dd($artikel);
        // dd($users->all());
        return view('detail_article', compact('artikel',  'users'));
    }
    

    public function create()
    {
        // $artikel = Artikel::with('kategori_artikel', 'user')->latest()->get();
        $categories = KategoriArtikel::all();

        return view('add_article', compact('categories')); // Pastikan view ini sesuai dengan file view Anda
    }

    public function store(Request $request)
    {
        $iduser = session('id_user');
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'id_kategori_artikel' => 'required|exists:kategori_artikel,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan file thumbnail jika ada
        $thumbnailPath = $request->hasFile('thumbnail') 
            ? $request->file('thumbnail')->store('thumbnails', 'public') 
            : null;

        // Simpan data artikel
        $article = new Artikel();
        $article->id_user = $iduser; // Pastikan user sudah login
        $article->judul = $validated['judul'];
        $article->isi = $validated['isi'];
        $article->id_kategori_artikel = $validated['id_kategori_artikel'];
        $article->like = 0; // Default 0 untuk kolom like
        $article->thumbnail = $thumbnailPath;
        $article->save();

        // Redirect dengan pesan sukses
        return redirect()->route('articles.create')->with('success', 'Artikel berhasil ditambahkan!');
    }
}
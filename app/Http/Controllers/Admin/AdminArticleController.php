<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminArticle;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    public function index()
    {
        // Ambil semua artikel
        $articles = AdminArticle::all();

        // Kirim data ke view
        return view('admin.admin_article', compact('articles'));
    }

    public function show($id)
    {
        // Ambil artikel berdasarkan ID
        $article = AdminArticle::find($id);

        // Jika artikel tidak ditemukan, kembali ke halaman sebelumnya
        if (!$article) {
            return redirect()->back()->with('error', 'Artikel tidak ditemukan.');
        }

        // Kirim data ke view
        return view('detail_article', compact('article'));
    }
}

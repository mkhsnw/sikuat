<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminArticle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReviewArticleController extends Controller
{
    // Menampilkan daftar artikel untuk direview
    public function index()
    {
        // Mengambil artikel yang berstatus 'review' beserta kategori terkait
        $articles = DB::table('artikel')
            ->join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.id_kategori_artikel')
            ->where('artikel.status', 'review')
            ->select('artikel.*', 'kategori_artikel.nama_kategori')
            ->get();

        return view('admin.admin_review_article', compact('articles'));
    }
    // Menampilkan detail artikel dalam format JSON
    public function show($id)
    {
        // Mengambil artikel berdasarkan ID dan menggabungkan dengan kategori terkait
        $artikel = DB::table('artikel')
            ->join('kategori_artikel', 'artikel.id_kategori_artikel', '=', 'kategori_artikel.id')
            ->where('artikel.id', $id)
            ->select('artikel.*', 'kategori_artikel.nama_kategori')
            ->first(); // Menggunakan first() karena hanya satu artikel yang diambil berdasarkan ID

            // Debug: Melihat artikel yang diambil berdasarkan ID
        Log::info('Artikel yang ditampilkan: ', (array) $artikel); // Log ke file log

        // Debug: Gunakan dd() untuk melihat data artikel
        dd($artikel); // Memastikan artikel ditemukan

        // Jika artikel tidak ditemukan, redirect kembali ke daftar artikel
        if (!$article) {
            return redirect()->route('admin.review.index')->with('error', 'Artikel tidak ditemukan.');
        }

        // Mengembalikan view dengan artikel yang ditemukan
        return view('admin.article_detail', compact('article'));
    }
    
    public function accept($id)
    {
        // Mengubah status artikel menjadi 'published'
        $article = AdminArticle::find($id);
        $article->status = 'published';
        $article->save();

        // Redirect kembali ke daftar artikel dengan pesan sukses
        return redirect()->route('admin.review.index')->with('success', 'Artikel berhasil disetujui.');
    }

    public function reject($id)
    {
        // Mengubah status artikel menjadi 'rejected'
        $article = AdminArticle::find($id);
        $article->status = 'rejected';
        $article->save();

        // Redirect kembali ke daftar artikel dengan pesan sukses
        return redirect()->route('admin.review.index')->with('success', 'Artikel berhasil ditolak.');
    }
}

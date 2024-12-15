<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $threads = Thread::with('user')->latest()->get();
        return view('thread', compact('threads'));
    }    

    public function showaddThread()
    {
        // $iduser = session('id_user');
        // dd($iduser);
        return view('add_thread');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $iduser = session('id_user'); // Pastikan session id_user diatur dengan benar

        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'caption' => 'required|string',
        ]);

        // Simpan thread ke database
        Thread::create([
            'id_user' => $iduser, // Pastikan user sudah login
            'caption' => $validated['caption'],
            'like' => 0, // Default value
        ]);

      
        // Redirect setelah berhasil menyimpan
        return redirect()->back()->with('success', 'Thread created successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

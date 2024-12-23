<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = session('id_user');
        $users = User::find($user);
        $threads = Thread::with('user')->latest()->get();
        $mythreads = Thread::with('user') // Relasi ke user jika diperlukan
        ->where('id_user', $user)
        ->latest() // Filter berdasarkan user yang login
        ->take(6)
        ->get();
        
        return view('dashboard', compact('user', 'users', 'threads', 'mythreads'));

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminThread;
use Illuminate\Http\Request;

class AdminThreadController extends Controller
{
    // Menampilkan daftar thread
    public function index()
    {
        $threads = AdminThread::all();
        return view('admin.admin_thread', compact('threads'));
    }
}
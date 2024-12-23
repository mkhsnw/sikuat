<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalChallenges = DB::table('challenge')->count();
        $totalThreadsToday = DB::table('thread')->whereDate('created_at', now()->toDateString())->count();
        $articlesForReview = DB::table('artikel')->where('status', 'review')->count();
        $totalUsers = DB::table('user')->count();
        return view('admin.admin', compact('totalChallenges', 'totalThreadsToday', 'articlesForReview', 'totalUsers'));
    }
}
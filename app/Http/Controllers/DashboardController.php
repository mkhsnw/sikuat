<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = session('id_user');
        $users = User::find($user);
        return view('dashboard', compact('user', 'users'));

    }
}

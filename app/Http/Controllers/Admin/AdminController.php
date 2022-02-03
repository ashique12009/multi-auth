<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index');
    }

    public function profile()
    {
        return view('dashboard.user.profile');
    }

    public function settings()
    {
        return view('dashboard.user.settings');
    }
}

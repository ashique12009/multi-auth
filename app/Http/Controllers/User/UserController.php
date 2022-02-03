<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
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
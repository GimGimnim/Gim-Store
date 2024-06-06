<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function user()
    {
        return view('user.index');
    }

    public function home()
    {
        return view('home.index');
    }
}

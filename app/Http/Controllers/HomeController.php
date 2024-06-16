<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function user()
    {
        $product = Product::all();

        return view('user.home', compact('product'));
    }

    public function home()
    {
        return view('home.home');
    }
}

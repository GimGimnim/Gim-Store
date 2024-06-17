<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{
    public function user()
    {
        $product = Product::all();

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        return view('user.home', compact('product','count'));
    }

    public function home()
    {
        $product = Product::all();

        return view('home.home');
    }
}

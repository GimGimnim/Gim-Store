<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $product = Product::paginate(8);

        return view('home.home', compact('product'));
    }

    public function user()
    {
        $product = Product::paginate(8);

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        return view('home.home', compact('product','count', 'countw'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class UserController extends Controller
{
    public function contact()
    {
        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        return view('user.contact', compact('count'));
    }

    public function about()
    {
        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        return view('user.about', compact('count'));
    }

    public function shop()
    {
        $product = Product::all();

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        return view('user.shop', compact('product', 'count'));
    }

    public function details($id)
    {
        $data = Product::find($id);

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        return view('user.details', compact('data', 'count'));
    }

    public function addCart($id)
    {
        $product_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart;

        $data->user_id = $user_id;

        $data->product_id = $product_id;

        $data->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Item successfully added to cart');

        return redirect()->back();
    }

}

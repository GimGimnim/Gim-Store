<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Order;

class UserController extends Controller
{
    public function contact()
    {
        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        return view('user.contact', compact('count', 'countw'));
    }

    public function about()
    {
        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        return view('user.about', compact('count', 'countw'));
    }

    public function shop()
    {
        $product = Product::paginate(6);

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        return view('user.shop', compact('product', 'count', 'countw'));
    }

    public function details($id)
    {
        $data = Product::find($id);

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        return view('user.details', compact('data', 'count', 'countw'));
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

    public function favorite($id)
    {
        $productt_id = $id;

        $user = Auth::user();

        $userr_id = $user->id;

        $wishlist = new Wishlist;

        $wishlist->uid = $userr_id;

        $wishlist->pid = $productt_id;

        $wishlist->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Successfully added to Wishlist');

        return redirect()->back();
    }

    public function cart()
    {
        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        $cart = Cart::where('user_id', $userid)->get();

        return view('user.cart', compact('count', 'countw', 'cart'));
    }

    public function wishlist()
    {
        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        $wishlist = Wishlist::where('uid',$userid)->get();

        return view('user.wishlist', compact('count', 'countw', 'wishlist'));
    }

    public function delcart($id)
    {
        $del = Cart::find($id);

        $del->delete();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Item removed from Cart!');

        return redirect()->back();
    }

    public function deletefav($id)
    {
        $delfav = Wishlist::find($id);

        $delfav->delete();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Successfully removed from Wishlist!');

        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $email = $request->email;
        $userid = Auth::user()->id;

        $cart = Cart::where('user_id',$userid)->get();

        foreach ($cart as $carts)
        {
            $order = new Order;

            $order->name = $name;

            $order->phone = $phone;

            $order->rec_address = $address;

            $order->email = Auth::user()->email;

            $order->user_id = $userid;

            $order->product_id = $carts->product_id;

            $order->save();
        }

        $cart_remove = Cart::where('user_id',$userid)->get();

        foreach($cart_remove as $remove)
        {
            $data = Cart::find($remove->id);
            $data->delete();
        }

        toastr()->timeOut(5000)->closeButton()->addSuccess('Order Placed Successfully');

        return redirect()->back();

    }

    public function myorders()
    {
        $userid = Auth::user()->id;

        $count = Cart::where('user_id',$userid)->count();

        $countw = Wishlist::where('uid',$userid)->count();

        $order = Order::where('user_id',$userid)->get();

        return view('user.order', compact('count', 'countw', 'order'));
    }

}

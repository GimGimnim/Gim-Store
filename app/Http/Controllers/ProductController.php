<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Products
    public function view_product()
    {
        $data = Product::all();

        return view('admin.product.view',compact('data'));
    }

    public function add_product()
    {
        return view('admin.product.add');
    }

    public function edit_product($id)
    {
        $data = Product::find($id);

        return view('admin.product.edit',compact('data'));
    }

    public function add_prod(Request $request)
    {
        $product = new Product;

        $product->name = $request->newprod;
        $product->size = $request->newprod;
        $product->color = $request->newprod;
        $product->condition = $request->newprod;
        $product->description = $request->newprod;
        $product->quantity = $request->newprod;
        $product->brand = $request->newprod;
        $product->category = $request->newprod;
        $product->image = $request->newprodphoto;

        $product->save();
        toastr()->timeOut(5000)->closeButton()->addSuccess('Product added successfully!');

        return view('admin.product.add');
    }

    public function edit_prod(Request $request,$id)
    {
        $data = Product::find($id);

        $data->name = $request->editprod;
        $data->size = $request->newprod;
        $data->color = $request->newprod;
        $data->condition = $request->newprod;
        $data->description = $request->newprod;
        $data->quantity = $request->newprod;
        $data->brand = $request->newprod;
        $data->category = $request->newprod;
        $data->image = $request->newprodphoto;

        $data->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Product updated successfully!');
        return redirect('/view_product');
    }

    public function delete_product($id)
    {
        $data = Product::find($id);

        $data->delete();

        return redirect()->back();
        toastr()->timeOut(5000)->closeButton()->addSuccess('Product deleted successfully!');
    }

}

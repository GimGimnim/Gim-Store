<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    //Categories
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category.view',compact('data'));
    }

    public function add_category()
    {
        return view('admin.category.add');
    }

    // public function edit_cat($id)
    // {
    //     $data = Category::find($id);

    //     $data->replace();

    //     return redirect()->back();
    // }

    public function add_cat(Request $request)
    {
        $category = new Category;

        $category->cat_name = $request->newcat;
        $category->cat_photo = $request->newcatphoto;

        $category->save();
        toastr()->timeOut(5000)->closeButton()->addSuccess('Category added successfully');

        return view('admin.category.add');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        return redirect()->back();
    }



    //Products
    public function view_product()
    {
        return view('admin.products.view');
    }

    public function add_product()
    {
        return view('admin.products.add');
    }

    public function edit_product()
    {
        return view('admin.products.edit');
    }



    //Sub-categories
    public function view_subcategory()
    {
        return view('admin.subcategory.view');
    }

    public function add_subcategory()
    {
        return view('admin.subcategory.add');
    }

    public function edit_subcategory()
    {
        return view('admin.subcategory.edit');
    }



    //Brands
    public function view_brand()
    {
        return view('admin.brands.view');
    }

    public function add_brand()
    {
        return view('admin.brands.add');
    }

    public function edit_brand()
    {
        return view('admin.brands.edit');
    }

    
}

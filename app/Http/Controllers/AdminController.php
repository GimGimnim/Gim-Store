<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Categories
    public function view_category()
    {
        return view('admin.category.view');
    }

    public function add_category()
    {
        return view('admin.category.add');
    }

    public function edit_category()
    {
        return view('admin.category.edit');
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

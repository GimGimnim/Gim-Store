<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //Brands
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category.view',compact('data'));
    }

    public function add_category()
    {
        return view('admin.category.add');
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.category.edit',compact('data'));
    }

    public function add_cat(Request $request)
    {
        $category = new Category;

        $category->cat_name = $request->newcat;
        $category->cat_photo = $request->newcatphoto;

        $category->save();
        toastr()->timeOut(5000)->closeButton()->addSuccess('Category added successfully!');

        return view('admin.category.add');
    }

    public function edit_cat(Request $request,$id)
    {
        $data = Category::find($id);

        $data->cat_name = $request->editcat;
        $data->cat_photo = $request->editcatphoto;

        $data->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Category updated successfully!');
        return redirect('/view_category');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        return redirect()->back();
        toastr()->timeOut(5000)->closeButton()->addSuccess('Category deleted successfully!');
    }
}

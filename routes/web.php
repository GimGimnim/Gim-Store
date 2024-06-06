<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/',[HomeController::class,'home']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('user',[HomeController::class,'user'])-> middleware(['auth','verified']);
route::get('admin/dashboard',[HomeController::class,'index'])-> middleware(['auth','admin']);

//Categories
route::get('view_category',[AdminController::class,'view_category'])-> middleware(['auth','admin']);
route::get('add_category',[AdminController::class,'add_category'])-> middleware(['auth','admin']);
route::get('edit_cat/{id}',[AdminController::class,'edit_cat'])-> middleware(['auth','admin']);
route::post('add_cat',[AdminController::class,'add_cat'])-> middleware(['auth','admin']);
route::get('delete_category/{id}',[AdminController::class,'delete_category'])-> middleware(['auth','admin']);

//Sub-categories
route::get('view_subcategory',[AdminController::class,'view_subcategory'])-> middleware(['auth','admin']);
route::get('add_subcategory',[AdminController::class,'add_subcategory'])-> middleware(['auth','admin']);
route::get('edit_subcategory',[AdminController::class,'edit_subcategory'])-> middleware(['auth','admin']);

//Products
route::get('view_product',[AdminController::class,'view_product'])-> middleware(['auth','admin']);
route::get('add_product',[AdminController::class,'add_product'])-> middleware(['auth','admin']);
route::get('edit_product',[AdminController::class,'edit_product'])-> middleware(['auth','admin']);

//Brands
route::get('view_brand',[AdminController::class,'view_brand'])-> middleware(['auth','admin']);
route::get('add_brand',[AdminController::class,'add_brand'])-> middleware(['auth','admin']);
route::get('edit_brand',[AdminController::class,'edit_brand'])-> middleware(['auth','admin']);



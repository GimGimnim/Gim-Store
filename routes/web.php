<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

route::get('/',[HomeController::class,'home']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('user',[HomeController::class,'user'])-> middleware(['auth','verified'])->name('/');
route::get('admin/dashboard',[HomeController::class,'index'])-> middleware(['auth','admin']);

//Categories
route::get('view_category',[CategoryController::class,'view_category'])-> middleware(['auth','admin']);
route::get('add_category',[CategoryController::class,'add_category'])-> middleware(['auth','admin']);
route::get('edit_category/{id}',[CategoryController::class,'edit_category'])-> middleware(['auth','admin']);
route::post('add_cat',[CategoryController::class,'add_cat'])-> middleware(['auth','admin']);
route::post('edit_cat/{id}',[CategoryController::class,'edit_cat'])-> middleware(['auth','admin']);
route::get('delete_category/{id}',[CategoryController::class,'delete_category'])-> middleware(['auth','admin']);

//Products
route::get('view_product',[ProductController::class,'view_product'])-> middleware(['auth','admin']);
route::get('add_product',[ProductController::class,'add_product'])-> middleware(['auth','admin']);
route::get('edit_product',[ProductController::class,'edit_product'])-> middleware(['auth','admin']);
route::post('add_prod',[ProductController::class,'add_prod'])-> middleware(['auth','admin']);
route::post('edit_prod/{id}',[ProductController::class,'edit_prod'])-> middleware(['auth','admin']);
route::get('delete_prod/{id}',[ProductController::class,'delete_prod'])-> middleware(['auth','admin']);

//Brands
route::get('view_brand',[BrandController::class,'view_brand'])-> middleware(['auth','admin']);
route::get('add_brand',[BrandController::class,'add_brand'])-> middleware(['auth','admin']);
route::get('edit_brand',[BrandController::class,'edit_brand'])-> middleware(['auth','admin']);
route::post('addbrand',[BrandController::class,'addbrand'])-> middleware(['auth','admin']);
route::post('editbrand/{id}',[BrandController::class,'editbrand'])-> middleware(['auth','admin']);
route::get('delete_brand/{id}',[BrandController::class,'delete_brand'])-> middleware(['auth','admin']);

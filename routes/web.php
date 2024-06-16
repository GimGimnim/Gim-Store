<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


route::get('about',[UserController::class,'about'])-> middleware(['auth','verified']);
route::get('contact',[UserController::class,'contact'])-> middleware(['auth','verified']);
route::get('shop',[UserController::class,'shop'])-> middleware(['auth','verified']);

// // Categories
// route::get('view_category',[CategoryController::class,'view_category'])-> middleware(['auth','admin']);


// // Products
// route::get('view_product',[ProductController::class,'view_product'])-> middleware(['auth','admin']);

// // Brands
// route::get('view_brand',[BrandController::class,'view_brand'])-> middleware(['auth','admin']);

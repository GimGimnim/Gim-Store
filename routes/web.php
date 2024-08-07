<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

route::get('/',[HomeController::class,'home']);
route::get('home',[HomeController::class,'user'])-> middleware(['auth','verified'])->name('/');
route::get('admin/dashboard',[HomeController::class,'index'])-> middleware(['auth','admin']);

route::get('search',[UserController::class, 'search']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('myorders',[UserController::class,'myorders'])-> middleware(['auth','verified']);


route::get('about',[UserController::class,'about']);
route::get('contact',[UserController::class,'contact']);
route::get('shop',[UserController::class,'shop']);

route::get('details/{id}',[UserController::class,'details']);

route::get('add_cart/{id}',[UserController::class,'addCart'])-> middleware(['auth','verified']);

route::get('favorite/{id}',[UserController::class,'favorite'])-> middleware(['auth','verified']);

route::get('cart',[UserController::class,'cart'])-> middleware(['auth','verified']);
route::get('wishlist',[UserController::class,'wishlist'])-> middleware(['auth','verified']);

route::get('deletecartitem/{id}',[UserController::class,'delcart'])-> middleware(['auth','verified']);
route::get('deletefav/{id}',[UserController::class,'deletefav'])-> middleware(['auth','verified']);

route::post('checkout',[UserController::class,'checkout'])-> middleware(['auth','verified']);

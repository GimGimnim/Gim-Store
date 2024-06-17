<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'color',
        'price',
        'description',
        'quantity',
        'brand',
        'category',
        'image',
    ];
}

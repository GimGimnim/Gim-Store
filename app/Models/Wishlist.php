<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

class Wishlist extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'uid');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'pid');
    }
}

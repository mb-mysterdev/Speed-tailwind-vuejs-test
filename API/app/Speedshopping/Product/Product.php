<?php

namespace App\Speedshopping\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function basket()
    {
        return $this->hasMany('App\Speedshopping\Basket');
    }
}

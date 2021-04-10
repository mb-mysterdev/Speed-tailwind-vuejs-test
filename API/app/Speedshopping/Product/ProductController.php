<?php

namespace App\Speedshopping\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getAll(){
        return Product::all();
    }

}

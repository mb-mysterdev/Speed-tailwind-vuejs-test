<?php

namespace App\Speedshopping\Basket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function getAll(){
        return Basket::all();
    }

    public function add(Request $request)
    {
        $basket = new Basket;

        $basket->basket_product = $request->basket_product;

        $basket->save();
    }
}

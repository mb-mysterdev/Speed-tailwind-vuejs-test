<?php

namespace App\Speedshopping\Basket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $table = 'basket';

    protected $fillable = ['basket_product'];

    public function products()
    {
        return $this->hasMany('App\Speedshopping\Product');
    }
}

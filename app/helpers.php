<?php

use App\Models\Product;
use App\Models\User;

if(!function_exists('product_atributes')){

    function product_atributes($product){
        return Product::select('colors', 'sizes')->where('id', $product)->first();
    }

}


if(!function_exists('user_data')){

    function user_data($id){
        return User::where('id', $id)->first();
    }

}
<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

class CartService
{

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug,
                'size' => $request->size,
                'color' => $request->color,
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }
    
    public function cart()  {

        $cartCollection = \Cart::getContent();
        //  dd($cartCollection);
        return view('cart/cart')->with(['cartCollection' => $cartCollection]);

    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }



    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }


}
<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaService
{

    public function facturar($user, $compras ){

        
            $compra = [];
            $total = 0;

            foreach ($compras as $item) {            
                $i=0;
                array_push($compra, [ $i => [$item['name'], $item['price'], $item['quantity'], $item['attributes']['size'], $item['attributes']['color']   ]]);
                $total += $item['price'] * $item['quantity'];
                $i++;
            }

            $total > 50 ? $total + 5 : $total;
        
            $data = [
                'user_id' => $user->id,
                'compra' => $compra,
                'total'=> $total
            ];

            $factura = new Factura;
            $factura->user_id = $data['user_id'];
            $factura->compra = json_encode($data['compra']);
            $factura->total = $data['total'];
            $factura->save();

            \Cart::clear();


            return [
                'status' => 'success',
                'factura' => $factura->id,
                'data' => $data
            ];
     

    }
  

}
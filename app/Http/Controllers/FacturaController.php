<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Http\Services\FacturaService;
use Illuminate\Http\Request;
use Auth;

class FacturaController extends Controller
{

    protected $factService;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(FacturaService $factService)
    {
        $this->factService = $factService;
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
  
            $data = $this->factService->facturar(Auth::user(), \Cart::getContent() );
            // dd($data);
            return view('checkout')->with(['data' => $data ]);
   
        
    }

 
}

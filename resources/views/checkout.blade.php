@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Checkout</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <p>Factura # {{ $data['factura'] }}</p> 
                    <p>Cliente:  {{ user_data( $data['data']['user_id'] )->name }}</p>
                    <p>Email:  {{ user_data($data['data']['user_id'])->email }}</p>
                    <h6>Articulos</h6>
                    <ul>
                        @php
                            

                            for ($i=0; $i < count($data['data']['compra']); $i++) { 
                        @endphp
                        <li>
                                    {{ $data['data']['compra'][$i][0][0] }}
                                    talla {{ $data['data']['compra'][$i][0][3] }}
                                    color {{ $data['data']['compra'][$i][0][4] }}
                        </li>
                        @php
                            }
                        @endphp
                      
                        
                    </ul>
                    
                    
                </div>
                <hr>
                <p>Total:  {{ $data['data']['total'] }}</p>
            </div>
        </div>
    </div>
@endsection

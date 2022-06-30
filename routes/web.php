<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController as CartController;
use App\Http\Services\CartService as CartService;
use App\Http\Controllers\CustomerController as CustomerController;
use App\Http\Controllers\ProductController as ProductController;
use App\Http\Controllers\FacturaController as FacturaController;


//Global
    Route::get('/', function () {
        return view('welcome');
    });

//Auth
    Auth::routes();

//customers
    Route::get('/users', [CustomerController::class, 'index'])->name('users');
    Route::get('/user/show/{id}', [CustomerController::class, 'show'])->name('user.show');
    Route::post('/user/update', [CustomerController::class, 'update'])->name('user.update');
    Route::delete('/users/delete/{id}', [CustomerController::class, 'destroy'])->name('user.delete');

//Cart
    Route::get('/shop', [CartController::class, 'index'])->name('shop');
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');

    Route::get('/cart', [CartService::class, 'cart'])->name('cart.index');
    Route::post('/add', [CartService::class, 'add'])->name('cart.store');
    Route::post('/remove', [CartService::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartService::class, 'clear'])->name('cart.clear');

//product
    // Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    // Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    // Route::get('/product/show/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
    // Route::post('/product/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    // Route::delete('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
//Factura
    Route::get('/checkout', [FacturaController::class, 'checkout'])->name('checkout');





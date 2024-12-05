<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get( 'Checkout'          ,   [ OrderController::class , 'pay'  ])->name('checkout');
Route::post( 'Checkout/Submit'  ,   [ OrderController::class , 'store'  ])->name('checkout.submit');

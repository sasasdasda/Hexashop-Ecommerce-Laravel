<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentsController;

// use App\Http\Controllers\
// use App\Http\Controllers\Auth;

Route::get('User/Profile'                   ,       [ ShopController::class     ,   'profile'           ])->name('profile');
Route::get('Details'                        ,       [ ShopController::class     ,   'user_details'      ])->name('user.detail');
Route::get('User/Cart'                      ,       [ ShopController::class     ,   'cart'              ])->name('cart');
Route::get('addtocart/{quantity}/{id}'      ,       [ ShopController::class     ,   'addtocart'         ])->name('add.to.cart');
Route::get('user'                           ,       [ ShopController::class     ,   'user_product'      ])->name('user_product');
Route::get('User/{id}'                      ,       [ ShopController::class     ,   'user_profile'      ])->name('user.profile');
Route::get('Update/User/Details/{id}'       ,       [ UserController::class     ,   'update_details'      ])->name('user.profile');
Route::get('Orders'                         ,       [ OrderController::class     ,   'show'      ])->name('orders');
// Email Routes
// Payment Routes For User
Route::get('success-payment-red'                ,       [PaymentsController::class,'myFatoorahCallback'])->name('myfatoorah.callback');
Route::get('success-payment'                ,       [PaymentsController::class,'myFatoorahCallback'])->name('myfatoorah.callback');

Route::get('error-payment', [OrderController::class , 'error_payment'])->name('error.payment');

Route::get('h',[PaymentsController::class,'paystatus']);

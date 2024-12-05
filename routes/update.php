<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\UpdateController;
/*
|--------------------------------------------------------------------------
| Delete Routes
|--------------------------------------------------------------------------
|
| Note!:
|   Here Are Deleteing
|   You Can Delete 'Product User Post Comment'
|
*/
Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers'],function(){
    Route::group(['prefix'=>'update'],function(){
        Route::get('product/{id}'           ,       [UpdateController::class,   'update_product'    ])->name('update.product');
        Route::get('approve/product/{id}'   ,       [UpdateController::class,   'approve_product'   ])->name('approve.product');
        Route::get('deny/product/{id}'      ,       [UpdateController::class,   'deny_product'      ])->name('deny.product');
        Route::get('product/{id}'           ,       [UpdateController::class,   'update_product'    ])->name('update.product');
    });
});

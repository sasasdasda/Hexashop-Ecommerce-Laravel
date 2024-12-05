<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\DeleteController;

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
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers'], function () {
    Route::group(['prefix' => 'delete'], function () {
        // Routes
        Route::get('Product/{id}'   , [     DeleteController::class ,   'delete_product'    ])->name('delete.product');
        Route::get('Todo/{id}'      , [     DeleteController::class ,   'delete_todo'       ])->name('delete.todo');
    });
});

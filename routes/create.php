<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\CreateController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for Create Any Thing
| In Admin Panel . These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers'], function () {
    Route::group(['prefix' => 'create'], function () {
        Route::post('user',       [     CreateController::class     ,'create_user'      ])->name('create.user');
        Route::post('category',   [     CreateController::class     ,'create_category'  ])->name('create.category');
        Route::post('post',       [     CreateController::class     ,'create_post'      ])->name('create.post');
        Route::post('todo',       [     CreateController::class     ,'create_todo'      ])->name('create.todo');
        Route::post('product',    [     CreateController::class     ,'create_product'   ])->name('create.product');
    });
});

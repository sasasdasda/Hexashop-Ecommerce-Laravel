<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\CheckoutRequest;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[AuthController::class,'login']);

Route::middleware(['jwt.verify'])->group(function () {

    Route::post('/Checkout/Procced'     ,[OrderController::class,'create'       ])->name('sss');
    Route::get('Product'                ,[ProductController::class,'index'      ]);
    Route::get('Product/{id}'           ,[ProductController::class,'show'       ]);
    Route::put('pc'                     ,[ProductController::class,'store'      ]);
    Route::post('Product/Update/{id}'   ,[ProductController::class,'update'     ]);
    Route::post('Product/Delete/{id}'   ,[ProductController::class,'destroy'    ]);
    Route::post('logout'                ,[AuthController::class,'logout'        ]);
    Route::post('refresh'               ,[AuthController::class,'refresh'       ]);

});

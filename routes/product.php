<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('products'               ,   [ProductController::class      ,   'index'          ])->name('products');
Route::get('Product/Delete/{id}'    ,   [ProductController::class   ,   'destroy'           ])->name('product.delete');
Route::get('Product/Edit/{id}'      ,   [ProductController::class   ,   'edit'])->name('product.edit');
Route::post('Product/Update/{id}'    ,   [ProductController::class   ,   'update'])->name('product.update');
Route::get('My-Product'             ,   [ProductController::class     ,   'your_products'     ])->name('yourproduct');
Route::get('Product/'               ,   [ProductController::class  ,   'ss'            ])->name('add.product');
// Route::get('Product/',[ProductController::class,'create']);

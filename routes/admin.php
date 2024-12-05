<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
// use ;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'prefix' => 'Admin',
], function () {
    Route::get(''                       ,   [AdminController::class,        'login'             ])->name('admin_login');
    Route::post('Check'                 ,   [AdminController::class,        'login_submit'      ])->name('admin.login.check');
    Route::get('Logout'                 ,   [AdminController::class,        'logout'            ])->name('admin.logout');
    Route::get('Dashboard/{id?}'        ,   [AdminController::class,        'index'             ])->name('dashboard');
    // Products Routes
    Route::get('Tables'                 ,   [ProductController::class,      'index'             ])->name('admin_products');
    Route::get('Product/Details/{id}'   ,   [ProductController::class,      'details'           ])->name('product_details');
    Route::get('Post/Details/{id}'      ,   [ProductController::class,      'postDetails'       ])->name('details');
    // End Product Routes
    Route::get('Categories'             ,   [CategoryController::class,     'index'             ])->name('categories');
    Route::get('Comments'               ,   [AdminController::class,        'comments'          ])->name('comments');
    Route::get('Users'                  ,   [AdminController::class,        'users'             ])->name('users');
    Route::get('Users/{id}'             ,   [AdminController::class,        'get_user_details'  ])->name('user.details');
    Route::get('Result/{id}'            ,   [AdminController::class,        'result'            ])->name('result');
    Route::get('Category/Details/{id}'  ,   [AdminController::class,        'category_details'  ])->name('category_details');
    Route::get('Notification'           ,   [AdminController::class,        'notification'      ])->name('notification');
    Route::get('Site/Edit'              ,   [AdminController::class,        'edit_site'         ])->name('site.edit');
});

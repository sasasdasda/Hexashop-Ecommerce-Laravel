<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\
//use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Http\Controllers\TicketController;
use App\Mail\SendLoginMail;
use Illuminate\Support\Facades\Mail;
// Payments
use Laravel\Paddle\Http\Controllers\WebhookController;
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











Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    // 'middleware' => ['localeSessionRedirect','localizationRedirect','localizationViewPath']
],function (){

Route::get('/'                      ,   [ShopController::class                  ,   'home'                  ])->name('home');
Route::get('about'                  ,   [ShopController::class                  ,   'about'                 ])->name('about');
Route::get('contact'                ,   [ShopController::class                  ,   'contact'               ])->name('contact');
Route::get('login'                  ,   [ShopController::class                  ,   'login'                 ])->name('login');
Route::post('login/submit'          ,   [ShopController::class                  ,   'login_submit'          ])->name('login.submit');
Route::get('logout'                 ,   [ShopController::class                  ,   'logout'                ])->name('logout');
Route::post('DetailsSubmit'         ,   [ShopController::class                  ,   'user_details_submit'   ])->name('user.detail.submit');
Route::get('Category/{name}'        ,   [ShopController::class                  ,   'category_products'     ])->name('category.products');
Route::get('signup'                 ,   [ShopController::class                  ,   'signup'                ])->name('signup');
Route::get('single-product/{id}'    ,   [ProductController::class               ,   'single_product'        ])->name('single-product');
Route::post('signup/submit'         ,   [ShopController::class                  ,   'signup_submit'         ])->name('signup.submit');
Route::get('home'                   ,   [ShopController::class                  ,   'home'                  ])->name('home');
Route::post('Create/Ticket'         ,   [TicketController::class                ,   'store'                 ])->name('ticket.store');
// Email Route
Route::get('Verfication/Email/{email}'      ,   [UserController::class,'verfication_email'])->name('verfication.login.email');
Route::get('Verfication/Email/Send/{email}' ,   [UserController::class,'verfication_email_send'])->name('verfication.login.email.send');
Route::get('Verfication/Code'               ,   [UserController::class,'verfiy_code'])->name('verfiy.code');
Route::post('Verfication/Code/Submit'               ,   [UserController::class,'verfiy_code_submit'])->name('verfiy.code.submit');

Route::get('buy'                    ,   [App\Http\Controllers\PaymentsController::class,'buy']);
Route::get('pay'                    ,   [App\Http\Controllers\PaymentsController::class,'pay']);
Route::post('/paddle/webhook'       ,   [WebhookController::class, 'handleWebhook'])->name('paddle.webhook');
Route::post('/paddle/webhook'       ,   [WebhookController::class, 'handle']);

});Route::get('/test', function () {
    $data = null;
    Mail::to('samakaip1@gmail.com')->send(new SendLoginMail($data));
    return response()->json(['message' => 'Email sent successfully.']);

});


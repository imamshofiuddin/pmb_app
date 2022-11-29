<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Controllers\Middleware as ControllersMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// Route::group(['middleware' => ['auth', 'cekrole:student']], function(){
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

Auth::routes();

Route::group(['middleware'=>['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'sendPay'])->name('pay');
    Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
    Route::post('/confirmPayment', [App\Http\Controllers\PaymentController::class, 'confirmPayment'])->name('confirmPayment');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
});

<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;

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

//index AppController menampilkan view INDEX
Route::get('/', [AppController::class, 'index']);

//items resource controler ItemController
Route::resource('items', ItemController::class);

Route::resource('orders', OrderController::class);

//function order nampilin view ORDER
Route::get('/order', function(){
return view ('order');
});


<?php

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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', '\App\Http\Controllers\UsersController@show')->name('dashboard');
    Route::get('/product/create', '\App\Http\Controllers\ProductsController@create')->name('product.create');
    
    Route::get('/logout', '\App\Http\Controllers\LogoutController@perform')->name('logout.perform');
});


require __DIR__.'/auth.php';

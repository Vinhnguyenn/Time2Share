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
    Route::get('/product/create', '\App\Http\Controllers\ProductsController@create');
    Route::get('/products/created-succesfully', function(){
        return view('products.created');
    });
    Route::post('/product', '\App\Http\Controllers\ProductsController@store');
    Route::get('/products', '\App\Http\Controllers\ProductsController@index')->name('products.index');
    Route::get('/products/{id}', '\App\Http\Controllers\ProductsController@show');
    Route::get('/review/create', '\App\Http\Controllers\ReviewsController@create');
    Route::post('/review', '\App\Http\Controllers\ReviewsController@store');
    Route::patch('/lend/{id}', '\App\Http\Controllers\ProductsController@updateLend');
    Route::patch('/return/{id}', '\App\Http\Controllers\ProductsController@updateReturn');
    Route::patch('/return/accept/{id}', '\App\Http\Controllers\ProductsController@updateReturnAccept');
    Route::get('/lend', function(){
        return view('products.lend');
    });
    Route::get('/return', function(){
        return view('products.return');
    });
    Route::get('/accept', function(){
        return view('products.accept');
    });

    Route::get('/logout', '\App\Http\Controllers\LogoutController@perform')->name('logout.perform');
});


require __DIR__.'/auth.php';

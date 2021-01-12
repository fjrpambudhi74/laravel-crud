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
// Route::get('/', function () {
//     return view('welcome');
// });


// opt
// Route::get('/product', [ProductsController::class, 'index']);
Route::get('/', 'App\Http\Controllers\ProductsController@index'); //home default
Route::get('/add', 'App\Http\Controllers\ProductsController@add'); // view add page
Route::post('/store', 'App\Http\Controllers\ProductsController@store'); //actions handle add
Route::get('/edit/{id}', 'App\Http\Controllers\ProductsController@edit'); //view  edit page
Route::post('/update', 'App\Http\Controllers\ProductsController@update'); //actions handle update data
Route::get('/delete/{id}', 'App\Http\Controllers\ProductsController@delete'); //actions handle delete

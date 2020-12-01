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


Route::get('/products/{id}', 'ProductsController@show');
Route::get('/products', 'ProductsController@index');
Route::get('/products/{id}/delete', 'ProductsController@delete');
Route::post('/products/{id}/update', 'ProductsController@update');
Route::post('/products/create', 'ProductsController@create');

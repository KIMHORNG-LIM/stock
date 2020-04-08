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
Route::get('/addStock','stockController@addStock');
Route::post('/addStock','stockController@postStock');

Route::get('/stock','stockController@stock');

Route::get('/makeupCategory','stockController@makeupCategory');
Route::post('/makeupCategory','stockController@sale');

Route::get('/order','stockController@order');
Route::get('/instock','stockController@instock');


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
Route::get('/destock','destockController@addStock');
Route::post('/destock','destockController@postStock');

Route::get('/InstockProduct','destockController@instock');

Route::get('/makeupCategory','destockController@makeupCategory');
Route::post('/makeupCategory','destockController@sale');

Route::get('/soldProduct','destockController@soldProduct');


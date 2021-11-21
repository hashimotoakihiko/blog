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

//ブログ一覧画面を表示
Route::get('/','App\Http\Controllers\BlogController@showList')->name
('blogs');
Route::get('/blog/{id}','App\Http\Controllers\BlogController@showDetail')->name
('show');
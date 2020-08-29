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

//%2 bu şekilde çalışacağız
Route::get('/', function () {
    return view('welcome');
});

//%98 bu tarz yapacağız
Route::get('/merhaba', 'HomeController@merhaba');
Route::get('/kisiler', 'HomeController@indexView');
Route::get('/kayit', 'HomeController@createView');
Route::post('/kaydet', 'HomeController@create');
Route::get('/sil/{id}', 'HomeController@delete');
Route::get('/guncelle', 'HomeController@updateView');

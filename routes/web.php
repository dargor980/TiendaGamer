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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/productos', 'ProductoController');

Route::get('/destacado','ProductoController@destacado');

Route::get('/contacto','PagesController@viewContact');

Route::resource('/noticias', 'CarrouselController');

Route::resource('/administracion','AdminController')->middleware('auth');

Route::get('/editarnoticias','AdminController@showEditarNoticias')->middleware('auth');


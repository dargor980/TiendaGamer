<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/name','HomeController@getName');

Route::put('/destacado/edit','ProductoController@addToDestacado');

Route::put('/destacado/remove','ProductoController@removeToDestacado');

Route::resource('/productos', 'ProductoController');

Route::post('/productos/image','ProductoController@storeImagenProduto');

Route::get('/inventario','ProductoController@inventario');

Route::get('/destacado','ProductoController@destacado');

Route::get('/contacto','PagesController@viewContact');

Route::resource('/editnoticias', 'CarrouselController');

Route::get('videojuegos','PagesController@viewVideojuegos');

Route::get('geek', 'PagesController@viewGeek');

Route::get('computacion','PagesController@viewComputacion');

Route::resource('/categoria','CategoriasController');

Route::get('/inventario/productos','InventarioController@productos');

Route::get('inventario/stock','InventarioController@stock');

Route::get('/editarnoticias','AdminController@showEditarNoticias')->middleware('auth');

Route::post('/destacado/search','ProductoController@searchProducto');

Route::get('inventario/productos/agregar','InventarioController@agregarProducto');




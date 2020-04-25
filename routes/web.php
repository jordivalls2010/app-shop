<?php

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

Route::get('/','TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show'); //Listar imágenes

Route::post('/cart', 'CartDetailController@store')->name('store'); //añadir al carrito
Route::delete('/cart', 'CartDetailController@destroy')->name('destroy'); //añadir al carrito
 
Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/products', 'ProductController@index'); //listar productos
    Route::get('/products/create', 'ProductController@create'); //formulario de registro de  productos
    Route::post('/products', 'ProductController@store'); //registrar productos
    Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario de modificación de  productos
    Route::post('/products/{id}/edit', 'ProductController@update'); //registrar productos
    Route::delete('/admin/products/{id}', 'ProductController@destroy'); //eliminar productos

    Route::get('/products/{id}/images', 'ImageController@index'); //Listar imágenes
    Route::post('/products/{id}/images', 'ImageController@store'); //registrar imagenes
    Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminar imagenes
    Route::get('/products/{id}/images/select/{image} ', 'ImageController@select'); //Select imágenes

});


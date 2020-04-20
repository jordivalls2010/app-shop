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


Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/products', 'ProductController@index'); //listar productos
    Route::get('/products/create', 'ProductController@create'); //formulario de registro de  productos
    Route::post('/products', 'ProductController@store'); //registrar productos
    Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario de modificación de  productos
    Route::post('/products/{id}/edit', 'ProductController@update'); //registrar productos

    Route::delete('/admin/products/{id}', 'ProductController@destroy'); //eliminar productos
});


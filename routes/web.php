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
route::get('/home', 'HomeController@index')->name('home');

route::get('/', 'indexController@index'); 
route::patch('/{produk}','indexController@update');
route::get('/{produk}/edit','indexController@edit');
route::post('/','indexController@store');
route::delete('/{produk}','indexController@destroy');


Auth::routes();


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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', 'AdminController@index')->name('admin');

Route::prefix('admin')->group(function () {
    Route::resource('products', 'ProductController');
    Route::resource('attributes', 'AttributesController');
    Route::resource('attributeValues', 'AttributeValuesController');
    Route::resource('orders', 'OrdersController');

    Route::resource('settings', 'SettingController');

    Route::get('home/edit', 'HomeController@edit')->name('home.edit');
    Route::patch('home/edit', 'HomeController@save')->name('home.save');
});

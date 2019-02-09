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

    Route::resource('attributes', 'AttributeController');

    Route::resource('attributeValues', 'AttributeValueController')->except(['create']);
    Route::get('attributeValues/{attr_id}/create', 'AttributeValueController@create')->name('attributeValues.create');

    Route::resource('orders', 'OrderController');

//    Route::resource('settings', 'SettingController');

    Route::get('home/edit', 'HomeController@edit')->name('home.edit');
    Route::patch('home/edit', 'HomeController@save')->name('home.save');

    Route::get('common/edit', 'CommonController@edit')->name('common.edit');
//    Route::patch('common/edit', 'CommonController@save')->name('common.save');
    Route::patch('common/update', 'CommonController@update')->name('common.update');
});

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

Route::prefix('admin')->middleware('auth:web')->group( function () {
    Route::get('', 'ProductController@index')->name('admin');

    Route::resource('products', 'ProductController');

    Route::resource('attributes', 'AttributeController');

    Route::resource('attributeValues', 'AttributeValueController')->except(['create']);
    Route::get('attributeValues/{attr_id}/create', 'AttributeValueController@create')->name('attributeValues.create');

    Route::patch('orders/{id}/changeStatus', 'OrderController@changeStatus')->name('orders.changeStatus');
    Route::resource('orders', 'OrderController')->except(['create', 'edit', 'update', 'store']);

//    Route::resource('settings', 'SettingController');

    Route::group(['middleware' => ['role:admin']], function() {

        Route::resource('users', 'UserController');

        Route::get('home/edit', 'HomeController@edit')->name('home.edit');
        Route::patch('home/edit', 'HomeController@save')->name('home.save');

        Route::get('common/edit', 'CommonController@edit')->name('common.edit');
        Route::patch('common/update', 'CommonController@update')->name('common.update');

        Route::get('general/edit', 'GeneralSettingsController@edit')->name('general.edit');
        Route::patch('general/update', 'GeneralSettingsController@update')->name('general.update');
    });
});

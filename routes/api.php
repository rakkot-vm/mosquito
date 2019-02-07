<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    Route::post('register', 'ApiAuth\AuthController@register');
    Route::post('login', 'ApiAuth\AuthController@login');

    Route::post('forgot', 'ApiAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('reset-pass', 'ApiAuth\ResetPasswordController@doReset');


    Route::prefix('auth')->group(function () {
        Route::middleware('api.auth:api')->group(function () {
            Route::delete('logout', 'ApiAuth\AuthController@logout');
            Route::post('refresh', 'ApiAuth\AuthController@refresh');
            Route::get('me', 'ApiAuth\AuthController@me');
        });
    });

//    Route::prefix('users')->group(function () {
//        Route::put('update', 'UserController@update');
//        Route::delete('delete', 'UserController@delete');
//        Route::get('all', 'UserController@getAll');
//        Route::get('{id}', 'UserController@getOne');
//    });

    Route::resource('products', 'ProductController')->only('index','show');
    Route::resource('attributes', 'AttributeController')->only('index','show');
    Route::resource('orders', 'OrderController')->only('index','show');

    Route::get('orders/calc', 'OrderController@calc')->name('orders.calc');
    Route::get('orders/order', 'OrderController@order')->name('orders.order');
    Route::get('orders/thank', 'OrderController@thank')->name('orders.thank');

    Route::resource('settings', 'SettingController')->only('show', 'index');

    Route::get('home', 'HomeController@get')->name('home.get');
//    Route::get('all-home', 'HomeController@allSettings')->name('home.all');

    Route::get('common', 'CommonController@get')->name('common.get');

//    Route::resource('settings', 'SettingsController')->except([
//        'index','create', 'store', 'update', 'destroy'
//    ]);
//    Route::resource('attribute-values', 'AttributeValueController');

});
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

    Route::get('pages/{id}', 'PageController@get');

    Route::prefix('texts')->group(function () {
        Route::get('by-id/{text_id}', 'TextController@getByTextId');
        Route::get('by-type/{type}', 'TextController@getByType');
        Route::get('all', 'TextController@getAll');
    });

    Route::get('products/{id}', 'ProductController@get');
    Route::resource('attributes', 'AttributeController')->only('index','show');

    Route::get('home', 'HomeController@get')->name('home.get');
    Route::get('common', 'CommonController@get')->name('common.get');
    Route::get('general', 'GeneralSettingsController@get')->name('general.get');

    Route::prefix('orders')->group(function () {
        Route::get('calc-product', 'OrderController@calcProduct')->name('order.calcProduct');
        Route::get('calc-all-products', 'OrderController@calcAllProducts')->name('order.calcAllProducts');
        Route::middleware(['check_order_amount', 'check_private_policy'])->group(function () {
            Route::post('', 'OrderController@store')->name('order.store');
        });
        Route::post('confirm', 'OrderController@confirm')->name('stripe.confirm');
    });

    Route::any('/{any}', function(){
        return response()->json(['error' => 'Not Found.'], 404);
    })
        ->where(['any' => '.*'])
        ->name('api.fallback.404');
});
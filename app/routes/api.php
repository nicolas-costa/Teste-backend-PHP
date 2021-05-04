<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'v1'], function () {

   Route::get('product/search', 'App\Http\Controllers\Api\v1\ProductController@search')
       ->name('product.search');

   Route::get('order/{order}', 'App\Http\Controllers\Api\v1\OrderController@byId')
       ->name('order.byId');

   Route::post('order', 'App\Http\Controllers\Api\v1\OrderController@store')
       ->name('order.create');
});
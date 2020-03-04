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

Route::get('/v1/products', 'ProductController@get');
Route::post('/v1/products', 'ProductController@post');
Route::put('/v1/products', 'ProductController@put');
Route::patch('/v1/products', 'ProductController@patch');
Route::delete('/v1/products', 'ProductController@delete');

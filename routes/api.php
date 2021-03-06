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
// Authentication
Route::prefix('auth')->group(function () {
    Route::post('login', 'UserController@login');
    Route::middleware('auth:api')->group(function () {
        Route::post('invite', 'UserController@register');
        Route::get('user', 'UserController@getDetails');
    });
});

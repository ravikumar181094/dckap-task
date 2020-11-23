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

Route::post('login', 'Api\AuthController@login');

Route::group(['prefix' => 'cars', 'middleware' => 'auth:api' ], function () {
    Route::post('/save', 'Api\CarsController@save');
    Route::post('/search', 'Api\CarsController@search');
});

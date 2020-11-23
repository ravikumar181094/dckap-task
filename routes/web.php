<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@login');

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();


Route::group(['middleware'=> 'auth'], function () {

    // Dashboard
    Route::get('/home', 'HomeController@index')->name('dashboard');

    // Cars
    Route::group(['prefix' => 'cars' ], function () {
        Route::get('/list', 'CarsController@list')->name('cars.list');
        Route::get('/add', 'CarsController@add')->name('cars.add');
        Route::post('/save', 'CarsController@save')->name('cars.save');
        Route::get('/edit/{id}', 'CarsController@edit')->name('cars.edit');
        Route::post('/update', 'CarsController@update')->name('cars.update');
        Route::get('/delete/{id}', 'CarsController@delete')->name('cars.delete');
    });

});
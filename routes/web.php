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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('sales','SalesController');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('sales','SalesController@index');
    Route::get('sales/create','SalesController@create');
    Route::post('sales/store','SalesController@store');
    Route::delete('/sales/{id}', 'SalesController@delete');


});

Route::group(['prefix' => 'api/v1','namespace' => 'Api'], function($app)
{
    Route::get('sales','SalesController@index');

	Route::get('sales/{id}','SalesController@getSales');

	Route::post('sales','SalesController@createSales');

	Route::put('sales/{id}','SalesController@updateSales');

	Route::delete('sales/{id}','SalesController@deleteSales');
});

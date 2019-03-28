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



Route::get('/', 'BarcodeController@index');
Route::get('/test', 'BarcodeController@test');
Route::get('/invoice', 'BarcodeController@invoice');
Route::get('/get', function() {
	return view('welcome');
});

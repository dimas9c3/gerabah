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

Route::get('/', 'FrontController@index');
Route::post('/getDonasi', 'FrontController@getDonasi');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
	// HOME SECTION
	Route::namespace('backend')->group(function(){
		Route::get('/home', 'HomeController@index')->name('home');
	});

	// DONASI SECTION
	Route::namespace('backend')->group(function(){
		// GET SECTION
		Route::get('/donasi', 'DonasiController@index');
		// POST SECTION
		// Get Data
		Route::post('/donasi/getData', 'DonasiController@getData');
		// Add Data
		Route::post('/donasi/store', 'DonasiController@store');
		// Destroy Data
		Route::post('/donasi/destroy', 'DonasiController@destroy');
		// Update Data
		Route::post('/donasi/update', 'DonasiController@update');
	});
});


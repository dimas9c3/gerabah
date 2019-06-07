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
Route::post('/getAnggaran', 'FrontController@getAnggaran');

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

	// PENGELUARAN SECTION
	Route::namespace('backend')->group(function() {
		Route::prefix('pengeluaran')->group(function() {
			// GET SECTION
			Route::get('/', 'PengeluaranController@index')->name('pengeluaran.index');
			// POST SECTION
			Route::post('/store', 'PengeluaranController@store')->name('pengeluaran.store');
			// GET DATA
			Route::post('getData', 'PengeluaranController@getData')->name('pengeluaran.getData');
			// Destroy Data
			Route::post('/destroy', 'PengeluaranController@destroy')->name('pengeluaran.destroy');
		});
	});

	// GALLERY SECTION
	Route::namespace('backend')->group(function() {
		Route::prefix('gallery')->group(function() {
			// GET SECTION
			Route::get('/', 'GalleryController@index')->name('gallery.index');
			// POST SECTION
			Route::post('store', 'GalleryController@store')->name('gallery.store');
		});
	});

}); // GROUP MIDDLEWARE AUTH


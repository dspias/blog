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

// Route::get('/contact','PagesController@getContact');

// // For createing Route direct return veiw file in web browser
// Route::get('/about','PagesController@getAbout');

// // For createing Route Inital open page in web brwoser.
// Route::get('/', 'PagesController@getIndex');

// Route::resource('posts', 'PostController');

Route::group(['middleware' => ['web']], function(){

	Route::get('/contact','PagesController@getContact');

	// For createing Route direct return veiw file in web browser
	Route::get('/about','PagesController@getAbout');

	// For createing Route Inital open page in web brwoser.
	Route::get('/', 'PagesController@getIndex');

	Route::resource('posts', 'PostController');

});
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
	//Authentication Login and Logout route
	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm'] );
	Route::post('auth/login', 'Auth\LoginController@login');
	Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout'] );

	//Aotherntication Registration Route
	Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
	Route::post('auth/register', 'Auth\RegisterController@register');

	// password reset route
	Route::get('auth/passwords/reset/{token?}', 'Auth\ForgotPasswordController@showLinkRequestForm');
	Route::post('auth/passwords/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
	Route::post('auth/passwords/reset', 'Auth\ResetPasswordController@reset');

	//categories page route
	Route::resource('categories', 'CategoryController', ['except' => ['create']] );

	//tags page route
	Route::resource('tags', 'TagController', ['except' => ['create']] );

	//blog page route
	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
		->where('slug', '[\w\d\-\_]+');

	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

	Route::get('/contact','PagesController@getContact');

	// For createing Route direct return veiw file in web browser
	Route::get('/about','PagesController@getAbout');

	// For createing Route Inital open page in web brwoser.
	Route::get('/', 'PagesController@getIndex');

	Route::resource('posts', 'PostController');

});

Auth::routes();
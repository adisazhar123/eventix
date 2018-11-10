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

Route::get('/', 'MainController@index');
Route::get('/ticket', 'MainController@single_ticket');


// Route::group(['middleware' => ['user_only']], function(){
	Route::prefix('user')->group(function(){
	  Route::get('/', 'UserController@index');
	  Route::get('/new/event', 'UserController@newEventPage');
	  Route::get('/ordered-tickets', 'UserController@orderedTicketsPage');
	  Route::post('events', 'UserController@storeEvent');
	});
// });

// Route::group(['middleware' => ['admin_only']], function(){
	Route::prefix('admin')->group(function(){
		Route::get('/', 'AdminController@index');
	});
// });

Route::group(['middleware' => ['xxi_only']], function(){
	Route::prefix('xxi')->group(function(){
		Route::get('/', 'CinemaController@index');
	  	Route::get('/new/film', 'CinemaController@newFilmPage');
		Route::get('/cinema', 'CinemaController@listCinemas');
		Route::get('/film', 'CinemaController@listFilms');
	  	Route::post('films', 'CinemaController@storeFilm');
	});
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

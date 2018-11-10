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
Route::get('/events', 'MainController@eventPage');
Route::get('/events/{id}', 'MainController@single_ticket');

Route::prefix('user')->group(function(){
  Route::get('/', 'UserController@index');
  Route::get('/new/event', 'UserController@newEventPage');
  Route::get('/ordered-tickets', 'UserController@orderedTicketsPage');
  Route::post('events', 'UserController@storeEvent');
});


Route::get('/admin/dashboard', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

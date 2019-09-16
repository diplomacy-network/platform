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

Route::resource('games', 'GameController');

Route::resource('games/{game}/member', 'MemberController',
                array('only' => array('store', 'update', 'destroy')));

Route::get('games/{game}/join', 'GameController@join')->name('games.join');
Route::get('games/{game}/leave', 'GameController@leave')->name('games.leave');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

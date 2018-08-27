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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    ['middleware' => ['auth']], 
    function() {
        Route::resource('roles','RoleController');
        Route::resource('users','UserController');
    }
);

Route::prefix('strava')->group(
    function () {
        Route::get('/', 'Strava\StravaController@index');
    }
);



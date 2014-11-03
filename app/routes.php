<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('users', 'UsersController');
Route::resource('sessions', 'SessionsController',['only'=>['create','store', 'destroy']]);

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('profile', function () {
    return 'y;our rmail address is ' . Auth::user()->email;
})->before('auth');

Route::get('/',['as' => 'home', function () {

    if(Auth::check()) return View::make('home.home');

    return View::make('home.homepage');

}]);

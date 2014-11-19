<?php

/*
    Here is all pages that is somehow static
    PagesController is in charge of controlling those views
*/
Route::resource('users', 'UsersController');
Route::resource('sessions', 'SessionsController',['only'=>['create','store', 'destroy']]);

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('profile', function () {
    return 'y;our rmail address is ' . Auth::user()->email;
})->before('auth');

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

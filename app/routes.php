<?php

Route::resource('sessions', 'SessionsController',['only'=>['create','store', 'destroy']]);

/*
    Here is all pages that is somehow static
    PagesController is in charge of controlling those views
*/
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::post('register', ['as' => 'users.store', 'uses' => 'UsersController@store']);
Route::get('logout', ['as' => 'logout','uses' => 'SessionsController@destroy']);

//TODO: we dont have specific views for these two routes yet: make it!
Route::get('register', ['as' => 'users.store','uses' => 'UsersController@store']);
Route::get('login', ['as' => 'login','uses' => 'SessionsController@create']);



<?php
#Patterns
#id should match any number between 1 to 20 digits number
//TODO: for test purpose I changed it to accept 5 digits
Route::pattern('id', '[1-9][0-9]{0,4}');

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

/*
 * Profiles
 */
Route::get('/user/{id}', 'ProfilesController@show');

Route::post('login/user', ['as' => 'login.user', 'uses' => 'SessionsController@store']);


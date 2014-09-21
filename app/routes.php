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

Route::get('/', function () {
    $jalal =DB::table('users')->get();
    // return View::make('hello')->with('name',$jalal);
    return $jalal;
    efrefrj;

});
// Route::get('foo', array('https', function()
// {
//     return 'Must be over HTTPS';
// }));

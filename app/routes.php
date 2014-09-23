<?php
use Faker\Factory as Faker;
use Acme\User\User;
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
Route::resource('profiles', 'ProfilesController');

Route::get('/', function () {

    // return View::make('hello')->with('name',$jalal);
    //
    // Eloquent::unguard();
        $faker = Faker::create();

    foreach (range(1, 10) as $index) {
        User::create([
            'firstname' => $faker->unique()->sentence(3),
            'lastname'  => $faker->unique()->firstname(),
            'password'  => $faker->unique()->firstname(),
            'email'     => $faker->unique()->firstname(),

        ]);
    }
    $jalal =DB::table('users')->get();

    return $jalal;
    // return $faker->unique()->sentence(30);

    // return View::make('test');
});

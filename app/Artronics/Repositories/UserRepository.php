<?php namespace Artronics\Repositories;


use Artronics\User\User;
use Illuminate\Hashing\BcryptHasher;

class UserRepository
{

    public function createUser($data)
    {
        /*
         * I tried to use Hash facades here but it didn't work
         * there is something with facades that they migth not work out
         * side.
         */
        /*//dd(App::make('hash'));
//        Hash::make('dskl');
        $password = $data['password'];
        $hash = new BcryptHasher();
        $hash->make(, ['rounds' => '10']);*/

        $user = User::create($data);

        return $user;
    }
}

<?php

use Acme\User\User;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // foreach (range(1, 10) as $index) {
        //     User::create([
        //         // 'firstname' => $faker->unique()->sentence(3),
        //         // 'lastname'  => $faker->unique()->firstname(),
        //         // 'password'  => $faker->unique()->firstname(),
        //         // 'email'     => $faker->unique()->firstname(),
        //         // 'firstname' => $index,
        //         // 'lastname'  => $index,
        //         // 'password'  => $index,
        //         // 'email'     => $index,


        //     ]);
        // }
        //     dd($faker->firstname());
            User::create (
                array(
                    'email' => 'som',
                    'firstname' => 'john',
                    'lastname' => 'doe',
                    'password' => 'pass',
                    )
            );

           User::create (
                array(
                    'email' => 'some',
                    'firstname' => 'john',
                    'lastname' => 'smith',
                    'password' => 'pass',
                    )
            );

          User::create (
                array(
                    'email' => 'somthing',
                    'firstname' => 'jane',
                    'lastname' => 'doe',
                    'password' => 'pass',
                    )
            );

        }

}

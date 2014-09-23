<?php
use Acme\User\User;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            User::create([
                'email'     => $faker->unique()->email(),
                'password'  => $faker->sentence(2),
                'firstname' => $faker->firstname() ,
                'lastname'  => $faker->lastname(),
            ]);
        }

    }

}

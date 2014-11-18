<?php
use Artronics\User\User;
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
                'name' => $faker->firstname() ,
            ]);
        }
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Chris Sevilleja',
            'email'    => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
        ));
        User::create(array(
            'name'     => 'Jalal Hosseini',
            'email'    => 'jh_topgraph@yahoo.com',
            'password' => Hash::make('1234'),
        ));

    }

}

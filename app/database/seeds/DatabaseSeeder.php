<?php
use Acme\User\User;

class DatabaseSeeder extends Seeder
{
    /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        User::truncate();

        Eloquent::unguard();

        $this->call('UsersTableSeeder');
    }

}

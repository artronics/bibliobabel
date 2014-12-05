<?php namespace Artronics\Utilities\Faker;


use Faker\Factory;

class Faker implements FactoryInterface
{
    protected $faker;
    protected $user = [
        'name' => 'jalal',
        'email' => 'jj@jj.com1',
        'username' => 'jalal',
        'password' => '1234',
        'remember_token' => '45455gfh',
    ];

    function __construct(Factory $faker)
    {
        $this->faker = $faker;
    }

    /**
     * @return array
     */
    public function getUser()
    {

        $this->user['name'] = $this->faker->name;
        return $this->user;
    }

    public function make($model)
    {
//        $this->faker::create();
        // TODO: Implement make() method.
    }
}

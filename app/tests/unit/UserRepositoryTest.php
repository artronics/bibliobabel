<?php


use League\FactoryMuffin\Facade as Muffin;

class UserRepositoryTest extends TestCase
{


    public static function setupBeforeClass()
    {
        Muffin::loadFactories(__DIR__ . '/../support/factories');
    }
    public static function tearDownAfterClass()
    {
        Muffin::deleteSaved();
    }
    /**
     * @test
     */
    public function add_method_creates_a_new_user_and_a_profile()
    {
        $data=[
            'name' => 'jalal',
            'email' => 'jj@jj.com1',
            'username' => 'jalal',
            'password' => '1234',
            'remember_token' => '45455gfh',
        ];

        /*
         * first we should create an instance of User class
         * then we instance our UserRepository
         * after executing add() method it should create a User and a Profile
         */
        $user=new Artronics\Models\User\User();
        $userRepo=new Artronics\Models\User\Repository\UserRepository($user);

        //method under test
        $newUser=$userRepo->create($data);
//        $newUserProfile = $newUser->profile;

        assertInstanceOf('Artronics\Models\User\User',$newUser);
        assertInstanceOf('Artronics\Models\Profile\Profile',$newUserProfile);

    }
}
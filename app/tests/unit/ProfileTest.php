<?php


require 'vendor/phpunit/phpunit/src/Framework/Assert/functions.php';
use League\FactoryMuffin\Facade as Muffin;

class ProfileTestTest extends TestCase
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
    public function it_creates_a_profile_by_default()
    {
        $user=Muffin::create(ART_USER);
        $profile=Muffin::create(ART_PROFILE);
//        dd($profile);
        $user=$user->profile()->save($profile);
        dd($user);
        assertTrue(true);
    }
}
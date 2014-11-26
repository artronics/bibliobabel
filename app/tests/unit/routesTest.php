<?php

class routesTest extends TestCase
{
    /**
     * @test
     * @dataProvider routesUriProvider
     */
    public function route_to_home_should_response_ok($uri)
    {
        $this->call('GET', $uri);

        $this->assertResponseOk();
    }
    /**
     *
     */
    public function routesUriProvider()
        {
            return [
                ['/'],
                ['/user/2']
            ];
        }
}
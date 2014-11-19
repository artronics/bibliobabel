<?php namespace Artronics\Repositories;

use Illuminate\Support\ServiceProvider;

class UserRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the commands
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('repository', function ()
        {
            return new UserRepository();
        });
    }
}
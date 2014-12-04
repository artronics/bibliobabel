<?php namespace Artronics\Repositories\UserRepository;

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
        $this->app->bind(
            'Artronics\Repositories\UserRepository\UserRepositoryInterface',
            'Artronics\Repositories\UserRepository\UserRepository'
        );
    }
}
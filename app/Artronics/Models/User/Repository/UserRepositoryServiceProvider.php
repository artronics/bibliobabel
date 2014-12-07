<?php namespace Artronics\Models\User\Repository;

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
            'Artronics\Models\User\Repository\UserRepositoryInterface',
            'Artronics\Models\User\Repository\UserRepository'
        );
    }
}
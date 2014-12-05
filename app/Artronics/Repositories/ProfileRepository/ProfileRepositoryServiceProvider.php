<?php namespace Artronics\Repositories\ProfileRepository;

use Illuminate\Support\ServiceProvider;

class ProfileRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the commands
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Artronics\Repositories\ProfileRepository\ProfileRepositoryInterface',
            'Artronics\Repositories\ProfileRepository\ProfileRepository');
    }
}
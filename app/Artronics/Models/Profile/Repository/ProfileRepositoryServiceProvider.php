<?php namespace Artronics\Models\Profile\Repository;

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
        $this->app->bind('Artronics\Models\Profile\Repository\ProfileRepositoryInterface',
            'Artronics\Models\Profile\Repository\ProfileRepository');
    }
}
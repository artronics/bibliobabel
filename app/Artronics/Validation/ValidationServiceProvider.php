<?php namespace Artronics\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Artronics\Validation\FactoryInterface',
            'Artronics\Validation\Validator'
        );
    }

    public function boot()
    {
        $this->package('Artronics/validation');
    }

}
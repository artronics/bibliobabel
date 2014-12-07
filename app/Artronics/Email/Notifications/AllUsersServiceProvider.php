<?php namespace Artronics\Email\Notifications;

use Illuminate\Support\ServiceProvider;

class AllUsersServiceProvider extends ServiceProvider
{
    /**
     * Register the commands
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Artronics\Email\Notifications\AllUsersInterface',
            'Artronics\Email\Notifications\Mailchimp\AllUsers'
        );
    }
}
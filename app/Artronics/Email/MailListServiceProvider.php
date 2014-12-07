<?php namespace Artronics\Email;

use Illuminate\Support\ServiceProvider;

class MailListServiceProvider extends ServiceProvider
{
    /**
     * Register the commands
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Artronics\Email\MailListInterface',
            'Artronics\Email\Mailchimp\MailList'
        );
    }
}
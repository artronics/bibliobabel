<?php namespace Artronics\Models\Listeners;


use Illuminate\Mail\Mailer;
use Laracasts\Commander\Events\EventListener;
class EmailNotifier extends EventListener
{
    protected $mailer;

    function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }


    public function whenUserHasSubscribed()
    {
        $this->mailer->send('emails.welcome',['name' => 'jalal'], function($message)
        {
            $message->to('jh_topgraph@yahoo.com', 'jalal')->subject('Welcome!')
            ->from('jalalhosseiny@gmail.com');
        });
//        dd('send email');
   }
}

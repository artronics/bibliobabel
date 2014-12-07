<?php namespace Artronics\Email\Mailchimp;


use Artronics\Email\MailListInterface;
use Mailchimp;

class MailList implements MailListInterface
{

    protected $mailchimp;
    
    protected $lists = [
        'users' => '37b7ee2af7'
    ];

    /**
     * @param Mailchimp $mailchimp
     */
    function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * Subscribe a user to mailchimp list
     * @param $listName
     * @param $email
     * @return mixed
     */
    public function subscribeTo($listName, $email)
    {
        $this->mailchimp->lists->subscribe(
            $this->lists['users'],
            ['email' => $email],
            null, //merge vars
            'html', //defualt email type
            false, //require double opt in?
            true //update existing user?
        );
    }

    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function unsubscribeFrom($list, $email)
    {
        $this->mailchimp->lists->unsubscribe(
            $this->lists['users'],
            ['email' => $email],
            false, //delete email permanently?
            false, //send goodbye email?
            false //send unsubscribe notification email?
        );
    }
}

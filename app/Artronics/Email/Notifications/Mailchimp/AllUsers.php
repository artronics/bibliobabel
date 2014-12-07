<?php namespace Artronics\Email\Notifications\Mailchimp;


use Artronics\Email\Notifications\AllUsersInterface;
use Mailchimp;

/**
 * Class AllUsers
 * @package Artronics\Email\Notifications\Mailchimp
 */
class AllUsers implements AllUsersInterface
{

    /**
     * @var Mailchimp
     */
    protected $mailchimp;

    /**
     * @param Mailchimp $mailchimp
     */
    function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }


    /**
     * @param $title
     * @param $body
     * @return mixed
     */
    public function notify($title, $body)
    {
        $options = [
            'list_id' => '37b7ee2af7',
            'subject' => $title,
            'from_name' => 'Bibliobabel',
            'from_email' => 'jh_topgraph@yahoo.com',
            'to_name' => 'Bibliobabel Users'
        ];
        $content = [
            'html' => $body,
            'text' => strip_tags($body)
        ];

        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

        $this->mailchimp->campaigns->send($campaign['id']);
    }
}

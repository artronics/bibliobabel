<?php namespace Artronics\Email\Notifications;


interface AllUsersInterface
{
    /**
     * @param $title
     * @param $body
     * @return mixed
     */
    public function notify($title, $body);
}

<?php namespace Artronics\Email;


interface MailListInterface
{
    /**
     * @param $listName
     * @param $email
     * @return mixed
     */
    public function subscribeTo($listName, $email);

    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function unsubscribeFrom($list, $email);
}

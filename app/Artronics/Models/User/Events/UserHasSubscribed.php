<?php namespace Artronics\Models\User\Events;


use Artronics\Models\User\User;

class UserHasSubscribed
{
    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

}

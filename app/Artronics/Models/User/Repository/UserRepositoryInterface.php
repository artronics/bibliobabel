<?php namespace Artronics\Models\User\Repository;


interface UserRepositoryInterface
{
    public function byId($username);

    public function create($data);

    public function getProfile($user_id);

}

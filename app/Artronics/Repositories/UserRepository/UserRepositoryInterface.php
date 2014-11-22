<?php namespace Artronics\Repositories\UserRepository;


interface UserRepositoryInterface
{
    public function byId($username);

    public function add(array $data);

    public function getProfile($user_id);

}

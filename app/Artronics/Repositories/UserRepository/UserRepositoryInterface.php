<?php namespace Artronics\Repositories\UserRepository;


interface UserRepositoryInterface
{
    public function byId($username);

    public function createUser(array $data);

    public function getProfile(array $data);
}

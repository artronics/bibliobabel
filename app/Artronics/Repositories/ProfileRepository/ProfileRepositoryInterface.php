<?php namespace Artronics\Repositories\ProfileRepository;


interface ProfileRepositoryInterface
{
    public function add($user_id, array $data);
}

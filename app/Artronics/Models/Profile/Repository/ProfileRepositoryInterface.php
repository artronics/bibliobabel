<?php namespace Artronics\Models\Profile\Repository;


interface ProfileRepositoryInterface
{
    public function add($user_id, array $data);
}

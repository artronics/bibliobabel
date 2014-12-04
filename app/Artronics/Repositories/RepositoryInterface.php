<?php namespace Artronics\Repositories;


interface RepositoryInterface
{
    public function add(array $data);
    public function delete($id);
    public function update($id);

}

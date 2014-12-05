<?php namespace Artronics\Repositories\ProfileRepository;


use Artronics\Models\Profile\Profile;

class ProfileRepository implements ProfileRepositoryInterface
{
    protected $profile;

    function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }


    public function add($user_id, array $data)
    {
        return $this->profile->create($data);
    }
}

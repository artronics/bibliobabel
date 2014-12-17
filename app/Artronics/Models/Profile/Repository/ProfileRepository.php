<?php namespace Artronics\Models\Profile\Repository;


use Artronics\Models\Profile\Profile;
use Artronics\Models\User\User;

class ProfileRepository implements ProfileRepositoryInterface
{
    protected $profile;

    //protected $user;

    //function __construct(User $user)
    //{
    //    $this->user = $user;
    //}

    function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }


    public function add($user_id, array $data)
    {
        return $this->profile->create($data);
    }

    public function byId($userId)
    {
        $profile= $this->profile->findOrFail($userId);
        //$profile = $this->profile->findOrFail($user_id);
        //$profile = $user->profile;
        $privacy = $profile->privacy;
        //dd($privacy);
        //dd($profile);
        if ($privacy == 'public')
        {
            return $profile;

        }
        elseif ($privacy == 'protected')
        {
            return $profile;
        }
    }

    /**
     * @param $columnName
     * @param $value
     * @param null $query
     * @return Collection
     */
    public function byForeignKey($columnName, $value, $query = null)
    {
        if (is_null($query))
            return $this->profile->where($columnName, '=', $value);
        else
        {

            //TODO: Implement query part
        }
    }
}

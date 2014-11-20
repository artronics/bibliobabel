<?php namespace Artronics\Repositories\UserRepository;


use Artronics\Exceptions\NonExistantUserException;
use Artronics\User\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserRepository implements UserRepositoryInterface
{

    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }


    public function createUser($data)
    {
        $newUser = $this->user->create($data);

        return $newUser;
    }

    public function byId($id)
    {
        try{
            $foundUser = $this->user->whereId($id)->firstOrFail();
//        }catch(NonExistantUserException $e){
        //TODO: Find whether there is any better way to implement this
        }catch(ModelNotFoundException $e){
            throw new NonExistantUserException;
        }


        return $foundUser;
    }
}

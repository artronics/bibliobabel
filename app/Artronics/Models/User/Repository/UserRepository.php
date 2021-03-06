<?php namespace Artronics\Models\User\Repository;


use Artronics\Exceptions\NonExistantUserException;
use Artronics\Models\User\Events\UserHasSubscribed;
use Artronics\Models\User\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UserRepository implements UserRepositoryInterface {

    protected $user;

    protected $profile;

    protected $defaultProfile = [
        'about' => 'salam',
        'profile_pic' => 'male',
    ];

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create($data)
    {

        /*
         * there is a username field in our user's table which
         * is not required for user to specified it during registration,
         * however, since this field is required (for routing) we temporary
         * create a username for user.
         * user model is in charge of creating this temp username
         */
        //TODO: it seems that repository is not a good place for username logic maybre model would be better
        $username = makeUsername($data['name']);

        $data['username'] = $username;

        //atempt to save user to database
        $newUser = $this->user->create($data);
        $newUser->raise(new UserHasSubscribed($newUser));
        //Create Default Profile
        $newUser->profile()->create($this->defaultProfile);

        return $newUser;
    }

    public function profile($userId)
    {
        return $this->user->findOrFail($userId)->profile;
    }

    /**
     * @param $id
     * @return mixed
     * @throws NonExistantUserException
     */
    public function byId($id)
    {
        try
        {
            $foundUser = $this->user->whereId($id)->firstOrFail();
            //        }catch(NonExistantUserException $e){
            //TODO: Find whether there is any better way to implement this
        } catch (ModelNotFoundException $e)
        {
            throw new NonExistantUserException;
        }


        return $foundUser;
    }

    public function getProfile($user_id)
    {
        $profile = $this->user->with("Profile")->whereId($user_id)->firstOrFail();

        return $profile;
    }

    /**
     * @param mixed $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }
}

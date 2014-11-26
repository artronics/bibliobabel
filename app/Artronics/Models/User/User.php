<?php namespace Artronics\Models\User;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;

class User extends \Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    public $timestamps=true;

    //TODO: remove remember_token from this array. I added for testing
    protected $fillable = ['email','username', 'password', 'name','remember_token'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //TODO: for fast test i commented the below line uncomment on production
    //protected  $hidden = array('password', 'remember_token');

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function profile()
    {
        return $this->hasOne('Artronics\Models\Profile\Profile');
    }

}

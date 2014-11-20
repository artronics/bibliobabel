<?php namespace Artronics\User;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;

class User extends \Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    public $timestamps=true;

    // Add your validation rules here
    public static $rules = [
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'name' => 'required',
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = ['email', 'password', 'name'];

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
    protected  $hidden = array('password', 'remember_token');

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function profile()
    {
        return $this->hasOne('Profile');
    }

}

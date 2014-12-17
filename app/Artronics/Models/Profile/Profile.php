<?php namespace Artronics\Models\Profile;

class Profile extends \Eloquent
{

    public $timestamps = true;

    protected $fillable = ['user_id', 'privacy', 'profile_pic', 'username', 'about', 'location',
        'facebook_username', 'twitter_username'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    public function user()
    {
        return $this->belongsTo('Artronics\Models\User\User');
    }

}

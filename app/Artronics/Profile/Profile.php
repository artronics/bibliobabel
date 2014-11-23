<?php namespace Artronics\Profile;

class Profile extends \Eloquent
{

    public $timestamps=true;

    protected $fillable = ['user_id','about', 'location',
                            'facebook_username', 'twitter_username'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    public function user()
    {
        return $this->belongsTo('Artronics\User\User');
    }

}

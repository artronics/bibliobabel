<?php namespace Artronics\Profile;

class Profile extends \Eloquent
{

    public $timestamps=true;

    protected $fillable = [];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    public function user()
    {
        $this->belongsTo('User');
    }


}

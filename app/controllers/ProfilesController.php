<?php
use Artronics\Models\Profile\Repository\Exceptions\ProfileNotFoundException;
use Artronics\Models\Profile\Repository\ProfileRepositoryInterface as ProfileRepo;
use Artronics\Models\User\Repository\UserRepositoryInterface as UserRepo;
use Artronics\Models\User\User;
use Artronics\Models\Profile\Profile;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class ProfilesController
 */
class ProfilesController extends \BaseController {

    /**
     * @var ProfileRepo
     */
    protected $profileRepo;

    /**
     * @var
     */
    protected $profile;

    /**
     * @param UserRepo $profileRepo
     * @internal param ProfileRepo $profileRepo
     */
    function __construct(ProfileRepo $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /profiles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /profiles
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     * Display the specified resource.
     * GET /profiles/{id}
     *
     * @param $userId
     * @throws ProfileNotFoundException
     * @return Response
     */
	public function show($userId)
	{
        //$profile = $this->profileRepo->getProfile($userId);
        //dd($profile->toArray());
        //$authedUserId = Auth::user()->id;
        try{
            $profile = $this->profileRepo->byForeignKey('user_id',$userId)->firstOrFail();
        }catch(ModelNotFoundException $e){
           throw new ProfileNotFoundException('profile not found');
        }
        //dd($profile->user()->first()->name);//->findOrFail(2));
        return View::make('profiles.show')->withProfile($profile);
	}

    /**
     * Show the form for editing the specified resource.
     * GET /profiles/{id}/edit
     *
     * @param  int $id
     * @throws ProfileNotFoundException
     * @return Response
     */
	public function edit($id)
	{
        if (Auth::check() && Auth::user()->id == $id )
        {
            $authedUserId = Auth::user()->id;
            $profile = $this->profileRepo->byId($id);
            //dd($profile);
            return View::make('profiles.edit')->withProfile($profile);
        }
        else
            //Here we assumed that if somebody attempts to edit
            //a profile which is not belongs to her, we'll show
            //a profile not found page
            //If this behavior is not relevant just change the
            //exception to whatever more appropriate
            throw new ProfileNotFoundException('You have no permission to edit this profile.');

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}


<?php
use Artronics\Repositories\UserRepository\UserRepositoryInterface as UserRepo;
use Artronics\User\User;
use Artronics\Profile\Profile;

/**
 * Class ProfilesController
 */
class ProfilesController extends \BaseController {

    /**
     * @var UserRepo
     */
    protected $userRepo;

    /**
     * @param UserRepo $userRepo
     */
    function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
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
     * @param $id
     * @internal param $username
     * @return Response
     */
	public function show($user_id)
	{
        $profile = $this->userRepo->getProfile($user_id);
        //dd($profile->toArray());
        return View::make('profiles.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /profiles/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
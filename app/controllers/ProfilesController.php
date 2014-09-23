<?php
use Acme\;//path to model

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::all();

		return View::make('profiles.index', compact('profiles'));
	}

	/**
	 * Show the form for creating a new profile
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profiles.create');
	}

	/**
	 * Store a newly created profile in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Profile::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Profile::create($data);

		return Redirect::route('profiles.index');
	}

	/**
	 * Display the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::findOrFail($id);

		return View::make('profiles.show', compact('profile'));
	}

	/**
	 * Show the form for editing the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = Profile::find($id);

		return View::make('profiles.edit', compact('profile'));
	}

	/**
	 * Update the specified profile in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile = Profile::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Profile::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$profile->update($data);

		return Redirect::route('profiles.index');
	}

	/**
	 * Remove the specified profile from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Profile::destroy($id);

		return Redirect::route('profiles.index');
	}

}

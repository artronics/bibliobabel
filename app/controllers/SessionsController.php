<?php

class SessionsController extends \BaseController
{

    /**
     * Show the form for creating a new resource.
     * GET /$COLLECTION$/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /$COLLECTION$
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $attempt = Auth::attempt([
            'email' => $input['email'],
            'password' => $input['password'],
        ]);
        if ($attempt) {
            return Redirect::intended('/');
        }
        dd('problem');
    }


    /**
     * Remove the specified resource from storage.
     * DELETE /$COLLECTION$/{id}
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        return Redirect::home();
    }

}
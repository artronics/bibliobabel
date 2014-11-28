<?php

class SessionsController extends \BaseController
{
    //TODO: session controller dose not have views check this controller asap

    /**
     * Show the form for creating a new resource.
     * GET /$COLLECTION$/create
     *
     * @return Response
     */
    public function create()
    {
        return Redirect::to('home');
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
            return Redirect::route('home');
        }
        else{
            return Redirect::home()->withInput()->withErrors(['msg' => 'jkjhk','credential' => 'Invalid Credentials',]);
        }
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
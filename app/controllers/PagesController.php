<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check())
        {
            return View::make('home.home');
        }
        else
        {
            //TODO check why showStartPage dosent work
            /*
             * here i tried to call showStartPage method but it dosent work
             * it hits the method but nothing inside it will be executed
             */
//            $this->showStartPage();


            return View::make('home.homepage');

        }
	}

    public function showStartPage()
    {
//        echo "ija";
//        return "djfhkj";
//        return View::make('home.homepage');
    }

}
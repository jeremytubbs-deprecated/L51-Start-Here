<?php namespace App\Http\Controllers;

class PagesController extends Controller {

    /**
     * Show the homepage
     *
     * @return Response
     */
    public function getHome()
    {
        return view('pages.home');
    }

}

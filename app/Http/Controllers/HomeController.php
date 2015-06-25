<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/**
	 * Show the homepage
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.home');
	}

}

<?php namespace App\Http\Controllers;

use \App\Models\Announcement;
use \App\Models\Brand;
use \App\Models\Editorial;
use \App\Models\Event;

use Session;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index_en()
	{
		Session::put('lang', 'EN');
		return $this->index();
	}

	public function index_fr()
	{
		Session::put('lang', 'FR');
		return $this->index();
	}
	
	public function index()
	{
		return view('home/home')
			->with('urlol', languages(HOME_FR, HOME))
			->with('Announcement', Announcement::where('current', 1)->first())
			->with('Brands', Brand::where('active', 1)->get())
			->with('Editorial', Editorial::where('current', 1)->first())
			->with('Event', Event::where('current', 1)->first());			
	}

}

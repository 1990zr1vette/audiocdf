<?php namespace App\Http\Controllers;

use Session;
use Hash;

use Illuminate\Http\Request;

use \App\Models\User;

class AdminController extends Controller {

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
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/admin/admin');
	}
	
	public function login(Request $request)
	{
		$User = User::where('email', $request->get('email'))->first();
		
		if (Hash::check($request->get('password'), $User->password))
		{
			Session::put('user', $User->name);
			Session::put('priviliges', $User->priviliges);	
			
			return redirect('admin');
		}
		else
		{
			return redirect('admin/login')->with('message', 'User name or password incorrect');
		}
	}
	
	public function logout()
	{
		$this->checkUser();
	
		Session::forget('user');
		return redirect('admin');
	}
	
	public function register()
	{
		$this->checkUser();
		
		return view('admin/admin/register');
	}
	
	//public function newuser(UserStoreRequest $request)
	//public function newuser(Request $request)
	//{
		//echo $request->get('privileges');
		
		//$this->checkUser();
		
		//User::create($request->all());
		//return redirect('admin');
	//}

}

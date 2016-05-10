<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use \App\Models\User;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->checkUser();
		
		return view('admin/users/users')
			->with('Users', User::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->checkUser();

		return view('admin/users/user')
			->with('action', 'Add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */	 
	public function store(UserStoreRequest $request)
	{
		$this->checkUser();
		
		User::create($request->all());
		return redirect('admin');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->checkUser();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->checkUser();
		
		return view('admin/users/user')
			->with('action', 'Update')
			->with('User', User::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->checkUser();
		
		$User = User::findOrFail($id);		 
		$User->fill($request->all())->save(); 
		return redirect('admin/users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->checkUser();
	}
	
	public function changePassword($id)
	{
		$this->checkUser();
		
		$User = User::findOrFail($id);
	
		if ($User)
		{
			return view('admin/users/changepassword')
				->with('User', $User);		
		}
		else
		{
			return redirect('admin/users');
		}
	}
	
	//public function updatePassword(UserUpdateRequest $request, $id)
	//{
		//$this->checkUser();
		
		//$User = User::findOrFail($id);		 
		//$User->fill($request->all())->save(); 
		//return redirect('admin/users');		
	//}
	

}

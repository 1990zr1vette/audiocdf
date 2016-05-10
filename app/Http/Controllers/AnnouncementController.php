<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AnnouncementStoreRequest;
use App\Http\Controllers\Controller;
use \App\Models\Announcement;

use Illuminate\Http\Request;


class AnnouncementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->checkUser();
		
		return view('admin/announcements/announcements')
			->with('Announcements', Announcement::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->checkUser();
		
		return view('admin/announcements/announcement')
			->with('action', 'Add');
			
		return $this->newRow($this->model, $request, 'admin/brands');			
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AnnouncementStoreRequest $request)
	{
		$this->checkUser();
		
		Announcement::create($request->all());
		return redirect('admin/announcements');		
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
		
		return view('admin/announcements/announcement')
			->with('action', 'Update')
			->with('Announcement', Announcement::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(AnnouncementStoreRequest $request, $id)
	{
		$this->checkUser();
		
		$Announcement = Announcement::findOrFail($id);
		$Announcement->fill($request->all())->save();
		return redirect('admin/announcements');		
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

}

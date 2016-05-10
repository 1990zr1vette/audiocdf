<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\EventStoreRequest;

use \App\Models\Event;

class EventController extends Controller {

	private $table = 'events';
	private $model = 'Event';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->checkUser();
		
		return view('admin/events/events')
			->with('Events', Event::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->checkUser();
		
		return view('admin/events/event')
			->with('action', 'Add');		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(EventStoreRequest $request)
	{
		$this->checkUser();
		
		return $this->newRow($this->model, $request, 'admin/events');
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$this->checkUser();
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
	
	public function updateCurrent(Request $request)
	{
		$this->checkUser();
		
		return $this->setCurrent($this->table, $request, 'admin/events');
	}

}

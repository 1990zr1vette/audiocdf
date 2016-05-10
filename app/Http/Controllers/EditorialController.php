<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\EditorialStoreRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Editorial;

class EditorialController extends Controller {

	private $table = 'editorials';
	private $model = 'Editorial';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->checkUser();
		
		return view('admin/editorials/editorials')
			->with('Editorials', Editorial::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->checkUser();
		
		return view('admin/editorials/editorial')
			->with('action', 'Add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(EditorialStoreRequest $request)
	{
		$this->checkUser();
		
		return $this->newRow($this->model, $request, 'admin/editorials');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		
		return view('admin/editorials/editorial')
			->with('action', 'Update')
			->with('Editorial', Editorial::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditorialStoreRequest $request, $id)
	{
		$this->checkUser();
		
		return $this->updateRow($this->model, $request, $id, 'admin/editorials');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	public function updateCurrent(Request $request)
	{
		$this->checkUser();
		
		return $this->setCurrent($this->table, $request, 'admin/editorials');
	}

}

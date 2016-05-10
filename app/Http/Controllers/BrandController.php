<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\BrandStoreRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;

class BrandController extends Controller {

	private $model = 'Brand';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->checkUser();
		
		return view('admin/brands/brands')
			->with('Brands', Brand::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->checkUser();
		
		return view('admin/brands/brand')
			->with('action', 'create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BrandStoreRequest $request)
	{
		$this->checkUser();
		
		return $this->newRow($this->model, $request, 'admin/brands');
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
		
		return view('admin/brands/brand')
			->with('action', 'update')
			->with('Brand', Brand::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(BrandStoreRequest $request, $id)
	{
		$this->checkUser();
		
		return $this->updateRow($this->model, $request, $id, 'admin/brands');
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

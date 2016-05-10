<?php namespace App\Http\Controllers;

use Input;

use App\Http\Requests;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Product;

class ProductController extends Controller {

	private $model = 'Product';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->checkUser();

		return view('admin/products/products')
			->with('Products', Product::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->checkUser();

		return view('admin/products/product')
			->with('action', 'create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductStoreRequest $request)
	{
		$this->checkUser();
		Product::create($request->all());
		return redirect('admin/products');
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
		return view('admin/products/product')
			->with('action', 'update')
			->with('Product', Product::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProductStoreRequest $request, $id)
	{
		$this->checkUser();
		$Product = Product::findOrFail($id);		 
		$Product->fill(Input::all())->save(); 
		return redirect('admin/products');
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

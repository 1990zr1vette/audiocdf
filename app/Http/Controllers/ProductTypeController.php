<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductTypeStoreRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Product;
use \App\Models\ProductType;

class ProductTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($product_id)
	{
		$this->checkUser();
		
		return view('admin/producttypes/producttypes')
			->with('Product', Product::where('id', $product_id)->first())
			->with('ProductTypes', ProductType::where('product_id', $product_id)->get());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($product_id)
	{
		$this->checkUser();
		
		return view('admin/producttypes/producttype')
			->with('action', 'create')
			->with('Product', Product::where('id', $product_id)->first());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductTypeStoreRequest $request)
	{
		$this->checkUser();
		
		ProductType::create($request->all());
		return redirect('admin/products/' . $request->get('product_id') . '/producttypes');		
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
	public function edit($product_id, $id)
	{
		$this->checkUser();
		
		return view('admin/producttypes/producttype')
			->with('action', 'edit')
			->with('ProductType', ProductType::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProductTypeStoreRequest $request, $product_id, $id)
	{
		$this->checkUser();
		
		$ProductType = ProductType::findOrFail($id);		
		$ProductType->fill($request->all())->save();
		return redirect('admin/products/' . $ProductType->product_id . '/producttypes');
		
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

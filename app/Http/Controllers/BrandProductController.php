<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\BrandProduct;
use App\Models\Product;
use App\Http\Requests\BrandProductStoreRequest;

use Illuminate\Http\Request;

class BrandProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($brand_id)
	{
		$this->checkUser();
		
		$BrandProducts = BrandProduct::with('Product')
			->where('brand_id', $brand_id)
			->get();
		
		return view('admin/brandproducts/brandproducts')
			->with('Brand', Brand::find($brand_id))
			->with('BrandProducts', $BrandProducts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($brand_id)
	{
		$this->checkUser();
		
		return view('admin/brandproducts/brandproduct')
			->with('action', 'Add')
			->with('Brand', Brand::where('id', $brand_id)->first())
			->with('Products', Product::nonBrandProducts($brand_id));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BrandProductStoreRequest $request)
	{
		$this->checkUser();
		
		BrandProduct::create($request->all());
		return redirect('admin/brands/' . $request->get('brand_id') . '/products');
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
	public function edit($brand_id, $product_id)
	{
		$this->checkUser();
		
		$BrandProduct = BrandProduct::with('Product')
			->where('brand_id', $brand_id)
			->where('product_id', $product_id)
			->first();
			
		return view('admin/brandproducts/brandproduct')
			->with('action', 'update')
			->with('Brand', Brand::where('id', $brand_id)->first())
			->with('BrandProduct', $BrandProduct);
			
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(BrandProductStoreRequest $request)
	{
		$this->checkUser();
		
		$BrandProduct = BrandProduct::findOrFail($request->get('id'));
		$BrandProduct->fill($request->all())->save();
		
		$redirect = 'admin/brands/' . $BrandProduct->brand_id . '/products'; 
			
		return redirect($redirect);
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

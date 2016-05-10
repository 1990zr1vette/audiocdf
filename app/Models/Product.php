<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $fillable = array(
		'product', 
		'product_fr', 
		'keywords', 
		'keywords_fr', 
		'description', 
		'description_fr', 
		'active');

	// ***** Get all the products that are not associated with a brand *****//
	public static function nonBrandProducts($brand_id)
	{		
		$sql = "SELECT products.* FROM products ";
		$sql .= "LEFT JOIN brand_products ";
		$sql .= "ON products.id=brand_products.product_id ";
		$sql .= "AND brand_products.brand_id=" . $brand_id . " "; 
		$sql .= "WHERE brand_products.id IS NULL";

		return \DB::select($sql);
	}
	// ***** Get all the products that are not associated with a brand *****//	
	
	// ***** Get all the active products with its accosiated types *****//	
	public static function getProducts()
	{	
		// ***** Get all the active products ***** //
		$Products = Product::where('products.active', 1)->get();

		// ***** For each product get all the active product types ***** //
		foreach($Products as &$Product)
		{
			$Product->ProductTypes = ProductType::where('active', 1)->where('product_id', $Product->id)->get();
		}
		// ***** For each product get all the active product types ***** //
		
		// ***** Set the url for each product and all its types ***** //
		foreach($Products as &$Product)
		{
			$Product->href = languages(PRODUCTS, PRODUCTS_FR) . 
							 '/' . 
						     fixSegment($Product->product, $Product->product_fr) . 
							  '/' .
							 $Product->id;
							 
			foreach ($Product->ProductTypes as &$ProductType)
			{
				$ProductType->href = languages(PRODUCTS, PRODUCTS_FR) . '/' . 
				              fixSegment($Product->product, $Product->product_fr) . '/' . 
							  fixSegment($ProductType->type, $ProductType->type_fr) . '/' . 
							  $Product->id . '/' . 
							  $ProductType->id;
			}
		}
		// ***** Set the url for each product and all its types ***** //
		
		return $Products;	
	}
// ***** Get all the active products with its accosiated types *****//	
}

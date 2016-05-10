<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductStoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'product' 			=> 'required',
			'product_fr' 		=> 'required',
			'keywords' 			=> 'required',
			'keywords_fr' 		=> 'required',
			'description' 		=> 'required',
			'description_fr' 	=> 'required'
		];
	}

}

<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductTypeStoreRequest extends Request {

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
			'product_id' 	 => 'required|exists:products',
			'type' 			 => 'required',
			'type_fr' 		 => 'required',
			'keywords' 		 => 'required',
			'keywords_fr' 	 => 'required',
			'description' 	 => 'required',
			'description_fr' => 'required'
		];
	}

}

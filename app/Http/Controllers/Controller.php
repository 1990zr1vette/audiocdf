<?php namespace App\Http\Controllers;

use Input;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use \App\Models\Brand;
use \App\Models\Editorial;
use \App\Models\Event;

use Session;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	// ********** NEW ROW ********** //
	public function newRow($object, $request, $redirect)
	{
		$data = $request->all();
		
		$imageName = Input::file('image')->getClientOriginalName();
		$request->file('image')->move(MOVETO, $imageName);			
		$data['image'] = $imageName;		
		
		switch($object)
		{
			case 'Brand':
				Brand::create($data);
			break;
			case 'Editorial':
				Editorial::create($data);
			break;
			case 'Event':
				Event::create($data);
			break;			
		}

		return redirect($redirect);		
	}
	// ********** NEW ROW ********** //
	
	// ********** UPDATE ROW ********** //
	public function updateRow($object, $request, $id, $redirect)
	{
		$data = Input::all();
		
		if (Input::file('image'))
		{
			$imageName = Input::file('image')->getClientOriginalName();
			$request->file('image')->move(MOVETO, $imageName);
			$data['image'] = $imageName;
		}
		
		switch($object)
		{
			case 'Brand':
				$Brand = Brand::findOrFail($id);
				$Brand->fill($data)->save();
			break;
			case 'Editorial':
				$Editorial = Editorial::findOrFail($id);
				$Editorial->fill($data)->save();
			break;
			case 'Event':
				$Event = Event::findOrFail($id);
				$Event->fill($data)->save();
			break;			
		}
		
		return redirect($redirect);
	}
	// ********** UPDATE ROW ********** //	
		
	public function setCurrent($table, $request, $redirect)
	{
		\DB::table($table)
			->update(['current' => 0]);
			
		\DB::table($table)
            ->where('id', $request->get('id'))
            ->update(['current' => 1]);
		
		return redirect($redirect);	
	}
	
	public function checkUser()
	{
		if (!Session::has('user'))
		{
			\Redirect::to('admin')->send();
		}
	}
	
}

@extends('layouts/admin')

@section('title')
Product Types
@endsection

@section('main')
		
			<div class="row button row60">
				<a href="admin/products/{{ $Product->id }}/producttypes/create">
					<button class="btn btn-primary">ADD PRODUCT TYPE</button>
				</a>
			</div>
			
			<div class="spacer20"></div>
			
@foreach($ProductTypes as $ProductType)
			<div class="row row40">
				<span class="rowtitle">{{ $ProductType->type }}</span>
				
				<span class="rowbutton">
					<a href="admin/products/{{ $Product->id }}/producttypes/{{ $ProductType->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>			
			</div>
			
			<div class="spacer10"></div>
@endforeach
			
@endsection
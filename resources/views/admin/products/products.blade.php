@extends('layouts/admin')

@section('title')
Products
@endsection

@section('main')
		
			<div class="row button row60">
				<a href="admin/products/create">
					<button class="btn btn-primary">ADD PRODUCT</button>
				</a>
			</div>
			
			<div class="spacer20"></div>
			
@foreach($Products as $Product)
			<div class="row row40">
				<span class="rowtitle">{{ $Product->product }}</span>
				
				<span class="rowbutton">
					<a href="admin/products/{{ $Product->id }}/producttypes">
						<button class="btn btn-primary">TYPES</button>
					</a>
				</span>	
				
				<span class="rowbutton">
					<a href="admin/products/{{ $Product->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>			
			</div>
			
			<div class="spacer10"></div>
@endforeach
			
@endsection
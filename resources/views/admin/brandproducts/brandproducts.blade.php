@extends('layouts/admin')

@section('title')
	{{ $Brand->brand }} Products
@endsection

@section('main')
		
			<div class="row button row60">
				<a href="admin/brands/{{ $Brand->id }}/products/create">
					<button class="btn btn-primary">ADD {{ $Brand->brand }} PRODUCT</button>
				</a>
			</div>
			
			<div class="spacer20"></div>
			
			@foreach($BrandProducts as $BrandProduct)
			<div class="row row30">
				<span class="rowtitle">{{ $BrandProduct->Product->product }}</span>
				
				<span class="rowbutton">
					<a href="admin/brands/{{ $Brand->id }}/products/{{ $BrandProduct->Product->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>				
			</div>
			@endforeach
			
@endsection
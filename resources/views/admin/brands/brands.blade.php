@extends('layouts/admin')

@section('title')
Brands
@endsection

@section('main')
		
			<div class="row button row60">
				<a href="admin/brands/create">
					<button class="btn btn-primary">ADD BRAND</button>
				</a>
			</div>
			
			<div class="spacer20"></div>
			
@foreach($Brands as $Brand)
			<div class="row row30">
				<span class="rowtitle">{{ $Brand->brand }}</span>
				
				<span class="rowbutton">
					<a href="admin/brands/{{ $Brand->id }}/products">
						<button class="btn btn-primary">PRODUCTS</button>
					</a>
				</span>	
				
				<span class="rowbutton">
					<a href="admin/brands/{{ $Brand->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>			
			</div>
			
			<div class="spacer10"></div>
@endforeach
			
@endsection
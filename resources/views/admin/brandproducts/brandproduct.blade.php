@extends('layouts/admin')

@section('title')
	{{ $Brand->brand }} Products {{ ucfirst($action) }}
@endsection

@section('main')

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<div>There were some problems with your input.</div>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			<div class="col-md-11 col-md-offset-01">
					
				<div class="panel panel-default">
						
					<div class="panel-heading">
						{{ $Brand->brand }} Product {{ ucfirst($action) }}  
					</div>
							
					<div class="panel-body">
						@if($action == 'Add')
						{!! Form::open(['method'=>'POST', 'route'=>'admin.brands.products.store', 'class'=>'form-horizontal']) !!}	
							{!! Form::hidden('brand_id', $Brand->id) !!}
						@else
						{!! Form::model($BrandProduct, ['id'=>'brandproductform', 'method'=>'PATCH', 'route'=>['admin.brands.products.update', $BrandProduct->id], 'class'=>'form-horizontal']) !!}								
							{!! Form::hidden('id', $BrandProduct->id) !!}
							{!! Form::hidden('brand_id', $BrandProduct->brand_id) !!}
							{!! Form::hidden('product_id', $BrandProduct->product_id) !!}
						@endif

							@if($action == 'Add')
							<div class="row button">
								<select name="product_id">
									<option value="">Choose a Product</option>
									@foreach($Products as $Product)
									<option value="{{ $Product->id }}">{{ $Product->product }}</option>
									@endforeach
								</select>
							</div>
							@endif
							
							@if($action == 'Update')
							<div class="row button">
								<input type="hidden" name="active" value="{{ $Brand->active }}" />
								<button type="button" class="activebutton activebutton{{ $BrandProduct->active }} btn btn-primary"></button>							
							</div>
							@endif
							
							<div class="spacer10"></div>
							
							<div class="row button">
								@if($action == 'Add')
								<button class="btn btn-primary" type="submit">{{ strtoupper($action) . ' ' . $Brand->brand }}</button>
								@else
								<button class="btn btn-primary" type="submit">{{ strtoupper($action) . ' ' . $Brand->brand . ' ' . $BrandProduct->Product->product }}</button>
								@endif
							</div>							
									
						{!! Form::close() !!}
						
						<script src="js/active-button.js" type="text/javascript"></script>
						@if($action == 'Update')
						<script>
							$('#brandproductform').attr('action', 'admin/brands/{brands}/products/{products}');
						</script>						
						@endif
					
					</div>
					
				</div>
				
			</div>
			
@endsection
@extends('layouts/admin')

@section('title')
		Product Type {{ ucfirst($action) }} 
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
						{{ ucfirst($action) }} Product Type 
					</div>
							
					<div class="panel-body">
@if($action == 'create')
						{!! Form::open(['method'=>'POST', 'route'=>'admin.products.producttypes.store', 'class'=>'form-horizontal']) !!}	
							{!! Form::hidden('product_id', $Product->id) !!}
@else
						{!! Form::model($ProductType, ['method'=>'PATCH', 'route'=>['admin.products.producttypes.update', $ProductType->product_id, $ProductType->id], 'class'=>'form-horizontal']) !!}
@endif

							<div class="form-group">
								{!! Form::label('type', 'TYPE:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('type', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('type_fr', 'TYPE (FR):', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('type_fr', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>
							
							
							<div class="form-group">
								{!! Form::label('keywords', 'KEYWORDS:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('keywords', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('keywords_fr', 'KEYWORDS (FR):', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('keywords_fr', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>							
							
							<div class="form-group">
								{!! Form::label('description', 'DESCRIPTION:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('description', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('description_fr', 'DESCRIPTION (FR):', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('description_fr', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>

							<div class="row button">
								<button class="btn btn-primary" type="submit">{{ strtoupper($action) }} PRODUCT TYPE</button>
							</div>							
									
						{!! Form::close() !!}
					</div>
					
				</div>
				
			</div>
					
@endsection
@extends('layouts/admin')

@section('title')
		Brand {{ ucfirst($action) }} 
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
						{{ ucfirst($action) }} Brand 
					</div>
							
					<div class="panel-body">
@if($action == 'create')
						{!! Form::open(['files' => true, 'method'=>'POST', 'route'=>'admin.brands.store', 'class'=>'form-horizontal']) !!}	
@else
						{!! Form::model($Brand, ['files' => true, 'method'=>'PATCH', 'route'=>['admin.brands.update', $Brand->id], 'class'=>'form-horizontal']) !!}	
@endif

							<div class="form-group">
								{!! Form::label('brand', 'BRAND:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('brand', null, array('required', 'class'=>'form-control')) !!}
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

							<div class="form-group">
								{!! Form::label('website', 'WEBSITE:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('website', null, array('class'=>'form-control')) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('about', 'ABOUT:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::textarea('about', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>

							<div class="form-group">
								{!! Form::label('about_fr', 'ABOUT (FR):', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::textarea('about_fr', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>
							
							<div class="spacer10"></div>
							
							<div class="form-group">
								<div class="col-md-3 right">
									{!! Form::file('image', array('required', 'id'=>'img', 'class'=>'noshow')) !!}
									<button type="button" class="imagebutton btn btn-primary">Choose Image</button>									
								</div>
								<div class="col-md-8">
									@if($action == 'create')								
									<img id="image" class="col-img" src="" />
									@else
									<img id="image" src="images/{{ $Brand->image }}" />
									@endif
								</div>
							</div>							
							
							<div class="spacer10"></div>
							
							<div class="row button">
								<button class="btn btn-primary" type="submit">{{ strtoupper($action) }} BRAND</button>
							</div>							
									
						{!! Form::close() !!}
					</div>
					
				</div>
				
			</div>
			
			<script src="js/image-button.js" type="text/javascript"></script>		
					
@endsection
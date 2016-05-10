@extends('layouts/admin')

@section('title') {{ $action }} Editorial @endsection

@section('main')
			
			@include('layouts.partials.adminerrors')
			
			<div class="col-md-11 col-md-offset-01">
					
				<div class="panel panel-default">
						
					<div class="panel-heading">
						{{ ucfirst($action) }} Editorial 
					</div>
							
					<div class="panel-body">
			
						@if($action == 'Add')
						{!! Form::open(['files' => true, 'method'=>'POST', 'route'=>'admin.editorials.store', 'class'=>'form-horizontal']) !!}	
						@else
						{!! Form::model($Editorial, ['files' => true, 'method'=>'PATCH', 'route'=>['admin.editorials.update', $Editorial->id], 'class'=>'form-horizontal']) !!}	
						@endif
		
							<div class="form-group">
								{!! Form::label('title', 'TITLE:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('title', null, array('class'=>'form-control')) !!}
								</div>
							</div>
				
							<div class="form-group">
								{!! Form::label('title_fr', 'TITLE (FR):', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('title_fr', null, array('class'=>'form-control')) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('editorial', 'EDITORIAL:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::textarea('editorial', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>

							<div class="form-group">
								{!! Form::label('editorial_fr', 'EDITORIAL (FR):', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::textarea('editorial_fr', null, array('required', 'class'=>'form-control')) !!}
								</div>
							</div>	

							<div class="spacer10"></div>
							
							<div class="form-group">
								<div class="col-md-3 right">
									@if($action == 'Add')
									{!! Form::file('image', array('required', 'id'=>'img', 'class'=>'noshow')) !!}
									@else
									{!! Form::file('image', array('id'=>'img', 'class'=>'noshow')) !!}
									@endif
									<button type="button" class="imagebutton btn btn-primary">Choose Image</button>									
								</div>
								<div class="col-md-8">
									@if($action == 'Add')								
									<img id="image" class="col-img" src="" />
									@else
									<img id="image" src="images/{{ $Editorial->image }}" />
									@endif
								</div>
							</div>							
							
							@if($action == 'Update')
							<div class="row button">
								<input type="hidden" name="active" value="{{ $Editorial->active }}" />
								<button type="button" class="activebutton activebutton{{ $Editorial->active }} btn btn-primary"></button>							
							</div>
							@endif
							
							<div class="spacer10"></div>
							
							<div class="row button">
								<button type="submit" class="btn btn-primary">{{ strtoupper($action) }} EDITORIAL</button>					
							</div>
									
						{!! Form::close() !!}
	
						<script src="js/image-button.js" type="text/javascript"></script>
						@if($action == 'Update')
						<script src="js/active-button.js" type="text/javascript"></script>
						@endif

						
					</div>
					
				</div>
				
			</div>	

@endsection
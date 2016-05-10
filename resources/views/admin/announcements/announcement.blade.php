@extends('layouts/admin')

@section('title') {{ $action }} Announcement @endsection

@section('main')
			
			@include('layouts.partials.adminerrors')
			
			<div class="col-md-11 col-md-offset-01">
					
				<div class="panel panel-default">
						
					<div class="panel-heading">
						{{ ucfirst($action) }} Announcement 
					</div>
							
					<div class="panel-body">
			
						@if($action == 'Add')
						{!! Form::open(['method'=>'POST', 'route'=>'admin.announcements.store', 'class'=>'form-horizontal']) !!}	
						@else
						{!! Form::model($Announcement, ['method'=>'PATCH', 'route'=>['admin.announcements.update', $Announcement->id], 'class'=>'form-horizontal']) !!}	
						@endif
		
							<div class="form-group">
								{!! Form::label('announcement', 'TITLE:', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('announcement', null, array('class'=>'form-control')) !!}
								</div>
							</div>
				
							<div class="form-group">
								{!! Form::label('announcement_fr', 'TITLE (FR):', array('class' => 'col-md-3 control-label')) !!}
								<div class="col-md-8">
									{!! Form::text('announcement_fr', null, array('class'=>'form-control')) !!}
								</div>
							</div>
							
							@if($action == 'Update')
							<div class="row button">
								<input type="hidden" name="active" value="{{ $Announcement->active }}" />
								<button type="button" class="activebutton activebutton{{ $Announcement->active }} btn btn-primary"></button>							
							</div>
							@endif
							
							<div class="spacer10"></div>
							
							<div class="row button">
								<button type="submit" class="btn btn-primary">{{ strtoupper($action) }} ANNOUNCEMENT</button>					
							</div>
									
						{!! Form::close() !!}
	
						
						@if($action == 'Update')
						<script src="js/active-button.js" type="text/javascript"></script>
						@endif

						
					</div>
					
				</div>
				
			</div>	

@endsection
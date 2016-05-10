@extends('layouts/admin')

@section('title') {{ $action }} User @endsection

@section('main')
			<div class="container-fluid">
			
				<div class="row">
				
					<div class="col-md-8 col-md-offset-2">
					
						<div class="panel panel-default">
						
							<div class="panel-heading">{{ $action }} User</div>
							
							<div class="panel-body">
								@if (count($errors) > 0)
								<div class="alert alert-danger">
									There were some problems with your input.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
								@endif

								@if($action == 'Add')
								<form id="userform" class="form-horizontal" method="POST" action="{{ url('admin/newuser') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								@else
								{!! Form::model($User, ['method'=>'PATCH', 'route'=>['admin.users.update', $User->id], 'class'=>'form-horizontal']) !!}	
								@endif

									<div class="form-group">
										<label class="col-md-4 control-label">Name</label>
										<div class="col-md-6">			
											<!--<input type="text" class="form-control" name="name" value="" />-->
											{!! Form::text('name', null, array('required', 'class'=>'form-control')) !!}
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label">E-Mail Address</label>
										<div class="col-md-6">
											{!! Form::text('email', null, array('required', 'class'=>'form-control')) !!}
										</div>
									</div>
									
									@if($action == 'Add')
									<div class="form-group">
										<label class="col-md-4 control-label">Name</label>
										<div class="col-md-6">			
											{!! Form::password('password', null, array('required', 'class'=>'form-control')) !!}
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label">E-Mail Address</label>
										<div class="col-md-6">
											{!! Form::password('confirm_password', null, array('required', 'class'=>'form-control')) !!}
										</div>
									</div>									
									@endif
									
									<div class="form-group">
										<label class="col-md-4 control-label">Privileges</label>
										<div class="col-md-6">
											<select class="form-control" name="privileges">
												<option value="none">NONE</option>
												<option value="admin">ADMIN</option>
											</select>
										</div>
									</div>
									
									@if($action == 'Update')
									<div class="row button">
										<input type="hidden" name="active" value="{{ $User->active }}" />
										<button type="button" class="activebutton activebutton{{ $User->active }} btn btn-primary"></button>							
									</div>
									
									<div class="spacer10"></div>
									@endif
							
									<div class="form-group">
										<div class="row button">
											<button id="submitbutton" type="submit" class="btn btn-primary">{{ strtoupper($action) }} USER</button>
										</div>
									</div>
									
								</form>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			@if($action == 'Add')
			<script>
				$.each($('input[type="password"]'),function(){$(this).addClass('form-control');});
				$.each($('input[type="text"]'),function(){$(this).val('');});
				$.each($('input[type="email"]'),function(){$(this).val('');});
				$.each($('input[type="password"]'),function(){$(this).val('');});
				$('#submitbutton').click(function(){if ($('input[name=password]').val() != $('input[name=confirm_password]').val()){alert('Password do not match');return false;}});
			</script>
			@else
			<script src="js/active-button.js" type="text/javascript"></script>
			<script>				
				$('select[name=privileges]').val('{{ $User->privileges }}');
			</script>				
				
			@endif
								
@endsection

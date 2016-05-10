@extends('layouts/admin')

@section('title') User Change Password @endsection

@section('main')
			<div class="container-fluid">
			
				<div class="row">
				
					<div class="col-md-8 col-md-offset-2">
					
						<div class="panel panel-default">
						
							<div class="panel-heading">User Change Password</div>
							
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

								<form id="userform" class="form-horizontal" method="POST" action="http://localhost/admin/users/{{ $User->id }}">
									<input name="_method" type="hidden" value="PATCH">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="id" value="{{ $User->id }}">

									<div class="form-group">
										<label class="col-md-4 control-label">Password</label>
										<div class="col-md-6">			
											{!! Form::password('password', null, array('required', 'class'=>'form-control')) !!}
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label">Confirm Password</label>
										<div class="col-md-6">
											{!! Form::password('confirm_password', null, array('required', 'class'=>'form-control')) !!}
										</div>
									</div>
							
									<div class="form-group">
										<div class="row button">
											<button id="submitbutton" type="submit" class="btn btn-primary">UPDATE PASSWORD</button>
										</div>
									</div>
									
								</form>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
						
			<script>
				$.each($('input[type="password"]'),function(){$(this).addClass('form-control');});				
				$('#submitbutton').click(function(){if ($('input[name=password]').val() != $('input[name=confirm_password]').val()){alert('Password do not match');return false;}});
			</script>
@endsection

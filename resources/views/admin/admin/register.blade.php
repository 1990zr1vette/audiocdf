@extends('layouts/admin')

@section('title')
	Register
@endsection

@section('main')
			<div class="container-fluid">
			
				<div class="row">
				
					<div class="col-md-8 col-md-offset-2">
					
						<div class="panel panel-default">
						
							<div class="panel-heading">Register</div>
							
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

								<form class="form-horizontal" method="POST" action="{{ url('admin/newuser') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="form-group">
										<label class="col-md-4 control-label">Name</label>
										<div class="col-md-6">			
											<input type="text" class="form-control" name="name" value="" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label">E-Mail Address</label>
										<div class="col-md-6">
											<input type="email" class="form-control" name="email" value="" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label">Password</label>
										<div class="col-md-6">
											<input type="password" class="form-control" name="password" value="" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label">Confirm Password</label>
										<div class="col-md-6">
											<input type="password" class="form-control" name="password_confirmation">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-4 control-label">Privileges</label>
										<div class="col-md-6">
											<select class="form-control" name="privileges">
												<option value="none">NONE</option>
												<option value="admin">ADMIN</option>
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<button id="submitbutton" type="submit" class="btn btn-primary">Register</button>
										</div>
									</div>
									
								</form>
								

								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<script>
				$.each($('input[type="text"]'),function(){$(this).val('');});
				$.each($('input[type="email"]'),function(){$(this).val('');});
			</script>
								
@endsection

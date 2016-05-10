@extends('layouts/admin')

@section('title')
Users
@endsection

@section('main')
		
			<div class="row button row60">
				<a href="admin/users/create">
					<button class="btn btn-primary">ADD USER</button>
				</a>
			</div>
			
			<div class="spacer20"></div>
			
@foreach($Users as $User)
			<div class="row row40">
				<span class="rowtitle">{{ $User->name }}</span>
				
				<span class="rowbutton">
					<a href="admin/users/changePassword/{{ $User->id }}">
						<button class="btn btn-primary">CHANGE PASSWORD</button>
					</a>
				</span>
				
				<span class="rowbutton">
					<a href="admin/users/{{ $User->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>	
			</div>
			
			<div class="spacer10"></div>
@endforeach
			
@endsection
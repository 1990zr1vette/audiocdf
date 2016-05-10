@extends('layouts/admin')
	
@section('title') @if(session()->has('user')) Manage @else Login @endif @endsection
	
@section('main')

	@if(session()->has('user'))
	@else 
		@include('layouts.partials.login')
	@endif
	
@endsection


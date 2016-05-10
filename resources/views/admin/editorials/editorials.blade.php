@extends('layouts/admin')

@section('title')Editorials @endsection

@section('main')

			<div class="row button">
				<a href="admin/editorials/create">
					<button type="submit" class="btn btn-primary">ADD EDITORIAL</button>
				</a>
			</div>
			
			<div class="spacer20"></div>
			<div id="info" style="height:50px; width:100%; line-height:50px; text-align:center; color:red;"></div>
			
@foreach($Editorials as $Editorial)
			<div class="row row80">
				<span class="rowtitle">{{ $Editorial->title }}</span>
						
				<span class="rowbutton">
					<button type="button" for="{{ $Editorial->id }}" class="currentbutton currentbutton{{ $Editorial->current }} btn btn-primary"></button>
				</span>
				
				<span class="rowbutton">
					<a href="admin/editorials/{{ $Editorial->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
			</div>
			
			<div class="spacer10"></div>
@endforeach

			<form id="currentform" method="POST" action="http://localhost/admin/editorials/updateCurrent" accept-charset="UTF-8" class="form-horizontal">
				<input name="_token" type="hidden" value="{{ Session::token() }}" />
				<input name="id" type="hidden" value="" />	
				<input name="current" type="hidden" value="1" />
			</form>
			
			<script src="js/multiple-current-buttons.js" type="text/javascript"></script>
			
@endsection
@extends('layouts/admin')

@section('title')Announcements @endsection

@section('main')

			<div class="row button">
				<a href="admin/announcements/create">
					<button type="submit" class="btn btn-primary">ADD ANNOUNCEMENT</button>
				</a>
			</div>
			
			<div class="spacer20"></div>
			
@foreach($Announcements as $Announcement)
			<div class="row row80">
				<span class="rowtitle">{{ $Announcement->announcement }}</span>
								
				<span class="rowbutton">
					<a href="admin/announcements/{{ $Announcement->id }}/edit">
						<button class="btn btn-primary">EDIT</button>
					</a>
				</span>
			</div>
			
			<div class="spacer10"></div>
@endforeach
			
@endsection
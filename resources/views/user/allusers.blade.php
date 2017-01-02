@extends('layouts.app')

@section('title')
All users
@endsection
@section('content')
@foreach($users as $user)
<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-body ">
			<img style="float:left;" src="https://cdn3.iconfinder.com/data/icons/rcons-user-action/32/boy-512.png" width="100"/>
			<div style="float:left;margin-left:20px;">
			<h2><a href="/profile/{{$user->name}}">{{$user->name}}</a></h2>
			<h5>{{$user->email}}</h5>
			<h5>{{$user->password}}</h5>
			<button  class="btn btn-success">Follow</button>
			<hr>
			
			</div>
			

		</div>
	</div>
		
	</div>
</div>
@endforeach

@endsection
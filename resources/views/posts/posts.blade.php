@extends('layouts.app')
@section('content')
	@foreach($posts as $post)
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body text-center">
<!--	{{!! $user = App\User::find($post->user_id) !!}}  -->
				
					<h1>{{ $post->post }}</h1>
<!-- used the function in the Post.php -->
					<h5><a href="/profile/{{ $post->user->username }}" >{{$post->user->username}}</a></h5>

				</div>
			</div>
				 
			</div>
		</div>
	@endforeach
@endsection
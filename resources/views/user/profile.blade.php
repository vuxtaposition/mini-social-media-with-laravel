@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-body text-center">
			<img src="https://cdn3.iconfinder.com/data/icons/rcons-user-action/32/boy-512.png" width="100"/>
			<h1>{{$user->name}}</h1>
			<h5>{{$user->email}} </h5>
			<h5>{{ Carbon\Carbon::createFromFormat('Y-m-d',$user->dob)->age}} years old</h5>
			<a class="btn btn-warning pull-left" href="/articles/create">create article</a>
			<button class="btn btn-success pull-right">Add Article</button>
			<hr>
			<span>
				<strong>Posts:</strong> {{ count($user->posts) }}<br>
				<?php 
				$ord = $user->posts;
				foreach($ord as $order){
					echo $order->post."<br><span style='float:right;font-size:10px;'> ".\Carbon\Carbon::createFromTimeStamp(strtotime($order->date))->diffForHumans()."</span><hr>";
				}	

				?>

			</span>
		</div>
	</div>
		
	</div>
</div>

@endsection


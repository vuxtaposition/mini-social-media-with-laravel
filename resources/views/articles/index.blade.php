@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading ">
				 article
			</div>
			<div class="panel-body">
				
				@foreach ( $articles as $item)
				<article class="item">
				<h3>{{ $item->user->name }}</h3>
					<a href="">{{ $item->content }}</a><br>
					<small class="pull-right">Created:
						<?php echo Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at ))->diffForHumans() ?>
					</small><br>
				</article>
				@endforeach

				{{ $articles->links() }}
				
			</div>
		</div>				 
	</div>
</div>
@endsection
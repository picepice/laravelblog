@extends('main')
	@section('title', '| Show Post')

	@section('content')

		<div class="row">
			<div class="col-md-8">
				<h1>{{ $post->title }}</h1>
					{{$post->created_at->toFormattedDateString()}}
				<p> {{ $post->body }} </p>
			</div>
						
	</div>	

@endsection
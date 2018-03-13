@extends('main')
	@section('title', '| Show Post')
 @section('stylesheets')
    {!! Html::style('css/style.css') !!}
  @endsection
	@section('content')

<div class="row">
	<div class="col-md-8">
		 <div class="card">
           <h1 class="card-header">{{ $post->title }}</h1>
			  <div class="card-body">
		
			{{$post->created_at->toFormattedDateString()}}
			<p> {!! $post->body !!} </p>
			@foreach($post->tags as $tag)
			<span class="badge badge-pill badge-secondary">{{$tag->name}}</span>
			@endforeach
			<hr>					
			@include('pages.post.comments')

			</div> <!-- card body -->
		</div> <!-- card-->
	</div> <!-- col-md-8-->
			@include('pages.post.adminpanelshow')
</div>	<!-- row -->

@endsection
@extends('main')
	@section('title', "| Main")
 @section('stylesheets')
    {!! Html::style('css/blog.css') !!}
  @endsection
  @section('content')
  		
 
  	<div class="row">

  		<div class="col-md-8 offset-md-2">
  	         @foreach($posts as $post)
           <div class="card flex-md-row mb-4 box-shadow h-md-350">
              <div class="card-body d-flex flex-column align-items-start">
                <div class="blog-post">

                  <h2 class="blog-post-title">{{ $post->title }}</h2>
                  <p class="blog-post-meta">{{ date('M j, Y', strtotime($post->created_at)) }} by <a href="#">Jacob</a></p>
        				<p>{{ substr(strip_tags($post->body), 0, 330) }}{{ strlen(strip_tags($post->body)) > 330 ? "..." : "" }} </p>
        				<p><a  class = "btn btn-info" href="{{ url('blog/'.$post->slug)}}" role="button">Read More &raquo;</a></p>
                 <p> Category: <strong class="d-inline-block mb-2 text-primary">{{ $post->category->name }}</strong></p>
                      @foreach($post->tags as $tag)
                           <span class="badge badge-pill badge-secondary">{{$tag->name}}</span>
                      @endforeach
                </div>
              </div>
           </div>
  			@endforeach
  			   <div class="row align-items-center justify-content-center">
                       {!! $posts->links(); !!}
  		    </div>

    </div>
  </div>
  @endsection
  @section('scripts')

  {!! Html::script('js/holder.min.js') !!}

  @endsection
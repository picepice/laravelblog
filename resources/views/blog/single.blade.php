@extends('main')

<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

  @section('content')

    <div class="row">
      <div class="col-md-8 offset-md-2">
           <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <div class="blog-post">
			<h2 class="blog-post-title">{{$post->title}}</h2>
       <p class="blog-post-meta">{{ date('M j, Y', strtotime($post->created_at)) }} by <a href="#">Jacob</a></p>
      		{{$post->body}}
      		<hr>
      		<p>Posted in: {{ $post->category->name }}</p>
               </div>
          </div>
      </div>
   </div>
</div>
  @endsection
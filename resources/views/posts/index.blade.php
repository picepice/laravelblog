@extends('main')
	@section('title', '| Home')

 @section('content')
    <div class="row">
     
   <div class="col-md-12">
       <div class="card">
          <div class="card-body">
                <h1>All Posts</h1>
                  <div class="col-md-2 float-right">
                 <a href="{{ route('posts.create') }}" class="btn  btn-block btn-info">Create New Post</a>
               </div>
            </div>

            
              
            <div class="col-md-12">
                             @if(count($posts) > 0)
                        <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>

                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Body</th>
                      <th scope="col">Created At</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                       @foreach ($posts as $post)
                      <th>{{ $post->id }}</th>
                      <td>{{ substr(strip_tags($post->title), 0, 20) }}{{ strlen(strip_tags($post->title)) > 20 ? "..." : "" }}</td>
                      <td>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</td>
                      <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                      <td>
                       
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                         @if(Auth::user()->id == $post->user_id)
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        @endif
                      </td>
                    </tr>
                       @endforeach
                   </tbody>
                </table>

                <div class="row align-items-center justify-content-center">
                       {!! $posts->links(); !!}
                </div>
                   @else
                      <div class="alert alert-dark" role="alert">
                        No Post
                      </div>
                  @endif
          </div>
        </div>
       </div> <!-- col-md-12-->
    </div>  <!-- end of row -->


 @endsection
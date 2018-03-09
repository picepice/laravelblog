@extends('main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                     <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <a href="/posts/create" class="btn btn-info">Create Post</a>
                            <hr>
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
                      <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a> 
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    </tr>
                       @endforeach
                   </tbody>
                </table>

               
                   @else
                      <div class="alert alert-dark" role="alert">
                        No Post
                      </div>
                  @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

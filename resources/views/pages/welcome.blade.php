@extends('main')

  @section('title', '| Homepage')
 @section('stylesheets')
    {!! Html::style('css/blog.css') !!}
  @endsection
  @section('content')

    <div class="row">
      <div class="col-md-12">
            <div class="jumbotron">
              <h1 class="display-4">Hello, world!</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque mauris, tincidunt vel eros sit amet, laoreet maximus lorem. Nullam aliquam metus eu rhoncus cursus. Phasellus vehicula, odio et dapibus luctus, purus ex mollis diam, a pellentesque nisl nisl porttitor ligula. Mauris sed urna commodo, iaculis diam eu, auctor velit. Praesent vitae turpis et diam tristique feugiat. Quisque nec aliquam lacus. </p>
              <hr class="my-4">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque mauris, tincidunt vel eros sit amet, laoreet maximus lorem.</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </p>
            </div>
       </div> <!-- col-md-12-->
    </div>  <!-- end of row -->


  
 <div class="row mb-2">
 @if(count($posts) > 0)
                   @foreach ($posts as $post)
        <div class="col-md-6">
         
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                
              <strong class="d-inline-block mb-2 text-primary">{{ $post->category->name }}</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="{{ url('blog/'.$post->slug)}}" >{{ $post->title }}</a>
              </h3>
              <div class="mb-1 text-muted">{{ date('M j, Y', strtotime($post->created_at)) }}</div>
              <p class="card-text mb-auto">{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</p>
             <a  href="{{ url('blog/'.$post->slug)}}" role="button">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
         @endforeach
  </div>
      
             @else
           <p class="card-text mb-auto">No Post</P>
           
        @endif
@endsection
@section('scripts')

  {!! Html::script('js/holder.min.js') !!}

@endsection
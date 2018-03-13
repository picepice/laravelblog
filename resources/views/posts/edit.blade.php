@extends('main')
	@section('title', '| Edit Post')

  @section('stylesheets')
   
    {!! Html::style('css/select2.min.css') !!}
  @endsection
 @section('content')

         {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    
          @include('form.post.edit')

         {!! Form::close() !!}
 </div>  <!-- end of row -->


 @endsection


 @section('scripts')

  
{!! Html::script('js/select2.min.js') !!}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

<script type="text/javascript">

    $('.select2-multi').select2();
    $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');

  </script>

</script>
@endsection

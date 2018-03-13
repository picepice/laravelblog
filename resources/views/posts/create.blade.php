@extends('main')
	@section('title', '| Create Post')

  @section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
  @endsection
 @section('content')
    <div class="row">
      <div class="col-md-8 offset-md-2">
        
        @include('form.post.create')


       </div> <!-- col-md-8-->
    </div>  <!-- end of row -->


 @endsection


 @section('scripts')

  {!! Html::script('js/parsley.min.js') !!}
   {!! Html::script('js/select2.min.js') !!}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.select2-multi').select2();
});
</script>
@endsection

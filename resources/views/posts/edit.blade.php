@extends('main')
	@section('title', '| Edit Post')

  @section('stylesheets')
   
    {!! Html::style('css/select2.min.css') !!}
  @endsection
 @section('content')

         {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    
    <div class="row">
      <div class="col-md-8">
         <div class="card">
               <h1 class="card-header">Update Post</h1>
          <div class="card-body">

                <div class="form-group">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, array('class' => 'form-control input-lg',  'required' => '', 'maxlength' => '255')) }}
                </div>

               {{ Form::label('category_id', "Category:", ['class' => 'form-spacing-top']) }}
               {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}


               {{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
               {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

                 <div class="form-group">
                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, array('class' => 'form-control', 'placeholder' => 'slug', 'required' => '','minlength' => '5', 'maxlength' => '255')) }}
            </div>

              <div class="form-group">
                {{ Form::label('body', "Post Body:") }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'article-ckeditor', 'required' => '')) }}
              </div>
       </div> <!-- card body-->
     </div> <!-- card-->
   </div>  <!-- col-md-8-->

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">

          <dl class="dl-horizontal">
          <label><strong>Created At:</strong></label>
          {{ date('M j, Y h:i a', strtotime($post->created_at)) }}
        </dl>

        <dl class="dl-horizontal">
          <label><strong>Last Updated:</strong></label>
          {{ date('M j, Y h:i a', strtotime($post->updated_at)) }}
        </dl>
        <div class="row">
              <div class="col-sm-6">
                {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
              </div>

              <div class="col-sm-6">
               {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
            </div>

        </div>
        </div> <!-- end of card body -->
      </div> <!-- end of card-->
    </div>  <!--end of md-4-->

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

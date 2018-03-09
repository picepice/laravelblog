@extends('main')
	@section('title', '| Edit Category')

  @section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
  @endsection
 @section('content')

         {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
    
    <div class="row">
      <div class="col-md-8">
         <div class="card">
             
                   <h1 class="card-header">Update Category</h1>
          <div class="card-body">
                <div class="form-group">
                    {{ Form::label('name', 'Category:') }}
                    {{ Form::text('name', null, array('class' => 'form-control input-lg',  'required' => '', 'maxlength' => '255')) }}
                </div>

       </div> <!-- card body-->
     </div> <!-- card-->
   </div>  <!-- col-md-8-->

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">

       
        <div class="row">
              <div class="col-sm-6">
                {!! Html::linkRoute('categories.show', 'Cancel', array($category->id), array('class' => 'btn btn-danger btn-block')) !!}
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

  {!! Html::script('js/parsley.min.js') !!}

@endsection

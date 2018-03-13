@extends('main')
	@section('title', '| Edit Category')

  @section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
  @endsection
 @section('content')

         {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
    
    <div class="row">
     
          @include('form.category.edit')
         {!! Form::close() !!}
    </div>  <!-- end of row -->


 @endsection


 @section('scripts')

  {!! Html::script('js/parsley.min.js') !!}

@endsection

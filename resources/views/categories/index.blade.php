@extends('main')
	@section('title', "| Category")

  @section('content')

  	<div class="row">
  		<div class="col-md-8">
  		<div class="card">
          <div class="card-body">
  			<h1>Categories</h1>
  		
  		     @if(count($categories) > 0)
                <table class="table table-bordered table-hover">
	              <thead class="thead-light">

	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Name</th>
	                  <th></th>
	                </tr>

	              </thead>
	              <tbody>
	                <tr>

	                   @foreach ($categories as $category)
	                  <th>{{ $category->id }}</th>
	                  <td><a href="{{ route('categories.edit', $category->id) }}">{{ $category->name }}</a></td>
	                  
	                  <td> 
         
                      	{!!Form::open(['action' => ['CategoryController@destroy', $category->id], 'method' => 'POST', 'class' => 'float-right'])!!}
				          	{!!Form::hidden('_method', 'DELETE')!!}
				          	{!!Form::submit('Delete', ['class' => 'btn btn-sm  btn-danger'])!!}
				          	{!!Form::close()!!}</td>
	                </tr>

	                   @endforeach
	               </tbody>
	            </table>

	            <div class="row align-items-center justify-content-center">
	                   {!! $categories->links(); !!}
	            </div>

	           @else
	              <div class="alert alert-dark" role="alert">
	                No Category
	              </div>
	          @endif
	        </div>
	       </div>
	  	</div> <!--col-md-8-->
	@include('form.category.create')
		
	</div> <!-- row-->
@endsection
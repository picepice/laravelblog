@extends('main')
	@section('title', "| Category")

  @section('content')

  	<div class="row">
  		<div class="col-md-8">
  		<div class="card">
          <div class="card-body">
  			<h1>Tags</h1>
  		
  		     @if(count($tags) > 0)
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

	                   @foreach ($tags as $tag)
	                  <th>{{ $tag->id }}</th>
	                  <td>	<a href="{{ route('tags.edit', $tag->id) }}">{{ $tag->name }}</a></td>
	                  
	                  <td> 
	                  

                      	{!!Form::open(['action' => ['TagController@destroy', $tag->id], 'method' => 'POST', 'class' => 'float-right'])!!}
				          	{!!Form::hidden('_method', 'DELETE')!!}
				          	{!!Form::submit('Delete', ['class' => 'btn btn-sm  btn-danger'])!!}
				          	{!!Form::close()!!}
				       </td>
				       
	                </tr>

	                   @endforeach
	               </tbody>
	            </table>

	            <div class="row align-items-center justify-content-center">
	                   {!! $tags->links(); !!}
	            </div>

	           @else
	              <div class="alert alert-dark" role="alert">
	                No Tags
	              </div>
	          @endif
	       </div> <!-- card-->
	      </div> <!-- card body-->
	  	</div> <!--col-md-8-->
	


		
		<div class="col-md-4">
				
			<div class="card">
				<div class="card-header"> Create Tag
				</div>
        		<div class="card-body">
										
	              {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
	              <div class="form-group">
	                  {{ Form::label('Name', 'Name:') }}
	                  {{ Form::text('name', null, array('class' => 'form-control ', 'placeholder' => 'Tag Name', 'required' => '', 'maxlength' => '255')) }}
	              </div>
	              {{ Form::submit('Create Tag', array('class' => 'btn btn-primary btn-lg btn-block')) }}
	              {!! Form::close() !!}
		
				</div> <!-- card-->
			</div>  <!-- card body-->
		</div> <!-- col-md-4 -->
		
	</div> <!-- row-->
@endsection
	<div class="col-md-4">
				
			<div class="card">
				<div class="card-header"> Create Category
				</div>
        		<div class="card-body">
										
	              {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
	              <div class="form-group">
	                  {{ Form::label('Name', 'Name:') }}
	                  {{ Form::text('name', null, array('class' => 'form-control ', 'placeholder' => 'Category Name', 'required' => '', 'maxlength' => '255')) }}
	              </div>
	              {{ Form::submit('Create Category', array('class' => 'btn btn-primary btn-lg btn-block')) }}
	              {!! Form::close() !!}
		
				</div>
			</div>
		</div>
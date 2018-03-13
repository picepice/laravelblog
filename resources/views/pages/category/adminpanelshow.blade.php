	<div class="col-md-4">
			 <div class="card">
            <div class="card-header">Admin Panel</div>
	      	  <div class="card-body">
			  
				
				<div class="row">
					
						<div class="col-sm-6">
							{!! Html::linkRoute('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-primary btn-block')) !!}
					    
						</div>
					    <div class="col-sm-6">
					    	 {!! Form::model($category, ['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
					    	{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
						</div>
				
				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('categories.index', '<< See All Categories', array(), ['class' => 'btn btn-secondary btn-block',  'style' =>'margin-top: 25px;']) }}
					</div>
				</div>
				
			</div> <!--card body-->
		</div> <!-- card-->
	</div> <!-- col-md-4 -->
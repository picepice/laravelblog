
		<div class="col-md-4">
			 <div class="card">
            <div class="card-header">Admin Panel</div>
	      	  <div class="card-body">
			  		<label><strong>Url:</strong></label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>

				<dl class="dl-horizontal">
					<label><strong>Category:</strong></label>
						{{ $post->category->name }}
				</dl>
				<dl class="dl-horizontal">
					<label><strong>Created At:</strong></label>
						{{ date('M j, Y h:i a', strtotime($post->created_at)) }}
				</dl>

				<dl class="dl-horizontal">
					<label><strong>Last Updated:</strong></label>
						{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}
				</dl>
				
				<div class="row">
					@if(Auth::user()->id == $post->user_id)
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					    
						</div>
					    <div class="col-sm-6">
					    	 {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
					    	{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
						</div>
					@endif
				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-secondary btn-block',  'style' =>'margin-top: 25px;']) }}
					</div>
				</div>
				
			</div> <!--card body-->
		</div> <!-- card-->
	</div> <!-- col-md-4 -->
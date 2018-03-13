<h3>Comments</h3>		
	@if(count($post->comments) > 0)
		@foreach($post->comments as $comment)

		<div class="comments">	
				<div class="comment-wrap">
						<div class="photo">
								<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
						</div>
						<div class="comment-block">
								<h6 class="comment-name by-author"><strong>{{ $comment->name }}</strong></h6>

								<p class="comment-text">{{ $comment->comment }}</p>
								<div class="bottom-comment">
										<div class="comment-date">{{ $comment->created_at->toDayDateTimeString() }}</div>
									{{-- 	<ul class="comment-actions">
												<li class="complain">Complain</li>
												<li class="reply">Reply</li>
										</ul> --}}
								</div>
						</div>
				</div>
		</div>
		@endforeach
	@else
		<h5>No Comments yet</h5>
	@endif
<hr>

			
  <h4> Add Comment </h4>
                {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                <div class="row">
                 
                   <div class="col-md-6">
                   
                    <div class="form-group">
                        {{ Form::label('Name', 'Name:') }}
                        {{ Form::text('name', null, array('class' => 'form-control ', 'placeholder' => 'Name', 'required' => '', 'maxlength' => '255')) }}
                      </div>
                    </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            {{ Form::label('Email', 'Email:') }}
                            {{ Form::text('email', null, array('class' => 'form-control ', 'placeholder' => 'Email', 'required' => '', 'maxlength' => '255')) }}
                        </div>
                      </div>
                          <div class="col-md-12">
                            <div class="form-group">
                          {{ Form::label('comment', "Comment:") }}
                          {{ Form::textarea('comment', null, array('class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Body Text',  'required' => '')) }}
                        </div>
                      </div>
                {{ Form::submit('Add Comment', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                {!! Form::close() !!}
              </div>
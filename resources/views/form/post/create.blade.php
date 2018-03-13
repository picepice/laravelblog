 <div class="card">
        <h1 class="card-header">Create New Post</h1>
      <div class="card-body">
       
              {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
              <div class="form-group">
                  {{ Form::label('title', 'Title:') }}
                  {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title', 'required' => '', 'maxlength' => '255')) }}
              </div>

              {{ Form::label('category_id', 'Category:') }}
                  <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                      <option value='{{ $category->id }}'>{{ $category->name }}</option>
                    @endforeach

                  </select>

                 {{ Form::label('tags', 'Tags:') }}
                  <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                      <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                    @endforeach

                  </select>  

                <div class="form-group">
                  {{ Form::label('slug', 'Slug:') }}
                  {{ Form::text('slug', null, array('class' => 'form-control', 'placeholder' => 'slug', 'required' => '','minlength' => '5', 'maxlength' => '255')) }}
              </div>

              <div class="form-group">
                {{ Form::label('body', "Post Body:") }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Body Text',  'required' => '')) }}
              </div>

              {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}

              {!! Form::close() !!}
  </div>
</div>
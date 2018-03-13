@extends('main')
	@section('title', '| Show Categories')

	@section('content')

<div class="row">
	<div class="col-md-8">
		 <div class="card">
           <h1 class="card-header">Category</h1>
			  <div class="card-body">
	
					<p> {{ $category->name }} </p>
				</div>
		</div> <!-- card-->
	</div> <!-- col-md-8-->

	@include('pages.category.adminpanelshow')
</div>	<!-- row -->

@endsection
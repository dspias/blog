@extends('main')

@section('title', '| All Categories')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<th>{{$category->id}}</th>
						<td>{{$category->name}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-3 offset-md-1">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

					<h2>Add Category</h2>
					{{ Form::label('name', 'Name: ') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}

					{{ Form::submit('create',['class' => 'btn btn-primary btn-block btn-h5-spacing']) }}

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
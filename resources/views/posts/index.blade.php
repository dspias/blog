@extends('main')

@section('title', 'all posts')

@section('content')
	
	<div class="row">
		<div class="col-md-9">
			<h1>All posts</h1>
		</div>
		<div class="col-md-3">
			<a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg btn-block btn-h1-spacing">Create new post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($post as $posts)
						<tr>
							<td>  {{ $posts->id }}	</td>
							<td>  {{ $posts->title }}	</td>
							<td>  {{ substr($posts->body, 0, 50) }} {{ strlen($posts->body)>50 ? "...":"" }}	</td>
							<td>  {{ date('M j, Y h:ia', strtotime( $posts->created_at)) }}	</td>
							<td> <a href=" {{ route('posts.show', $posts->id) }}" class="btn btn-defualt btn-sm">View</a> <a href="{{ route('posts.edit', $posts->id) }}" class="btn btn-defualt btn-sm">Edit</a> </td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
	
	
@stop
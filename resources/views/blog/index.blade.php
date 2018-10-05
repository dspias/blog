@extends('main')

@section('title', "| Blog")

@section('content')
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h2>{{ $post->title }}</h2>

			<h5>Published: {{ date('M J,Y', strtotime($post->created_at)) }} </h5>

			<p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) >250 ? "...":""}}</p>

			<a href="{{ route('blog.single', $post->slug ) }}" class="btn btn-primary"> Read more</a>
			<hr>
		</div>
	</div>
	@endforeach

	
	<div class="row">
		<div class="col-md-2 offset-md-5">
			{!! $posts->links(); !!}
		</div>
		<div class="offset-md-5">				
		</div>
	</div>
	

@endsection
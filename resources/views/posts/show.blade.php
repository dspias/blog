@extends('main')

@section('title', 'view post')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1> {{ $post->title }} </h1>

			<p class="lead"> {{ $post->body }} </p>

			<hr>

			<h3>Post all tags</h3>

			<div class="tags">
				@foreach($post->tags as $tag)
					<span class="btn btn-outline-info">
						{{ $tag->name }}
					</span>
				@endforeach
			</div>

		</div>

		<div class="col-md-4">
			<div class="well">
				
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p> <a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a> </p>
				</dl>

				<dl class="dl-horizontal">
					<label>Category:</label>
					<p> {{ $post->category->name }} </p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p> {{ date('F j, Y, g:i a', strtotime( $post->created_at)) }} </p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p> {{ date('F j, Y, g:i a', strtotime( $post->updated_at)) }} </p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::open(['route' => ['posts.destroy', $post->id],'method' => 'DELETE']) }}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm("Are you sure delete this post?")' ]) !!}

						{{ Form::close() }}
					</div>
					<div class="col-sm-12 ">
						{!! Html::linkRoute('posts.index', 'show all posts', array($post->id), array('class' => 'btn btn-success btn-block btn-h5-spacing', 'style' => 'margin-top:6px;')) !!}
					</div>
				</div>

			</div>
		</div>
	</div>
	
	
	
@endsection
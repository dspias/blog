@extends('main')

@section('title', '| create new posts')

@section('stylesheet')

	{!! Html::style('css/parsley.css') !!}
	{!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1>Create New Post</h1>

			<hr class="my-4">

			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '191')) }}

			{{ Form::label('slug', 'Slug:') }}
			{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}

			{{ Form::label('category_id', 'Category:') }}
			<select name="category_id" class="form-control">
				@foreach($categories as $category)
				<option value="{{$category->id}}">{{$category->name}}</option>
				@endforeach
			</select>

			{{ Form::label('tags', 'Tags:') }}
			<select name="tags[]" class="form-control select2-multi" multiple="multiple">
				@foreach($tags as $tag)
				<option value="{{$tag->id}}">{{$tag->name}}</option>
				@endforeach
			</select>

			{{ Form::label('body', 'Post Body:') }}
			{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

			{{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;' )) }}

			{!! Form::close() !!}

		</div>
	</div>
@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

@endsection
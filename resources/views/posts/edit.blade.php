@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheet')

	{!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')
	
	<div class="row">

	<div class="col-md-12">
		{!! Form::model($post, ['route' => ['posts.update', $post->id],'method' => 'PUT', 'data-parsley-validate' => '']) !!}
		
	<div class="row">
		<div class="col-md-8">
			

			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['class' => 'form-control','required' => '', 'maxlength' => '191']) }}

			{{ Form::label('slug', 'Slug:') }}
			{{ Form::text('slug', null, ['class' => 'form-control','required' => '', 'maxlength' => '191']) }}

			{{ Form::label('category_id', 'Category:') }}
			<select name="category_id" class="form-control">
				@foreach($categories as $category)
				<option value="{{$category->id}}" 
					@if($post->category_id == $category->id)
						selected
					@endif
					>{{$category->name}}</option>
				@endforeach
			</select>

			{{ Form::label('tags', 'Tags:') }}
			<select name="tags[]" class="form-control select2-multi" multiple="multiple">
				@foreach($tags as $tag)
				<option value="{{$tag->id}}"> {{$tag->name}} </option>
				@endforeach
			</select>


			{{ Form::label('body', 'Body:') }}
			{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '191']) }}

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd> {{ date('M j, Y h:ia', strtotime( $post->created_at)) }} </dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd> {{ date('M j, Y h:ia', strtotime( $post->updated_at)) }} </dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Change', ['class' => 'btn btn-success btn-block']) }}
						
					</div>
				</div>

			</div>
		</div>
	  </div>

		{!! Form::close() !!}
		</div>
	</div>

@endsection 


@section('scripts')

	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode( $post->tags()->pluck('tag_id')->all() ) !!}).trigger('change');
	</script>

@endsection
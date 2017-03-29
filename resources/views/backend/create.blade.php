@extends('larablog::backend.layout')

@section('content')
	<section class="main-section">
		<div class="level">
			<div class="level-item">
				<a href="{{ route('larablog.backend.posts.index') }}" class="button">
					All Posts
				</a>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-8 box">
				<form action="{{ route('larablog.backend.posts.store') }}" method="POST">
					{{ csrf_field() }}

					<label for="title">Title</label>
					<p class="control">
						<input class="input{{ $errors->has('title') ? ' is-danger' : '' }}" type="text" name="title" value="{{ old('title') }}" />
						@if ($errors->has('title'))
			                <span class="help is-danger">{{ $errors->first('title') }}</span>
			            @endif
					</p>

					<label for="slug">Slug</label>
					<p class="control">
						<input class="input{{ $errors->has('slug') ? ' is-danger' : '' }}" type="text" name="slug" value="{{ old('slug') }}" />
						@if ($errors->has('slug'))
			                <span class="help is-danger">{{ $errors->first('slug') }}</span>
			            @endif
					</p>

					<label class="label">Body</label>
				  	<p class="control">
			    		<textarea class="textarea" rows="20" placeholder="Post body" name="body">{{ old('body') }}</textarea>
				  	</p>

				  	<p class="control">
				    	<label class="checkbox">
					      	<input type="checkbox" name="publish" />
				      		Publish
					    </label>
				  	</p>

				  	<p class="control">
				    	<button class="button is-primary">Submit</button>
				  	</p>
				</form>	
			</div>
		</div>
	</section>
@stop
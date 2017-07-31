<label for="title">Title</label>
<p class="control">
	<input class="input{{ $errors->has('title') ? ' is-danger' : '' }}" type="text" name="title" value="{{ old('title', $post->title) }}" />
	@if ($errors->has('title'))
        <span class="help is-danger">{{ $errors->first('title') }}</span>
    @endif
</p>

<label for="slug">Slug</label>
<p class="control">
	<input class="input{{ $errors->has('slug') ? ' is-danger' : '' }}" type="text" name="slug" value="{{ old('slug', $post->slug) }}" />
	@if ($errors->has('slug'))
        <span class="help is-danger">{{ $errors->first('slug') }}</span>
    @endif
</p>

<label class="label">Body</label>
<p class="control">
<textarea class="textarea" rows="20" placeholder="Post body" name="body">{{ old('body', $post->body) }}</textarea>
</p>

<p class="control">
<label class="checkbox">
  	<input type="checkbox" name="is_published" {{ old('is_published', $post->is_published) ? 'checked="checked"' : '' }} />
		Publish
</label>
</p>

<div class="field is-grouped has-justified-space-between">
	<div class="control">
		<a href="{{ route('larablog.backend.posts.index') }}" class="button is-link">Cancel</a>
	</div>
	<div class="control">
		<button class="button is-primary">Submit</button>
	</div>
</div>
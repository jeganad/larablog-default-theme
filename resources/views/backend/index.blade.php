@extends('larablog::backend.layout')

@section('content')
    <section class="main-section">
    	<div class="container">
            <div class="level">
                <div class="level-item">
                    <a href="{{ route('larablog.backend.posts.create') }}" class="button">
                        <span class="icon is-small">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </span>
                        <span>create Post</span>
                    </a>
                </div>
            </div>
            @if ($publishedPosts->count() > 0)
                <h2 class="is-2 title has-text-centered">Published Posts</h2>
                <div class="columns is-multiline">
                    @foreach($publishedPosts as $post)
                        <div class="column is-12">
                            @component('larablog::shared.post', ['post' => $post])
                            @endcomponent
                        </div>
                    @endforeach
                </div>
                <hr/>
            @endif
            @if ($unPublishedPosts->count() > 0)
                <h2 class="is-2 title has-text-centered">Unpublished Posts</h2>
                <div class="columns is-multiline">
                    @foreach($unPublishedPosts as $post)
                        <div class="column is-12">
                            @component('larablog::shared.post', ['post' => $post])
                            @endcomponent
                        </div>
                    @endforeach
                </div>
            @endif
            @if ($publishedPosts->count() == 0 && $unPublishedPosts->count() == 0)
                <p class="content has-text-centered">
                    You haven't created any posts yet.
                </p>
            @endif
    	</div>
    </section>
@stop
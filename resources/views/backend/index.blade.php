@extends('larablog::backend.layout')

@section('content')
    <section class="main-section">
    	<div class="container">
            @if ($publishedPosts)
                <h2 class="is-2 title has-text-centered">Published Posts</h2>
                <div class="columns is-multiline">
                    @foreach($publishedPosts as $post)
                        <div class="column is-12">
                            @component('larablog::shared.post', ['post' => $post])
                            @endcomponent
                        </div>
                    @endforeach
                </div>
            @endif
            <hr/>
            @if ($unPublishedPosts)
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
    	</div>
    </section>
@stop
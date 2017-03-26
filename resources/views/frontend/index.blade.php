@extends('larablog::frontend.layout')

@section('content')
    @if ($posts)
        <section class="main-section">
        	<div class="container">
                <div class="columns is-multiline">
                    @foreach($posts as $post)
                        <div class="column is-12">
                            @component('larablog::shared.post', ['post' => $post])
                            @endcomponent
                        </div>
                    @endforeach
                </div>
        	</div>
        </section>
    @endif
@stop

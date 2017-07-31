@extends('larablog::frontend.layout')

@section('content')
    @if ($post)
        <section class="main-section">
        	<div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12">
                        @component('larablog::shared.post', ['post' => $post, 'showPreview' => false])
                        @endcomponent
                    </div>
                </div>
        	</div>
        </section>
    @endif
@stop

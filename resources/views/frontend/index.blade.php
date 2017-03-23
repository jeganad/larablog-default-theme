@extends('larablog::frontend.layout')

@section('content')
    @if ($posts)
        <section class="main-section">
        	<div class="container">
                <div class="columns">
                    <div class="column">
                        @component('larablog::frontend.post')
                        @endcomponent
                    </div>
                </div>
        	</div>
        </section>
    @endif
@stop

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

					@include('larablog::backend.partials.createOrEdit')
				</form>	
			</div>
		</div>
	</section>
@stop
<larablog-post inline-template>
	<div class="larablog-box">
		<article class="article">
			<h2 class="title is-2">{{ $post->title }}</h2>
	    	<hr/>
	        {!! $post->body !!}    
		</article>
	    <div class="larablog-box-footer">
	        <div class="level">
				<div class="level-left">
					<div class="level-item content">
						<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;
						{{ ($post->published_at) ? $post->published_at->formatLocalized('%d %B %Y') : 'not yet published' }}
					</div>
				</div>
				<div class="level-right">
					<div class="level-item content">
						@can('edit post', $post)
							<a href="{{ route('larablog.backend.posts.edit', ['post' => $post->id]) }}" class="button">
								<span class="icon is-small">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</span>
							</a>
						@endcan
						@can('delete post', $post)
							<a href="#delete-{{$post->id}}" class="button" @click="showDeleteModal = true">
								<span class="icon is-small">
									<i class="fa fa-trash-o" aria-hidden="true"></i>
								</span>
							</a>
							<larablog-modal v-if="showDeleteModal" @close="showDeleteModal = false">
								<template slot="header">
									<p class="modal-card-title">Delete Post</p>
								</template>
								<template slot="body">
									<form method="POST" action="{{ route('larablog.backend.posts.destroy', ['post' => $post->id]) }}">
										{{ method_field('DELETE') }}
										{{ csrf_field() }}
										<button class="button is-danger">
											<span>Delete Post</span>
										</button>
									</form>
								</template>
								<template slot="footer"></template>
							</larablog-modal>
						@endcan
					</div>
				</div>
			</div>
	    </div>
	</div>
</larablog-post>
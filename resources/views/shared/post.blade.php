<div class="larablog-box">
	<article class="article">
		<h2 class="title is-2">{{ $post->title }}</h2>
    	<hr/>
        {{ $post->body }}        
	</article>
    <div class="larablog-box-footer">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        {{ $post->published_at->formatLocalized('%d %B %Y') }}
    </div>
</div>
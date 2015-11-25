<div class="flm-section other-news">
	<div class="content">
		<div class="header">
			<h4>Día a día en la Filmoteca</h4>
		</div>

		<ul class="list-group-other-news">
			@foreach( $news as $new )
				<li class="list-group-item preview-news">
				    <img src="{{ asset($new->image->url('thumbnail')) }}">
					
					<h6>{{ $new->title }}</h6>
					<span class="preview-news">{{ Str::limit($new->body, 200, '') }}</span> <span class="see-more">{{ HTML::linkAction('NewsController@show', 'Leer más', [$new->id]) }}</span>
				</li>
			@endforeach
		</ul>
	</div>
</div>
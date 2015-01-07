<div class="flm-section other-news">
	<div class="content">
		<div class="header">
			<h3>Otras noticias</h3>
		</div>

		<ul class="list-group">
			@foreach( $news as $new )
				<li class="list-group-item">
					<span class="preview-news">{{ Str::limit($new->body, 80, '') }}</span> <span class="see-more">{{ HTML::linkAction('NewsController@show', 'Leer más', [$new->id]) }}</span>
				</li>
			@endforeach
		</ul>
	</div>
</div>
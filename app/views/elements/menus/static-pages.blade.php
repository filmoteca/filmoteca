@if( !isset( $selected )) 
	$selected = 0 
@endif

<div class="static-pages-menu">
	<ul>
	@foreach($menu as $key => $value)
		<li class="{{ ( isset($value[2]) && !empty($value[2]))? "has-sub": "" }}">
			<a href="{{ $value[1]}}" class="{{ ($key == $selected)? 'selected': '' }}">
				<span>{{ $value[0] }}</span>
			</a>
			@if( isset($value[2]) && !empty($value[2]))
				<ul>					
					<li class="last">
						<a href="{{ $value[2][1] }}">
							<span>{{ $value[2][0] }}</span>							
						</a>
					</li>
				</ul>
			@endif
		</li>
	@endforeach
	</ul>
</div>
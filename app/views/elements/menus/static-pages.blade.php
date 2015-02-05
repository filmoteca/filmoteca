@if( !isset( $selected )) 
	$selected = 0 
@endif

<div class="static-pages-menu">
	<ul>
	@foreach($menu as $key => $entry)
		<li class="{{ ( isset($entry[2]) && !empty($entry[2]))? "has-sub": "" }}">
			<a href="{{ $entry[1]}}" class="{{ ($key == $selected)? 'selected': '' }}">
				<span>{{ $entry[0] }}</span>
			</a>

			{{-- The submenu is in the thierd position in the array --}}
			@if( isset($entry[2]) && !empty($entry[2]))
				<ul>
					@foreach($entry[2] as $sub_entry)				
						<li class="last">
							<a href="{{ $sub_entry[1] }}">
								<span>{{ $sub_entry[0] }}</span>							
							</a>
						</li>
					@endforeach
				</ul>
			@endif

		</li>
	@endforeach
	</ul>
</div>
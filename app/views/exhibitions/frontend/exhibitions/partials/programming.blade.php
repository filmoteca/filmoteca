<div class="flm-section programming">
	<div class="content">

		@include('exhibitions.frontend.exhibitions.partials.calendar')

		<div class="link">
			<a href="{{ URL::route('exhibition.auditorium.index') }}">
				<span class="icon icon-cinemas"></span>
				@lang('exhibitions.frontend.auditorium.index.title')
			</a>
		</div>
		<div class="link">
			<a href="{{ URL::route('exhibition.history') }}">
				<span class="icon icon-ciclos"></span>
				@lang('exhibitions.frontend.history.title')
			</a>
		</div>
		<div class="link">
			<a href="{{ URL::route('exhibitions.frontend.cycle.index') }}">
				<span class="icon icon-ciclos"></span>
				@lang('exhibitions.frontend.cycle.index.title')
			</a>
		</div>
		<div class="flm-section banner-programacion">
			@include('pages.home.partials.banner-programacion')
		</div>

	</div>
</div>

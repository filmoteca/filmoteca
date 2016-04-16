<div class="flm-section programming">
	<div class="content">

		@include('exhibitions.frontend.exhibitions.partials.calendar')

		<a href="{{ URL::route('exhibition.auditorium.index') }}">
			@lang('exhibitions.frontend.auditorium.index.title')
		</a>
		<a href="{{ URL::route('exhibition.history') }}">
			@lang('exhibitions.frontend.history.title')
		</a>
		<a href="{{ URL::route('exhibition.cycle.index') }}">
			@lang('exhibitions.frontend.cycle.index.title')
		</a>
	</div>
</div>

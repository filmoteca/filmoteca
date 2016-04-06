<div class="flm-section programming">
	<div class="content">

		@include('frontend.exhibitions.partials.calendar')

		<a href="{{ URL::route('exhibition.auditorium.index') }}">
			@lang('exhibitions.frontend.auditorium.index.title')
		</a>
	</div>
</div>

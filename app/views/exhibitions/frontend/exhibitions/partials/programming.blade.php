@section('scripts')
	{{ HTML::script('/assets/js/home.js')}}
	{{ HTML::script('/assets/js/facebook.js')}}
@stop

@include('exhibitions.frontend.exhibitions.partials.calendar')

<div class="film-subsection">
	<div class="content">
		<div class="link-group color-home">
			<div class="link">
				<a href="{{ URL::route('exhibitions.frontend.cycle.index') }}">
					<span class="icon icon-ciclos"></span>
					@lang('exhibitions.frontend.cycle.index.title')
				</a>
			</div>
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
			
			@if (isset($lastBillboard))
				<div class="billboard-banner" style="background-image: url({{ $lastBillboard->background->url('standard') }})">
					<div class="text-right">
						<a href="{{ $lastBillboard->pdf->url() }}">
							@lang('exhibitions.general.download')
						</a>
					</div>
					<div class="text-right">
						<a href="{{ $lastBillboard->online_version_url }}">
							@lang('exhibitions.frontend.billboard.index.consult')
						</a>
					</div>
				</div>
			@endif
		</div>

		@include('pages.home.partials.banner-programacion')

	</div>
</div>

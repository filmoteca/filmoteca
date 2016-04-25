<div class="panel panel-default">
	<div class="panel-heading">
		<div class="icon">
			@if ($exhibition->getType() !== null)
				<div class="row">
					<div class="col-md-2">
						<img src="{{ $exhibition->getType()->getImage()->getSmallImageUrl() }}" class="image-size-thumbnail">
					</div>
					<div class="col-md-10">
						<h3>{{ $exhibition->getType()->getName() }}</h3>
					</div>
				</div>
			@endif
		</div>
	</div>


	<div class="panel-body">

		@include(
			'exhibitions.frontend.films.partials.details',
			['film' => $exhibition->getFilm(), ['exhibitionNotes' => $exhibition->getNotes() ]]
		)

		<!-- Se presenta en las salas y horarios -->

		<div class="panel panel-default">
			<div class="panel-heading-hora">
				<div class="row">
					<div class="col-md-5">
						<h3>@lang('exhibitions.frontend.exhibition.show.is_presented_at')</h3>
					</div>
					<div class="col-md-5">
						<a href="{{ URL::route('exhibition.auditorium.index') }}">
							@lang('exhibitions.frontend.exhibition.show.see_auditoriums_location')
						</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<table class="table table-responsive table-bordered">
				@foreach ($exhibition->getSchedules()->only($date)->groupByAuditorium() as $schedules)				
					<tr>
						<td class="col-md-4 bold">
                            <a href="{{  URL::route('exhibition.auditorium.show', ['slug' =>  $schedules->first()->getAuditorium()->getSlug()])}}">
                               {{ $schedules->first()->getAuditorium()->getName() }}
							</a>
						</td>
						<td class="col-md-3 highlight text-center">
							@lang('exhibitions.frontend.exhibition.show.date',
				               	[
				               		'numeric_day' => $schedules->first()->getEntry()->day,
									'textual_month' => trans('dates.months.' . $schedules->first()->getEntry()->format('F')),
									'year' => $schedules->first()->getEntry()->year
								])
						</td>
						<td class="col-md-5">
							{{ HTML::schedulesTimeAsList($schedules) }} hrs.
						</td>
					</tr>		
					@endforeach
				</table>
							<!-- Botón que desplegará más horarios -->
					<div align="right">
						<button type="button"
								class="btn btn-default more-schedules"
								data-href="{{ URL::route('exhibition.schedule.search', ['exhibitionId' => $exhibition->getId()]) }}"
								data-since="{{ isset($date) ? $date->copy()->addDay()->format(MYSQL_DATE_FORMAT) : ''  }}"
								title="@lang('exhibition.see_more_schedules')">
							@lang('exhibitions.frontend.exhibition.show.see_more_schedules')
						</button>
						<div align="left" class="collapse">
							{{-- This content is loaded with AJAX and it is located in --}}
							{{-- views/frontend/exhibitions/partials/more-schedules    --}}
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

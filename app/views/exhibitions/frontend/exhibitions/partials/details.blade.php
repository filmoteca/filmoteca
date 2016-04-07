<div class="panel panel-default">
	<div class="panel-heading">
		<div class="icon">
			@if ($exhibition->getType() !== null)
				<span>
					<img src="{{ $exhibition->getType()->getImage()->getSmallImageUrl() }}">
				</span>
				<span>{{ $exhibition->getType()->getName() }}</span>
			@endif
		</div>
	</div>


	<div class="panel-body">
		<div class="row">
			<div class="col-md-4">
				<div class="fb-like"
					 data-href="{{ URL::route('exhibition.show', array('id' => $exhibition->id ))}}"
					 data-layout="button"
					 data-action="like"
					 data-show-faces="true"
					 data-share="true">
				</div>

				<img src="{{ $exhibition->getFilm()->getCover()->getMediumImageUrl() }}">
			</div>
			<div class="col-md-8">
				<h2 class="text-center">{{ $exhibition->getFilm()->getTitle() }}</h2>

				<!-- Texto que mostrará duración, fecha y año -->
				<h6 class="text-center">
					<span class="countries">{{ $exhibition->getFilm()->getCountries()->implode('name', ', ') }}</span>
					<span> / </span>
					<span class="years">{{ implode(',', $exhibition->getFilm()->getYears()) }}</span>
					<span> / </span>
					<span class="duration">{{ $exhibition->getFilm()->getDuration() }} min.</span>
				</h6>

				<!-- Pestañas de sinopsis, fiche técnica, trailer y notas-->
				<div class="content">
					<!-- Nav tabs -->
					<div role="tabpanel">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active" role="presentation">
								<a data-toggle="tab" role="tab" href="#tab-1">@lang('exhibitions.frontend.exhibition.show.fields.synopsis')</a>
							</li>
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" href="#tab-2">@lang('exhibitions.frontend.exhibition.show.fields.technical_card')</a>
							</li>
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" href="#tab-3">@lang('exhibitions.frontend.exhibition.show.fields.trailer')</a>
							</li>
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" href="#tab-4">@lang('exhibitions.frontend.exhibition.show.fields.notes')</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div id="tab-1" class="tab-pane active" role="tabpanel">
								<li class="list-group-item">
									<p>{{ $exhibition->getFilm()->getSynopsis() }}</p>
								</li>
							</div>

							<!-- Ficha técnica que se muestra en la pestaña Ficha técnica(tab-2) -->
							<div class="tab-pane" role="tabpanel" id="tab-2">
								<li class="list-group-item embed-responsive embed-responsive-16by9">
									<p>{{ $exhibition->getFilm()->getTrailer() }}</p>
								</li>
							</div>

							<!-- Video que se muestra en la pestaña Trailer(tab-3) /4by3-->
							<div class="tab-pane" role="tabpanel" id="tab-3">
								<li class="list-group-item embed-responsive embed-responsive-16by9">
									<p>{{ $exhibition->getFilm()->getTrailer() }}</p>
								</li>
							</div>

							<!-- Notas que se muestran en la pestaña Notas(tab-4) -->
							<div class="tab-pane" role="tabpanel" id="tab-4">
								<li class="list-group-item embed-responsive embed-responsive-16by9">
									<p>{{ $exhibition->getFilm()->getNotes() }}</p>
								</li>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading-hora">
				<h3>@lang('exhibitions.frontend.exhibition.show.is_presented_at')</h3>
				<span>
					<a href="{{ URL::route('exhibition.auditorium.index') }}">
						@lang('exhibitions.frontend.exhibition.show.see_auditoriums_location')
					</a>
				</span>
			</div>
			<div class="panel-body">
				@foreach ($exhibition->getSchedules()->groupByAuditorium() as $schedules)
					<div class="row">
						<div class="col-md-5">
                                    <span class="auditorium-name">
                                        {{ $schedules->first()->getAuditorium()->getName() }}
                                    </span>

							<a href="{{  URL::route('exhibition.auditorium.show', ['slug' =>  $schedules->first()->getAuditorium()->getSlug()])}}">
								@lang('exhibitions.frontend.exhibition.show.see_location')
							</a>
						</div>
						<div class="col-md-7">
							{{ HTML::schedulesTimeAsList($schedules) }}
						</div>
					</div>
					@endforeach

							<!-- Botón que desplegará más horarios -->
					<div align="right">
						<button type="button"
								class="btn btn-default more-schedules"
								data-href="{{ URL::route('exhibition.schedule.search', ['exhibitionId' => $exhibition->getId()]) }}"
								data-since="{{ isset($date) ? $date->format(MYSQL_DATE_FORMAT) : ''  }}"
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

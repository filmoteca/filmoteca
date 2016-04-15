<div class="panel panel-default">
	<div class="panel-heading">
		<div class="icon">
			@if ($exhibition->getType() !== null)
				<span>
					<img src="{{ $exhibition->getType()->getImage()->getSmallImageUrl() }}">
					{{ $exhibition->getType()->getName() }}
				</span>
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
					<span class="years">{{ implode(',', $exhibition->getFilm()->getYears()) }}</span>
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
								<li class="list-group-item margin scroll-over">
									<p>{{ $exhibition->getFilm()->getSynopsis() }}</p>
								</li>
							</div>

							<!-- Ficha técnica que se muestra en la pestaña Ficha técnica(tab-2) -->
							<div id="tab-2" class="tab-pane" role="tabpanel" >
								<li class="list-group-item margin scroll-over embed-responsive embed-responsive-16by9">
									<table class="table table-bordered">

									<?php
										$var = "{$exhibition->getFilm()->getTitle()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'.Lang::get('exhibitions.frontend.exhibition.show.fields.title').'</strong>'.': '.$var.'</p>';
										}
									?>
									<?php
										$var = "{$exhibition->getFilm()->getOriginalTile()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.original_title') .'</strong>'. ': ' . $var.'<p>';
										}
									?>

									<?php
										$var = "{$exhibition->getFilm()->getDuration()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.duration') .'</strong>'. ': ' . $var . ' min.'.'</p>';
										}
									?>


									<?php
										$var = "{$exhibition->getFilm()->getDirector()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.director') .'</strong>'. ': ' . $var.'</p>';
										}
									?>
									<?php
										$var = "{$exhibition->getFilm()->getScript()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.script') .'</strong>'. ': ' . $var.'</p>';
										}
									?>
									<?php
										$var = "{$exhibition->getFilm()->getPhotographic()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.photographic') .'</strong>'. ': ' . $var.'</p>';
										}
									?>
									<?php
										$var = "{$exhibition->getFilm()->getMusic()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.music') .'</strong>'. ': ' . $var.'</p>';
										}
									?>
									<?php
										$var = "{$exhibition->getFilm()->getEdition()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.edition') .'</strong>'. ': ' . $var.'<p>';
										}
									?>
									<?php
										$var = "{$exhibition->getFilm()->getProduction()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.production') .'</strong>'. ': ' . $var.'</p';
										}
									?>
									<?php
										$var = "{$exhibition->getFilm()->getCast()}";

										if (empty($var)) 
										{
										   echo $var;
										}
										else{
										echo '<p class= "margin">'.'<strong>'. Lang::get('exhibitions.frontend.exhibition.show.fields.cast') .'</strong>'. ': ' . $var.'</p>';
										}
									?>

			                        </table>
								</li>
							</div>

							<!-- Video que se muestra en la pestaña Trailer(tab-3) /4by3-->
							<div id="tab-3" class="tab-pane" role="tabpanel" >
								<li class="list-group-item embed-responsive embed-responsive-16by9">
									<p>{{ $exhibition->getFilm()->getTrailer() }}</p>
								</li>
							</div>

							<!-- Notas que se muestran en la pestaña Notas(tab-4) -->
							<div id="tab-4" class="tab-pane" role="tabpanel" >
								<li class="list-group-item margin scroll-over embed-responsive embed-responsive-16by9">
									<p><strong>@lang('exhibitions.frontend.exhibition.show.fields.notes') de la Pelicula</strong>: 
									{{ $exhibition->getFilm()->getNotes() }}</p>
									<p><strong>@lang('exhibitions.frontend.exhibition.show.fields.notes') de la Exhibición</strong>: {{ $exhibition->getFilm()->getNotes() }}</p>
								</li>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>


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
				@foreach ($exhibition->getSchedules()->groupByAuditorium() as $schedules)
					<div class="row">
						<div class="col-md-4 bold">
                            <a href="{{  URL::route('exhibition.auditorium.show', ['slug' =>  $schedules->first()->getAuditorium()->getSlug()])}}">
                               {{ $schedules->first()->getAuditorium()->getName() }}
							</a>
						</div>
						<div class="col-md-4 highlight">
							@lang('exhibitions.frontend.details.fechas.fecha',
				               	['numeric_day' => $date->format('j'),
								'textual_month' => @trans('dates.months.' . $date->format('F'))
								])
								<?php
								    echo date("Y");
								?>
						</div>
						<div class="col-md-4">
							{{ HTML::schedulesTimeAsList($schedules) }} hrs.
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

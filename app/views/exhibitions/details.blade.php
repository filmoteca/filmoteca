@extends('layouts.ajax')

@section('breadcrumbs')
	<li>
		{{ HTML::linkRoute('exhibitions.index','Programación') }}
	</li>
	<li class="active">
		{{ str_limit( $exhibition->exhibition_film->film->title, 10 ) }}
	</li>
@stop

@section('meta')
	{{ HTML::metatags(
		array())}}
@stop

@section('content')
	
	<a class="btn" ng-click="showExhibitions()">
		<span class="glyphicon glyphicon-chevron-left"></span>
		Regresar
	</a>

	<div class="panel panel-default">

		<div class="panel-heading">
			<h1>{{ $exhibition->exhibition_film->film->title }}</h1>
		</div>

		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
					<div class="details-poster image pull-left">

						<img src="{{ $exhibition->exhibition_film->film->full_image }}"
						alt="{{ $exhibition->exhibition_film->film->title }}" >

					</div>

					<div class="fb-like" 
						 data-href="{{ URL::action('ExhibitionController@detail', array('id' => $exhibition->id ))}}" 
						 data-layout="standard" 
						 data-action="like" 
						 data-show-faces="true" 
						 data-share="true">
					</div>
					
					<div class="tecnical-card">
						
						@foreach($exhibition->getTechnicalCard() as $title => $value)
							<p>
								<b>{{mb_strtoupper($title)}}</b>
								{{ $value }}
							</p>
						@endforeach
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> Salas </div>
				<div class="panel-body">
					<table class="table table-bordered">					
						@foreach( $exhibition->schedules as $schedule )
							<tr>
								<td>{{ $schedule->auditorium->id }}</td>
								<td>
									<div class="btn btn-default"
										flm-filters
										filter-name="auditorium"
										filter-value="{{ $schedule->auditorium->id }}"
										filter-title="{{ $schedule->auditorium->name }}">
										{{ $schedule->auditorium->name }}
									<div>
								</td>
								<td>{{ $schedule->entry }}</td>
							</tr>
						@endforeach
					</table>
				</div>
				<div class="panel-footer">
					<p>
						<span>
							{{ HTML::image(
								$exhibition->type->icon, 
								$exhibition->type->name) }}
						</span>
						{{ $exhibition->type->name }}
					<p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="embed-responsive embed-responsive-16by9">
						@if (strpos(substr($exhibition->exhibition_film->film->trailer, 0, 30), 'iframe'))
					 			{{ $exhibition->exhibition_film->film->trailer }}
				 		@else
				 			<video src="{{$exhibition->exhibition_film->film->trailer}}">Vídeo no soportado</video>
				 		@endif
				 	</div>
				</div>
			</div>
		</div>
	</div>
@stop
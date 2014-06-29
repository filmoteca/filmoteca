@extends($layout)

@section('breadcrumbs')
	<li>
		{{ HTML::linkAction('ExhibitionController@index','Programación') }}
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
	<div class="details">

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
				<h1>{{ $exhibition->exhibition_film->film->title }}</h1>
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

		<div class="row">
			<div class="col-lg-12">
				<div class="details-tailer">
				 	{{
				 		HTML::image(
				 			'/assets/imgs/background-trailer.jpg',
				 			'Trailer de ' . $exhibition->exhibition_film->film->title )
				 	}}
				 	<div class="details-iframe-wrapper">
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
<h4>Películas encontradas: @{{ filterResults }} </h4>

<div ng-switch="usedFilter">
	<h3 ng-switch-when="week">
		Programación de la semanal del 
		<b>@{{startDate | date : 'd' }}</b> al <b>@{{endDate | date : 'd'}}</b> de 
		<b>@{{ dt | date : 'MMMM'}}</b>
	</h3>
	<h3 ng-switch-when="day">
		Programación del día <b>@{{ selectedDay | date : 'd' }}</b>
		de <b>@{{ selectedDay | date : 'MMMM'}}</b>
	</h3>
	<h3 ng-switch-when="auditorium">
		Programación de la sala <b>@{{filterTitle}}</b> de
		<b>{{ trans('dates.months.' . date('F') ) }}</b>
	</h3>
	<h3 ng-switch-when="icon">
		Funciones <b>@{{filterTitle}}</b> de
		<b>{{ trans('dates.months.' . date('F') ) }}</b>
	</h3>
	<h3 ng-switch-default>
		Programación del mes de <b>{{ trans('dates.months.' . date('F') ) }}</b>
	</h3>
</div>

<div class="wrapper-items" id="wrapper-items">

	<div class="without-results" id="without-results">
		No se encontraron películas con
		los filtros solicitados
	</div>

	<ul class="items" id="items">

		@foreach( $exhibitions as $index => $exhibition )

			<li class="thumbnail item"
				id="{{ $exhibition->id }}">

				<img src="{{ $exhibition->exhibition_film->film->thumbnail_image }}"
					alt="{{ $exhibition->exhibition_film->film->title }}">
				{{ 
					HTML::link(
					'exhibition/' . $exhibition->id . '/detail',
					str_limit(
						$exhibition->exhibition_film->film->title,
						20),
					array(
						'title' => 'Ver detalles',
						'ng-click' => 
							'showDetails("' . 
								URL::action("ExhibitionController@detail", $exhibition->id) .
								'")',
						'onclick' => 'return false'
						)
					) 
				}}
			</li>

		@endforeach
	</ul>
</div>
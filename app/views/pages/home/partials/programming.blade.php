<div class="flm-section programming">
	<div class="content">

		<div class="flm-section flm-subsection carrousel">
			<div class="content">
				<div class="header">
					<h3 class="text-center">Programación</h3>
					<h4 class="text-center">Hoy se exhibe</h4>
				</div>
				
				<div class="carrousel-widget">
				@foreach( $exhibitions as $exhibition)
					<div>
						<a href="{{ URL::route('exhibition.detail-home', $exhibition->id)}}" 
							data-toggle="modal" 
							data-target="#exhibition-modal">
							<img src="{{ URL::asset( $exhibition->exhibition_film->film->image->url('thumbnail') ) }}" 
								alt="{{ $exhibition->exhibition_film->film->title }}">
						</a>
					</div>
				@endforeach
				</div>
			</div>
		</div>

		@include('elements.bootstrap-modal')

		<div class="flm-section flm-subsection queries">
			<div class="content">
				<h5>Consulta:</h5>
	
				<div class="link">
					<a href="http://filmoteca.dev/exhibition/index"><span class="icon icon-this-week"></span>Esta semana</a>	
				</div>
				
				<div class="link">
					<a href="#"><span class="icon icon-ciclos"></span>Ciclos</a>
				</div>

				<div class="link">
					<a href="#"><span class="icon icon-cinemas"></span>Salas</a>
				</div>
			</div>
		</div>

		<div class="flm-section flm-subsection digital-billboard">
			<div class="content">
				<div class="image pull-left">
					<img src="/imgs/jill.jpg">
				</div>
				<div class="caption pull-right">
					<h5>Cartelera digital</h5>
					<small>Diciembre</small>
					<a href="#"><span class="icon icon-download pull-right"></span></a>
				</div>	
			</div>
		</div>

	</div>
</div>
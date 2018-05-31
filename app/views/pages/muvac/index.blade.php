@extends('layouts.muvac.home')

@section('scripts')

@stop

@section('content')

<main id="fullpage" class="mv-main">

	<section id="section0"  class="col-sm-12" data-slide="1" data-anchor="Inicio">
		@include('pages.muvac.partials.main-video')
	</section>
	</div>

	<section data-slide="1" data-anchor="Intro">	        
		@include('pages.muvac.partials.intro')
	</section>

	<section class="items-handler" data-slide="2" data-anchor="MuseoWeb"> 
		@include('pages.muvac.partials.aparatos')
	</section>

	<section class="" data-slide="3" data-anchor="MuseoUnity">
		@include('pages.muvac.partials.museo-3D')
	</section>

	<section class="items-handler precursors" data-slide="2" data-anchor="Precursores">
		@include('pages.muvac.partials.personajes')
	</section>

	<section class="" data-slide="4" data-anchor="Contacto">
		@include('pages.muvac.partials.contacto')
	</section>
</main>


<div title="Arriba" class="ceil-toolbar toolbar-fixed visible-lg">
	<div class="text-center"><a class="icon-arrow-above" href="#main-header"></a></div>
	<span>arriba</span>
</div>

@stop

@extends('layouts.default')

@section('scripts')
	{{ HTML::script('/assets/js/home.js')}}
@stop

@section('content')

<div class="row">
	<br><br>
	<div class="col-sm-12">
		@include('pages.home.partials.carousel')
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4">
		@include('pages.home.partials.the-last')
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		@include('pages.home.partials.filmoteca-invite')
	</div>

	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="row">
			<div class="col-sm-6 col-md-12">
				@include('pages.home.partials.programming')
			</div>
			<div class="col-sm-6 visible-sm">
				@include('pages.home.partials.other-news')
			</div>
			<div class="col-sm-6 visible-sm">
				@include('pages.home.partials.visit')
			</div>
		</div>
	</div>
</div>

<div class="row hidden-sm">
	<div class="col-sm-12 col-md-4">
		@include('pages.home.partials.other-news')
	</div>
	<div class="col-sm-12 col-md-8">
		@include('pages.home.partials.visit')
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="flm-section expositions">
					<div class="content">
						<div class="header">
							<h3>Centro de documentación</h3><small>Abirto al público en general</small>
							<span class="see-more"><a href="">Ver más</a></span>
						</div>
						<div class="image">
							<img src="/imgs/jill.jpg" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="flm-section expositions">
					<div class="content">
						<div class="header">
							<h3>Exposiciones</h3>
							<h5>Cine surealismo</h5>
							<span>Sede: Filmoteca UNAM</span><span class="see-more"><a href="">Ver más</a></span>
						</div>
						<div class="image">
							<img src="/imgs/dead-nation.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="well well-sm">
					<h4 class="text-center"><a href="#">Tienda en línea</a></h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="well well-sm">
					<h4 class="text-center"><a href="#">Libros UNAM</a></h4>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		@include('pages.home.partials.social-networks')
	</div>
</div>

<div class="row">
	@include('pages.home.partials.friend-sites')
</div>


<div class="toolbar-fixed social-networks-toolbar visible-lg">
	<div class="icon icon-twitter"></div>
	<div class="icon icon-facebook"></div>
	<div class="icon icon-youtube"></div>
	<div class="icon icon-v"></div>
	<div class="icon icon-google-plus"></div>
</div>

<div class="ceil-toolbar toolbar-fixed visible-lg">
	<div class="icon icon-ceil"></div>
	<span>arriba</span>
</div>

@stop
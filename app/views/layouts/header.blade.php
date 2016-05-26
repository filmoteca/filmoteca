<header class="main-header" id="main-header">
	<div class="upper-navbar">
		<div class="text-right">
			<a href="/" title="Inicio">
				<span class="icon-home"></span>Inicio
			</a>
			<a href="/pages/quienes-somos/directorio" title="Directorio">Directorio</a>
			<a href="/pages/home/mapa-del-sitio" title="Mapa del sitio">Mapa del sitio</a>
			<a href="{{ URL::to('contact') }}" title="Contacto">Contacto</a>
			<!--<a href="#"><span class="icon-accessibility"></span></a>-->
		</div>
	</div>

	<div class="strip">
		<div>
			<div class="pull-left sm-logo-unam">
				<div class="pull-left">
					<a href="http://www.unam.mx/" title="Universidad Nacional Autónoma de México, UNAM" target="blank">
						<img src="/assets/imgs/unam.png" alt="logo UNAM">
					</a>
				</div>
				<div class="unam-text pull-left hidden-xs">
					<span>Universidad Nacional</span><br>
					<span>Autónoma de México</span>
				</div>
			</div>
			<div class="pull-right sm-logo-filmo">
				<div class="filmoteca-text pull-left text-right hidden-xs">
					<span>Dirección General de</span><br>
					<span>Actividades Cinematográficas</span>
				</div>
				<div class="pull-left">
					<a href="/" title="Filmoteca UNAM">
						<img src="/assets/imgs/filmoteca.png" alt="logo Filmoteca UNAM">
					</a>
				</div>
			</div>
		</div>
	</div>

	<nav>
		@include('elements.menus.main')
	</nav>

</header>

<div class="toolbar">

	<div>

		@if( !isset($not_breadcrumbs) )
			<ul class="breadcrumb">
				<li><span class="icon-home"></span>{{ HTML::linkRoute('home',' Inicio') }}</li>
				@yield('breadcrumbs')
			</ul>
		@endif


	</div>

</div>

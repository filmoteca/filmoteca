<header class="main-header" id="main-header">
	<div class="upper-navbar">
		<div class="text-right col-xs-6 col-sm-7 col-md-8 col-lg-9">
			<a href="/" title="Inicio">
					<span class="icon-home"></span>Inicio
			</a>
			<a href="/pages/quienes-somos/directorio" title="Directorio">Directorio</a>
			<a href="/pages/home/mapa-del-sitio" title="Mapa del sitio">Mapa del sitio</a>
			<a href="{{ URL::to('contact') }}" title="Contacto">Contacto</a>
			<!--<a href="#"><span class="icon-accessibility"></span></a>-->			
		</div>
		<!-- SiteSearch Google -->
		<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
			<form class="home-search" method=GET action="http://www.google.com/search">
				<script>
				  (function() {
				    var cx = '007799231493450711263:agf3pwh1gqu';
				    var gcse = document.createElement('script');
				    gcse.type = 'text/javascript';
				    gcse.async = true;
				    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
				<gcse:search></gcse:search>
			</form>
		</div>
		<!-- SiteSearch Google -->
	</div>

	<div class="strip">
		<div>
			<div class="pull-left sm-logo-unam">
				<div class="pull-left">
					<a href="http://www.cultura.unam.mx/index.aspx" title="Cultura UNAM" target="blank">
						<img src="/assets/imgs/imagotipo_culturaUNAM.png" alt="Cultura UNAM">
					</a>
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

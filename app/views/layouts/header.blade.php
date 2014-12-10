<header class="main-header" id="main-header">
	<div class="upper-navbar">
		<div class="text-right">
			<a href="/">
				<span class="icon-home"></span>Inicio
			</a>
			<a href="http://filmoteca.dev/pages/quienes-somos/directorio">Directorio</a>
			<a href="#">Mapa del sitio</a>
			<a href="#">Contacto</a>
			<a href="#"><span class="icon-accessibility"></span></a>
		</div>
	</div>

	<div class="strip">
		<div>
			<div class="pull-left">
				<div class="pull-left">
					<a href="http://www.unam.mx/" target="blank"><!-- <span class="icon-unam"></span> -->
					<img 
                        src="/assets/imgs/unam.png"</a>
				</div>
				<div class="unam-text pull-left">
					<span>Universidad Nacional</span> <br>
					<span>Autónoma de Mexico</span>
				</div>
			</div>
			<div class="pull-right">
				<div class="filmoteca-text pull-left text-right">
					<span>Dirección General de</span> <br>
					<span>Actividades Cinematográficas</span>
				</div>
				<div class="pull-left">
					<a href="/"><!-- <span class="icon-filmoteca"></span> -->
					<img 
                        src="/assets/imgs/filmoteca.png"</a>
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
		<ul class="breadcrumb">
			<li><span class="icon-home"></span>{{ HTML::linkRoute('home','Página de inicio') }}</li>
			@yield('breadcrumbs')
		</ul>
	</div>

</div>
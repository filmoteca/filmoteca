<header class="mv-header" id="mv-header">
	<a href="http://www.cultura.unam.mx/index.aspx" class="mv-header-logo-left" title="Cultura UNAM" target="blank">
			<img src="imgs/logos/imagotipo_culturaUNAM.png#logo-cultura_unam" alt="Cultura UNAM logo"/>
	</a>
	<a href="" class="mv-header-logo-center" title="Museo Virtual de Aparatos Cinematográficos MUVAC">
		<img src="imgs/logos/logo-muvac.png" alt="Museo Virtual de Aparatos Cinematográficos logo"/>
	</a>
	<a href="/" class="mv-header-logo-right" title="Filmoteca UNAM" target="blank">
		<img src="imgs/logos/filmoteca.png" alt="Filmoteca UNAM logo"/>
	</a>
</header>

	<nav>
		@include('elements.menus.muvac.main')
	</nav>

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

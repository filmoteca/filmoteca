<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		@yield('metas')

		@yield('styles')

		@yield('scripts')

		@if (App::isLocal() )

		{{ HTML::styles(
			array(

				'/bower_components/bootstrap/dist/css/bootstrap-theme.min.css',
			
				'/bower_components/bootstrap/dist/css/bootstrap.min.css',

				'/bower_components/fancybox/source/jquery.fancybox.css',

				'/bower_components/original-hover-effects/dist/css/original-hover-effects.min.css',

				'/assets/css/static-pages-menu.css',
				
				'/assets/css/filmoteca.css')) }}

		{{ HTML::scripts(
			array(

				'/bower_components/jquery/jquery.min.js',

				'/bower_components/bootstrap/dist/js/bootstrap.min.js',

				'/bower_components/fancybox/source/jquery.fancybox.js'))}}

		@else
			{{--
				La idea de esta sección es cargar, cuando se está en producción,
				un unico archivo css. Sin embargo hay dudas si se deben
				concatenar únicamente los archivos propios sin los css de terceros
				o concatenar todo.
				--}}
				{{ HTML::style('/assets/css/filmoteca.min') }}
		@endif
		<title>Filmoteca UNAM</title>
	</head>

	<body>
		<div class="wrapper">
			<header>

				@include('elements.filmoteca-banner')

				@yield('presentation')

				{{-- @include('elements.menu.main') --}}
			</header>

			<div class="body">
				<div class="toolbar">

					<div>
						<ul class="breadcrumb">
							<li>{{ HTML::linkRoute('home','Página de inicio') }}</li>
							@yield('breadcrumb')
						</ul>
					</div>

					<div class="search"><input type="text" placeholder="  Buscador"></div>
				</div>

				@yield('content')

				<div style="clear:both"></div>

				@include('elements.footer')
			</div>
		</div>
	</body>
</html>

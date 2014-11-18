<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		@yield('metas')

		@if (App::isLocal() )

		{{ HTML::styles([

				'/bower_components/bootstrap/dist/css/bootstrap-theme.min.css',
			
				'/bower_components/bootstrap/dist/css/bootstrap.min.css',
				
				'/assets/css/filmoteca.css'
			]) }}

		{{
			HTML::scripts([
				'/bower_components/jquery/dist/jquery.min.js',
				'/bower_components/jqueryui/ui/minified/jquery-ui.min.js'
				])
			}}

		@else
			{{--
				La idea de esta sección es cargar, cuando se está en producción,
				un unico archivo css. Sin embargo hay dudas si se deben
				concatenar únicamente los archivos propios sin los css de terceros
				o concatenar todo.
				--}}
				{{ HTML::style('/assets/css/filmoteca.min') }}
		@endif

		@yield('styles')

		@yield('scripts')

		<title>Filmoteca UNAM</title>
	</head>

	<body>
		<div class="wrapper">
			<header>

				@include('elements.filmoteca-banner')

				@yield('presentation')

				@include('elements.menus.main')
			</header>

			<div class="body">
				<div class="toolbar">

					<div>
						<ul class="breadcrumb">
							<li>{{ HTML::linkRoute('home','Página de inicio') }}</li>
							@yield('breadcrumbs')
						</ul>
					</div>

				</div>

				@if( Session::has('message') )
					<div class="alert alert-{{ Session::get('type') }}">
						{{Session::get('message')}}
					</div>
				@endif

				@yield('content')

				<div style="clear:both"></div>

				@include('elements.footer')
			</div>
		</div>
	</body>
</html>

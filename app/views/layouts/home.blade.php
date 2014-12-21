<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@yield('metas')

		@if (App::isLocal() )

		{{ HTML::style('/assets/css/filmoteca.css') }}

		{{
			HTML::scripts([
				'/bower_components/jquery/dist/jquery.min.js',
				'/bower_components/bootstrap/dist/js/bootstrap.min.js',
				'/bower_components/slick.js/slick/slick.min.js'
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
		@include('layouts.header')

		<div class="container-fluid">
			@yield('content')
		</div>

		@include('layouts.footer')
	</body>
</html>

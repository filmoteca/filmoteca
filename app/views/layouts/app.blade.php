<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		@yield('metas')

		@if (App::isLocal() )

		{{ HTML::style('/assets/css/filmoteca.css') }}

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

	<body>
		@include('layouts.header')

		@include('layouts.content')

		@include('layouts.footer')
	</body>
</html>

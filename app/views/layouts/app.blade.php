<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		@yield('metas')

		@if (App::isLocal() )

		{{ HTML::styles(
			array(

				'/bower_components/bootstrap/dist/css/bootstrap-theme.min.css',
			
				'/bower_components/bootstrap/dist/css/bootstrap.min.css',
				
				'/assets/css/filmoteca.css')) }}

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
					<div class="alert alert-info }}">
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

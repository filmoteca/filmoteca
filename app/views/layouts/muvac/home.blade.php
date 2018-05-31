<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="/assets/imgs/favicon.ico" rel="icon" type="image/x-icon" />

		@yield('metas')


		{{ HTML::style('/assets/css/muvac.css') }}

		{{
			HTML::scripts([
				'/bower_components/jquery/dist/jquery.min.js',
				'/bower_components/bootstrap/dist/js/bootstrap.min.js',
				'/bower_components/slick.js/slick/slick.min.js'
				])
		}}

		@yield('styles')

		@yield('scripts')

		<title>MUVAC</title>
	</head>

	<body>
		@include('layouts.muvac.header', ['not_breadcrumbs' => true])

		<div class="container-fluid">
			@yield('content')
		</div>

		@include('layouts.muvac.footer')
        @include('elements.google-tag-manager')
	</body>

	{{ HTML::script('/assets/js/intro.js')}}
	{{ HTML::script('/assets/js/javascript.fullPage.js')}}

<script type="text/javascript">
	fullpage.initialize('#fullpage', {
		anchors: ['Inicio', 'Intro', 'MuseoWeb', 'MuseoUnity', 'Precursores','Contacto'],
		menu: '#menu',
		css3:true,
		easing: 'easeInOutCubic',
    	//equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
   	 	easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',

	});
</script>


</html>

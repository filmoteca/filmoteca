@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quiénes somos
		</a>
	</li>
	<li class="active">
		Misión y Visión
	</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.quienes-somos', array('selected' => 0))
</div>

<div class="content">


	<h1>Misión y Visión </h1>
	<h2>Misión</h2> 
	<p>Rescatar, restaurar, preservar y difundir el patrimonio fílmico de la UNAM. Producir materiales audiovisuales relacionados con el cumplimiento de tareas sustantivas de la UNAM y propiciar el enriquecimiento de la cultura cinematográfica entre la comunidad a través de la exhibición de películas y la realización de festivales, foros, conferencias, talleres y cursos, dentro y fuera del campus universitario. Impulsar el potencial de las tareas y servicios para generar recursos financieros extraordinarios.</p>

	<h2>Visión </h2>  

	<p>Ser referencia en materia de conocimientos en restauración y preservación fílmica. Gestionar el acervo con niveles de calidad de estándar internacional. Ser un foro importante de apoyo al cine nacional al exhibir filmes que permitan a la comunidad universitaria y a la sociedad en general descubrir valores estéticos y humanos que presenta el cine.</p>

	<div>
	<a href="http://www.cineyrevmex.unam.mx/home.seam"></a>
			<iframe width="560" height="315" src="//www.youtube.com/embed/CnFcomcF9PM" frameborder="0" allowfullscreen></iframe>
		<!-- <video width="510" height="390" controls preload class="center-block">
			<source src="/assets/video/spot_50.mp4" type='video/mp4; codecs="avc1,mp4a"' />
			<source src="/assets/video/spot_50.ogg" type='video/ogg; codecs="theora,vorbis"' />
			<source src="/assets/video/spot_50.webm" type='video/webm; codecs="vp8,vorbis"' />
		</video> -->
	</div>

</div>
@stop

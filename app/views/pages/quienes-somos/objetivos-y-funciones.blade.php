@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quiénes somos
		</a>
	</li>
	<li class="active">
		Objetivos y Funciones
	</li>
@stop






@section('content')

<div class="sidebar">
	@include('elements.menus.quienes-somos', array('selected' => 1))
</div>

<div class="content">
	
	<h1>Objetivos y funciones</h1>
	
	<p>La Filmoteca de la UNAM es la institución encargada de localizar, adquirir, identificar, clasificar, restaurar, valorizar, conservar y difundir películas, y en general, todos aquellos objetos y documentos relacionados con la cinematografía.</p>

	<h2>Objetivos</h2>
		<blockquote>
		<ol>
			<li>Rescatar, restaurar, catalogar, preservar y difundir imágenes en movimiento, así como sus elementos sonoros y todos los documentos escritos e iconográficos, y aparatos cinematográficos, que forman el patrimonio fílmico nacional e internacional en resguardo de la Universidad.</li>
			<li>Impartir cursos, talleres y seminarios que contribuyan a la formación de especialistas en el campo de la restauración, preservación y programación de material cinematográfico.</li>
			<li>Apoyar proyectos cinematográficos que enriquezcan tanto a la comunidad universitaria como a la sociedad en general.</li>
			<li>Programar materiales cinematográficos dentro y fuera de la Universidad.</li>
			<li>Propiciar la formación de públicos para la cultura cinematográfica entre la comunidad universitaria y el público en general, dando especial énfasis al cine nacional.</li>
			<li>Ofrecer programación alternativa al cine comercial.</li>
			<li>Establecer relaciones y promover acuerdos de colaboración con otras instituciones de su ámbito, a fin de difundir la cultura cinematografía nacional e internacional de calidad.</li>
		</ol>
		</blockquote>

	<p>Cada uno de sus objetivos está íntimamente unido a una de sus funciones:</p>

		<h2>Funciones</h2>
	<blockquote>
		<ul>
			<li>Coleccionar, conservar y proteger todas las películas referentes al arte cinematográfico y a su historia; reunir todos los documentos relativos a este arte, con fines estrictamente no comerciales; sino artísticos, historiográficos, pedagógicos, de documentación y de educación.</li>
			<li>Adquirir, estimular, crear, proyectar y difundir cualquier documento cinematográfico referente a actividades generales de la cultura.</li>
			<li>Procurar, dentro del marco de las leyes vigentes sobre la propiedad artística e intelectual, la difusión del arte cinematográfico a través de ciclos de exposiciones, cursillos, conferencias, publicaciones, grabaciones y programas de televisión.</li>
			<li>Buscar la solidaridad internacional de sus finalidades mediante los acuerdos e intercambios con instituciones similares.</li>
			<li>Contribuir, mediante la exhibición de filmes, a la formación de cineastas en las escuelas de cine, talleres de filmación y otros centros culturales, además de ayudar en la tarea de actualización del personal académico. </li>
			<li>Realizar las investigaciones necesarias para un mayor conocimiento del cine en sus aspectos sociales, históricos, políticos, estéticos y técnicos. </li>
			<li>Procurar la formación de un público participante, preocupado por la problemática social, política y cultural de México y el resto del mundo, con discusiones críticas e ideológicas de definición ante el hecho cinematográfico, por medio de exhibiciones, cursos, exposiciones, investigaciones y publicaciones.</li>
		</ul> 
	</blockquote>
</div>

@stop
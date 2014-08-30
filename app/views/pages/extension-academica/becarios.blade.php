@section('breadcrumbs')
<li>
	<a href="/pages/extencion-academica/index">
		Extensión Academica
	</a>
</li>
<li class="active">
	Becarios
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.extension-academica', array('selected' => 0))
</div>

<div class="content">
	

	<h1>Programa de Becarios</h1>
	<p>
		Con el objetivo de contribuir al desarrollo profesional de los estudiantes universitarios, la Filmoteca de la UNAM pone a su alcance la iniciativa que les permitirá incorporarse dentro de actividades vinculadas con su formación académica. 
	</p>
	<h2>Requisitos:</h2>
	<ul>
		<li>Ser alumno regular de la UNAM.</li>
		<li>No adeudar materias.</li>
		<li>Haber concluido, mínimo, el séptimo semestre.</li>
		<li>Tener promedio igual o mayor a 8.5.</li>
		<li>Someterse a una entrevista con el responsable del proyecto para su evaluación.</li>
		<li>Entregar Historia Académica actualizada.</li>
		<li>Entregar copia de identificación oficial.</li>
		<li>Enviar al correo electrónico <a href="mailto:nadina1020@gmail.com">nadina1020@gmail.com  </a>formato de solicitud para ingresar en el Programa. <br>
			<a href="http://www.filmoteca.unam.mx/amiba/images/recomendaciones/solicitudalumno.pdf">Formato de inscripción</a></li>    
		</ul>

		<h2>Carreras:</h2>
		<ul>
			<li>Bibliotecología y estudios de la información</li>
			<li>Ciencias de la Comunicación </li>
			<li>Derecho</li>
			<li>Diseño y comunicación visual</li>
			<li>Historia </li>
			<li>Ingeniería Mecánica, Computación y Química</li>
			<li>Literatura Dramática y Teatro</li> 
			<li>Química</li>
			<li>Matemáticas</li>
			<li>Música</li>
		</ul>

		<h2>Compromisos:</h2>
		<ul>
			<li>El becario deberá cubrir cuatro horas diarias de los días hábiles, en el horario acordado con el responsable del proyecto.</li>
			<li>El becario deberá aplicarse a las labores encomendadas, de conformidad con su perfil académico e informar a su tutor si considera que su aplicación no repercute en el reforzamiento de su formación profesional, para que, de ser el caso, sus actividades sean reorientadas.</li>
			<li>El becario deberá entregar los reportes que le solicite su tutor.</li>
			<li>Las becas sólo podrán ser renovadas de común acuerdo entre el becario y su tutor hasta por dos ocasiones, lo que significa que podrá permanecer hasta por tres semestres máximo.</li>
			<li>Al finalizar su participación, la DGAC entregará una Constancia de su pertenencia al Programa de Becarios de la DGAC</li>
		</ul>

		<p>
			El programa recibe un número determinado de postulantes por semestre, por lo cual es necesario estar pendiente de la publicación de las convocatorias a través de este medio.
		</p>

	</div>
	@stop
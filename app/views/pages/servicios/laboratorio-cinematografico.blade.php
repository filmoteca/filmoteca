@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Laboratorio cinematográfico
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 5))
@stop



@section('content')

	<div class="img-servicios">
		<img src="/assets/imgs/laboratorio.jpg" aling="left">
	</div>
	
	<h1>Laboratorio cinematográfico</h1>

	<p>El laboratorio cinematográfico o fotoquímico tiene la importante tarea de mantener en buenas condiciones el material del archivo fílmico de la Filmoteca. Para lograr su preservación y conservación realiza duplicados en materiales de 16mm, 35mm o 9.5mm., y otros formatos. Utiliza impresoras ópticas y revelado en baño positivo o baño negativo.</p>

	<p>En ocasiones el material cinematográfico que ingresa a la Filmoteca se encuentra en mal estado, por lo que se tiene que realizar un copiado cuadro por cuadro, para crear un duplicado negativo a partir de una película positiva; desde éste se puede trasladar el material a cualquier tipo de formato que permita su preservación.</p>

	<p>Durante estos procedimientos los materiales segregan plata 100% pura, que se reutiliza para la elaboración de la Medalla de Plata Filmoteca UNAM, y que se otorga a personalidades de la comunidad cinematográfica nacional e internacional.</p>

	<p>Se ofrece el servicio al público en general de:</p>

			<ul>
			<li>Proceso de revelado para película de 35 y 16mm en proceso positivo y negativo.</li>

			<li>Rescate de materiales antiguos mediante impresoras ópticas, para trasladarlos a nuevo formato.</li>
			
			<li>Asesoría en el proceso de rescate de películas.</li>
			</ul>

	<p>Contacto: Francisco Ramírez</p>
	<p> Teléfono: 5622 9596 </p>
	 <p>Correo electrónico: <a href="mailto:pacoramirezv@gmail.com">pacoramirezv@gmail.com</a></p>

	<p>Si quieres hacer alguna solicitud, consulta los  
		{{ HTML::link(
			'/pages/servicios/lineamentos-generales-para-solicitar-un-servicio',
			'Lineamientos para acceso al material.' )                            
			}}</p>

@stop

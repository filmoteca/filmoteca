@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quienes somos
		</a>
	</li>
	<li class="active">
		Memoria Filmoteca
	</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.quienes-somos', array('selected' => 4))
</div>


<div class="content">
	
	<h1>Memoria Filmoteca </h1>

	<p>
		La Memoria Filmoteca es un informe de las actividades más relevantes que realizamos a lo largo de un año, y que se son publicadas en la Memoria UNAM, publicación anual que reúne los informes de todas las entidades universitarias.
	</p>

	<p>Aquí puedes conocer las actividades que hemos realizado año, tras año:</p>
	
	<h2></h2>

	<ul>
		<div class="documento-icono">
			<li>
				<img src="/assets/imgs/documento-pdf.png"><a href="http://www.planeacion.unam.mx/Memoria/2009/PDF/8.2-DGAC.pdf" target="_blank">Memoria Filmoteca 2009</a>
			</li>
		</div>
		<div class="documento-icono">
			<li>
				<img src="/assets/imgs/documento-pdf.png" aling="left"><a href="http://www.planeacion.unam.mx/Memoria/2010/PDF/8.2-DGAC.pdf">Memoria Filmoteca 2010</a>
			</li>
		</div>
		<div class="documento-icono">
			<li>
				<img src="/assets/imgs/documento-pdf.png" aling="left"><a href="http://www.planeacion.unam.mx/Memoria/2011/PDF/8.2-DGAC.pdf">Memoria Filmoteca 2011</a>
			</li>
		</div>
		<div class="documento-icono">
			<li>
				<img src="/assets/imgs/documento-pdf.png" aling="left"><a href="http://www.planeacion.unam.mx/Memoria/2012/PDF/8.2-DGAC.pdf">Memoria Filmoteca 2012</a>
			</li>
		</div>
	</ul>

</div>

@stop





@section('breadcrumbs')
<li>
	<a href="/pages/extencion-academica/index">
		Extensión Academica
	</a>
</li>
<li class="active">
	Procedimiento de inscripción.
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.extension-academica', array('selected' => 0))
</div>

<div class="content">

	<h1>Procedimiento de inscripción</h1>
	<ol>
		<li>Llena el Formulario de Registro</li>
		<li>Acude al Departamento de Presupuesto de la Dirección General de Actividades Cinematográficas a realizar el pago, en horario de 9:00 a 15:00 y de 16:00 a 18:30 hrs., o</li> 
		<li>Si prefieres pagar en el Banco, solicita al Departamento de Vinculación el número de referencia bancaria, personal e intransferible, para realizar el pago en HSBC.</li> 
		<li>Presentar el comprobante del banco en la caja del Departamento de Presupuesto de la DGAC y canjearlo por el ticket o factura.</li> 
		<li>Regresar al Departamento de Vinculación para concluir el trámite de inscripción.</li>
	</ol>

</div>
@stop
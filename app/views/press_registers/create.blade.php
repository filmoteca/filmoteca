@extends('layouts.default')

@section('breadcrumbs')
<li>
	<a href="/press_register">
			Difusión
		</a>
</li>
<li class="active">
	Prensa
</li>
@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 0))
@stop

@section('content')

{{ Form::open( 
	[
		'route' => 'press_register.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Atención a Medios</h2>
	</div>
	
	<div class="panel-body">
		<p>¿Eres periodista y deseas conocer las diversas actividades que realiza la Dirección General de Actividades Cinematográficas - Filmoteca UNAM?</p>

		<p>Entonces te pedimos que te registres como usuario de prensa para que puedas recibir información y avisos relevantes durante todo el año.
		</p>

		<fieldset>
			<legend> Medio </legend>
			{{ Form::formGroup('theMedia','the_media_id','Tipo', 'press_register_form') }}

			{{ Form::formGroup('text','the_media_name','Nombre', 'press_register_form') }}

			{{ Form::formGroup('text','the_media_address','Dirección', 'press_register_form') }}
		</fieldset>
		
		<fieldset>
			<legend> Reportero </legend>
			{{ Form::formGroup('text','reporter_name','Nombre', 'press_register_form') }}

			{{ Form::formGroup('text','reporter_telephone','Teléfono', 'press_register_form') }}

			{{ Form::formGroup('text','reporter_mobile_phone','Teléfono celular', 'press_register_form') }}

			{{ Form::formGroup('text','reporter_email','E-mail', 'press_register_form') }}
		</fieldset>
	
		<fieldset>

			<legend> Editor </legend>
			{{ Form::formGroup('text','editor_name','Nombre', 'press_register_form') }}

			{{ Form::formGroup('text','editor_telephone','Teléfono','press_register_form') }}

			{{ Form::formGroup('text','editor_email','Email', 'press_register_form') }}
		</fieldset>
	
	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop
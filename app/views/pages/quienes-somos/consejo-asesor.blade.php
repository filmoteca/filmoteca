@extends('layouts.default')

@section('scripts')
	{{ HTML::scripts(array()) }}
@stop

@section('styles')
	{{ HTML::styles(array()) }}
@stop

@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quienes somos
		</a>
	</li>
	<li class="active">
		Consejo Asesor
	</li>

@stop

@section('content')
	<div class="sidebar">
		@include('elements.menus.quienes-somos', array('selected' => 3))
	</div>

	<div class="content">

		<h1>Consejo Asesor</h1>


		<p>La integración de cuerpos colegiados universitarios, tiene como objetivo fortalecer y articular la planeación de tareas, programas y actividades de la dependencia y coadyuvar a la articulación y cumplimiento de sus funciones sustantivas, además de evaluar, colaborar y aportar ideas para difundir con la mayor amplitud posible los valores culturales, en particular los artísticos, a fin de contribuir a la formación integral de los universitarios.</p>

		<p>El Consejo Asesor de la Dirección General de Actividades Cinematográficas está integrado actualmente de la siguiente manera:</p>


	</div>
@stop
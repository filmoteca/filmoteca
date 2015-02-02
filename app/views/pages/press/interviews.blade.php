@extends('layouts.default')

@section('breadcrumbs')
<li>
	<a>
		Difusión
	</a>
</li>
<li class="active">
	Entrevistas
@stop

@section('sidebar')
	@include('elements.menus.press', array('selected' => 5))
@stop

@section('content')


	<div class="panel-heading">
		<h2>Entrevistas</h2>
	</div>
	
	<div class="panel-body">
		<p></p>

		
		<div class="video-preview">
	
			<div>
			<p>Francisco Ohem recomienda la película: <em>Alas (Wings)</em>.</p>
			<iframe width="260" height="215" src="//www.youtube-nocookie.com/embed/-fzR8VpIXb8" frameborder="0" allowfullscreen>Francisco Ohem recomienda la película: <em>Alas (Wings)</em>. </iframe>					
			</div>
			<div>
			<p>Francisco Ohem recomienda la película: <em>La batalla del Somme</em>.</p>
			<iframe width="260" height="215" src="//www.youtube-nocookie.com/embed/u-n3pMpUPj4" frameborder="0" allowfullscreen>Francisco Ohem recomienda <em>La batalla del Somme</em></iframe>					
			</div>
		</div>
	</div>
			

@stop
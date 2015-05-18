@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		55 aniversario
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 1))
@stop


@section('content')


	<h1>55 años de la Filmoteca de la UNAM</h1>

		<p>TEXTO PENDIENTE</p>


	<div class="video-preview">
							<div class="embed-responsive embed-responsive-4by3">
								<iframe width="420" height="315" src="https://www.youtube-nocookie.com/embed/hZhUqErqGCQ" frameborder="0" allowfullscreen></iframe>	
							</div>
						</div>



	



@stop

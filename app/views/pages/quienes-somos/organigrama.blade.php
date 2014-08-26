@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quienes somos
		</a>
	</li>
	<li class="active">
		Organigrama
	</li>
@stop





@section('content')
<div class="sidebar">
	@include('elements.menus.quienes-somos', array('selected' => 2))
</div>

<div class="content">
	<h1>Organigrama</h1>

	<p>Yo debería tener algo</p>
</div>

@stop
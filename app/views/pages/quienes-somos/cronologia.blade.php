@section('breadcrumbs')
<li>
	<a href="/pages/quienes-somos/mision-y-vision">
		Quiénes somos
	</a>
</li>
<li class="active">
	Cronología
</li>
@stop

@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 4))
@stop


@section('content')

	<h1>Cronología</h1>

@stop
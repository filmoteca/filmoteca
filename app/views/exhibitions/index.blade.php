@section('breadcrumbs')
	<li class="active">Lista de exhibiciones</li>
@stop

@section('content')

<h2>Lista de exhibiciones</h2>

@include('frontend.exhibitions.partials.tabulator');

@stop
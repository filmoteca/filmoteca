@section('breadcrumbs')
	<li>{{ HTML::linkRoute('admin.exhibition.index','Lista de exhibiciones') }}</li>
	<li class="active">Exhibición: {{ Str::limit($resource->exhibition_film->film->title, 10, '...') }}</li>
@stop


@section('content')
	@include('frontend.exhibitions.partials.details', ['exhibition' => $resource])
@stop
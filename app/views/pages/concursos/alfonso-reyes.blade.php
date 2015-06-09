@section('scripts')
{{ HTML::scripts(array(
	'/bower_components/jqueryui/ui/minified/jquery.ui.core.min.js',
	'/bower_components/jqueryui/ui/minified/jquery.ui.widget.min.js',
	'/bower_components/jqueryui/ui/minified/jquery.ui.accordion.min.js',
	'/assets/js/static-pages/directorio.js')) }}
@stop

@section('styles')
{{ HTML::styles(array(
	'/bower_components/jqueryui/themes/smoothness/jquery-ui.css',
	'/bower_components/jqueryui/themes/smoothness/jquery.ui.theme.css')) }}
@stop


@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/index">
			Concursos
		</a>
	</li>
	<li class="active">
		Alfonso Reyes "Fósforo"
	</li>
@stop

@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 1))
@stop


@section('content')

    {{ $page->body }}

@stop
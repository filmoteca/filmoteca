@extends('layouts.default')

@section('styles')

	{{ HTML::styles([
			'/bower_components/jquery-ui-slider-pips/dist/jquery-ui-slider-pips.css'
		])
	}}
@stop

@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
			Acervo
		</a>
	</li>
	<li>
		<a href="/pages/acervo/biblioteca">
			Biblioteca
		</a>
	</li>
	<li class="active">
		Libros
	</li>
@stop

@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 2))
@stop

@section('title')
	@lang('filmoteca.frontend.consulta_libros.title')
@stop

@section('content')

<h1 style="text-align: center !important;">@lang('filmoteca.frontend.consulta_libros.title')</h1>
<br><br>
<p>@lang('filmoteca.frontend.consulta_libros.description')</p>
<br><br>
@include('elements.bootstrap-modal')

<div class="book-searcher-wrapper pull-right">
	<span class="glyphicon glyphicon-search pull-left"></span>
	<input id="book-searcher" placeholder="Buscar libro">
</div>

<div class="letter-selector-wrapper">
	<p>@lang('filmoteca.frontend.consulta_libros.seek_book_by_title'):</p>
	<div id="letter-selector"></div>
</div>

<div class="wrapper-items" id="wrapper-items">
	<div id="labels-letters-output"></div>
	<div id="results" class="results">
		<span>@lang('filmoteca.general.results'): </span><span class="number"></span>
	</div>
	<ul class="items" id="books">
		@foreach( $books as $index => $book )
		<li class="thumbnail item boxwinner" data-title-first="{{ mb_substr($book->title, 0,1) }}">
			<img src="{{ $book->image->url('thumbnail') }}" alt="{{ $book->title }}">
			{{
				HTML::link(
				'consulta-libro/' . $book->id . '/detail',
				str_limit($book->title, 20),
				[
					'title' => trans('filmoteca.general.see_details'),
					'data-id' => $book->id
				]
				)
			}}
		</li>
		@endforeach
	</ul>
</div>
@stop

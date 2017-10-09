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

<h1>@lang('filmoteca.frontend.consulta_libros.title')</h1>
<p>@lang('filmoteca.frontend.consulta_libros.description')</p>

@include('elements.bootstrap-modal')

<div class="book-searcher-wrapper pull-right">
	<span class="glyphicon glyphicon-search pull-left"></span>
	<input id="book-searcher">
</div>

<div class="letter-selector-wrapper">
	<p>@lang('filmoteca.frontend.consulta_libros.seek_book_by_title'):</p>
	<div id="letter-selector"></div>
</div>

<div class="wrapper-items" id="wrapper-items">
	<div id="results" class="results">
		<span>@lang('filmoteca.general.results'): </span><span class="number"></span>
	</div>
	<ul class="items" id="books">
		@foreach( $books as $index => $book )
		<li class="thumbnail item boxwinner" data-award-year="{{ $book->award_date->year }}">
			<img src="{{ $book->image->url('thumbnail') }}" alt="{{ $book->name }}">
			{{
				HTML::link(
				'consulta_libro/' . $book->id . '/detail',
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

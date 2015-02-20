@extends('layouts.default')

@section('breadcrumbs')
<li>
	<a href="">
		Prensa
	</a>
</li>
<li class="active">
	Noticias
</li>
@stop

@section('sidebar')
	@include('elements.menus.press', array('selected' => 3))
@stop



@section('content')

    <div class="details">

        <div class="row">
            <div class="col-sm-12 cover">
                <h1 class="text-center">{{ $news->title }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-ms-12">
                {{ $news->body }}
            </div>

             <img src="{{ asset( $news->image->url('original')) }}" class="img-responsive">
         </div>

        <div class="row more-news">
            <div class="col-sm-12">
                <ul class="list-group">
                    @foreach( $lastNews as $new )
                        <li class="list-group-item preview-news">

                            <img src="{{ asset($new->image->url('thumbnail')) }}">
                            <h6>{{ $new->title }}</h6>
                            <span>{{ Str::limit($new->body, 180, '') }}</span> <span class="see-more">{{ HTML::linkAction('NewsController@show', 'Leer más', [$new->id]) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@stop
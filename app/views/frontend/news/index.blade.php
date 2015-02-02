@extends('layouts.default')

@section('breadcrumbs')
<li>
    <a>
        Difusión
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
    <h2>Noticias</h2>

    <div class="row more-news">
        <div class="col-sm-12">
            <ul class="list-group">
                @foreach( $lastNews as $new )
                    <li class="list-group-item preview-news">

                        <img src="{{ asset($new->image->url('thumbnail')) }}">

                        <span>{{ Str::limit($new->body, 180, '') }}</span> <span class="see-more">{{ HTML::linkAction('NewsController@show', 'Leer más', [$new->id]) }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
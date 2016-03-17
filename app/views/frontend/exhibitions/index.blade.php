@extends('layouts.default')

@section('metas')

@stop

@section('title')
    @lang(
        'exhibitions.frontend.index.title',
        [
            'textual_day' => @trans('dates.days.' . $date->format('l')),
            'numeric_day' => $date->format('j'),
            'textual_month' => @trans('dates.months.' . $date->format('F'))
        ]
    )
@stop

@section('sidebar')
    @include('frontend.exhibitions.partials.calendar', ['dates' => $calendar, 'date' => $date])
@stop

@section('content')
    <h1>
        @lang(
        'exhibitions.frontend.index.title',
        [
            'textual_day' => @trans('dates.days.' . $date->format('l')),
            'numeric_day' => $date->format('j'),
            'textual_month' => @trans('dates.months.' . $date->format('F'))
        ]
    )
    </h1>

    <div class="row">
        <ul>
            <div class="informacion">

                <div id="accordion-resizer" class="ui-widget-content">

                    <div id="accordion">
                        <h5>Dirección General</h5>

                        <div>
                            <li>
                                <span class="nombre">María Guadalupe Ferrer Andrade</span>
                                <br>
                                <span class="cargo">Directora General</span>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>

    @foreach ($exhibitions as $exhibition)
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="icon">
                    @if ($exhibition->getType() !== null)
                        <span>
                            <img src="{{ $exhibition->getType()->getImage()->getSmallImageUrl() }}">
                        </span>
                        <span>{{ $exhibition->getType()->getName() }}</span>
                    @endif
                </div>
            </div>


            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $exhibition->getFilm()->getCover()->getMediumImageUrl() }}">
                    </div>
                    <div class="col-md-8">
                        <h2>{{ $exhibition->getFilm()->getTitle() }}</h2>

                        <!-- Texto que mostrará duración, fecha y año -->
                        <h6 align='center'>
                            <span class="countries">{{ HTML::implode($exhibition->getFilm()->getCountries(), 'name') }}</span>
                            <span class="years">{{ implode(',', $exhibition->getFilm()->getYears()) }}</span>
                            <span class="duration">{{ $exhibition->getFilm()->getDuration() }} min.</span>
                        </h6>

                        <!-- Nav tabs -->
                        <div role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tabs-1">Sinopsis</a>
                                </li>
                                <li role="presentation" class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#tabs-2">Trailer</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-contnet">
                                <div role="tabpanel" class="tab-pane" active id="tabs-1">
                                <p>{{ $exhibition->getFilm()->getSynopsis() }}</p>
                            </div>

                            <!-- Botón que desplegará más información (sinopsis completa y ficha tecnica) -->
                            <div align="right">
                                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#demo"
                                        title="Ver más">Ver más »
                                </button>
                                <div id="demo" class="collapse in">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                </div>
                            </div>

                            <!-- Video que debera ubicarse/mostrarse en la pestaña Trailer(tabs-2) -->
                            <div role="tabpanel" class="tab-pane" id="tabs-2">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <p>{{ $exhibition->getFilm()->getTrailer() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading-int">
                    <h3>@lang('exhibitions.show.is_presented_at')</h3>
                </div>
                <div class="panel-body">
                    @foreach ($exhibition->getSchedules()->groupByAuditorium() as $scheduleGroup)
                        <div class="row">
                            <div class="col-md-6">
                            <span class="auditorium-name">
                                {{ $scheduleGroup->getAuditorium()->getName() }}
                            </span>
                                <a href="#">@lang('exhibitions.show.see_more')</a>
                            </div>
                            <div class="col-md-6">
                                {{ HTML::schedulesTimeAsList($scheduleGroup->getSchedules()) }}
                            </div>
                        </div>
                        @endforeach

                                <!-- Botón que desplegará más horarios -->

                        <div align="right">
                            <button type="button" class="btn btn-default" data-toggle="collapse in" data-target="#demo"
                                    title="Ver más horarios">Ver más horarios »
                            </button>
                            <div id="demo" class="collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                </div>
            </div>
    @endforeach
@stop

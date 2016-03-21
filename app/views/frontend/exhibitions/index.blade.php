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

    <br>

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
                        <br><br><br>
                        <img src="{{ $exhibition->getFilm()->getCover()->getMediumImageUrl() }}">
                    </div>
                    <div class="col-md-8">
                        <span style="color:#810069"><h2 align='center'>{{ $exhibition->getFilm()->getTitle() }}</h2></span>

                        <!-- Texto que mostrará duración, fecha y año -->
                        <h6 align='center'>
                            <span class="countries">{{ $exhibition->getFilm()->getCountries()->implode('name', ', ') }}</span>
                            <span class="years">{{ implode(',', $exhibition->getFilm()->getYears()) }}</span>
                            <span> / </span>
                            <span class="duration">{{ $exhibition->getFilm()->getDuration() }} min.</span>
                        </h6>
                        
                        <!-- Pestañas de sinopsis y trailer-->
                            <div class="content">
                                        <!-- Nav tabs -->
                                <div role="tabpanel">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active" role="presentation">
                                            <a data-toggle="tab" role="tab" href="#tab-1">Sinopsis</a>
                                        </li>
                                        <li class="" role="presentation">
                                            <a data-toggle="tab" role="tab" href="#tab-2">Trailer</a>
                                        </li>
                                    </ul>

                                        <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active" role="tabpanel">
                                            <li class="list-group-item">
                                                <p>{{ $exhibition->getFilm()->getSynopsis() }}</p>
                                                
                                                <!-- Botón que desplegará más información (sinopsis completa y ficha tecnica) -->
                                                <div align="right">
                                                    <button  id="boton1" type="button" class="btn btn-default" data-toggle="collapse" data-target="#demo1"
                                                            title="Ver más">@lang('exhibitions.show.see_more')
                                                    </button>
                                                    <div align="left" id="demo1" class="collapse">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                            minim veniam</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <!-- Video que se muestra en la pestaña Trailer(tab-2) /4by3-->
                                        <div class="tab-pane" role="tabpanel" id="tab-2">
                                            <li class="list-group-item embed-responsive embed-responsive-16by9">
                                                <p>{{ $exhibition->getFilm()->getTrailer() }}</p>
                                            </li>
                                        </div>  
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>@lang('exhibitions.show.is_presented_at')</h3>
                        </div>
                        <div class="panel-body">
                            @foreach ($exhibition->getSchedules()->groupByAuditorium() as $scheduleGroup)
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="auditorium-name">
                                            {{ $scheduleGroup->getAuditorium()->getName() }}
                                        </span>
                                        <a href="#">@lang('exhibitions.show.see_ubication')</a>
                                    </div>
                                    <div class="col-md-6">
                                        {{ HTML::schedulesTimeAsList($scheduleGroup->getSchedules()) }}
                                    </div>
                                </div>
                            @endforeach
                                        <!-- Botón que desplegará más horarios -->

                                <div align="right">
                                    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#demo"
                                                title="Ver más horarios">@lang('exhibitions.show.see_more_schedules')
                                    </button>
                                    <div align="left" id="demo" class="collapse">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
        </div>

    @endforeach
@stop


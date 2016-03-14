@extends('layouts.default')

@section('metas')

@stop

@section('title')
    @lang('exhibitions.collection.title', ['date' => $date])
@stop

@section('sidebar')
    @include('frontend.exhibitions.partials.calendar', ['dates' => $calendar])
@stop

@section('content')
    <h1>
        {{ @trans(
                'exhibitions.frontend.index.title',
                [
                    'textual_day' => @trans('dates.days.' . $date->format('l')),
                    'numeric_day' => $date->format('j'),
                    'textual_month' => @trans('dates.months.' . $date->format('F'))
                ]
            )
        }}
    </h1>

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
                    <div class="col-md-6">
                        <img src="{{ $exhibition->getFilm()->getCover()->getMediumImageUrl() }}">
                    </div>
                    <div class="col-md-6">
                        <h2>{{ $exhibition->getFilm()->getTitle() }}</h2>
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
                            <a href="#">@lang('exhibitions.show.see_more')</a>
                        </div>
                        <div class="col-md-6">
                            {{ HTML::schedulesTimeAsList($scheduleGroup->getSchedules()) }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@stop

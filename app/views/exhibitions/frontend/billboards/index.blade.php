@extends('exhibitions.layouts.frontend')

@section('breadcrumbs')
    <li>
        {{ HTML::link(
            'exhibitions.frontend.exhibitions.index',
            Lang::trans('exhibitions.frontend.exhibition.index.breadcrumbs_title')) }}
    </li>
    <li class="active">@lang('exhibitions.frontend.billboard.title')</li>
@stop

@section('content')

<h1 class="text-uppercase">Cartelera digital</h1>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <h5 class="text-uppercase">
            Cartelera de {{ trans('dates.months.' . date('F', strtotime($lastBillboard->created_at))) }}
        </h5>
        <p class="image-billboard">
            <img src="{{ asset( $lastBillboard->image->url('medium')) }}"
                class="img-responsive"
                title="{{ trans('dates.months.' . date('F', strtotime($lastBillboard->created_at))) }}"
                alt="{{ trans('dates.months.' . date('F', strtotime($lastBillboard->created_at))) }}">
        </p>
        <p>
            <a href="{{ $lastBillboard->pdf->url() }}" target="_blank" align>Descarga / </a>
            <a href="{{ $lastBillboard->online_version_url }}" target="_blank">Consulta</a>
        </p>
    </div>
</div>


@foreach($earlierBillboards as $year => $billboards)

    <div class="row">
        <h4>Carteleras anteriores {{$year}}</h4>
    @foreach($billboards as $billboard)
        <div class="col-xs-3 col-sm-3">
            <h5 class="text-uppercase">
                {{ trans('dates.months.' . date('F', strtotime($billboard->created_at))) }}
            </h5>
            <p class="image-billboard">
                <img src="{{ asset( $billboard->image->url('thumbnail')) }}"
                    class="img-responsive image-size-icon"
                    title="{{ trans('dates.months.' . date('F', strtotime($billboard->created_at))) }}"
                    alt="{{ trans('dates.months.' . date('F', strtotime($billboard->created_at))) }}">
            </p>
            <p>
                <a href="{{ $billboard->pdf->url() }}" target="_blank" align>Descarga / </a>
                <a href="{{ $billboard->online_version_url }}" target="_blank">Consulta</a>
            </p>
        </div>
    @endforeach

    </div>
@endforeach

@stop

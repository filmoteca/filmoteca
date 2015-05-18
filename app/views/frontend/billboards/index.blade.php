@extends('layouts.default')

@section('breadcrumbs')
    <li>
        <a href="/pages/cartelera-digital/index">
            Programacion
        </a>
    </li>
    <li class="active">
        Cartelera digital
    </li>
@stop


@section('sidebar')
    @include('elements.menus.programacion', array('selected' => 1))

    <div class="subscribe-box">

        <p>Recibe nuestra cartelera digital</p>

        <div class="input-group input-group-sm">
            <input type="email" 
                name="email" 
                placeholder="Ingresa tu correo electrónico"
                class="form-control">
            <span class="input-group-addon">@</span>
        </div>

        <button type="button" class="btn btn-success">Enviar</button>
    </div>
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
                class="img-responsive image-size-icon" 
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
